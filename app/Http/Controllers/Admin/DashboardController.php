<?php

namespace App\Http\Controllers\Admin;

use App\Models\News;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class DashboardController extends Controller
{
    use AuthenticatesUsers;

    
    function index() {
        $news = News::all();
        $totalViews = News::sum('views');
        // dd($totalViews);
        return view('backend.dashboard', compact('news', 'totalViews'));
    }
    function settings() {
        return view('backend.settings');
    }

    function admin_profile() {
        return view('backend.adminProfile');
    }
}
