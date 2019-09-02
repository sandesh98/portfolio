<?php

namespace App\Http\Controllers\Website;

use App\Notification;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

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

        $notification = Notification::create($request->all());

        Mail::to('sandeshb981@gmail.com')->send(new \App\Mail\Notification($notification));

        return response()->json('Bericht verstuurd!');
    }
}
