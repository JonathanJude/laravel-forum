@extends('layouts.auth')

@section('title', 'Login')

@section('heading', 'Welcome back!')

@section('top_content')
    Not yet a member? <a href="{{ route('register') }}">Sign Up</a>
@endsection

@section('content')

    <form action="{{ route('login') }}" method="POST" class="signup-form">
        @csrf
            <hr>


            <label for="email">
                <input type="email" name="email" class="@error('email') is-invalid @enderror" id="email" value="{{ old('email') }}" placeholder="example@gmail.com" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>

            <label for="password">
                <input type="password" name="password" class="@error('password') is-invalid @enderror" id="password" placeholder="Password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>

            <button id="SignUpWithEmail" type="submit">Login</button>

    </form>


@endsection
