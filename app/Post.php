<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public static $master = "layouts.home";
    public static $about = "layouts.about";
    public  static $blog = "layouts.blog";
    public static $contact = "layouts.contact";
    public static $post = "layouts.post";
    public static $create = "layouts.create";


    protected $fillable = ['title', 'subTitle', 'body', 'img'];
}
