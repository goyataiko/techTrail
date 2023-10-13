@extends('frontend.layouts.layout')
@section('content')
    <div class="videoHeader port-video">
        <video autoplay loop muted>
            <source src="{{ secure_asset('frontend/assets/images/header.mp4') }}" type="video/mp4">
        </video>
        <div class="overlay"></div>
        <div class="text">
            <h1>ポートフォリオ</h1>
            <p>成長と学びの記録、そして未来への歩みについて</p>
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
                        @foreach ($category as $ca)
                            <span>|</span>
                            <li data-filter=".{{ $ca->slug }}">{{ $ca->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- portfolios, filter-item으로 js와 연결되어있음. --}}
            <div class="row portfolios">
                @foreach ($selectedPortfolios as $ta)
                    <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item {{ $ta->category->slug }}">
                        <div class="single-portfolio">
                            <figure class="portfolio-image">
                                <img src="{{ Storage::url($ta->images->first()->image_path) }}" alt="">
                            </figure>
                            <div class="portfolio-content">
                                <a href="{{ route('portfolio.detail', [$ta->id]) }}" class="icon"><i
                                        class="fas fa-plus"></i></a>
                                <h4 class="title"><a href="{{ route('portfolio.detail', [$ta->id]) }}">
                                        {{ $ta->title }}</a></h4>
                                <div class="desc"><a href="{{ route('portfolio.detail', [$ta->id]) }}">
                                        <p>{!! Str::limit(strip_tags($ta->description), 60) !!}</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
    <!-- Portfolio-Area-End -->
@endsection
