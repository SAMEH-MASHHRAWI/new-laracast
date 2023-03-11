<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;


    protected $with = ['category', 'auther'];
    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query->where(
                fn ($query) =>
                $query->where('title', 'like', '%' . $search . '%')
                    ->orWhere('body', 'like', '%' . $search . '%')
            )
        );
    }

    public function comments()
    {

        return $this->hasMany(Comment::class);
    }

    public function category()
    {

        return $this->belongsTo(Categiore::class, 'categiores_id');
    }

    public function auther()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}


// 0599285863
