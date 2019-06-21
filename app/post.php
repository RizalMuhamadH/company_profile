<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class post extends Model
{
    // protected $table = 'post';
    protected $fillable = [
        'post_title','post_summary','post_content','post_image','post_image_thumb','user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
