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

    public function materials()
    {
        return $this->app->view('materials');
    }

    public function interview()
    {
        return $this->app->view('interview');
    }
}
