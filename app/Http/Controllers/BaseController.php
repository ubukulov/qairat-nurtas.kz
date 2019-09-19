<?php

namespace App\Http\Controllers;

use Artesaos\SEOTools\Traits\SEOTools;
use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use View;
use Artesaos\SEOTools\Traits\SEOTools as SEOToolsTrait;

class BaseController extends Controller
{
    use SEOToolsTrait;

    protected $agent;

    public function __construct()
    {
        $this->agent = new Agent();
        $this->seo()->metatags()->addMeta('robots', 'index, follow');
        $this->seo()->opengraph()->addProperty('locale', 'ru_RU');
        $this->seo()->metatags()->setKeywords('кайрат нуртас,скачать кайрат нуртас,кайрат нуртас 2019,скачать песни кайрата нуртаса,бесплатны кайрат нуртас,кайрат нуртас скачать бесплатно,кайрат нуртас +все песни,скачать песнью кайрат нуртас,бесплатные песни кайрата нуртаса,скачать кайрат нуртас 2019,слушать кайрат нуртас,музыка кайрат нуртас,кайрат нуртас mp3,скачать музыку кайрат нуртас,кайрат нуртас скачать mp3,кайрат нуртас ашуыма,кайрат нуртас марал,кайрат нуртас маралым,кайрат нуртас ашуыма тиме,кайрат нуртас песни 2019,кайрат нуртас +все песни скачать бесплатно	,кайрат нуртас +все песни слушать,кайрат нуртас ай,кайрат нуртас +и нюша,кайрат нуртас 2019 скачать бесплатно,кайрат нуртас алматы,кайрат клип,песня кайрат,нуртас клип,песня нуртас');
        $this->seo()->opengraph()->setSiteName('Сайт про Кайрата Нуртаса');
        View::share('agent', $this->agent);
    }
}
