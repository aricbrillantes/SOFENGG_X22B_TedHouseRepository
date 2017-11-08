<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'Welcome to T3D Workhouse';
        // return view('pages.index', compact('title'));
        return view('menu.index') -> with('title', $title);
    }

    public function about() {
        $title = 'About us';
        // return view('pages.about', compact('title'));
        // return view('.about') -> with('title', $title);
    }

    public function search() {
        $title = 'Search Results';
        // return view('pages.index', compact('title'));
        return view('search.results') -> with('title', $title);
    }
}
