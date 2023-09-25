<!-- Blog-Area-Start -->

<section class="blog-area section-padding-top col-md-10" id="blog-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">Blog Posting</h3>
                    <div class="desc">
                        <p>デジタルの世界での成長と洞察。キャリア、ブランディング、テクノロジーに関する視点を提供します。</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <div class="blog-slider">
                    @foreach ($blogs as $ta)
                        <!-- Single-Blog-Contents-Start -->
                        <div class="col-xl-4 col-md-6">
                            <div class="pcard">
                                <a href="{{ route('blog.detail', [$ta->id]) }}">
                                    <div class="pcard-body">
                                        <div class="pcard-image">
                                            <img src="{{ Storage::url($ta->image) }}">
                                        </div>
                                        <div class="pcard-content">
                                            <div class="pcard-text">
                                                <h6>{{ $ta->title }}</h6>
                                                <div class="desc">
                                                    <p>{!! Str::limit(strip_tags($ta->description), 100) !!}
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <!-- Single-Blog-Contents-End -->
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center mt-4">
                <a href="{{ route('blog') }}" class="load-more mouse-dir">View More <i class="fal fa-sync"></i><span
                        class="dir-part"></span></a>
            </div>
        </div>
    </div>
</section>

<!-- Blog-Area-End -->
