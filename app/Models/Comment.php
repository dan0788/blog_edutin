<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    use HasFactory;

    protected $guarded = [
        'id','created_at','updated_at'
    ];
/* relación de uno a muchos inversa (comments-user) */
    public function user(){
        return $this->belongsTo(User::class);
    }
/* relación de uno a muchos inversa (comments-articles) */
    public function articles(){
        return $this->belongsTo(Article::class);
    }
}
