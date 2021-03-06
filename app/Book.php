<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = [
        'title', 'body',
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function trades()
    {
        return $this->hasMany('App\Trade');
    }

}
