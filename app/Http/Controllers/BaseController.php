<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use View;

class BaseController extends Controller
{
    protected $agent;
    public $title = 'Кайрат Нуртас | ';
    public $og_img, $og_desc;

    public function __construct()
    {
        $this->og_img = asset('/img/album-art/kajrat_nurtas.jpg');
        $this->og_desc = 'Песни Кайрата Нуртаса, Биография Кайрата Нуртаса';
        $this->agent = new Agent();
        View::share('agent', $this->agent);
        View::share('og_img', $this->og_img);
        View::share('og_desc', $this->og_desc);
    }
}
