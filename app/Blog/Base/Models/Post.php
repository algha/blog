<?php

namespace App\Blog\Base\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{

    protected $table = 'post';

    protected $fillable = [
        'user_id',
        'title',
        'content',
        'status'
    ];


    public function user()
    {
        return $this->belongsTo(User::class);
    }



}
