<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('title', 'news 24')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Bootstrap Ecommerce Template" name="keywords">
    <meta content="Bootstrap Ecommerce Template Free Download" name="description">
    <link rel="stylesheet" href="{{ asset('backend/dashboard_assets/assets/vendor/css/bootstrap.min.css') }}">

    <!-- Favicon -->
    <link href="{{ asset('frontend/assets/img/favicon.ico') }}" rel="icon">

    <!-- Google Fonts -->

    {{-- <link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@400;700&display=swap" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet"> --}}

    <!-- CSS Libraries -->
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="{{ asset('frontend/assets/lib/slick/slick.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/assets/lib/slick/slick-theme.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('frontend/assets/css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Topbar Start -->
    <div class="container-fluid d-none d-lg-block">
        <div class="row align-items-center bg-dark px-lg-5">
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-n2">
                        <li class="nav-item ">
                            <p class="nav-link text-white small mb-0" href="#" id="currentDate"></p>
                        </li>
                        {{-- <li class="nav-item border-right border-secondary">
                                <a class="nav-link text-white small" href="#">Advertise</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-white small" href="#">Contact</a>
                            </li> --}}
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3 text-right d-none d-md-block">
                <nav class="navbar navbar-expand-sm bg-dark p-0">
                    <ul class="navbar-nav ml-auto mr-n2 social">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><small class="fab fa-twitter"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><small class="fab fa-facebook-f"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><small class="fab fa-linkedin-in"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><small class="fab fa-instagram"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><small
                                    class="fab fa-google-plus-g"></small></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="#"><small class="fab fa-youtube"></small></a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <div class="row align-items-center bg-white py-3 px-lg-5">
            <div class="col-lg-12 d-flex justify-content-center">
                <a href="{{ route('homepage') }}" class="navbar-brand p-0 d-none d-lg-block">
                    <h1 class="m-0 display-4 text-uppercase text-deep-orange">Biz<span
                            class="text-secondary font-weight-normal">News</span></h1>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-dark navbar-dark py-2 py-lg-0 px-lg-0">
            <a href="{{ route('homepage') }}" class="navbar-brand d-block d-lg-none">
                <h1 class="m-0 display-4 text-uppercase text-deep-orange">Biz<span
                        class="text-white font-weight-normal">News</span></h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-0 px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mr-auto py-0">
                    <a href="{{ route('homepage') }}"
                        class="nav-item nav-link {{ Request::is('/') ? 'active' : '' }}">Home</a>
                    <a href="{{ route('category.news', 'Breaking_news') }}"
                        class="nav-item nav-link {{ Request::is('category/Breaking_news') ? 'active' : '' }}">Breaking
                        News</a>
                    <a href="{{ route('category.news', 'National') }}"
                        class="nav-item nav-link {{ Request::is('category/National') ? 'active' : '' }}">National</a>
                    <a href="{{ route('category.news', 'International') }}"
                        class="nav-item nav-link {{ Request::is('category/International') ? 'active' : '' }}">International</a>
                    <a href="{{ route('category.news', 'Politics') }}"
                        class="nav-item nav-link {{ Request::is('category/Politics') ? 'active' : '' }}">Politics</a>
                    <a href="{{ route('category.news', 'Economy') }}"
                        class="nav-item nav-link {{ Request::is('category/Economy') ? 'active' : '' }}">Economy</a>
                    <a href="{{ route('category.news', 'Sports') }}"
                        class="nav-item nav-link {{ Request::is('category/Sports') ? 'active' : '' }}">Sports</a>
                    <div class="nav-item dropdown ">
                        <a href="#"
                            class="nav-link dropdown-toggle {{ in_array(request()->segment(2), ['Health', 'Education', 'Science_&_Technology', 'Entertainment', 'Environment', 'Agriculture']) ? 'active' : '' }}"
                            data-toggle="dropdown">Others</a>
                        <div class="dropdown-menu">
                            <a href="{{ route('category.news', 'Health') }}"
                                class="dropdown-item {{ Request::is('category/Health') ? 'active' : '' }}">Health</a>
                            <a href="{{ route('category.news', 'Education') }}"
                                class="dropdown-item {{ Request::is('category/Education') ? 'active' : '' }}">Education</a>
                            <a href="{{ route('category.news', 'Science_&_Technology') }}"
                                class="dropdown-item {{ Request::is('category/Science_&_Techonology') ? 'active' : '' }}">Science
                                & Technology</a>
                            <a href="{{ route('category.news', 'Entertainment') }}"
                                class="dropdown-item {{ Request::is('category/Entertainment') ? 'active' : '' }}">Entertainment</a>
                            <a href="{{ route('category.news', 'Environment') }}"
                                class="dropdown-item {{ Request::is('category/Environment') ? 'active' : '' }}">Environment</a>
                            <a href="{{ route('category.news', 'Agriculture') }}"
                                class="dropdown-item {{ Request::is('category/Agriculture') ? 'active' : '' }}">Agriculture</a>
                        </div>
                    </div>
                </div>
                <div class="input-group ml-auto d-none d-lg-flex search" style="width: 100%; max-width: 300px;">
                    <form action="{{ route('news.search') }}" method="GET"
                        class="input-group ml-auto d-none d-lg-flex search" style="width: 100%; max-width: 300px;">
                        <input type="text" name="query" class="form-control border-0" placeholder="Search here"
                            required>
                        <div class="input-group-append">
                            <button type="submit" class="text-dark bg-deep-orange border-0 px-3"><i
                                    class="fa fa-search"></i></button>
                        </div>
                    </form>

                </div>
                <!-- Custom Dropdown with Search (using Select2) -->
                <div class="language-dropdown notranslate">
                    <select id="customLangSelector" onchange="setLanguageFromDropdown()">
                        <option value="bn">Bengali</option>
                        <option value="en">English</option>
                        <option value="fr">French</option>
                        <option value="hi">Hindi</option>
                        <option value="oc">অকসিটান</option>
                        <option value="as">অসমিয়া</option>
                        <option value="ay">আইমারা</option>
                        <option value="ga">আইরিশ</option>
                        <option value="is">আইসল্যান্ডীয়</option>
                        <option value="awa">আওয়াধি</option>
                        <option value="ach">আচোলি</option>
                        <option value="az">আজের বাইজানীয়</option>
                        <option value="aa">আফার</option>
                        <option value="af">আফ্রিকান</option>
                        <option value="ab">আবখাজ</option>
                        <option value="av">আভর</option>
                        <option value="am">আমহারিয়</option>
                        <option value="ar">আরবী</option>
                        <option value="hy">আর্মেনিয়ান</option>
                        <option value="sq">আলবেনীয়</option>
                        <option value="alz">আলুর</option>
                        <option value="ace">আসেনিজ</option>
                        <option value="yua">ইউকাটেক মায়া</option>
                        <option value="uk">ইউক্রেনীয়</option>
                        <option value="ug">ইউঘুর</option>
                        <option value="yo">ইউরোবা</option>
                        <option value="en">ইংরেজী</option>
                        <option value="ig">ইগবো</option>
                        <option value="it">ইতালীয়</option>
                        <option value="yi">ইদ্দিশ</option>
                        <option value="iu-Latn">ইনুকটুট (ল্যাটিন)</option>
                        <option value="iu">ইনুকটুট (সিলেবিকস)</option>
                        <option value="id">ইন্দোনেশিয়</option>
                        <option value="iba">ইবান</option>
                        <option value="sah">ইয়াকুত</option>
                        <option value="ilo">ইলোকানো</option>
                        <option value="uz">উজবেক</option>
                        <option value="udm">উদমুর্ট</option>
                        <option value="ur">উর্দু</option>
                        <option value="ee">এওয়ে</option>
                        <option value="et">এস্তনীয়</option>
                        <option value="or">ওডিয়া (ওড়িয়া)</option>
                        <option value="war">ওয়ারায়</option>
                        <option value="cy">ওয়েল্চ</option>
                        <option value="om">ওরোমো</option>
                        <option value="wo">ওলুফ</option>
                        <option value="os">ওসেটিয়ান</option>
                        <option value="trp">ককবরক</option>
                        <option value="kk">কজাখ</option>
                        <option value="co">করসিকেন</option>
                        <option value="ca">কাতালান</option>
                        <option value="kr">কানুরি</option>
                        <option value="kn">কান্নাড়া</option>
                        <option value="pam">কাপামপাঙ্গান</option>
                        <option value="kl">কালালিসুট</option>
                        <option value="kg">কিকঙ্গো</option>
                        <option value="cgg">কিগা</option>
                        <option value="ktu">কিতুবা</option>
                        <option value="rw">কিনয়ারওয়ান্ডা</option>
                        <option value="ky">কির্গিজ</option>
                        <option value="ku">কুর্দিশ (কুর্মানজি)</option>
                        <option value="ckb">কুর্দিশ (সোরানি)</option>
                        <option value="kek">কেকচি</option>
                        <option value="qu">কেচুয়া</option>
                        <option value="gom">কোঙ্কণী</option>
                        <option value="kv">কোমি</option>
                        <option value="ko">কোরিয়ান</option>
                        <option value="yue">ক্যান্টনীজ</option>
                        <option value="kri">ক্রিও</option>
                        <option value="crh-Latn">ক্রিমিয়ান তাতার (ল্যাটিন)</option>
                        <option value="crh">ক্রিমিয়ান তাতার (সিরিলিক)</option>
                        <option value="hr">ক্রোয়েশা</option>
                        <option value="kha">খাসি</option>
                        <option value="km">খেমের</option>
                        <option value="gaa">গা</option>
                        <option value="gu">গুজরাটি</option>
                        <option value="gn">গুয়ারানি</option>
                        <option value="gl">গ্যালিশিয়</option>
                        <option value="el">গ্রীক্‌</option>
                        <option value="ch">চামোরো</option>
                        <option value="ny">চিচেওয়া</option>
                        <option value="zh-TW">চিনা (ঐতিহ্যবাহী)</option>
                        <option value="zh-CN">চীনা (সরলীকৃত)</option>
                        <option value="chk">চুকিস</option>
                        <option value="cv">চুভাশ</option>
                        <option value="cs">চেক্‌</option>
                        <option value="ce">চেচেন</option>
                        <option value="ceb">চেবুয়ানো</option>
                        <option value="dz">জংখা</option>
                        <option value="ka">জর্জিয়ান</option>
                        <option value="ja">জাপানি</option>
                        <option value="zap">জাপোটেক</option>
                        <option value="jw">জাভানি</option>
                        <option value="jam">জামাইকান পাটওয়া</option>
                        <option value="de">জার্মান</option>
                        <option value="kac">জিংপো</option>
                        <option value="dyu">জুলা</option>
                        <option value="zu">জুলু</option>
                        <option value="xh">জোসা</option>
                        <option value="ak">টুই</option>
                        <option value="tyv">টুভান</option>
                        <option value="tpi">টোক পিসিন</option>
                        <option value="to">টোঙ্গান</option>
                        <option value="ber-Latn">ট্যামাজিট</option>
                        <option value="ber">ট্যামাজিট (টিফিন্যাঘ)</option>
                        <option value="ndc-ZW">ডাউ</option>
                        <option value="nl">ডাচ</option>
                        <option value="din">ডিংকা</option>
                        <option value="doi">ডোগরি</option>
                        <option value="dov">ডোম্বি</option>
                        <option value="da">ড্যানিশ</option>
                        <option value="tg">তাজিক</option>
                        <option value="tt">তাতার</option>
                        <option value="ta">তামিল</option>
                        <option value="ty">তাহিতিয়ান</option>
                        <option value="ti">তিগরিনিয়া</option>
                        <option value="bo">তিব্বতী</option>
                        <option value="tiv">তিভ</option>
                        <option value="tum">তুমবুকা</option>
                        <option value="tk">তুর্কমেন</option>
                        <option value="tr">তুর্কী</option>
                        <option value="tcy">তুলু</option>
                        <option value="tet">তেতুম</option>
                        <option value="te">তেলুগু</option>
                        <option value="th">থাই</option>
                        <option value="fa-AF">দারি</option>
                        <option value="dv">দিবেহী</option>
                        <option value="bm-Nkoo">নকো</option>
                        <option value="no">নরওয়েজীয়</option>
                        <option value="nhe">নাউয়াটল্ (পূর্ব হুয়াস্টেকা)</option>
                        <option value="nus">নুয়ের</option>
                        <option value="new">নেপালভাষা (নেওয়ারি)</option>
                        <option value="ne">নেপালী</option>
                        <option value="nr">নেবেলে (দক্ষিণ)</option>
                        <option value="pt-PT">পর্তুগীজ (পর্তুগাল)</option>
                        <option value="pt">পর্তুগীজ (ব্রাজিল)</option>
                        <option value="ps">পশতু</option>
                        <option value="pag">পাঙ্গাসিনান</option>
                        <option value="pa">পাঞ্জাবি (গুরুমুখী)</option>
                        <option value="pa-Arab">পাঞ্জাবি (শাহমুখী)</option>
                        <option value="pap">পাপিয়ামেন্টো</option>
                        <option value="pl">পোলীশ</option>
                        <option value="fon">ফন</option>
                        <option value="fr">ফরাসি</option>
                        <option value="fr-CA">ফরাসি (কানাডা)</option>
                        <option value="fa">ফার্সি</option>
                        <option value="fj">ফিজিয়ান</option>
                        <option value="fi">ফিনিশ</option>
                        <option value="tl">ফিলিপিনো</option>
                        <option value="ff">ফুলানি</option>
                        <option value="fo">ফেরোইজ</option>
                        <option value="fur">ফ্রিউলিয়ান</option>
                        <option value="fy">ফ্রিজিয়ান</option>
                        <option value="bs">বসনীয়</option>
                        <option value="bci">বাউলে</option>
                        <option value="bts">বাটাক সিমালুনগুন</option>
                        <option value="btx">বাতাক কারো</option>
                        <option value="bbc">বাতাক তোবা</option>
                        <option value="bm">বাম্বারা</option>
                        <option value="my">বার্মিজ</option>
                        <option value="ban">বালিনিজ</option>
                        <option value="bal">বালুচি</option>
                        <option value="ba">বাশকির</option>
                        <option value="eu">বাস্ক</option>
                        <option value="bik">বিকোল</option>
                        <option value="bua">বুরাত</option>
                        <option value="bg">বুলগেরীয়</option>
                        <option value="bew">বেতাউয়ি</option>
                        <option value="bem">বেম্বা</option>
                        <option value="be">বেলারুশীয়</option>
                        <option value="br">ব্রিটন</option>
                        <option value="vi">ভিয়েতনামিয়</option>
                        <option value="vec">ভেনিশিয়ান</option>
                        <option value="ve">ভেন্ডা</option>
                        <option value="bho">ভোজপুরি</option>
                        <option value="hmn">মংগ</option>
                        <option value="mn">মঙ্গোলিয়</option>
                        <option value="mfe">মরিশীয়ান ক্রেয়ল</option>
                        <option value="mak">মাকাসসার</option>
                        <option value="mad">মাদুরিস</option>
                        <option value="mam">মাম</option>
                        <option value="mi">মায়োরি</option>
                        <option value="mwr">মারওয়াড়ি</option>
                        <option value="mr">মারাঠি</option>
                        <option value="mh">মার্শালিজ</option>
                        <option value="ms-Arab">মালয়(জাউই)</option>
                        <option value="mg">মালাগাসি</option>
                        <option value="ms">মালে</option>
                        <option value="ml">মালেয়ালাম</option>
                        <option value="mt">মাল্টিজ</option>
                        <option value="lus">মিজো</option>
                        <option value="chm">মিডো মারি</option>
                        <option value="min">মিনাঙ্গ</option>
                        <option value="mni-Mtei">মৈতৈলোন (মণিপুরী)</option>
                        <option value="mai">মৈথিলি</option>
                        <option value="gv">ম্যাক্স</option>
                        <option value="mk">ম্যাসিডোনিয়ান</option>
                        <option value="rn">রুন্দি</option>
                        <option value="ru">রুশ</option>
                        <option value="rom">রোমানিয়া</option>
                        <option value="ro">রোমানীয়</option>
                        <option value="lo">লাও</option>
                        <option value="ltg">লাতগালিয়ান</option>
                        <option value="lv">লাতভিয়ান</option>
                        <option value="la">লাতিন</option>
                        <option value="lij">লিগুরিয়ান</option>
                        <option value="ln">লিঙ্গালা</option>
                        <option value="lt">লিথুয়ানীয়</option>
                        <option value="li">লিমবুর্জিশ</option>
                        <option value="luo">লুও</option>
                        <option value="lb">লুক্সেমবার্গীয়</option>
                        <option value="lg">লুগান্ডা</option>
                        <option value="lmo">লোম্বার্ড</option>
                        <option value="shn">শান</option>
                        <option value="lua">শিলুবা</option>
                        <option value="sw">শোয়াইলি</option>
                        <option value="sa">সংস্কৃত</option>
                        <option value="szl">সাইলেশিয়ান</option>
                        <option value="sat">সাঁওতালি (অল চিকি)</option>
                        <option value="sat-Latn">সাঁওতালি (ল্যাটিন)</option>
                        <option value="sg">সাঙ্গো</option>
                        <option value="se">সামি (উত্তর)</option>
                        <option value="sm">সামোয়া</option>
                        <option value="sr">সার্বিয়ান</option>
                        <option value="si">সিংহলি</option>
                        <option value="sd">সিন্ধি</option>
                        <option value="scn">সিসিলিয়ান</option>
                        <option value="sv">সুইডিশ</option>
                        <option value="su">সুদানীজ</option>
                        <option value="sus">সুসু</option>
                        <option value="nso">সেপেডি</option>
                        <option value="crs">সেশেলয়েস ক্রয়েল</option>
                        <option value="st">সেসোথো</option>
                        <option value="ts">সোঙ্গা</option>
                        <option value="sn">সোনা</option>
                        <option value="so">সোমালি</option>
                        <option value="ss">সোয়াতি</option>
                        <option value="tn">সোয়ানা</option>
                        <option value="gd">স্কচ্ গাইলি</option>
                        <option value="es">স্পেনীয়</option>
                        <option value="eo">স্পেরান্তো</option>
                        <option value="sk">স্লোভাক</option>
                        <option value="sl">স্লোভেনিয়</option>
                        <option value="ht">হাইতিয়ান ক্রেওল</option>
                        <option value="ha">হাউসা</option>
                        <option value="haw">হাওয়াইয়ান</option>
                        <option value="cnh">হাকা চিন</option>
                        <option value="hu">হাঙ্গেরীয়</option>
                        <option value="hrx">হানস্রিক</option>
                        <option value="hi">হিন্দি</option>
                        <option value="iw">হিব্রু</option>
                        <option value="hil">হিলিগ্যায়নোন</option>
                    </select>
                </div>
                <!-- Google Translate Widget (hidden) -->
                <div id="google_element"></div>

            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    @yield('content')



    <!-- Footer Start -->
    <div class="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Get in Touch</h3>
                        <div class="contact-info">
                            <p><i class="fa fa-map-marker"></i>123 Terry Lane, New York, USA</p>
                            <p><i class="fa fa-envelope"></i>email@example.com</p>
                            <p><i class="fa fa-phone"></i>+123-456-7890</p>
                            <div class="social">
                                <a href=""><i class="fab fa-twitter"></i></a>
                                <a href=""><i class="fab fa-facebook"></i></a>
                                <a href=""><i class="fab fa-linkedin"></i></a>
                                <a href=""><i class="fab fa-instagram"></i></a>
                                <a href=""><i class="fab fa-youtube"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Useful Links</h3>
                        <ul>
                            <li><a href="#"></a></li>
                            <li><a href="#">Aliquam</a></li>
                            <li><a href="#">Fusce placerat</a></li>
                            <li><a href="#">Nulla hendrerit</a></li>
                            <li><a href="#">Maecenas</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6">
                    <div class="footer-widget">
                        <h3 class="title">Quick Links</h3>
                        <ul>
                            <li><a href="#">Posuere egestas</a></li>
                            <li><a href="#">Sollicitudin</a></li>
                            <li><a href="#">Luctus non</a></li>
                            <li><a href="#">Duis tincidunt</a></li>
                            <li><a href="#">Elementum</a></li>
                        </ul>
                    </div>
                </div>




            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Footer Bottom Start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-6 copyright">
                    <p>Copyright &copy; <a href="https://htmlcodex.com">HTML Codex</a>. All Rights Reserved</p>
                </div>

                <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                <div class="col-md-6 template-by">
                    <p>Template By <a href="https://htmlcodex.com">HTML Codex</a></p>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer Bottom End -->


    <!-- Back to Top -->
    <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/assets/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/assets/lib/slick/slick.min.js') }}"></script>


    <!-- Template Javascript -->
    <script src="{{ asset('frontend/assets/js/main.js') }}"></script>

    <!-- Google Translate Script -->
    <script src="http://translate.google.com/translate_a/element.js?cb=loadGoogleTranslate"></script>

    <script>
        // Function to load Google Translate element
        function loadGoogleTranslate() {
            new google.translate.TranslateElement({
                    pageLanguage: 'bn'
                },
                'google_element'
            );
        }

        // Function to change the language based on custom dropdown selection
        function setLanguageFromDropdown() {
            let selectedLang = document.getElementById('customLangSelector').value;
            let googleTranslateFrame = document.querySelector('.goog-te-combo');
            if (googleTranslateFrame) {
                googleTranslateFrame.value = selectedLang;
                googleTranslateFrame.dispatchEvent(new Event('change')); // Trigger language change
            }
        }

        // Initialize Google Translate on page load
        window.onload = function() {
            loadGoogleTranslate();
        };
    </script>


    {{-- for live date --}}
    <script>
        function updateDate() {
            const date = new Date();
            const options = {
                weekday: 'long',
                year: 'numeric',
                month: 'long',
                day: 'numeric'
            };
            document.getElementById('currentDate').innerText = date.toLocaleDateString('en-US', options);
        }
        updateDate();
    </script>
</body>

</html>
