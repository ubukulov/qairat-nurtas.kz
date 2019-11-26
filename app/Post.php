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
        return url('uploads/posts/'.$this->image);
    }

    public function getImageThumbs()
    {
        return url('uploads/posts/thumbs/'.$this->image);
    }

    public function url()
    {
        return route('post.show', ['alias' => $this->alias, 'id' => $this->id]);
    }

    public function getOthers()
    {
        $posts = Post::where('id', '<>', $this->id)->orderBy('views', 'DESC')->limit(5)->get();
        return $posts;
    }

    public function comments()
    {
        $comments = Comment::where(['comments.type' => 'clip', 'comments.pcp_id' => $this->id, 'comments.status' => '1'])
                    ->select('comments.*', 'users.name as first_name')
                    ->join('users', 'users.id', '=', 'comments.user_id')
                    ->orderBy('id', 'DESC')
                    ->get();
        return $comments;
    }
}
