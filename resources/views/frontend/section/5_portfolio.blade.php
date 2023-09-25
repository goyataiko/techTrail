<!-- Portfolio-Area-Start -->

<section class="portfolio-area section-padding-top col-md-8" id="portfolio-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    <h3 class="title">Recent Portfolios</h3>
                    <div class="desc">
                        <p>デジタルのクリエイティビティの舞台。ウェブデザイン、ブランドデザイン、Web開発の世界をご覧ください。
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <ul class="filter-menu">
                    <li class="active" data-filter="*">All Projects</li>
                    {{-- <li data-filter=".branding">Branding Design</li> --}}
                    @foreach ($portfolio_category as $category)
                        <li data-filter=".{{ $category->slug }}">{{ $category->name }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="portfolio-wrapper">
            <div class="row portfolios">

                @foreach ($selectedPortfolios as $ta)
                    <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item {{ $ta->category->slug }}">
                        <div class="single-portfolio">
                            <figure class="portfolio-image">
                                <img src="{{ Storage::url($ta->images->first()->image_path) }}" alt="">
                            </figure>
                            <div class="portfolio-content">
                                <h4 class="title"><a
                                        href="{{ route('portfolio.detail', [$ta->id]) }}">{{ $ta->title }}</a></h4>
                                <div class="desc"><a href="{{ route('portfolio.detail', [$ta->id]) }}">
                                        <p>{!! Str::limit(strip_tags($ta->description), 50) !!}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach

                {{-- <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item branding">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset('frontend/assets/images/portfolio-1.jpg') }}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="/portfolio-detail" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="/portfolio-detail">Black Golden</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
        <div class="row">
            <div class="col-sm-12 text-center mt-4">
                <a href="{{ route('portfolio') }}" class="load-more mouse-dir">View More <i
                        class="fal fa-sync"></i><span class="dir-part"></span></a>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio-Area-End -->
