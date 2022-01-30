<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;


use Illuminate\Http\Request;

class editProjectController extends Controller
{
    //

    function getProjectDetails($id){
        $projectDetails= DB::table('project')
        ->where('idProject',$id)
        ->get();
        return $projectDetails[0];
    }

    function getListMembers($id){
        $listMembers = DB::table('project')
            ->join('user_project','project.idProject',"=","user_project.idProject")
            ->join('users','user_project.idUser',"=","users.id")
            ->select('users.name')
            ->where('project.idProject','=',$id)
            ->get();
        return $listMembers;
    }

    function getListNotMembers($id){
        $listNotMembers = DB::table('users')
        ->select('id','name')
        ->whereNotIn('users.id',function($query){
            $query->select('idUser')  
            ->from('user_project');
            })->get();
        
        return $listNotMembers;
    }    

    function get($id){
        $details=$this->getProjectDetails($id);
        $listMembers=$this->getListMembers($id);
        $listNotMembers=$this->getListNotMembers($id);
        return view('editProject',compact("details"));
    }

    function update(Request $request,$id){
        $hello="test";
        return $hello;
    }
}
