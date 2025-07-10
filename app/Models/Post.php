<?php

namespace App\Models;

use Illuminate\Support\Arr;

class Post {
    public static function all(): array {
        return [
            [
                'id' => 1,
                'slug' => 'judul-artikel-1',
                'title' => 'Article Title 01',
                'author' => 'Arkan Rifqy',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus itaque, odio ducimus illum magnam repudiandae dolorem perferendis aliquam ipsa quidem consequuntur libero explicabo fuga. Necessitatibus expedita soluta nobis eius deleniti!' 
            ],
            [
                'id' => 2,
                'slug' => 'judul-artikel-2',
                'title' => 'Article Title 02',
                'author' => 'Arkan Rifqy',
                'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit... 
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus itaque, odio ducimus illum magnam repudiandae dolorem perferendis aliquam ipsa quidem consequuntur libero explicabo fuga. Necessitatibus expedita soluta nobis eius deleniti! '
            ]
        ];
    }

    public static function find($slug) {
        $post = Arr::first(static::all(), fn($post) => $post['slug'] == $slug);

        if(!$post){
         abort(404);
        }

        return $post;
    }
}
