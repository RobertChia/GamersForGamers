<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ReviewLike extends Model
{
    use HasFactory;

    protected $guarded = ['id'];
    // protected $with = ['user', 'reviewPost'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reviewPost()
    {
        return $this->belongsTo(ReviewPost::class);
    }
}