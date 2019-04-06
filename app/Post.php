<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use GrahamCampbell\Markdown\Facades\Markdown;
use Illuminate\Database\Eloquent\SoftDeletes;

class Post extends Model
{
    use SoftDeletes;


    protected $fillable = ['title','slug','excerpt','body','published_at','category_id','image'];

    public function getimageUrlAttribute()
    {

        $imageUrl  = "";
        $directory = config('cms.image.directory');

        if (!is_null($this->image)){

            $imagePath = public_path()."/{$directory}/".$this->image;

            if (file_exists($imagePath)) $imageUrl = asset("{$directory}/".$this->image);
        }       

        return $imageUrl;
    }

    public function getimageThumbUrlAttribute()
    {

        $imageUrl = "";

        if (!is_null($this->image)){
            $directory = config('cms.image.directory');
            $ext       = substr(strrchr($this->imgage, "."), 1);
            $thumbnail = str_replace(".{$ext}", "_thumb.{$ext}", $this->image);
            $imagePath = public_path()."/{$directory}/".$thumbnail;

            if (file_exists($imagePath)) $imageUrl = asset("{$directory}/".$thumbnail);
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

    public function dateFormatted($showTimes = false)
    {
        $formate = "Y/m/d";
        if($showTimes) $formate .= " H:i:s";
        return $this->created_at->format($formate);
    }

    public function publishcationLabel()
    {
        if (!$this->published_at){
            return '<span class="label label-warning">Draft</span>';
        }
        elseif ($this->published_at && $this->published_at->isFuture()) {
            return '<span class="label label-info">Sechedule</span>';
        }
        else{
            return '<span class="label label-success">Published</span>';
        }

    }

}
