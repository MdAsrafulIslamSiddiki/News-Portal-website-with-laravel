@extends('layouts.FrontendLayout')


@section('content')

<div class="main-news mt-5">
    <div class="container-fluid">
        <div class="row">
            <!-- Main News Section -->
            <div class="col-md-8">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="">
                            <h3 class="">{{ $news->news_title }}</h3>
                            <div class="">
                                <span class="category">ক্যাটাগরি: <strong>{{ str_replace(['_', '-'], ' ', $news->category) }}</strong></span> |
                                <span class="date">প্রকাশের তারিখ: {{ $news->created_at->format('d M Y') }}</span>
                            </div>
                            <div class=" mb-5">
                                <img width="100%" height="300px" src="{{ asset('storage/'. $news->image) }}" alt="{{ $news->title }}" >
                            </div>
                            <div class="fw-bold">
                                <p>{{ $news->short_details }}</p>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- Related News Section -->
                <div class="row mt-4">
                    <div class="col-lg-12">
                        <h3 class="related-news-title">সংশ্লিষ্ট সংবাদ</h3>
                        <div class="related-news">
                            <ul>
                                @foreach($relatedNews as $related)
                                    <li><a href="{{ route('news.show', $related->news_title) }}">{{ $related->news_title }}</a></li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Sidebar -->
            @include('layouts.FrontendSidebar')
        </div>
    </div>
</div>

    


@endsection