<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $guarded = [];

    protected $dates = ['published_at'];

    public static function groupedPosts()
    {
        $paginatedPosts = static::whereNotNull('published_at')->orderBy('published_at', 'DESC')->paginate(10);
        $postGroup = $paginatedPosts->groupBy(function ($post) {
            return $post->published_at->format('d M, Y');
        });

        return [
            'paginatedPosts' => $paginatedPosts,
            'postGroup' => $postGroup,
        ];
    }
}
