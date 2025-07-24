<?php

namespace App\Models;
use App\Http\Controllers\postController;
use App\Models\Post;



use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['title','content'] ;  }
