<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Hello, world!</title>
</head>
<body>
<div id="wrap">
    <div id="header">
        @include('pattern.header')
    </div>

    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="content">
                        @yield('content')
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="right_content">
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
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="footer">
        @include('pattern.footer')
    </div>
</div>

<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>