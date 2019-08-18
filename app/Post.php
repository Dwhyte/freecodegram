<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $guarded = []; // telling Laravel that its ok to pass in all request

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
