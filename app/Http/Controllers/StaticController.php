<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StaticController extends Controller
{
    public function home() {
        $feed_items = [];
        if (Auth::check()) {
            $feed_items = Auth::user()->feed()->paginate(30);
        }

        return view('static/home', compact('feed_items'));
    }

    public function help() {
        return view('static/help');
    }

    public function about() {
        return view('static/about');
    }
}
