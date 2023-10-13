<!-- About-Area-Start -->

<section class="about-area section-padding-top col-md-8">
    <div class="container">
        <div class="row d-flex">
            <div class="col-lg-6">
                <figure class="about-image" id="imageContainer">
                    <img id="mouseImg1" src="{{ secure_asset('frontend/assets/images/1.jpg') }}">
                    <img id="mouseImg2" src="{{ secure_asset('frontend/assets/images/2.jpg') }}" style="display: none;">
                </figure>
            </div>
            <div class="col-lg-6">
                <div class="about-text">
                    <h3 class="title wow fadeInUp" data-wow-delay="0.3s">The Developer.</h3>
                    <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                        <p>Laravelフレームワークを軸に、デザイン、フロントエンド、バックエンドのスキルを幅広く身につけたエンジニアです。フリーランスデザイナーとして培ったUI設計力とプロジェクトマネジメント力、プログラマーとして培ったフロントエンド開発スキル、ウクライナでの英語圏開発経験を活かし、短期間でLaravelを習得しました。
                            これらの経験とスキルを活かして、幅広いプロジェクトに柔軟に対応し、チームの一員として貢献します。</p>

                    </div>
                    <a href="{{secure_asset('frontend\assets\rirekisho_20231009.pdf')}}" class="button-primary-trans mouse-dir wow fadeInUp" data-wow-delay="0.5s" target="_blank">
                        <span class="icon"><i class="fal fa-download"></i></span>
                        <span class="text">Resume</span>
                        <span class="dir-part"></span>
                    </a>
                    <a href="{{secure_asset('frontend\assets\engineer-skill-sheet_20231009.pdf')}}" class="button-primary-trans mouse-dir wow fadeInUp ms-2" data-wow-delay="0.5s" target="_blank">
                        <span class="icon"><i class="fal fa-download"></i></span>
                        <span class="text">Career</span>
                        <span class="dir-part"></span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- About-Area-End -->

@push('scripts')
    <script>
        $(document).ready(function() {
            $("#imageContainer").on("mouseenter", function() {
                $("#mouseImg1").hide();
                $("#mouseImg2").show();
            });

            $("#imageContainer").on("mouseleave", function() {
                $("#mouseImg2").hide();
                $("#mouseImg1").show();
            });
        });
    </script>
@endpush
