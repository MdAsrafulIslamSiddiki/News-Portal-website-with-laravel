<div class="col-md-4">
    <div class="sidebar">
        <div class="sidebar-widget">
            <h2><i class="fas fa-align-justify"></i>Category</h2>
            <div class="category">
                <ul class="fa-ul">
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'National') }}">National</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'International') }}">International</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Politics') }}">Politics</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Economy') }}">Economics</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Sports') }}">Sports</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Health') }}">Health</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Education') }}">Education</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Science_&_Technology') }}">Science & Technology</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Entertainment') }}">Entertainment</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Environment') }}">Environment</a></li>
                    <li><span class="fa-li"><i class="far fa-arrow-alt-circle-right"></i></span><a href="{{ route('category.news', 'Agriculture') }}">Agriculture</a></li>
                </ul>
            </div>
        </div>

        <div class="sidebar-widget">
            <h2><i class="fas fa-align-justify"></i>Tags</h2>
            <div class="tags">
                <a href="{{ route('category.news', 'National') }}" class="">National</a>
                <a href="{{ route('category.news', 'International') }}" class="">International</a>
                <a href="{{ route('category.news', 'Politics') }}" class="">Politics</a>
                <a href="{{ route('category.news', 'Economy') }}" class="">Economics</a>
                <a href="{{ route('category.news', 'Sports') }}" class="">Sports</a>
                <a href="{{ route('category.news', 'Health') }}" class="">Health</a>
                <a href="{{ route('category.news', 'Education') }}" class="">Education</a>
                <a href="{{ route('category.news', 'Science_&_Technology') }}" class="">Science & Technology</a>
                <a href="{{ route('category.news', 'Entertainment') }}" class="">Entertainment</a>
                <a href="{{ route('category.news', 'Environment') }}" class="">Environment</a>
                <a href="{{ route('category.news', 'Agriculture') }}" class="">Agriculture</a>
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