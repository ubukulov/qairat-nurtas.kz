<?php

namespace App\Http\Controllers;

use App\Clip;
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
        } elseif($alias == 'kajrat-nurtas-klipy') {
            $clips = Clip::orderBy('id', 'DESC')->paginate(10);
            return view('page.clips', [
                'title' => 'Кайрат Нуртас | Клипы',
                'clips' => $clips
            ]);
        }

        abort(404);
    }
}
