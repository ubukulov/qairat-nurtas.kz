@extends('layouts.app')
@section('content')
    {!! Breadcrumbs::render('post.show', $page) !!}
    <div class="row">
        <div class="col-md-12">
            <div class="page_content">
                <div class="page_title">
                    @if($agent->isMobile())
                    <h1>{!! $page->title !!}</h1>
                    @else
                    <h1>{!! $page->title !!}</h1>
                    @endif
                </div>

                <div class="page_desc">
                    {!! $page->full_description !!}
                </div>
            </div>
        </div>

        <div class="col-md-12">
            <comment type="page" :pcp-id="{{ $page->id }}"></comment>

            @if(count($comments) > 0)
            <h2>Комментарии</h2>
            @foreach ($comments as $item)
                <div class="comment mb-2">
                    <div>
                        <i class="fas fa-user-circle"></i>&nbsp; {{ $item->first_name }}
                    </div>
                    <div>
                        {{ $item->comment }}
                    </div>
                </div>
            @endforeach
            @endif
        </div>
    </div>
@stop
<style>
    #content {
        background: #fff;
    }
</style>
