@extends('layouts.FrontendLayout')

@section('content')
        <!-- Top News Start-->

        <div class="top-news">
            <div class="container-fluid">
                <div class="row">
                    {{-- <div class="col-md-6 tn-left">
                        @if ($breakingNews->count() > 0)
                            @php
                                $latestBreakingNews = $breakingNews->first(); 
                            @endphp
                            <div class="tn-img">
                                <img src="{{ File::exists(public_path('storage/' . $latestBreakingNews->image)) ? asset('storage/' . $latestBreakingNews->image) : asset('frontend/assets/img/no_image.jpg') }}" alt="{{ $latestBreakingNews->news_title }}" />
                                <div class="tn-content">
                                    <div class="tn-content-inner">
                                        <a class="tn-date" href="#"><i class="far fa-clock"></i> {{ $latestBreakingNews->created_at->format('d-M-Y') }}</a>
                                        <a class="tn-title"  href="#">{{ Str::limit($latestBreakingNews->news_title,50) }}</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div> --}}
                    <div class="col-md-6 tn-left">
                        @if ($breakingNews->count() > 0)
                            @php
                                $latestBreakingNews = $breakingNews->first(); 
                            @endphp

                            <div class="tn-img">
                                <a href="#">
                                    <img src="{{ File::exists(public_path('storage/' . $latestBreakingNews->image)) ? asset('storage/' . $latestBreakingNews->image) : asset('frontend/assets/img/no_image.jpg') }}" alt="{{ $latestBreakingNews->news_title }}" />
                                </a>
                                <div class="tn-content">
                                    <div class="tn-content-inner">
                                        <p class="tn-date" ><i class="far fa-clock"></i> {{ $latestBreakingNews->created_at->format('d-M-Y') }}</p>
                                        <a class="tn-title" href="#">{{ $latestBreakingNews->news_title }}</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    </div>
                    

                    <div class="col-md-6 tn-right">
                        <div class="row">
                            @foreach ($breakingNews->skip(1)->take(4) as $news)
                                <div class="col-md-6">
                                    <div class="tn-img">
                                        <a href="">
                                            <img src="{{ File::exists(public_path('storage/' . $news->image)) ? asset('storage/' . $news->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $news->news_title }}" />
                                        </a>
                                        <div class="tn-content">
                                            <div class="tn-content-inner">
                                                <p class="tn-date" ><i class="far fa-clock"></i> {{ $news->created_at->format('d-M-Y') }}</p>
                                                <a class="tn-title" href="#">{{ $news->news_title }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Top News End-->


        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>National</h2>
                        <div class="row cn-slider">
                            @foreach ($nationalNews as $news)
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <a href="">
                                            <img src="{{ File::exists(public_path('storage/' . $news->image)) ? asset('storage/' . $news->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $news->news_title }}"/>
                                        </a>
                                        <div class="cn-content">
                                            <div class="cn-content-inner">
                                                <a class="cn-date" href=""><i class="far fa-clock"></i>{{ $news->created_at->format('d-M-Y') }}</a>
                                                <a class="cn-title" href="">{{ $news->news_title }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>International</h2>
                        <div class="row cn-slider">
                            @foreach ($internationalNews as $news)
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <a href="">
                                        <img src="{{ File::exists(public_path('storage/' . $news->image)) ? asset('storage/' . $news->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $news->news_title }}"/>
                                    </a>
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>{{ $news->created_at->format('d-M-Y') }}</a>
                                            <a class="cn-title" href="">{{ $news->news_title }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->
        
        <!-- Category News Start-->
        <div class="cat-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>Politics</h2>
                        <div class="row cn-slider">
                            @foreach ($politicsNews as $news)
                                <div class="col-md-6">
                                    <div class="cn-img">
                                        <a href="">
                                            <img src="{{ File::exists(public_path('storage/' . $news->image)) ? asset('storage/' . $news->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $news->news_title }}"/>
                                        </a>
                                        <div class="cn-content">
                                            <div class="cn-content-inner">
                                                <a class="cn-date" href=""><i class="far fa-clock"></i>{{ $news->created_at->format('d-M-Y') }}</a>
                                                <a class="cn-title" href="">{{ $news->news_title }}</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>Economy</h2>
                        <div class="row cn-slider">
                            @foreach ($economyNews as $news)
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <a href="">
                                        <img src="{{ File::exists(public_path('storage/' . $news->image)) ? asset('storage/' . $news->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $news->news_title }}"/>
                                    </a>
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>{{ $news->created_at->format('d-M-Y') }}</a>
                                            <a class="cn-title" href="">{{ $news->news_title }}</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Category News End-->

        <!-- Main News Start-->
        <div class="main-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-12">
                                <h2><i class="fas fa-align-justify"></i>Sports News</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        @if ($sportsNews->count() > 0)
                                            @php
                                                $latestSportsNews = $sportsNews->first();    
                                            @endphp
                                            <div class="mn-img">
                                                <a href="">
                                                    <img src="{{ File::exists(public_path('storage/'. $latestSportsNews->image)) ? asset('storage/'. $latestSportsNews->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $latestSportsNews->news_title }}"/>
                                                </a>
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">{{ $latestSportsNews->news_title }}</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{ $latestSportsNews->created_at->format('d-M-Y') }}</a>
                                                <p>
                                                    {{  $latestSportsNews->short_details }}
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6">
                                        @foreach ($sportsNews->skip(1)->take(5) as $news)  
                                            <div class="mn-list">
                                                <div class="mn-img">
                                                    <a href="">
                                                        <img src="{{ File::exists(public_path('storage/' . $news->image)) ? asset('storage/' . $news->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $news->news_title }}"/>
                                                    </a>
                                                </div>
                                                <div class="mn-content">
                                                    <a class="mn-title" href="">{{ $news->news_title }}</a>
                                                    <a class="mn-date" href=""><i class="far fa-clock"></i>{{ $news->created_at->format('d-M-Y') }}</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h2><i class="fas fa-align-justify"></i>Health News</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        @if ($healthNews->count() > 0)
                                            @php
                                                $latestHealthNews = $healthNews->first();    
                                            @endphp
                                            <div class="mn-img">
                                                <a href="">
                                                    <img src="{{ File::exists(public_path('storage/'. $latestHealthNews->image)) ? asset('storage/'. $latestHealthNews->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $latestHealthNews->news_title }}"/>
                                                </a>
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">{{ $latestHealthNews->news_title }}</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>{{ $latestHealthNews->created_at->format('d-M-Y') }}</a>
                                                <p>
                                                    {{  $latestHealthNews->short_details }}
                                                </p>
                                            </div>
                                        @endif
                                    </div>
                                    <div class="col-lg-6">
                                        @foreach ($healthNews->skip(1)->take(5) as $news)  
                                            <div class="mn-list">
                                                <div class="mn-img">
                                                    <a href="">
                                                        <img src="{{ File::exists(public_path('storage/' . $news->image)) ? asset('storage/' . $news->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $news->news_title }}"/>
                                                    </a>
                                                </div>
                                                <div class="mn-content">
                                                    <a class="mn-title" href="">{{ $news->news_title }}</a>
                                                    <a class="mn-date" href=""><i class="far fa-clock"></i>{{ $news->created_at->format('d-M-Y') }}</a>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-md-4">
                        <div class="sidebar">
                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Category</h2>
                                <div class="category">
                                    <ul class="fa-ul">
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">National</a></li>
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">International</a></li>
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Economics</a></li>
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Politics</a></li>
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Lifestyle</a></li>
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Technology</a></li>
                                        <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="">Trades</a></li>
                                    </ul>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Tags</h2>
                                <div class="tags">
                                    <a href="">National</a>
                                    <a href="">International</a>
                                    <a href="">Economics</a>
                                    <a href="">Politics</a>
                                    <a href="">Lifestyle</a>
                                    <a href="">Technology</a>
                                    <a href="">Trades</a>
                                    <a href="">National</a>
                                    <a href="">International</a>
                                    <a href="">Economics</a>
                                    <a href="">Politics</a>
                                    <a href="">Lifestyle</a>
                                    <a href="">Technology</a>
                                    <a href="">Trades</a>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Ads 1 column</h2>
                                <div class="image">
                                    <a href=""><img src="{{ asset('frontend/assets/img/adds-1.jpg') }}"   alt="Image"></a>
                                </div>
                            </div>

                            <div class="sidebar-widget">
                                <h2><i class="fas fa-align-justify"></i>Ads 2 column</h2>
                                <div class="image">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <a href=""><img src="{{ asset('frontend/assets/img/adds-2.jpg') }}"   alt="Image"></a>
                                        </div>
                                        <div class="col-sm-6">
                                            <a href=""><img src="{{ asset('frontend/assets/img/adds-2.jpg') }}"   alt="Image"></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main News End-->

@endsection