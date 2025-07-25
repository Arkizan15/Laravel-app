<?php

namespace App\Models;

use Illuminate\Support\Arr;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model {
     use HasFactory;

    protected $fillable = ['title', 'author', 'slug', 'body'];
   
}
