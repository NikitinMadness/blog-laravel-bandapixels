<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DeleteController extends Controller
{
    public function __invoke(Comment $comment){
        $comment->delete();
        return redirect()->route('personal.comment.index');
    }
    
}
