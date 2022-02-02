<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
  public static function generateUniqueSlug($title) {
    $slug = Str::slug($title, '-');
    $originalSlug = $slug;

    $existingPost = Post::where('slug', $slug)->first();

    $count = 1;
    while($existingPost) {
      $slug = $originalSlug . '-' . $count;
      $count++;
      $existingPost = Post::where('slug', $slug)->first();

    }
    
    return $slug;
  }
}
