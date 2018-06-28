<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserEvent extends Model
{
    protected $table='user_event';
    public $timestamps=false;

    public function event()
    {
        return $this->belongsTo('App\Event','event_id', 'id');
    }
}
