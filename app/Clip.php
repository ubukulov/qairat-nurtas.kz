<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Clip extends Model
{
    use Sluggable;

    protected $fillable = [
        'title', 'alias', 'keywords', 'description', 'full_description', 'active', 'views', 'image'
    ];

    protected $dates = ['created_at', 'updated_at'];

    /**
     * Return the sluggable configuration array for this model.
     *
     * @return array
     */
    public function sluggable()
    {
        return [
            'alias' => [
                'source' => 'title'
            ]
        ];
    }

    public function getImage()
    {
        return asset('uploads/clips/'.$this->image);
    }

    public function getImageThumbs()
    {
        return asset('uploads/clips/thumbs/'.$this->image);
    }

    public function url()
    {
        return route('clip.show', ['alias' => $this->alias, 'id' => $this->id]);
    }

    public function popular_clips()
    {
        $popular_clips = Clip::where('id', '<>', $this->id)
            ->orderBy('views', 'DESC')
            ->limit(6)
            ->get();
        return $popular_clips;
    }

    public function comments()
    {
        $comments = Comment::where(['comments.type' => 'clip', 'comments.pcp_id' => $this->id])
                    ->select('comments.*', 'users.name as first_name')
                    ->join('users', 'users.id', '=', 'comments.user_id')
                    ->orderBy('id', 'DESC')
                    ->get();
        return $comments;
    }
}
