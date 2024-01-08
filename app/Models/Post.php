<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'body',
    ];

    protected $with = ['category', 'author'];

    public function scopeFilter($query, array $filters)
    {
        $query->when(
            $filters['search'] ?? false,
            fn ($query, $search) =>
            $query->where(fn ($query) =>
            $query->where('title', 'like', '%' . $search . '%')
                ->orWhere('body', 'like', '%' . $search . '%'))
        )->when(
            $filters['category'] ?? false,
            fn ($query, $slug) =>
            $query->whereHas('category', fn ($query) => $query->where('slug', $slug))
        )->when(
            $filters['author'] ?? false,
            fn ($quere, $username) =>
            $quere->whereHas('author', fn ($query) => $query->where('username', $username))
        );
    }

    public function author()
    {
        return $this->belongsTo(User::class, "user_id");
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }
}
