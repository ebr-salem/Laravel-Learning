<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;
use Spatie\YamlFrontMatter\YamlFrontMatter;

class Post
{
    public string $slug;

    public function __construct(public string $title, public int $id, public string $body)
    {
        $this->title = $title;
        $this->slug = strtolower(str_replace(' ', '-', $this->title));
        $this->id = $id;
        $this->$body = $body;
    }

    /**
     * returns a collection of posts sorted by 'id'
     * @return Collection
     */
    public static function all()
    {
        return cache()->rememberForever('posts.all', function () {
            return $posts = collect(File::files(resource_path('posts')))
                ->map(fn ($file) => YamlFrontMatter::parseFile($file))
                ->map(
                    fn ($document) => new static(
                        $document->title,
                        $document->id,
                        $document->body()
                    )
                )->sortByDesc('id');
        });
    }

    public static function find($slug)
    {
        return static::all()->firstWhere('slug', $slug);
    }

    public static function store()
    {
        // first, clear the cache
        // then create a new post
        // redirect to posts page to cache it
    }
}
