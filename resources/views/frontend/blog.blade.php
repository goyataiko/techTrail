@extends('frontend.layouts.layout')
@section('content')
    <div class="imageHeader">
        <img class="scaleImage" src="{{ asset('frontend/assets/images/header.jpg') }}" alt="header">
        <div class="overlay"></div>
        <div class="text">
            <h1>ブログ</h1>
            <p>成長と学びの記録、そして未来へのステップ
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
    <section class="blog-area section-padding col-sm-10 col-lg-8 col-xl-10">
        <div class="container">
            <div class="col-sm-12">
                <ul class="filter-menu filter-portPage">
                    <li class="active" data-filter="*">All Projects</li>
                    <span>|</span>
                    <li data-filter=".branding">Branding Design</li>
                    <span>|</span>
                    <li data-filter=".interface">User Interface</li>
                    <span>|</span>
                    <li data-filter=".experience">User Experience</li>
                    <span>|</span>
                    <li data-filter=".development">Web Development</li>
                </ul>
            </div>

            <div class="row">
                <!-- Single-Blog-Contents-Start -->
                <div class="col-xl-4 col-md-6">
                    <div class="pcard">
                        <a href="/blog-detail">
                            <div class="pcard-body">
                                <div class="pcard-image">
                                    <img src="{{ asset('frontend/assets/images/blog-6.jpg') }}">
                                </div>
                                <div class="pcard-content">
                                    <div class="pcard-text">
                                        <h6>東京オリンピックが開催</h6>
                                        <div class="desc">
                                            <p>オリンピックは4年に一度開催される国際的なスポーツ大会であり、世界中から多くの選手が集まる。東京オリンピックは、コロナ禍で延期されたものの、多くの人々の熱い思いが詰まった大会となった。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Single-Blog-Contents-End -->
                <!-- Single-Blog-Contents-Start -->
                <div class="col-xl-4 col-md-6">
                    <div class="pcard">
                        <a href="#">
                            <div class="pcard-body">
                                <div class="pcard-image">
                                    <img src="{{ asset('frontend/assets/images/blog-4.jpg') }}">
                                </div>
                                <div class="pcard-content">
                                    <div class="pcard-text">
                                        <h6>東京オリンピックが開催</h6>
                                        <div class="desc">
                                            <p>オリンピックは4年に一度開催される国際的なスポーツ大会であり、世界中から多くの選手が集まる。東京オリンピックは、コロナ禍で延期されたものの、多くの人々の熱い思いが詰まった大会となった。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Single-Blog-Contents-End -->
                <!-- Single-Blog-Contents-Start -->
                <div class="col-xl-4 col-md-6">
                    <div class="pcard">
                        <a href="#">
                            <div class="pcard-body">
                                <div class="pcard-image">
                                    <img src="{{ asset('frontend/assets/images/blog-5.jpg') }}">
                                </div>
                                <div class="pcard-content">
                                    <div class="pcard-text">
                                        <h6>東京オリンピッンピクが開催オリンピックが開催</h6>
                                        <div class="desc">
                                            <p>オリンピックは4年に一度開催される国際的なスポーツ大会であり、世界中から多くの選手が集まる。東京オリンピックは、コロナ禍で延期されたものの、多くの人々の熱い思いが詰まった大会となった。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Single-Blog-Contents-End -->

                <!-- Single-Blog-Contents-Start -->
                <div class="col-xl-4 col-md-6">
                    <div class="pcard">
                        <a href="#">
                            <div class="pcard-body">
                                <div class="pcard-image">
                                    <img src="{{ asset('frontend/assets/images/blog-5.jpg') }}">
                                </div>
                                <div class="pcard-content">
                                    <div class="pcard-text">
                                        <h6>東京オリンピックが開催</h6>
                                        <div class="desc">
                                            <p>オリンピックは4年に一度開催される国際的なスポーツ大会であり、世界中から多くの選手が集まる。東京オリンピックは、コロナ禍で延期されたものの、多くの人々の熱い思いが詰まった大会となった。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Single-Blog-Contents-End -->
                <!-- Single-Blog-Contents-Start -->
                <div class="col-xl-4 col-md-6">
                    <div class="pcard">
                        <a href="#">
                            <div class="pcard-body">
                                <div class="pcard-image">
                                    <img src="{{ asset('frontend/assets/images/blog-2.jpg') }}">
                                </div>
                                <div class="pcard-content">
                                    <div class="pcard-text">
                                        <h6>東京オリンピックが開催</h6>
                                        <div class="desc">
                                            <p>オリンピックは4年に一度開催される国際的なスポーツ大会であり、世界中から多くの選手が集まる。東京オリンピックは、コロナ禍で延期されたものの、多くの人々の熱い思いが詰まった大会となった。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Single-Blog-Contents-End -->
                <!-- Single-Blog-Contents-Start -->
                <div class="col-xl-4 col-md-6">
                    <div class="pcard">
                        <a href="#">
                            <div class="pcard-body">
                                <div class="pcard-image">
                                    <img src="{{ asset('frontend/assets/images/blog-3.jpg') }}">
                                </div>
                                <div class="pcard-content">
                                    <div class="pcard-text">
                                        <h6>東京オリンピックが開催</h6>
                                        <div class="desc">
                                            <p>オリンピックは4年に一度開催される国際的なスポーツ大会であり、世界中から多くの選手が集まる。東京オリンピックは、コロナ禍で延期されたものの、多くの人々の熱い思いが詰まった大会となった。
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <!-- Single-Blog-Contents-End -->



            </div>
            <div class="row">
                <div class="col-sm-12 text-center">
                    <nav class="navigation pagination">
                        <div class="nav-links">
                            <a class="previus page-numbers" href="#">
                                <i class="fal fa-angle-left"></i>
                            </a>
                            <span class="page-numbers current">1</span>
                            <a class="page-numbers" href="#">2</a>
                            <a class="page-numbers" href="#">3</a>
                            <a class="page-numbers" href="#">4</a>
                            <a class="page-numbers" href="#">5</a>
                            <a class="next page-numbers" href="#">
                                <i class="fal fa-angle-right"></i>
                            </a>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog-Area-End -->
@endsection
