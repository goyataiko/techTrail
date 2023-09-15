@extends('frontend.layouts.layout')
@section('content')
    {{-- <header class="site-header">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-sm-7">
                    <h2 class="title">Portfolio</h2>
                </div>
            </div>
        </div>
    </header> --}}

 
    <div class="videoHeader">
        <video autoplay loop muted>
            <source src="{{asset('frontend/assets/images/working.mp4')}}" type="video/mp4">
        </video>
        <div class="overlay"></div>
        <div class="text">
            <h1>Portfolio</h1>
            <p>成長と学びの記録、そして未来へのステップ
            </p>
        </div>
    </div>

    <!-- Portfolio-Area-Start -->
    <section class="portfolio-area section-padding col-md-9" id="portfolio-page">
        <div class="container">
            <div class="row">
                <div class="col-sm-12">                    
                    <ul class="filter-menu">                        
                        <li class="active" data-filter="*">All Projects</li>
                        <li data-filter=".branding">Branding Design</li>
                        <li data-filter=".interface">User Interface</li>
                        <li data-filter=".experience">User Experience</li>
                        <li data-filter=".development">Web Development</li>                    
                    </ul>
                </div>
            </div>
            <div class="row portfolios">
                <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item branding">
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
                </div>
                <div data-wow-delay="0.4s" class="col-md-6 col-lg-4 filter-item interface">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset('frontend/assets/images/portfolio-2.jpg') }}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="images/portfolio-2.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="portfolio-details.html">Fitzgerald Stanton</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.5s" class="col-md-6 col-lg-4 filter-item branding">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset('frontend/assets/images/portfolio-3.jpg') }}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="images/portfolio-3.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="portfolio-details.html">Ines Campbell</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item interface experience">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset('frontend/assets/images/portfolio-4.jpg') }}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="images/portfolio-4.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="portfolio-details.html">Wendi Michael</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.4s" class="col-md-6 col-lg-4 filter-item branding development experience">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset('frontend/assets/images/portfolio-5.jpg') }}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="images/portfolio-5.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="portfolio-details.html">Guerrero Woodard</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.5s" class="col-md-6 col-lg-4 filter-item interface">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset('frontend/assets/images/portfolio-6.jpg') }}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="images/portfolio-6.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="portfolio-details.html">Prince Phelps</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item development">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset('frontend/assets/images/portfolio-7.jpg') }}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="images/portfolio-7.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="portfolio-details.html">Gayle Gaines</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.4s" class="col-md-6 col-lg-4 filter-item experience">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset('frontend/assets/images/portfolio-8.jpg') }}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="images/portfolio-8.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="portfolio-details.html">Janice Wilder</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div data-wow-delay="0.5s" class="col-md-6 col-lg-4 filter-item development">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset('frontend/assets/images/portfolio-9.jpg') }}" alt="">
                        </figure>
                        <div class="portfolio-content">
                            <a href="images/portfolio-9.jpg" data-lity class="icon"><i class="fas fa-plus"></i></a>
                            <h4 class="title"><a href="portfolio-details.html">Branding Design</a></h4>
                            <div class="desc">
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                            </div>
                        </div>
                    </div>
                </div>
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
