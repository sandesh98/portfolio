<?php

namespace App\Http\Controllers\Website;

use App\Navbar;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('website.home.index');
    }

    public function bubba()
    {
        return view('website.home.bubba');
    }
}


