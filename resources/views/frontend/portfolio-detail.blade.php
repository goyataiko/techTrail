@extends('frontend.layouts.layout')
@section('content')
    <div class="videoHeader">
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
                        <div class="pcard">
                            <div class="pcard-header">
                                <i class='fas fa-images'></i>
                                Main
                            </div>
                            <div class="pcard-body">
                                <a href="{{ 'portfolioImage\larajobportal.png' }}" data-lity >
                                    <img src="{{ asset('portfolioImage\larajobportal.png') }}" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="pcard">
                            <div class="pcard-header">
                                <i class='fas fa-images'></i>
                                Dashboard
                            </div>
                            <div class="pcard-body">
                                <img src="{{ asset('portfolioImage\larajobportal2.png') }}" data-lity>
                            </div>
                        </div>                        
                    </div>
                </div>
                {{-- 설명 --}}
                <div class="col-md-5">
                    <div class="portfolio-info">
                        <h3>
                            <span>Web Develop </span><br>
                            Project information </h3>
                        <ul>
                            {{-- <li><strong>タイトル</strong>: ジョブポータル</li> --}}
                            {{-- <li><strong>カテゴリー</strong>: Web Develop</li> --}}
                            <li><strong>使用ツール</strong>: html, css, js, php, laravel, photoshop, figma</li>
                            <li><strong>制作内容</strong>: ディレクション, ワイヤーフレーム作成, ヒアリング取材, 原稿作成サポート, オリジナルデザイン, HTML5/CSS5コーディング,
                                レスポンシブコーディング</li>
                            <li><strong>Project URL</strong>: <a href="#" class="btn">site link</a>
                                <a href="#" class="btn">plan data</a>
                            </li>
                            {{-- <li><strong>Project URL</strong>: <a href="#">www.example.com</a></li> --}}
                        </ul>
                    </div>
                    <div class="portfolio-description">
                        <h2>キャリアの扉を開く求人ポータル</h2>
                        <p>
                            LaraJobPortalは、求職者と採用者をつなげる革新的なウェブプラットフォームです。求職者は理想の職を見つけ、採用者は優れた人材を探すためのツールとして、LaraJobPortalを活用できます。ユーザーフレンドリーなデザインと高度な機能を備えたLaraJobPortalは、あなたのキャリアの扉を開くお手伝いをします。
                        </p>
                    </div>
                </div>
            </div>



        </div>

        </div>
    </section>
    <!-- Portfolio-Area-End -->
@endsection
