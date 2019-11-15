<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class PasswordController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function edit()
    {
        return view('dashboard.password.edit');
    }

    public function update(Request $request)
    {
        User::first()->update(['password' => bcrypt($request->password)]);

        return redirect()->back();
    }
}
