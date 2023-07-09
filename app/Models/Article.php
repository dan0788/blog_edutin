<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $guarded = [
        'id',
        'created_at',
        'updated_at'
    ];
/* relación de uno a muchos inversa(article-user) */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
/* relación de uno a muchos (article-comments) */
    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
/* relación de uno a muchos inversa(article-categories) */
    public function categories()
    {
        return $this->belongsTo(Category::class);
    }
}