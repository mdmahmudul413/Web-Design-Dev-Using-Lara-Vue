<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OtherImage extends Model
{
    use HasFactory;

    private static $otherImage, $image, $imageName, $imageUrl, $directory, $extension;

    private static function getImageUrl($image)
    {
        self::$extension    = $image->getClientOriginalExtension();
        self::$imageName    = rand(10000, 50000) . '.' . self::$extension;
        self::$directory    = 'product-other-images/';
        $image->move(self::$directory, self::$imageName);
        self::$imageUrl     = self::$directory . self::$imageName;
        return self::$imageUrl;
    }

    public static function newOtherImage($request, $id)
    {
        foreach ($request->file('other_image') as $image)
        {
            self::$otherImage = new OtherImage();
            self::$otherImage->product_id   = $id;
            self::$otherImage->image        = self::getImageUrl($image);
            self::$otherImage->save();
        }
    }
}
