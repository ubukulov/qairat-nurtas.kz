@extends('layouts.app')
@section('content')
    {!! Breadcrumbs::render('post.show', $post) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="post_content">
                <div class="post_title">
                    <h2>{{ $post->title }}</h2>
                </div>
                <div class="post_im">
                    <img src="{{ $post->getImage() }}" alt="">
                </div>

                <div class="post_desc">
                    {!! $post->full_description !!}
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <script type="text/javascript">(function() {
                    if (window.pluso)if (typeof window.pluso.start == "function") return;
                    if (window.ifpluso==undefined) { window.ifpluso = 1;
                        var d = document, s = d.createElement('script'), g = 'getElementsByTagName';
                        s.type = 'text/javascript'; s.charset='UTF-8'; s.async = true;
                        s.src = ('https:' == window.location.protocol ? 'https' : 'http')  + '://share.pluso.ru/pluso-like.js';
                        var h=d[g]('body')[0];
                        h.appendChild(s);
                    }})();</script>
            <div class="pluso" data-background="transparent" data-options="medium,round,line,horizontal,counter,theme=04" data-services="vkontakte,facebook,odnoklassniki,twitter,google,moimir"></div>
        </div>
    </div>
@stop