@extends('frontend.layouts.layout')
@section('content')
    <div class="videoHeader port-video">
        <video autoplay loop muted>
            <source src="{{ asset('frontend/assets/images/header.mp4') }}" type="video/mp4">
        </video>
        <div class="overlay"></div>
        <div class="text">
            <h1>ポートフォリオ</h1>
            <p>成長と学びの記録、そして未来へのステップ
            </p>
        </div>
    </div>

    <nav class="breadcrumbs">
        <div class="container col-md-9">
            <ol>
                <li><a href="/">Home</a></li>
                <li>Portfolio</li>
            </ol>
        </div>
    </nav>

    <!-- Portfolio-Area-Start -->
    <section class="portfolio-area section-padding col-md-9" id="portfolio-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="filter-menu filter-portPage">
                        <li class="active" data-filter="*">All Projects</li>
                        @foreach ($portfolio_category as $category)
                            <span>|</span>
                            <li data-filter=".{{ $category->slug }}">{{ $category->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row portfolios">


                @foreach ($selectedPortfolios as $item)
                    <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item {{ $item->category->slug }}">
                        <div class="single-portfolio">
                            <figure class="portfolio-image">
                                <img src="{{ Storage::url($item->images->first()->image_path) }}" alt="">
                            </figure>
                            <div class="portfolio-content">
                                <a href="{{ route('admin.portfolio.show', [$item->id]) }}" class="icon"><i
                                        class="fas fa-plus"></i></a>
                                <h4 class="title"><a href="{{ route('admin.portfolio.show', [$item->id]) }}">
                                        {{ $item->title }}</a></h4>
                                <div class="desc">
                                    <p>{!! Str::limit(strip_tags($item->description), 100) !!}</p>
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
                            <a href="images/portfolio-1.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="portfolio-details.html">Black Golden</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
            {{-- <div class="row">
                <div class="col-sm-12 text-center">
                    <a href="#" class="load-more mouse-dir">Load More <i class="fal fa-sync"></i><span
                            class="dir-part"></span></a>
                </div>
            </div> --}}
        </div>
    </section>
    <!-- Portfolio-Area-End -->
@endsection
