@extends('layouts.main')

@section('title', 'My Topics')
@section('page_title', 'My Topics')

@section('content')
        @auth
            <div>
            <a href="{{ route('create') }}" class="btn btn-success pull-left">Create new Topic</a>
            </div>
        @endauth

        @forelse ($topics as $topic)
        <topic
        :index="'{{ $loop->iteration }}'"
        :user="'{{ $topic->user->name }}'"
        :path="'{{ route('show', ['id' => $topic->id]) }}'"
        :title="'{{ $topic->title }}'"
        :date="'{{ \Carbon\Carbon::parse($topic->created_at)->toDayDateTimeString() }}'"
        :comments="'{{ $topic->comments->count() }}'"
        ></topic>

        @empty
            <h2 class="text-center"><p><b> You have no Topics!</b></p></h2>
        @endforelse

@endsection

