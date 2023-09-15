<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PopupController extends Controller
{
    public function popupPage()
    {
        return view('backend.pages.settings.popup');
    }
}
