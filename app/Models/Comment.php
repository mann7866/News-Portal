<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    protected $guarded = [];

    public function parent()
    {
        return $this->belongsTo(Comment::class, 'parent_id');
    }

    public function replies()
    {
        return $this->hasMany(Comment::class, 'parent_id')->whereNotNull('parent_id');
    }

    public function news()
    {
        return $this->belongsTo(News::class, 'news_id');
    }


    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
