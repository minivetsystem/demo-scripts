<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Event extends Model
{
    use Sluggable;

    protected $table = 'event';

    public function sluggable()
    {
        return [
            'slug' => [
                'source' => 'title',
                'separator'=>'-',
                'unique'=>true,
                'onUpdate'=>false

            ]
        ];
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }
}
