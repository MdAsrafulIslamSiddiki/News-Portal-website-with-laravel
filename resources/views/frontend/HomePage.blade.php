@extends('layouts.FrontendLayout')

@section('content')
        <!-- Top News Start-->

        <div class="top-news">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-6 tn-left">
                        @if ($breakingNews->count() > 0)
                            @php
                                $latestNews = $breakingNews->first(); 
                            @endphp
                            <div class="tn-img">
                                <img src="{{ File::exists(public_path('storage/' . $latestNews->image)) ? asset('storage/' . $latestNews->image) : asset('frontend/assets/img/no_image.jpg') }}" alt="{{ $latestNews->news_title }}" />
                                <div class="tn-content">
                                    <div class="tn-content-inner">
                                        <a class="tn-date" href="#"><i class="far fa-clock"></i> {{ $latestNews->created_at->format('d-M-Y') }}</a>
                                        <a class="tn-title"  href="#">{{ Str::limit($latestNews->news_title,50) }}</a>
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
                                        <img src="{{ File::exists(public_path('storage/' . $news->image)) ? asset('storage/' . $news->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $news->news_title }}" />
                                        {{-- <img src="{{ asset('storage/'.$news->image) }}" alt="{{ $news->news_title }}" /> --}}
                                        <div class="tn-content">
                                            <div class="tn-content-inner">
                                                <a class="tn-date" href="#"><i class="far fa-clock"></i> {{ $news->created_at->format('d-M-Y') }}</a>
                                                <a class="tn-title" href="#">{{ Str::limit($news->news_title,50) }}</a>
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
                                        <img src="{{ File::exists(public_path('storage/' . $news->image)) ? asset('storage/' . $news->image) : asset('frontend/assets/img/no_image.jpg')}}" alt="{{ $news->news_title }}"/>
                                        <div class="cn-content">
                                            <div class="cn-content-inner">
                                                <a class="cn-date" href=""><i class="far fa-clock"></i>{{ $news->created_at->format('d-M-Y') }}</a>
                                                <a class="cn-title" href="">{{ Str::limit($news->news_title, 30) }}</a>
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
                                    <img src="{{ asset('frontend/assets/img/cat-news-4.jpg') }}  " />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Vivamus vel felis nec magna</a>
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
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('frontend/assets/img/cat-news-7.jpg') }}  " />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Interdum et malesuada fames ac ante</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('frontend/assets/img/cat-news-8.jpg') }}  " />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Mauris non ligula eget ante sagittis</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('frontend/assets/img/cat-news-9.jpg') }}  " />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Integer non nunc nec nulla aliquet</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <h2><i class="fas fa-align-justify"></i>Economy</h2>
                        <div class="row cn-slider">
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('frontend/assets/img/cat-news-10.jpg') }}  " />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Ut laoreet justo non ornare</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('frontend/assets/img/cat-news-11.jpg') }}  " />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Proin a nulla ut enim feugiat</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="cn-img">
                                    <img src="{{ asset('frontend/assets/img/cat-news-12.jpg') }}  " />
                                    <div class="cn-content">
                                        <div class="cn-content-inner">
                                            <a class="cn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <a class="cn-title" href="">Sed mauris sem sollicitudin at neque</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
                                <h2><i class="fas fa-align-justify"></i>Latest News</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mn-img">
                                            <img src="{{ asset('frontend/assets/img/latest-news.jpg') }}"  />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Cras commodo sem ut porta laoreet</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('frontend/assets/img/latest-news.jpg') }} "  />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Pellentesque sit amet rutrum lacus</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('frontend/assets/img/latest-news.jpg') }} "  />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Proin id pretium orci, quis rhoncus eros</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('frontend/assets/img/latest-news.jpg') }} "  />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Curabitur viverra scelerisque tempor</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('frontend/assets/img/latest-news.jpg') }} "  />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Integer nec lorem facilisis interdum lorem non</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('frontend/assets/img/latest-news.jpg') }} "  />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Interdum et malesuada fames</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <h2><i class="fas fa-align-justify"></i>Popular News</h2>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="mn-img">
                                            <img src="{{ asset('frontend/assets/img/popular-news.jpg') }}"   />
                                        </div>
                                        <div class="mn-content">
                                            <a class="mn-title" href="">Phasellus gravida metus vitae laoreet aliquam</a>
                                            <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            <p>
                                                Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus sed porta dui. Class aptent taciti sociosqu ad litora torquent per conubia nostra inceptos...
                                            </p>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('frontend/assets/img/popular-news.jpg') }}"   />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Nullam risus ante sempe</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('frontend/assets/img/popular-news.jpg') }}"   />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Pellentesque ultrices quam id ipsum tempor</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('frontend/assets/img/popular-news.jpg') }}"   />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Nam ex magna, commodo sed turpis rutrum</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('frontend/assets/img/popular-news.jpg') }}"   />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Aliquam condimentum metus</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
                                        <div class="mn-list">
                                            <div class="mn-img">
                                                <img src="{{ asset('frontend/assets/img/popular-news.jpg') }}"   />
                                            </div>
                                            <div class="mn-content">
                                                <a class="mn-title" href="">Ut ornare rutrum ligula erat volutpat</a>
                                                <a class="mn-date" href=""><i class="far fa-clock"></i>05-Feb-2020</a>
                                            </div>
                                        </div>
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