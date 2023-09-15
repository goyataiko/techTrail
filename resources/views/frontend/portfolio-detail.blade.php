@extends('frontend.layouts.layout')
@section('content')
    <div class="videoHeader">
        <video autoplay loop muted>
            <source src="{{ asset('frontend/assets/images/working.mp4') }}" type="video/mp4">
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
    <section class="portfolio-details">
        <div class="container">

            <div class="row justify-content-center">
                {{-- 이미지 --}}
                <div class="col-md-5">
                    <div class="portfolio-slider">
                        <img src="{{ asset('portfolioImage\larajobportal.png') }}" alt="">
                        <img src="{{ asset('portfolioImage\larajobportal2.png') }}" alt="">
                    </div>
                </div>
                {{-- 설명 --}}
                <div class="col-md-5">
                    <div class="portfolio-info">
                        <h3>Project information</h3>
                        <ul>
                            <li><strong>タイトル</strong>: ジョブポータル</li>
                            <li><strong>カテゴリー</strong>: Web Develop</li>
                            <li><strong>使用ツール</strong>: html, css, js, php, laravel, photoshop, figma</li>
                            <li><strong>制作内容</strong>: ディレクション, ワイヤーフレーム作成, ヒアリング取材, 原稿作成サポート, オリジナルデザイン, HTML5/CSS5コーディング, レスポンシブコーディング</li>
                            <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li>
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>This is an example of portfolio detail</h2>
                        <p>
                            Autem ipsum nam porro corporis rerum. Quis eos dolorem eos itaque inventore commodi labore quia
                            quia. Exercitationem repudiandae officiis neque suscipit non officia eaque itaque enim.
                            Voluptatem
                            officia accusantium nesciunt est omnis tempora consectetur dignissimos. Sequi nulla at esse enim
                            cum
                            deserunt eius.
                        </p>
                    </div>
                </div>
            </div>



        </div>

        </div>
    </section>
    <!-- Portfolio-Area-End -->
@endsection
