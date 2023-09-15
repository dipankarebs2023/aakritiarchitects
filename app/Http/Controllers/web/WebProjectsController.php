<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
class WebProjectsController extends Controller
{
    function projects(){
        $category = DB::select("select * from categories where parent_category_id=6");
        
        $project = DB::select("select * from services where status=1");

        return view('web.project',['category'=>$category,'project'=>$project]);
    }
}

