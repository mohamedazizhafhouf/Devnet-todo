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

        //Project table
        $status = 'todo';
        $name=$request->input('projectName');
        $description=$request->input('description');
        $created_at = \Carbon\Carbon::now()->toDateTimeString();
        $finished_at = null;

        //UserProject table
        $id=Auth::user()->id;

    }
}
