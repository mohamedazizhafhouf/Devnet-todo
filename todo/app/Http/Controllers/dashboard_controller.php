<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dashboard_controller extends Controller
{
    //
    function main(){
        return view("projects");
    }
}
