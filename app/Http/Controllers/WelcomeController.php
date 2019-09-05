<?php

namespace App\Http\Controllers;
 
use \Request; 
use \Response;

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
        return view('welcome');
    }
    
}
