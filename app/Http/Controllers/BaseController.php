<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Jenssegers\Agent\Agent;
use View;

class BaseController extends Controller
{
    protected $agent;
    public $title = 'Кайрат Нуртас | ';

    public function __construct()
    {
        $this->agent = new Agent();
        View::share('agent', $this->agent);
    }
}
