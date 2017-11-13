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
        $find = implode('+',$arr_search);
        $find = str_replace('+', ' ', $find);

        // Perform the query using Query Builder
        $result = DB::table('works')
        ->select(DB::raw("*"))
        ->where('study', 'LIKE', '%'.$find.'%')
        ->get();

        // return $result;
        return view('pages.search', compact('arr_search', 'result')) -> with('title', $title);
    }

    public function sort(Request $request, $arr_search, $sort) {
        $title = str_replace('+', ' ', $arr_search);
        $title = 'Search Results for '.$title;

        $arr_search = explode('+', $arr_search);
        $find = implode('+',$arr_search);
        $find = str_replace('+', ' ', $find);

        // Perform the query using Query Builder
        $result = DB::table('works')
        ->select(DB::raw("*"))
        ->where('study', 'LIKE', '%'.$find.'%')
        ->get();

        // return $result;
        
        $result = json_decode($result);

        // usort($result, function($a, $b) { //Sort the array using a user defined function
        //     return $a->$cmp < $b->$cmp ? -1 : 1;
        // }); 
        

        usort($result, array($this, 'my_sort'));
        function my_sort($a, $b)
        {
            if ($a->credits > $b->credits) {
                return -1;
            } else if ($a->credits < $b->credits) {
                return 1;
            } else {
                return 0; 
            }
        }


        return $result;
        // return view('pages.search', compact('arr_search', 'result')) -> with('title', $title);
    }
}
