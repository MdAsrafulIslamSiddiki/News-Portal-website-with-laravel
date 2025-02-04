@extends('layouts.FrontendLayout')

@section('content')
<div class="container">
    <h2>Search Results for "{{ $query }}"</h2>
    
    @if($news->count() > 0)
        @foreach ($news as $item)
            <div class="mn-list">
                <div class="mn-img">
                    <a href="#">
                        <img src="{{ asset('storage/'.$item->image) }}" alt="{{ $item->news_title }}">
                    </a>
                </div>
                <div class="mn-content">
                    <a class="mn-title" href="#">{{ $item->news_title }}</a>
                    <p>{{ Str::limit($item->short_details, 100) }}</p>
                </div>
            </div>
        @endforeach
    @else
        <p>No results found.</p>
    @endif
</div>
@endsection
