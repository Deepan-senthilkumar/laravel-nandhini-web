<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $totalUsers = \App\Models\User::count();
        $totalEvents = \App\Models\Event::count();
        
        return view('admin.dashboard', compact('totalUsers', 'totalEvents'));
    }
}
