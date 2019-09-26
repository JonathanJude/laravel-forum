@extends('layouts.auth')

@section('title', 'Register')

@section('heading', 'Join several discussions now!')

@section('top_content')
    Already a member? <a href="{{ route('login') }}">Login</a>
@endsection

@section('content')

    <form action="{{ route('register') }}" method="POST" class="signup-form">
        @csrf
            <hr>

            <label for="fullname">
                <input type="text" name="name" id="name" value="{{ old('name') }}" placeholder="Full Name" required>
                @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>

            <label for="email">
                <input type="email" name="email" id="email" value="{{ old('email') }}" placeholder="example@gmail.com" required>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>

            <label for="password">
                <input type="password" name="password" id="password" placeholder="Password" required>
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>

            <label for="reset-password">
                <input type="password" name="password_confirmation" id="password_confirmation" placeholder="Password" required>
                @error('password_confirmation')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </label>


            <button id="SignUpWithEmail" type="submit">Sign Up</button>

    </form>


@endsection
