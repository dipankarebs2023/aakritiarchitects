<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class WebProjectsDetailsController extends Controller
{
    function projects_details($param){
        
        $project = DB::table('services')->where('slug',$param)->first();

        if(!$project)
        {
            abrot(404);
        }


        return view('web.project_details', ['project' => $project]);
    }
}

