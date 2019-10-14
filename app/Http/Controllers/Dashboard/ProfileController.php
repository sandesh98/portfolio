<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Text;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        return view('dashboard.profile.edit');
    }

    public function update(Request $request)
    {
        Text::first()->update(
            $request->only(['about_me'])
        );

        return redirect()->back();
    }
}
