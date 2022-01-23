<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;


class LaravelCrud extends Controller
{
    //
    function add(Request $request){
        $this->validate($request,[
            'task'=>'required'
        ]);
        //return $request->input(); to check passing inputs

        //get the user id from users table 
        $id=Auth::user()->id;
        //get current timestamp
        $current_date_time = \Carbon\Carbon::now()->toDateTimeString();

        //query to insert data into task table 
        $query = DB::table('task')->insert([
            'desc'=>$request->input('task'),
            'is_complete'=>'0',
            'idUser'=>$id,
            'created_at'=>$current_date_time,
        ]);

        //message sent to the session in order to show it in a bootstrap alert in the view
        if($query) {
            return back()->with('success','Task has been successfuly added');
        }
        else{
            return back()->with('fail','Something went wrong');
        }
        
    }

    function get(){
        $id=Auth::user()->id;
        //get all the tasks of the logged in user 
        /*$tasks = DB::table('task')
            ->select(DB::raw('desc'))
            ->where('idUser','=',$id)
            ->get();*/

        $tasks = DB::table('task')
            ->where('idUser',$id)
            ->get();
        return view("dashboard",compact("tasks"));
    }
}
