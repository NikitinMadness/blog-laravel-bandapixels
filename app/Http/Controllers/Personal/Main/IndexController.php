<?php

namespace App\Http\Controllers\Personal\Main;


use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function __invoke(){
    
        return view('personal.main.index');
    }
    
}
