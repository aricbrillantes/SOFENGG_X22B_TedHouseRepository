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
        return view('pages.index', compact('title')) -> with('works', $works);
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

        $result = json_decode($result);
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

        $result = json_decode($result);
        $arr_result = array();

        switch($sort) {
            case 'Date': usort($result, function($a, $b) { return $a->created_at < $b->created_at ? -1 : 1; }); break;
            case 'Name': usort($result, function($a, $b) { return $a->study < $b->study ? -1 : 1; });
            default:
                case 'Finished+Works':
                foreach($result as $key) {
                    if($key->status == 'Finished') {
                        array_unshift($arr_result, $key);
                    } else {
                        array_push($arr_result, $key);
                    }
                } break;
                case 'Ongoing+Works':
                foreach($result as $key) {
                    if($key->status == 'Ongoing') {
                        array_unshift($arr_result, $key);
                    } else {
                        array_push($arr_result, $key);
                    }
                } break;
                case 'Discontinued+Works':
                foreach($result as $key) {
                    if($key->status == 'Discontinued') {
                        array_unshift($arr_result, $key);
                    } else {
                        array_push($arr_result, $key);
                    }
                }
        }

        if (!empty($arr_result))
            $result = $arr_result;
        
        return view('pages.search', compact('arr_search', 'result')) -> with('title', $title);
    }
}
