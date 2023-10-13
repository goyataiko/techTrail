<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Dashboard</title>
    <link rel="shortcut icon" type="image/ico" href="{{ secure_asset('frontend/assets/images/favicon-alt.png') }}" />

    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css"
        integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->
    {{-- https://datatables.net/manual/installation --}}
    <link rel="stylesheet" href="{{ secure_asset('plugins/datatables/datatables.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.css">

    {{-- <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.20/dist/summernote-bs5.min.css" rel="stylesheet"> --}}
    {{-- <link rel="stylesheet" href="{{ secure_asset('assets/css/plugins/summernote-bs5.min.css') }}"> --}}
    <link rel="stylesheet" href="{{ secure_asset('plugins/selectric.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('plugins/bootstrap-timepicker/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('plugins/daterangepicker/daterangepicker.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('plugins/select2.min.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ secure_asset('assets/css/style.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('assets/css/components.css') }}">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
</head>

<body>
    <div id="app">
        <div class="main-wrapper">
            @include('admin.layouts.sidebar')

            <!-- Main Content -->
            <div class="main-content">
                @yield('content')
            </div>

            <footer class="main-footer">
                <div class="footer-left">
                    Copyright &copy; 2023 <div class="bullet"></div> Design By <a href="#">Takano Taiko</a>
                </div>
                <div class="footer-right">
                    2.3.0
                </div>
            </footer>
        </div>
    </div>

    <!-- General JS Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.0/dist/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.nicescroll/3.7.6/jquery.nicescroll.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.24.0/moment.min.js"></script>
    <script src="{{ secure_asset('assets/js/stisla.js') }}"></script>

    <!-- JS Libraies -->
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-lite.min.js"></script>

    <script src="{{ secure_asset('plugins/jquery.selectric.min.js') }}"></script>
    <script src="{{ secure_asset('plugins/jquery.uploadPreview.min.js') }}"></script>
    <script src="{{ secure_asset('plugins/bootstrap-tagsinput/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ secure_asset('plugins/bootstrap-timepicker/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ secure_asset('plugins/daterangepicker/daterangepicker.js') }}"></script>
    <script src="{{ secure_asset('plugins/select2.full.min.js') }}"></script>

    <!-- Datatables JS File -->
    <script src="{{ secure_asset('plugins/datatables/datatables.js') }}"></script>

    <!-- Template JS File -->
    <script src="{{ secure_asset('assets/js/scripts.js') }}"></script>
    <script src="{{ secure_asset('assets/js/custom.js') }}"></script>

    <!-- Page Specific JS File -->
    <script src="{{ secure_asset('assets/js/page/features-post-create.js') }}"></script>
    <!-- Page Specific JS File -->
    <script src="{{ secure_asset('assets/js/page/forms-advanced-forms.js') }}"></script>


    <!-- Show Dynamic Validation Error -->
    <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
    <script>
        @if (!empty($errors->all()))
            @foreach ($errors->all() as $error)
                toastr.error("{{ $error }}")
            @endforeach
        @endif

        $(document).ready(function() {
            $("#datepicker").datepicker();
        });

        $(document).ready(function() {
            $('#myDataTable').DataTable();
        });
    </script>


    <script>
        // console.log("working!!");
        $(document).ready(function() {
            $('.summernote').summernote({
                height: 300,
                dialogsInBody: true,

                callbacks: {
                    onImageUpload: (files) => {
                        /* ローカルファイルを選んだあと呼ばれるのでサーバーへアップする */
                        insertImageFile(files[0]);
                    },
                },
            });
        })

        function insertImageFile(file) {
            let formData = new FormData();
            formData.append('file', file);

            fetch('/insert-image-file', {
                    method: 'POST',
                    body: formData
                })
                .then((response) => {
                    if (response.ok) {
                        return response.json();
                    }
                }).then((response) => {
                    // サーバ側で応答に画像のurlを付与する
                    let imgNode = document.createElement('img');
                    imgNode.src = response.url;
                    $('.summernote').summernote('insertNode', imgNode);
                });
        }
    </script>

</body>

</html>
