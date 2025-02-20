@extends('layouts.BackendLayout')

@section('content')
 
<div class="container mt-5">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body d-flex">
                    <div class="w-20 position-relative">
                        <img class="rounded-circle" src="{{ getProfileImage() }}" alt="">
                    </div>
                    <div class="ms-5 align-self-center">
                        <h1 class="fs-2">{{ auth()->user()->name }}</h1>
                        <p class="fs-5 text-muted"><i class='bx bxs-envelope'></i> {{ auth()->user()->email }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection