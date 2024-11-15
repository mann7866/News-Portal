<?php

namespace App\Models;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

class News extends Model
{
    protected $guarded = [];

    protected static function boot()
    {
        parent::boot();

        static::creating(function ($news) {
            $news->slug = Str::slug($news->title);
        });
    }

    public function setTitleAttribute($value)
    {
        $this->attributes['title'] = $value;
        $this->attributes['slug'] = Str::slug($value); 
    }

    public function categories()
    {
        return $this->belongsToMany(Category::class, 'news_categories', 'news_id', 'category_id');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
