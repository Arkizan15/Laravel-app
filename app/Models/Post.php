<?php

namespace App\Models;

class Post {
    public static function all(){

       return   [
        [
            'id' => 1,
            'slug' =>'judul-artikel-1',
            'title' => 'Article Title 01',
            'author' => 'Arkan Rifqy',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur id molestias eaque mollitia recusandae alias quod consectetur dicta possimus totam, omnis repellat ipsa illum asperiores culpa nemo voluptatem vero nisi.'
        ],
        [
            'id' => 2,
            'slug' =>'judul-artikel-2',
            'title' => 'Article Title 02',
            'author' => 'Arkan Rifqy',
            'body' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur id molestias eaque mollitia recusandae alias quod consectetur dicta possimus totam, omnis repellat ipsa illum asperiores culpa nemo voluptatem vero nisi.'
        ]
        ];

    }
}