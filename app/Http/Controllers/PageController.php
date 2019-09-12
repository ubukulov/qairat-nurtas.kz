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
            $title = 'Кайрат Нуртас | '.$page->title;
            $og_desc = $page->description;
            return view('page.show', compact('page', 'title', 'og_desc'));
        } elseif($alias == 'qairat-nurtas-musics') {
            return view('page.musics', [
                'title' => 'Кайрат Нуртас | Музыки'
            ]);
        }

        abort(404);
    }
}
