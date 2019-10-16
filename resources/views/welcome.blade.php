@extends('layouts.app')
@section('content')
    {!! Breadcrumbs::render('homepage') !!}
    <div class="row">
        <div class="col-md-12">
            @foreach($posts as $post)
            <div class="news_q">
                <div class="row">
                    <div class="col-md-4">
                        <div class="news_im">
                            <a href="{{ route('post.show', ['alias' => $post->alias, 'id' => $post->id]) }}">
                                <img class="news_img" src="{{ $post->getImageThumbs() }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-8">
                        <div class="news_item">
                            <div class="news_title">
                                <a href="{{ route('post.show', ['alias' => $post->alias, 'id' => $post->id]) }}">{{ $post->title }}</a>
                            </div>
                            <div class="news_desc">
                                <p>{!! $post->description !!}</p>
                            </div>
                            <div class="read_more">
                                <a href="{{ route('post.show', ['alias' => $post->alias, 'id' => $post->id]) }}">Подробнее</a>
                            </div>
                            <div class="news_inform">
                                <div class="news_date">
                                    <i class="far fa-clock"></i>&nbsp;{{ date("d.m.Y", strtotime($post->created_at)) }}
                                </div>

                                <div class="views_count">
                                    <i class="far fa-eye"></i>&nbsp;{{ $post->views }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
@stop