<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use DB;

class PagesController extends Controller
{
    public function index() {
        $title = 'TE3D Workshop';
        return view('pages.index') -> with('title', $title);
    }

    public function user($user) {
        $title = User::find($user);
        return view('pages.profile') -> with('title', $title);
    }

    public function search() {
        $title = 'Search Results';
        return view('pages.search') -> with('title', $title);
    }
}
