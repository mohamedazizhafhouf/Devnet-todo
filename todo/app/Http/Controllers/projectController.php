<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class projectController extends Controller
{
    //
    function new(){
        return view('newProject');
    }
    function add(Request $request){
        //return $request->input();
        
    }
}
