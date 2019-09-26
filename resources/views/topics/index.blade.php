@extends('layouts.main')

@section('title', 'All Topics')
@section('page_title', 'All Topics')

@section('content')
        @auth
            <div>
            <a href="{{ route('create') }}" class="btn btn-danger pull-left">Create new Topic</a>
            </div>
        @endauth

        @forelse ($topics as $topic)
            <div class="card" style="margin-top: 30px;">
                <div class="card-header bg-success text-light">#{{$loop->iteration}} - by {{ $topic->user->name }}</div>
                <div class="card-body">
                <h4><b><a href="topic/{{$topic->id }}">{{ $topic->title }} </a></b></h4>
                    <span class="text-muted text-small">{{ \Carbon\Carbon::parse($topic->created_at)->toDayDateTimeString() }}</span>
                    -
                    <span class="text-muted text-small">{{$topic->comments->count()}} Comments</span>
                </div>
            </div>
        @empty
            <h2 class="text-center"><p><b> There are no Topics!</b></p></h2>
        @endforelse

@endsection

