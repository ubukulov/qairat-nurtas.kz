<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Page extends Model
{
    protected $fillable = [
        'title', 'alias', 'keywords', 'description', 'full_description', 'active'
    ];

    protected $dates = [
        'created_at', 'updated_at'
    ];

    public function url()
    {
        return route('page.show', ['alias' => $this->alias]);
    }
}
