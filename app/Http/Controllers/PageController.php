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
                    return view('page.musics');
                    break;

                default:
                    return view('page.show', compact('page'));
                    break;
            }
//        }
//
//        abort(404);
    }
}
