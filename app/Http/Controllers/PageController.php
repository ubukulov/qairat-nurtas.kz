<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    public function show($alias)
    {
        $page = Page::whereAlias($alias)->first();
        if ($page) {
            return view('page.show', compact('page'));
        }

        abort(404);
    }
}
