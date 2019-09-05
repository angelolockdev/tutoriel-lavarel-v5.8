<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request; 
use App\Link;
use \Input;

class LinksController extends Controller
{
    public function show($id){
        $link = Link::findOrFail($id);
        return redirect($link->url);
    }
    public function create(){
        return view('links.create');
    }
    public function store(){
        $url = Input::get('url');
        $link = Link::firstOrCreate(['url' => $url]);
        
        
        return view('links.success', compact('link'));
    }
}
