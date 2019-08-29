@extends('layouts.app')
@section('content')
    {!! Breadcrumbs::render('homepage') !!}
    <div class="row">
        <div class="col-md-12">
            <div class="news_q">
                <div class="row">
                    <div class="col-md-5">
                        <div class="news_im">
                            <a href="{{ route('post.show', ['alias' => 'test']) }}">
                                <img src="{{ asset('img/no_photo.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="news_item">
                            <div class="news_title">
                                <a href="{{ route('post.show', ['alias' => 'test']) }}">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur illum officiis quo sapiente, totam.</a>
                            </div>
                            <div class="news_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ducimus fugit molestiae molestias quasi rem repellendus repudiandae soluta? Adipisci amet debitis ea, minus neque nisi reprehenderit? Asperiores dolores earum expedita fugiat itaque iure maxime mollitia vel. Asperiores inventore iure vel?</p>
                            </div>
                            <div class="news_inform">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <i class="far fa-clock"></i>&nbsp;28.08.2019
                                    </div>
                                    <div class="col-sm-3">
                                        <i class="far fa-eye"></i>&nbsp;5780
                                    </div>
                                    <div class="col-sm-3">
                                        <i class="far fa-comment"></i>&nbsp; 26
                                    </div>
                                    <div class="col-sm-3">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="news_q">
                <div class="row">
                    <div class="col-md-5">
                        <div class="news_im">
                            <a href="{{ route('post.show', ['alias' => 'test']) }}">
                                <img src="{{ asset('img/no_photo.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="news_item">
                            <div class="news_title">
                                <a href="{{ route('post.show', ['alias' => 'test']) }}">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur illum officiis quo sapiente, totam.</a>
                            </div>
                            <div class="news_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ducimus fugit molestiae molestias quasi rem repellendus repudiandae soluta? Adipisci amet debitis ea, minus neque nisi reprehenderit? Asperiores dolores earum expedita fugiat itaque iure maxime mollitia vel. Asperiores inventore iure vel?</p>
                            </div>
                            <div class="news_inform">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <i class="far fa-clock"></i>&nbsp;28.08.2019
                                    </div>
                                    <div class="col-sm-3">
                                        <i class="far fa-eye"></i>&nbsp;5780
                                    </div>
                                    <div class="col-sm-3">
                                        <i class="far fa-comment"></i>&nbsp; 26
                                    </div>
                                    <div class="col-sm-3">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="news_q">
                <div class="row">
                    <div class="col-md-5">
                        <div class="news_im">
                            <a href="{{ route('post.show', ['alias' => 'test']) }}">
                                <img src="{{ asset('img/no_photo.jpg') }}" alt="">
                            </a>
                        </div>
                    </div>

                    <div class="col-md-7">
                        <div class="news_item">
                            <div class="news_title">
                                <a href="{{ route('post.show', ['alias' => 'test']) }}">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid consequatur illum officiis quo sapiente, totam.</a>
                            </div>
                            <div class="news_desc">
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Distinctio ducimus fugit molestiae molestias quasi rem repellendus repudiandae soluta? Adipisci amet debitis ea, minus neque nisi reprehenderit? Asperiores dolores earum expedita fugiat itaque iure maxime mollitia vel. Asperiores inventore iure vel?</p>
                            </div>
                            <div class="news_inform">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <i class="far fa-clock"></i>&nbsp;28.08.2019
                                    </div>
                                    <div class="col-sm-3">
                                        <i class="far fa-eye"></i>&nbsp;5780
                                    </div>
                                    <div class="col-sm-3">
                                        <i class="far fa-comment"></i>&nbsp; 26
                                    </div>
                                    <div class="col-sm-3">

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop