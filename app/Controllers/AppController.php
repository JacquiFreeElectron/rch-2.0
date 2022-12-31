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

    //show the overveiw of all dp
    public function interview()
    {
        $interviews = $this->app->db()->all("interviews");
        return $this->app->view('interview',['interviews'=>$interviews]);
    }

    //for user to fill in their dp of interview
    public function filldp()
    {

    }

    //show the detail of one specific dp
    public function readdp()
    {

    }
}
