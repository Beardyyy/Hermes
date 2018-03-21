<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    protected $fillable = [
        'name',
        'path',
        'size',
        /*bla bla*/
    ];

    public function post()
    {
        return $this->belongsTo(Post::class);
    }
}
