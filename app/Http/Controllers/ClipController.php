<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Clip;

class ClipController extends BaseController
{
    public function show($alias, $id)
    {
        $clip = Clip::findOrFail($id);
        $clip->views++;
        $clip->save();
        $this->seo()->setTitle($clip->title);
        $this->seo()->setDescription($clip->title);
        $this->seo()->setCanonical($clip->url());
        $this->seo()->addImages($clip->getImage());
        return view('clip.show', compact('clip'));
    }
}
