<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function welcome()
    {
//        $this->seo()->setTitle('Главная');
        $this->seo()->addImages(url('/img/album-art/kajrat_nurtas.jpg'));
        $posts = Post::orderBy('id', 'DESC')->paginate(10);
        return view('welcome', compact('posts'));
    }
}
