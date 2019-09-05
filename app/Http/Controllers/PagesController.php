<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
   public function about(){
       $title= "A propos About ";
       $numbers = [];
       return view('pages/about', compact('title','numbers'));
   }
}
