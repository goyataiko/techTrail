<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tech Trail | Takano's Portfolio & Blog</title>
    <link rel="shortcut icon" type="image/ico" href="{{ secure_asset('frontend/assets/images/favicon.png') }}" />
    <link rel="stylesheet" href="{{ secure_asset('frontend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('frontend/assets/css/normalize.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('frontend/assets/css/style-plugin-collection.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('frontend/assets/css/theme.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('frontend/assets/css/responsive.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">

</head>

<body>
    <div class="preloader">
        <img src="{{ secure_asset('frontend/assets/images/preloader.gif') }}" alt="">
    </div>

    @include('frontend.layouts.navbar')

    <!-- Main-Start -->
    <div data-bs-spy="scroll" data-bs-target="#main_menu_area" data-bs-root-margin="0px 0px -40%"
        data-bs-smooth-scroll="true" class="main_wrapper scrollspy-example bg-body-tertiary" tabindex="0">

        @yield('content')

        @include('frontend.layouts.footer')
    </div>
    <!-- Main-End -->

    <script src="{{ secure_asset('frontend/assets/js/vendor/jquery-min.js') }}"></script>
    <script src="{{ secure_asset('frontend/assets/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ secure_asset('frontend/assets/js/contact-form.js') }}"></script>
    <script src="{{ secure_asset('frontend/assets/js/jquery-plugin-collection.js') }}"></script>
    <script src="{{ secure_asset('frontend/assets/js/vendor/modernizr.js') }}"></script>
    <script src="{{ secure_asset('frontend/assets/js/main.js') }}"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

    <script>
        $(window).on('scroll', function() {
            if ($(window).scrollTop()) {
                $('.main_menu').addClass('menu_fix');
                $('.main_menu').each(function(index, element) {
                    const img = $(element).find("img");
                    img.attr("src", "{{ secure_asset('frontend/assets/images/logo-x.png') }}");
                });
            } else {
                $('.main_menu').removeClass('menu_fix');
                $('.main_menu').each(function(index, element) {
                    const img = $(element).find("img");
                    img.attr("src", "{{ secure_asset('frontend/assets/images/logo-x-w.png') }}");
                });
            }
        });
    </script>

    <script>
        const scaleImage = document.querySelector('.scaleImage');
        let scaleValue = 1.0;
        // console.log(scaleValue);
        window.addEventListener('scroll', function() {
            //현 스크롤 위치
            const scrollTop = window.scrollY || document.documentElement.scrollTop;
            scaleValue = 1 + scrollTop * 0.001;

            scaleImage.style.transform = `scale(${scaleValue})`;
        });



        const headerImage = document.querySelector('.headerImage');
        let scrollValue = 0;
        window.addEventListener('scroll', function() {
            //현 스크롤 위치
            const scrollTop = window.scrollY || document.documentElement.scrollTop;
            scrollValue = scrollTop * 0.3;

            headerImage.style.transform = `translateY(${scrollValue}px)`;
        });



        @if (!empty($errors->all()))
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif
    </script>

    @stack('scripts')
</body>

</html>
