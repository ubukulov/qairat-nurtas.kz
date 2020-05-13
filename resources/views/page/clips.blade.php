@extends('layouts.app')
@section('content')
    {!! Breadcrumbs::render('page.show', null, 'Клипы') !!}
    <div class="page_content">
        <div class="page_title">
            <h1>Клипы</h1>
        </div>

        <div class="page_desc">
            <div class="row">
                @foreach($clips as $clip)
                    <div class="col-md-4">
                        <div class="clip_content">
                            <div class="clip_im">
                                <a href="{{ $clip->url() }}">
                                    <img src="{{ $clip->getImageThumbs() }}" alt="{{ $clip->title }}">
                                </a>
                            </div>
                            <div class="clip_title">
                                <a href="{{ $clip->url() }}">
                                    {{ $clip->title }}
                                </a>
                            </div>
                        </div>
                    </div>
                @endforeach
                {{ $clips->links() }}
            </div>
        </div>
    </div>
@stop
<style>
    #content {
        background: #fff;
    }
</style>
