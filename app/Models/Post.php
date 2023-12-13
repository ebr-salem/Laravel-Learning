<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\File;

class Post
{
    public static function all()
    {
        $files = File::files(base_path("resources/posts"));;

        return array_map(fn($file) => $file->getContents(), $files);
    }

    public static function find($slug)
    {
        if (!file_exists($path = base_path("resources/posts/$slug.html"))) {
            abort(404);
        }

        return $post = file_get_contents($path);
    }
}
