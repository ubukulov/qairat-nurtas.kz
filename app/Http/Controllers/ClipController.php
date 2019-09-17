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
        $title = $this->title .= $clip->title;
        $og_desc = $clip->description;
        $og_img = $clip->getImage();
//        return view('clip.show', compact('clip', 'title', 'og_desc', 'og_img'));
        return response()
            ->view('clip.show', compact('clip', 'title', 'og_desc', 'og_img'), 200)
            ->header('X-Frame-Options', 'SAMEORIGIN');
    }
}
