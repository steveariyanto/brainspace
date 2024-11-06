@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Login</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf
        <div>
            <label for="users_email">Email</label>
            <input type="email" name="users_email" required autofocus>
        </div>
        <div>
            <label for="users_password">Password</label>
            <input type="password" name="users_password" required>
        </div>
        <button type="submit">Login</button>
    </form>    
            
</div>
@endsection
