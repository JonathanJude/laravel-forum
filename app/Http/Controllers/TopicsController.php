<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use App\Comment;


class TopicsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }


    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topics = Topic::all();

        return view('topics.index', compact('topics'));

    }

    public function mine()
    {
        $topics = Topic::where('user_id', '=', auth()->id())->get();

        return view('topics.my_topics', compact('topics'));
    }

    public function myComments()
    {
        $comments = Comment::where('user_id', '=', auth()->id())->get();

        return view('topics.my_comments', compact('comments'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('topics.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'content' => 'required',
        ]);

        $topic = new Topic();

        $topic->title = request('title');
        $topic->content = request('content');
        $topic->user_id = auth()->id();

        $topic->save();

        // $new_topic = Topic::create([
        //     'user_id' => auth()->id(),
        //     'title' => request('title'),
        //     'content' => request('content'),
        // ]);

        $url = '/topic/' . $topic->id;

        return redirect($url)
        ->with('flash', 'Topic successfully created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $topic = Topic::findOrfail($id);

        return view('topics.show', compact('topic'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
