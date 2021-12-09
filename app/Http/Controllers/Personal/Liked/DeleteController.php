<?php

namespace App\Http\Controllers\Personal\Liked;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function __invoke(Post $post){
        auth()->user()->likedPosts()->detach($post->id);
        return redirect()->route('personal.liked.index');
    }
    
}
