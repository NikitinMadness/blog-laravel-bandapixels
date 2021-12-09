<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class EditController extends Controller
{
    public function __invoke(Comment $comment){
        
        return view('personal.comment.edit', compact('comment'));
    }
    
}
