@extends('layouts.app')
@section('content')
    {!! Breadcrumbs::render('post.show', $page) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="page_content">
                <div class="page_title">
                    @if($agent->isMobile())
                    <h2>{!! $page->title !!}</h2>
                    @else
                    <h1>{!! $page->title !!}</h1>
                    @endif
                </div>

                <div class="page_desc">
                    {!! $page->full_description !!}
                </div>
            </div>
        </div>
    </div>
@stop