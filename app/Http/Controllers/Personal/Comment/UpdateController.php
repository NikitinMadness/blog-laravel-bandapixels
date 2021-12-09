<?php

namespace App\Http\Controllers\Personal\Comment;

use App\Models\User;
use App\Models\Comment;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Personal\Comment\UpdateRequest;

class UpdateController extends Controller
{
    public function __invoke(UpdateRequest $request,Comment $comment){
        $data->$request->validated();
        $comment->update($data);

        return redirect()->route('personal.comment.index');
    }
    
}
