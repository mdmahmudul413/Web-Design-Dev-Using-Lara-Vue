<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;

    private static $blog;

    public static function newBlog($request){
        self::$blog = new Blog();
        self::$blog->title          = $request->title;
        self::$blog->author         = $request->author;
        self::$blog->description    = $request->description;
        self::$blog->image          = $request->image;
        self::$blog->save();
    }
}
