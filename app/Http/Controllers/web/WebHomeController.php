<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class WebHomeController extends Controller
{
    function index(){
        $data=['koushik','Suman','Partha'];
        return view('web.index',['user'=>$data]);
    }
}

