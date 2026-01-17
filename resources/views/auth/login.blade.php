@extends('layout_master')

@section('content')
<h1>Login</h1>

@if(session('success'))
    <div class="alert alert-success">{{ session('success') }}</div>
@endif

@if($errors->any())
    <div class="alert alert-danger">
        {{ $errors->first() }}
    </div>
@endif

<form method="POST" action="{{ route('login') }}" class="mt-3">
    @csrf

    <div class="mb-3">
        <label class="form-label">Email</label>
        <input type="email"
               name="email"
               class="form-control"
               value="{{ old('email') }}"
               required autofocus>
    </div>

    <div class="mb-3">
        <label class="form-label">Password</label>
        <input type="password"
               name="password"
               class="form-control"
               required>
    </div>

    <button type="submit" class="btn btn-primary">Login</button>
</form>
@endsection
