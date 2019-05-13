<?php

namespace App\Http\Controllers\Dashboard;

use App\Notification;
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
        $notifications = Notification::all();

        return view('dashboard.notification.index', compact('notifications'));
    }

    public function show(Notification $notification)
    {
        return view('dashboard.notification.show', compact('notification'));
    }
}
