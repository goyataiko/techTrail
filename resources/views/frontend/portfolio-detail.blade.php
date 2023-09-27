@extends('frontend.layouts.layout')
@section('content')
    <div class="videoHeader">
        <video autoplay loop muted>
            <source src="{{ asset('frontend/assets/images/header.mp4') }}" type="video/mp4">
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
                <li><a href="/portfolio">Portfolio</a></li>
                <li>Portfolio Detail</li>
            </ol>
        </div>
    </nav>


    <!-- Portfolio-Area-Start -->
    <section class="portfolio-details">
        <div class="container">

            <div class="row justify-content-center">
                {{-- 이미지 --}}
                <div class="col-md-5">
                    <div class="portfolio-slider">
                        @foreach ($table->images as $image)
                            <div class="pcard">
                                <div class="pcard-header">
                                    <i class='fas fa-images'></i>
                                    {{ $image->name }}
                                </div>
                                <div class="pcard-body">
                                    <a href="{{ Storage::url($image->image_path) }}" data-lity>
                                        <img src="{{ Storage::url($image->image_path) }}" alt="">
                                    </a>
                                </div>
                            </div>
                        @endforeach

                        {{-- <div class="pcard">
                            <div class="pcard-header">
                                <i class='fas fa-images'></i>
                                Dashboard
                            </div>
                            <div class="pcard-body">
                                <img src="{{ asset('portfolio_image\larajobportal2.png') }}" data-lity>
                            </div>
                        </div> --}}
                    </div>
                </div>
                {{-- 설명 --}}
                <div class="col-md-5">
                    <div class="portfolio-info">
                        <h3>
                            {{ $table->category->name }}<br>
                            Project information
                        </h3>
                        <ul>
                            <li><strong>使用ツール</strong>: {{ $table->tool }}</li>
                            <li><strong>制作内容</strong>: {{ $table->work_detail }}</li>
                            @if (!empty($table->site_link))
                                <li><strong>Project URL</strong>:
                                    <a href="{{ $table->site_link }}" class="btn">site link</a>
                                    @if (!empty($table->plan_link))
                                        <a href="{{ $table->plan_link }}" class="btn">plan data</a>
                                    @endif
                                </li>
                            @endif
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>{{ $table->title }}</h2>
                        <p>
                            {!! $table->description !!}
                        </p>
                    </div>
                </div>
            </div>



        </div>

        </div>
    </section>
    <!-- Portfolio-Area-End -->
@endsection
