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
        Notification::create($request->all());

<<<<<<< HEAD
        return back();
=======
        $notification = Notification::create($request->all());

//        Mail::to('sandeshb981@gmail.com')->send(new \App\Mail\Notification($notification));

        return response()->json('Bericht verstuurd!');
>>>>>>> 223302aad932cff6ecc136c647e5ee50a4acb688
    }
}
