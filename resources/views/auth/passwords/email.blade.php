@extends('layouts.app')

@section('content')
    <h3 class="title">Admin Password Reset</h3>
    <form action="{{ route('admin.password.email') }}" method="POST" >
        @csrf
        <div class="form-group">
            <label>Email</label>
            <input type="email" class="form-control" name="email" required>
        </div>
        <div class="form-group d-flex align-items-center justify-content-between">
            <button type="submit" class="axil-btn btn-bg-primary submit-btn">Send Password Reset Link</button>
            <a href="{{ route('login') }}" class="btn-bg-primary">Login</a>
        </div>
    </form>

@endsection