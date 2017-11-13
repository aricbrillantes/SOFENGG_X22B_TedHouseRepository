<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class DashboardController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $title = 'TE3D Workshop';
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('dashboard', compact('title'))->with('works',$user->works);;
    }
}
