<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('project.index');
    }

    public function chefmarketing()
    {
        return view('project.chefmarketing');
    }

    public function sandesh()
    {
        return view('project.sandesh');
    }
}
