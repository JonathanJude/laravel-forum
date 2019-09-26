@extends('layouts.main')

@section('title', $topic->title)
@section('page_title', $topic->title)

@section('content')

            <div class="card" style="margin-top: 30px;">
                <div class="card-header bg-success text-light"> {{ $topic->user->name }}

                </div>
                <div class="card-body">

                    <p class="pull-right"><small><b>Date:  {{ \Carbon\Carbon::parse($topic->created_at)->toDayDateTimeString() }} </b></small></p>
                <p>{{ $topic->content }} </p>

                </div>
            </div>

            <br>
            <h3>Comments</h3>

            @forelse ($topic->comments as $comment)


        <user-comment
        :user="'{{$comment->user->name}}'"
        :date="'{{ \Carbon\Carbon::parse($comment->created_at)->toDayDateTimeString() }}'"
        :comment="'{{ $comment->comment }}'">
        </user-comment>

            @empty

            <h2 class="text-center"><b>No Comments</b></h2>

            @endforelse

            @auth

            <form action="{{ route('comment') }}" method="POST">
            <input type="hidden" name="topic_id" value="{{$topic->id }}">
            @csrf
                <p>
                    <label for="description">Comment<span>*</span></label>
                    <textarea name="comment" cols="20" rows="3"></textarea>
                </p>

                <button type="submit" class="submit">Submit</button>
            </form>

        @endauth
@endsection

