<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to TedHouse Works';
        // return view('pages.index', compact('title'));
        return view('menu.index') -> with('title', $title);
    }

    public function about() {
        $title = 'About us';
        // return view('pages.about', compact('title'));
        // return view('.about') -> with('title', $title);
    }
}
