<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Post extends Model
{
    use Sluggable;

    protected $fillable = [
        'title', 'alias', 'keywords', 'description', 'full_description', 'image', 'views', 'active'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];

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
        return asset('uploads/posts/'.$this->image);
    }

    public function getImageThumbs()
    {
        return asset('uploads/posts/thumbs/'.$this->image);
    }
}
