<?php

namespace App\Http\Controllers;

use App\Page;
use Illuminate\Http\Request;

class PageController extends BaseController
{
    public function show($alias)
    {
        $page = Page::whereAlias($alias)->first();
        //if ($page) {
            switch ($alias) {
                case "qairat-nurtas-musics":
                    return view('page.musics', ['title' => 'Кайрат Нуртас | Музыки']);
                    break;

                default:
                    $title = 'Кайрат Нуртас | Биография';
                    return view('page.show', compact('page', 'title'));
                    break;
            }
//        }
//
//        abort(404);
    }
}
