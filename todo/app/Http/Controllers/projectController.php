<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


use Illuminate\Http\Request;

class projectController extends Controller
{
    //
    function new(){
        return view('newProject');
    }

    function addProject($request,$id){
        //return $request->input();

        //Project table
        $name=$request->input('projectName');
        $description = $request->input('description');
        $created_by = $id;
        $status = 'todo';
        $created_at = \Carbon\Carbon::now()->toDateTimeString();
        $query = DB::table('project')->insert([
            'name'=>$name,
            'description'=>$description,
            'created_by'=>$created_by,
            'status'=>$status,
            'created_at'=>$created_at,
        ]);
        return $this->addUserProject($request,$id,$created_at);
       /* if($query) {
            return back()->with('success','Task has been successfuly added');
        }
        else{
            return back()->with('fail','Something went wrong');
        }*/


    }

    function addUserProject($request,$id,$created_at){
        //userProject table
        $idProject = DB::table('project')->latest()->first();
        $query = DB::table('user_project')->insert([
            'idUser'=>$id,
            'idProject'=> $idProject,
            'created_at'=>$created_at,
        ]);
        return view('projects');
    }

    function add(Request $request){
        $id = Auth::user()->id;
        return $this->addProject($request,$id);
    }

    function main(){
        $user = User::find(1);
        return $user->projects;
    }
}
