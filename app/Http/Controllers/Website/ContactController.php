<?php

namespace App\Http\Controllers\Website;

use App\Notification;
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
        $this->validate($request, [
            'name' => ['required'],
            'email' => ['required', 'email'],
            'message' => ['required']
        ]);

        Notification::create($request->all());

        return response()->json('Bericht verstuurd!');
    }
}
