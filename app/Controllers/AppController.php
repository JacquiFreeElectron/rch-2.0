<?php
namespace App\Controllers;

class AppController extends Controller
{
    
    public function index()
    {
        $welcomes = ['Welcome', 'Aloha', 'Welkom', 'Bienvenidos', 'Bienvenu', 'Welkomma'];
        
        return $this->app->view('index', [
            'welcome' => $welcomes[array_rand($welcomes)]
        ]);
    }

    public function helpme(){
        return $this->app->view('helpme');
    }

    public function materials()
    {
        return $this->app->view('materials');
    }

    //show the overveiw of all dp
    public function interview()
    {
        $interviews = $this->app->db()->all("interviews");
        return $this->app->view('interview',['interviews'=>$interviews]);
    }

    //fill dp page
    public function filldp()
    {
        $dpSaved = $this->app->old('dpSaved');
       

        return $this->app->view('filldp', [
            'dpSaved' => $dpSaved
        ]);


    }

    //for user to save their dp of interview
    public function savedp()
    {
        //validate user's input first
        $this->app->validate([
            'category' => 'required|maxLength:5',
            'date' => 'required|alphaNumericDash',
            'vo' => 'maxLength:100',
            'location' => 'required|maxLength:20',
            'description' => 'required|maxLength:500',
            'result' => 'required|maxLength:10',
            'background' => 'maxLength:500'
             ]);

             $this->app->db()->insert('interviews', $this->app->inputAll());

             $this->app->redirect('/interview/filldp', [
                'dpSaved' => true
                
            ]);


    }

    //show the detail of one specific dp
    public function readdp()
    {
        $id = $this->app->param('id');

        $dp = $this->app->db()->findById('interviews',$id);

        return $this->app->view('readdp',['dp'=>$dp]);


    }
}
