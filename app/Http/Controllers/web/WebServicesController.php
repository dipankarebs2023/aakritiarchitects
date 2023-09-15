<?php

namespace App\Http\Controllers\web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Page;

class WebServicesController extends Controller
{
    function services(){
        $data = Page::find(17);
        return view('web.service',['servicedata'=>$data]);
    }
}

