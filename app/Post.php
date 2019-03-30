<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;


class Post extends Model
{

    public function getimageUrlAttribute()
    {

        $imageUrl = "";

        if (!is_null($this->image)){

            $imagePath = public_path()."/img/".$this->image;

            if (file_exists($imagePath)) $imageUrl = asset("img/".$this->image);
        }       

        return $imageUrl;
    }
    public function getimageThumbUrlAttribute()
    {

        $imageUrl = "";

        if (!is_null($this->image)){
            $ext       = substr(strrchr($this->imgage, "."), 1);
            $thumbnail = str_replace(".{$ext}", "_thumb.{$ext}", $this->image);
            $imagePath = public_path()."/img/".$thumbnail;

            if (file_exists($imagePath)) $imageUrl = asset("img/".$thumbnail);
        }       

        return $imageUrl;
    }
    
    public function getDateAttribute()
    {
    	return $this->created_at ->diffForHumans();
    }

    public function author()
    {
        return $this->belongsTo(User::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function getBioHtmlAttribute($value)
    {
        return $this->bio ? Markdown::converToHtml(e($this->bio)) : null;
    }
    public function scopePopular($query)
    {
        return $query->orderBy('view_count', 'desc');
    }

}
