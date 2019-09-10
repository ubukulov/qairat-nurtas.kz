<?php
// Home Page
Breadcrumbs::register('homepage', function ($breadcrumbs) {
    $breadcrumbs->push('Главная', route('home'));
});

// Catalog
//Breadcrumbs::register('catalog.view', function ($breadcrumbs, $category) {
//    $breadcrumbs->parent('homepage');
//    $ancestors = null;
//    if ($category != null) {
//        $ancestors = \App\Models\Category::select(['id', 'title', 'alias', 'parent_id'])->defaultOrder()->ancestorsOf($category->id);
//    }
//
//    if ($ancestors != null) {
//        foreach ($ancestors as $item) {
//            $breadcrumbs->push($item->title, route('catalog.view', ['alias' => $item->alias]));
//        }
//    }
//
//    $breadcrumbs->push($category->title, route('catalog.view', ['alias' => $category->alias]));
//});

// Post
Breadcrumbs::register('post.show', function ($breadcrumbs, $post = null) {
    $breadcrumbs->parent('homepage');
    $breadcrumbs->push($post->title);
});

// Page
Breadcrumbs::register('page.show', function ($breadcrumbs, $page = null) {
    $breadcrumbs->parent('homepage');
    if ($page == null) {
        $breadcrumbs->push('Музыки');
    } else {
        $breadcrumbs->push($page->title);
    }
});

//// Login form
//Breadcrumbs::register('login', function($breadcrumbs) {
//    $breadcrumbs->parent('homepage');
//    $breadcrumbs->push('Форма авторизации');
//});
//
//// Register form
//Breadcrumbs::register('registration', function($breadcrumbs) {
//    $breadcrumbs->parent('homepage');
//    $breadcrumbs->push('Форма регистрации');
//});
//
//// Cart
//Breadcrumbs::register('cart.index', function($breadcrumbs) {
//    $breadcrumbs->parent('homepage');
//    $breadcrumbs->push('Корзина');
//});
//
//// Checkout
//Breadcrumbs::register('checkout.index', function($breadcrumbs) {
//    $breadcrumbs->parent('homepage');
//    $breadcrumbs->push('Оформление заказа');
//});
//
//// Search
//Breadcrumbs::register('search', function($breadcrumbs) {
//    $breadcrumbs->parent('homepage');
//    $breadcrumbs->push('Результаты поиска');
//});
