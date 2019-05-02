<?php

namespace App\Http\Controllers\Website;

use App\Notifaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function index()
    {
        return view('website.contact.index');
    }

    public function store(Request $request)
    {
        Notifaction::create($request->all());

        return back();
    }
}
