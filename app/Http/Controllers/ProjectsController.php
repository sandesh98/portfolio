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
        return view('project.projects.chefmarketing');
    }

    public function sandesh()
    {
        return view('project.projects.sandesh');
    }

    public function csr()
    {
        return view('project.projects.csr');
    }

    public function natrajFlyer()
    {
        return view('project.projects.natraj-flyer');
    }
}
