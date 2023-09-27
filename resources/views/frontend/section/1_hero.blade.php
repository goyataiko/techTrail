<!-- Hero-Area-Start -->

<header class="header-area parallax-bg" id="home-page">
    <img class="headerImage" src="{{ asset($hero->image) }}" alt="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="header-text">
                    <h3 class="typer-title wow fadeInUp" data-wow-delay="0.2s">typer-title</h3>
                    <h1 class="title wow fadeInUp" data-wow-delay="0.3s">開発者の<span>{!! $hero->title !!}</span></h1>
                    <div class="desc wow fadeInUp" data-wow-delay="0.4s">
                        <p>{{ $hero->sub_title }}</p>
                    </div>

                    @if ($hero->btn_text)
                        <a href="{{ $hero->btn_url }}" class="button-dark mouse-dir wow fadeInUp"
                            data-wow-delay="0.5s">{{ $hero->btn_text }}
                            <i class='ms-1 fas fa-angle-right'></i>
                            <span class="dir-part"></span></a>
                    @endif
                </div>
            </div>
        </div>
    </div>
</header>

@push('scripts')
    <script>
        $(document).ready(function() {
            @php
                $titles = [];
                foreach ($typerTitles as $typeTitle) {
                    $titles[] = $typeTitle->title;
                }
                $titles = json_encode($titles);
                
            @endphp
            $('.header-area .typer-title').typer({!! $titles !!});

        });
    </script>
@endpush
<!-- Hero-Area-End -->
