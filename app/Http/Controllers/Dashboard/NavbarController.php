<?php

namespace App\Http\Controllers\Dashboard;

use App\Text;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NavbarController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        $text = Text::first();

        return view('dashboard.navbar.edit', compact('text'));
    }

    public function update(Request $request)
    {

        Text::first()->update($request->all());

        return back();
    }
}
