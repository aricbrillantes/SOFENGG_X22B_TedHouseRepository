<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Work;
use DB;

class PagesController extends Controller
{
    public function index() {
        $title = 'TE3D Workshop';
        $works = Work::orderBy('created_at', 'asc')->paginate(3);
        return view('pages.index') -> with('works', $works);
    }

    public function user($user) {
        $title = User::find($user);
        return view('pages.profile') -> with('title', $title);
    }

    public function search(Request $request, $arr_search) {
        $title = str_replace('+', ' ', $arr_search);
        $title = 'Search Results for '.$title;

        $arr_search = explode('+', $arr_search);

        // Perform the query using Query Builder
        foreach($arr_search as $search) {
            $result = DB::table('works')
            ->select(DB::raw("*"))
            ->where('study', 'LIKE', '%'.$search.'%')
            ->get();
        }

        // return $result;
        return view('pages.search', compact('arr_search', 'result')) -> with('title', $title);
    }
}
