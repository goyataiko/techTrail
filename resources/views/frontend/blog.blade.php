@extends('frontend.layouts.layout')
@section('content')

<div class="videoHeader blog-video">
    <video autoplay loop muted>
        <source src="{{ asset('frontend/assets/images/header3.mp4') }}" type="video/mp4">
    </video>
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

<!-- Portfolio-Area-Start -->
<section class="blog-area section-padding">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-md-6">
                <div class="single-blog">
                    <figure class="blog-image">
                        <img src="images/blog-1.jpg" alt="">
                    </figure>
                    <div class="blog-content">
                        <h3 class="title"><a href="blog-details.html">Great things never come from.</a></h3>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                consequuntur provident iusto cumque . </p>
                        </div>
                        <a href="#" class="button-primary-trans mouse-dir">Read More <span class="dir-part"></span> <i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single-blog">
                    <figure class="blog-image">
                        <img src="images/blog-2.jpg" alt="">
                    </figure>
                    <div class="blog-content">
                        <h3 class="title"><a href="blog-details.html">Don’t stop when you’re tired. Stop
                                when.</a></h3>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                consequuntur provident iusto cumque . </p>
                        </div>
                        <a href="#" class="button-primary-trans mouse-dir">Read More <span class="dir-part"></span>
                            <i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single-blog">
                    <figure class="blog-image">
                        <img src="images/blog-3.jpg" alt="">
                    </figure>
                    <div class="blog-content">
                        <h3 class="title"><a href="blog-details.html">Success doesn’t just find you.</a></h3>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                consequuntur provident iusto cumque . </p>
                        </div>
                        <a href="#" class="button-primary-trans mouse-dir">Read More <span class="dir-part"></span>
                            <i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single-blog">
                    <figure class="blog-image">
                        <img src="images/blog-4.jpg" alt="">
                    </figure>
                    <div class="blog-content">
                        <h3 class="title"><a href="blog-details.html">Sometimes later becomes never.</a></h3>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                consequuntur provident iusto cumque . </p>
                        </div>
                        <a href="#" class="button-primary-trans mouse-dir">Read More <span class="dir-part"></span>
                            <i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single-blog">
                    <figure class="blog-image">
                        <img src="images/blog-5.jpg" alt="">
                    </figure>
                    <div class="blog-content">
                        <h3 class="title"><a href="blog-details.html">Don’t wait for opportunity. Create it.</a>
                        </h3>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                consequuntur provident iusto cumque . </p>
                        </div>
                        <a href="#" class="button-primary-trans mouse-dir">Read More <span class="dir-part"></span>
                            <i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-xl-4 col-md-6">
                <div class="single-blog">
                    <figure class="blog-image">
                        <img src="images/blog-6.jpg" alt="">
                    </figure>
                    <div class="blog-content">
                        <h3 class="title"><a href="blog-details.html">Your limitation-it’s only your
                                imagination.</a></h3>
                        <div class="desc">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus
                                consequuntur provident iusto cumque . </p>
                        </div>
                        <a href="#" class="button-primary-trans mouse-dir">Read More <span class="dir-part"></span>
                            <i class="fal fa-arrow-right"></i></a>
                    </div>
                </div>
            </div>
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
<!-- Portfolio-Area-End -->

@endsection