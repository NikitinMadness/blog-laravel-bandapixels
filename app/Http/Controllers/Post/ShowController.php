<?php

namespace App\Http\Controllers\Post;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class ShowController extends Controller
{
    public function __invoke(Post $post){
        $relatedPosts = Post::where('category_id', $post->category_id)
        ->where('id', '!=', $post->id)
        ->get()
        ->take(3);
        return view('post.show', compact('post', 'relatedPosts'));
    }
    
}
