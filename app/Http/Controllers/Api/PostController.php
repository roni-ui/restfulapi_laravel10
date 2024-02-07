<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
//import Resource "PostResourch"
use App\Http\Resources\PostResource;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        //get all post
        $_posts = Post::Lates()->paginate(5);

        //return colection  of post  as a resource
        return new PostResource(true, 'List Data Post', $_posts);
    }
}
