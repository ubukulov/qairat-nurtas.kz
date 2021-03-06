<!doctype html>
<html lang="ru">
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
            new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
            j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
            'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-WT24XRW');</script>
    <!-- End Google Tag Manager -->

    <!-- Required meta tags -->
    <link rel="icon" href="{{url('favicon.ico')}}" type="image/x-icon" />
    <link rel="shortcut icon" href="{{url('favicon.ico')}}" type="image/x-icon" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    {!! SEO::generate() !!}

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/media.css') }}">
    <link rel="stylesheet" href="{{ asset('css/play.css') }}">

    <!-- Include Style Sheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('css/app.css') }}"/>

    <!-- Include Amplitude JS -->
    <script src="https://cdn.jsdelivr.net/npm/amplitudejs@5.0.2/dist/amplitude.js"></script>
</head>
<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-WT24XRW" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<div id="wrap">
    {{--<div id="top-adv">
        <img src="{{ asset('img/adv1000x80.jpg') }}" alt="">
    </div>--}}
    <div id="header">
        @include('pattern.header')
    </div>

    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="content">
                        @yield('content')
                    </div>
                </div>

                {{--<div class="col-md-3">--}}
                    {{--<div class="right_content">
                        <div class="news_last">
                            <div class="news_last_title">Последние новости</div>
                            <div class="news_last_content">
                                <ul>
                                    <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
                                    <li><a href="#">Lorem ipsum dolor sit amet.</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>--}}

                    {{--<div class="right_adv_block">
                        <div class="r_adv_block">
                            <img src="{{ asset('img/adv200x500.jpg') }}" alt="">
                        </div>
                    </div>--}}
                {{--</div>--}}
            </div>
        </div>
    </div>

    <div id="footer">
        @include('pattern.footer')
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
<script src="{{ asset('js/app.js') }}"></script>
<script src="{{ asset('js/functions.js') }}"></script>
</body>
</html>
