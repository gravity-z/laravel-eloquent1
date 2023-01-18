<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

/**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'title',
        'excerpt',
        'content',
    ];

    /**
     * Get the user that owns the Post
     */
    public function user()
    {
        return $this->belongsTo(User::class, 'author_id');
    }

    /**
     * Get the category that owns the Post
     * Using PostCategory
     */
    public function category()
    {
        return $this->belongsTo(PostCategory::class, 'category_id');
    }
}
