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

    public function deCafeKoers()
    {
        return view('website.project.projects.de-cafe-koers');
    }

    public function sportmaatje()
    {
        return view('website.project.projects.sportmaatje');
    }

    public function abchulplijn()
    {
        return view('website.project.projects.abc-hulplijn');
    }

    public function pscateringservices()
    {
        return view('website.project.projects.pscateringservices');
    }

    public function wecollect()
    {
        return view('website.project.projects.wecollect');
    }

    public function superspeurders()
    {
        return view('website.project.projects.superspeurders');
    }
}
