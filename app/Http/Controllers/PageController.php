<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PageController extends Controller
{
    public function dashboard()
    {
        return view('pages.user.dashboard');
    }

    public function curriculum()
    {
        return view('pages.user.curriculum');
    }

    public function games()
    {
        return view('pages.user.games');
    }

    public function profile()
    {
        return view('pages.user.profile');
    }

    public function leaderboard()
    {
        return view('pages.user.leaderboard');
    }

    public function settings()
    {
        return view('pages.user.settings');
    }
}
