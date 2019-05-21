<?php

namespace App\Http\Controllers\Website;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProjectsController extends Controller
{
    public function index()
    {
        return view('website.project.index');
    }

    public function chefmarketing()
    {
        return view('website.project.projects.chefmarketing');
    }

    public function sandesh()
    {
        return view('website.project.projects.sandesh');
    }

    public function csr()
    {
        return view('website.project.projects.csr');
    }

    public function natrajFlyer()
    {
        return view('website.project.projects.natraj-flyer');
    }

    public function technischedienst()
    {
        return view('website.project.projects.technischedienst');
    }

    public function dutchdiner()
    {
        return view('website.project.projects.dutch-diner');
    }

    public function guessAndWin()
    {
        return view('website.project.projects.guess-and-win');
    }
	
    public function brandInNederland()
    {
	return view('website.project.projects.brand-in-nederland');
    }
}
