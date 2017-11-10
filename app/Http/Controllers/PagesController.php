<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index() {
        $title = 'TE3D Workshop';
        // return view('pages.index', compact('title'));
        return view('pages.index') -> with('title', $title);
    }

    public function search() {
        $title = 'Search Results';
        // return view('pages.index', compact('title'));
        return view('pages.search') -> with('title', $title);
    }
}
