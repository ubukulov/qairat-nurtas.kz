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

        <div class="col-md-12">
            <h2 class="text-center">Популярные новости</h2>
            @foreach($post->getOthers() as $p)
            <div class="news_q">
                <div class="row">
                    <div class="col-md-4">
                        <div class="news_im">
                            <a href="{{ route('post.show', ['alias' => $post->alias, 'id' => $post->id]) }}">
                                <img class="news_img" src="{{ $p->getImageThumbs() }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="news_item">
                            <div class="news_title">
                                <a href="{{ route('post.show', ['alias' => $p->alias, 'id' => $p->id]) }}">{{ $p->title }}</a>
                            </div>
                            <div class="news_desc">
                                <p>{!! $p->description !!}</p>
                            </div>
                            <div class="read_more">
                                <a href="{{ route('post.show', ['alias' => $p->alias, 'id' => $p->id]) }}">Подробнее</a>
                            </div>
                            <div class="news_inform">
                                <div class="news_date">
                                    <i class="far fa-clock"></i>&nbsp;{{ date("d.m.Y", strtotime($p->created_at)) }}
                                </div>

                                <div class="views_count">
                                    <i class="far fa-eye"></i>&nbsp;{{ $p->views }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>

        <div class="col-md-12">
            <comment type="post" :pcp-id="{{ $post->id }}"></comment>

            <h2>Комментарии</h2>
            <div class="row">
                <div class="col-md-12">
                    @foreach ($post->comments() as $item)
                        <div class="comment mb-2">
                            <div>
                                <i class="fas fa-user-circle"></i>&nbsp; {{ $item->first_name }}
                            </div>
                            <div>
                                {{ $item->comment }}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@stop
<style>
    #content {
        background: #fff;
    }
</style>
