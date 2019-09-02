<?php

namespace App\Http\Controllers;
 
use \Request; 

class WelcomeController extends Controller
{
    /**
     * @return void
     */
    public function __construct(){
       // $this->middleware('ip');
    }

    public function postTest(){
        
    }

    /**
     * @return Response
     */
    public function index($name){  
        return "Salut $name";
        
        return view('welcome');
    }
}
