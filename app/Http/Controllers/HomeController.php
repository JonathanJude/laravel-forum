<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Topic;

class HomeController extends Controller
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
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $topics = Topic::all();

        $data = array(
            'topics' => $topics
        );

        // return view('topics.index', compact('topics'));

        return view('home', compact('topics'));
    }
}
