<?php

namespace App\Models;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
    {
    use HasFactory;

    protected $guarded = ['id'];



    protected function image(): Attribute
        {
        return Attribute::make(
        get: fn ($image) => asset('/storage/posts' . $image),
        ); }
    public function comments() {
        return $this->hasMany(Comment::class);
        }
    }
