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
        $name=$request->input('projectName');
        $description=$request->input('description');
        $status=$request->input('status');
        $updated_at = \Carbon\Carbon::now()->toDateTimeString();
        $query = DB::update('update project set `name` = ?, `description` = ?, `status` = ?, `updated_at` = ?  where `idProject` = ?',
        [$name, $description, $status, $updated_at, $id]);

        if($query){
            back()->with('success','Project updated successfully');
        }

        return redirect('/projects/'.$id.'/edit');
        }
}
