@extends('frontend.layouts.layout')
@section('content')
    <div class="imageHeader">
        <img class="scaleImage" src="{{ asset('frontend/assets/images/header.jpg') }}" alt="header">
        <div class="overlay"></div>
        <div class="text">
            <h1>ブログ</h1>
            <p>デジタルの世界での成長と洞察。<br>キャリア、ブランディング、テクノロジーに関する視点を提供します。
            </p>
        </div>
    </div>


    <nav class="breadcrumbs">
        <div class="container col-md-9">
            <ol>
                <li><a href="/">Home</a></li>
                <li>Blog</li>
            </ol>
        </div>
    </nav>

    <!-- Blog-Area-Start -->
    <section class="portfolio-area section-padding col-md-9" id="portfolio-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <ul class="filter-menu filter-portPage">
                        <li class="{{ $category_id == 0 ? 'active' : '' }}" data-filter="*">All Projects</li>
                        @foreach ($category as $ca)
                            <span>|</span>
                            <li class="{{ $category_id == $ca->id ? 'active' : '' }}" data-filter=".{{ $ca->slug }}">
                                {{ $ca->name }}</li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- portfolios, filter-item으로 js와 연결되어있음. --}}
            <div class="row portfolios">
                @foreach ($table as $ta)
                    <!-- single-post-Start -->
                    <div data-wow-delay="0.3s" class="col-xl-4 col-md-6 filter-item {{ $ta->category->slug }}">
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
                    <!-- single-post-End -->
                @endforeach
            </div>
            <div class="row">
                <div class="paginate d-flex justify-content-center">
                    {{ $table->links() }}
                </div>
            </div>
        </div>
    </section>
    <!-- Blog-Area-End -->
@endsection
