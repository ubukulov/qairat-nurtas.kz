<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class IndexController extends BaseController
{
    public function welcome()
    {
        $title = $this->title .= 'Главная';
        $posts = Post::orderBy('id', 'DESC')->paginate(10);
        return view('welcome', compact('posts', 'title'));
    }
}
