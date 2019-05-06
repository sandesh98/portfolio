<?php

namespace App\Http\Controllers\Dashboard;

use App\Notifaction;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NotificationsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $notifications = Notifaction::all();

        return view('dashboard.notification.index', compact('notifications'));
    }

    public function show(Notifaction $notifaction)
    {
        return view('dashboard.notification.show', compact('notifaction'));
    }
}
