<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
class WebContactController extends Controller
{
    function contact(){
        $data=['koushik','Suman','Partha'];
        return view('web.contact',['user'=>$data]);
    }
}

