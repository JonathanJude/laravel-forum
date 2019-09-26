@extends('layouts.main')

@section('title', 'My Comments')
@section('page_title', 'My Comments')

@section('content')

        @forelse ($comments as $comment)

            <div class="card" style="margin-top: 30px;">
            <div class="card-header bg-success text-light"> in <b><a href="{{$comment->topic->id}}" class="text-light"> {{ $comment->topic->title }} </a></b>,
                  <small>  on - [{{ \Carbon\Carbon::parse($comment->created_at)->toDayDateTimeString() }}] </small>

                </div>
                <div class="card-body">

                <p>{{ $comment->comment }} </p>

                </div>
            </div>

            @empty

            <h2 class="text-center"><b>No Comments</b></h2>

            @endforelse


@endsection

