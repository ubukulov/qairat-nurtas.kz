@extends('layouts.app')
@section('content')
    {!! Breadcrumbs::render('post.show', $post) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="post_content">
                <div class="post_title">
                    @if($agent->isMobile())
                        <h4>{{ $post->title }}</h4>
                    @else
                        <h1>{{ $post->title }}</h1>
                    @endif
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
<style>
    #content {
        background: #fff;
    }
</style>
