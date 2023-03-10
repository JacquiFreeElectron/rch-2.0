<?php

namespace App\Commands;

use App\Interviews;

class AppCommand extends Command
{
    public function test()
    {
        dump('It works! You invoked your first command.');
    }

    public function fresh()
    {
        $this->migrate();
        $this->seedInterviews();

        dump("migrate and seed complete.");
    }

    public function migrate()
    {
        $this->app->db()->createTable('interviews', [
            'category' => 'varchar(5)',
            'date' => 'date',
            'location' => 'varchar(20)',
            'vo' => 'varchar(100)',
            'description' => 'varchar(500)',
            'result' => 'varchar(10)',
            'background' => 'varchar(500)'
        ]);
    }

    public function seedInterviews(){
        $interviews = new Interviews($this->app->path('database/DPseed.json'));

        foreach ($interviews->getAll() as $interview) {
           
            unset($interview['id']);

            $this->app->db()->insert('interviews', $interview);
        }
    }
}


