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
            $this->seo()->setTitle('Биография Кайрата Нуртаса');
            $this->seo()->setDescription('биография кайрата нуртаса');
            $this->seo()->addImages(url('/img/album-art/kajrat_nurtas.jpg'));
            $this->seo()->setCanonical($page->url());

            return view('page.show', compact('page'));

        } elseif($alias == 'qairat-nurtas-musics') {
            $this->seo()->setTitle('Песни Кайрата Нуртаса');
            $this->seo()->setDescription('На сайте вы можете слушать и скачать песни кайрата нуртаса');
            $this->seo()->addImages(url('/img/album-art/kajrat_nurtas.jpg'));
            $this->seo()->setCanonical(url('page/qairat-nurtas-musics'));

            return view('page.musics');

        } elseif($alias == 'kajrat-nurtas-klipy') {
            $clips = Clip::orderBy('id', 'DESC')->paginate(10);
            $this->seo()->setTitle('Клипы Кайрата Нуртаса');
            $this->seo()->setDescription('На сайте вы можете посмотреть клипы кайрата нуртаса');
            $this->seo()->addImages(url('/img/album-art/kajrat_nurtas.jpg'));
            $this->seo()->setCanonical(url('page/kajrat-nurtas-klipy'));

            return view('page.clips', [
                'clips' => $clips
            ]);
        }

        abort(404);
    }
}
