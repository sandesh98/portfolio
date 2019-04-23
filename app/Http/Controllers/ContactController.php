<?php

namespace App\Http\Controllers;

use App\Notifaction;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }

    public function store(Request $request)
    {
        Notifaction::create($request->all());

        return back();
    }
}
