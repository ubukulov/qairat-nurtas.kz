<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostController extends BaseController
{
    public function show($alias, $id)
    {
        $post = Post::findOrFail($id);
        $post->views++;
        $post->save();
        $title = $this->title .= $post->title;
        $og_desc = $post->description;
        $og_img = $post->getImage();
        return view('post.show', compact('post', 'title', 'og_desc', 'og_img'));
    }
}
