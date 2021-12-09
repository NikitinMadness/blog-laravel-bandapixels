<?php

namespace App\Http\Controllers\Main;

use App\Models\Post;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class IndexController extends Controller
{
    public function __invoke(){
        // $posts = Post::paginate(6);
        // $likedPosts = Post::withCount('likedUsers')->orderBy('liked_users-count', 'DESC')->get()->take(4);

        // return view('main.index', compact('posts', 'likedPosts'));
        return redirect()->route('post.index');
    }
    
}
