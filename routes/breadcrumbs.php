<?php

// Home Page
Breadcrumbs::register('homepage', function ($breadcrumbs) {
    $breadcrumbs->push('Главная', route('home'));
});

// Post
Breadcrumbs::register('post.show', function ($breadcrumbs, $post = null) {
    $breadcrumbs->parent('homepage');
    $breadcrumbs->push($post->title);
});

// Page
Breadcrumbs::register('page.show', function ($breadcrumbs, $page = null, $b_title = null) {
    $breadcrumbs->parent('homepage');
    if ($page == null) {
        $breadcrumbs->push($b_title);
    } else {
        $breadcrumbs->push($page->title);
    }
});

// Clip
Breadcrumbs::register('clip.show', function($breadcrumbs, $clip) {
    $breadcrumbs->parent('homepage');
    $breadcrumbs->push('Клипы', route('page.show', ['alias' => 'kajrat-nurtas-klipy']));
    $breadcrumbs->push($clip->title);
});
