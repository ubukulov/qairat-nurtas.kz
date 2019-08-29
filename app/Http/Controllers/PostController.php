<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends BaseController
{
    public function show($alias)
    {
        return view('post.show');
    }
}
