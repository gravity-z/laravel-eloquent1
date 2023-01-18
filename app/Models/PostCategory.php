<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostCategory extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    protected $fillable = [
        'post_id',
        'category_id',
    ];

    /**
     * Get the post that owns the PostCategory
     */

    public function post()
    {
        return $this->belongsTo(Post::class, 'post_id');
    }

    /**
     * Get the category that owns the PostCategory
     */

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
