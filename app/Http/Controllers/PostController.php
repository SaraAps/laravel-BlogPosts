<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Auth\Access\Gate;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;


class PostController extends Controller
{
    public function index()
    {
        //This solves the N+1 problem and just sends 2 query requests
        //N+1 problem if its just 'category'


        //$this->authorize('admin');
        return view('posts.index', [
            'posts' => Post::latest()
                ->filter(request(['search', 'category', 'author']))
                ->paginate(3),
        ]);
    }
    public function show(Post $post){
        // Find a post by a slug and pass it to a view called "post"
        //    $post = Post::findOrFail($id);
        return view('posts.show', [
            'post' => $post
        ]);
    }



}
