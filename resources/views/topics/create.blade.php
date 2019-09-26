@extends('layouts.main')

@section('title', 'Craete Topic')
@section('page_title', 'Create new Topic')

@section('content')
<form action="{{ route('create') }}" method="POST">
    @csrf
                <p>
                    <label for="title">Topic Title <span>*</span></label>
                    <input type="text" name="title">
                </p>

                <p>
                    <label for="description">Content<span>*</span></label>
                    <textarea name="content" cols="30" rows="5"></textarea>
                </p>

                <button type="submit" class="submit">Submit</button>
            </form>

@endsection
