<?php
namespace App\Models;

use Illuminate\Support\Arr;

class Post
{
    public static function all()
    {
        return [
            [
                'slug' => 'post-title-1',
                'title' => 'post title 1',
                'author' => 'Azmi Muhammad',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam placeat cupiditate saepe doloribus nihil quasi quod enim! Id rem ipsam ea officia. Rerum odio reiciendis, nisi delectus obcaecati quam animi at magni, voluptatibus natus explicabo, excepturi alias cupiditate asperiores quaerat!',
            ],
            [
                'slug' => 'post-title-2',
                'title' => 'post title 2',
                'author' => 'Anton Bee',
                'body' => 'Lorem, ipsum dolor sit amet consectetur adipisicing elit. Ipsam placeat cupiditate saepe doloribus nihil quasi quod enim! Id rem ipsam ea officia. Rerum odio reiciendis, nisi delectus obcaecati quam animi at magni, voluptatibus natus explicabo, excepturi alias cupiditate asperiores quaerat!',
            ],
        ];
    }

    public static function find($slug): array {
      // return Arr::first(static::all(), function($post) use ($slug) { 
      //   return $post['slug'] == $slug; 
      // });

      $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

      if(!$post) {
        abort(404);
      } 

      return $post;
    }
}
?>
