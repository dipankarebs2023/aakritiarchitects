<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Page;

class WebAboutController extends Controller
{
    function about(){

        $data = Page::find(16);
        return view('web.about',['aboutdata'=>$data]);
    }
}

