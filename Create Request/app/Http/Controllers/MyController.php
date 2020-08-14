<?php

namespace App\Http\Controllers;

use PhpParser\Node\Expr\AssignOp\Concat;
use App\Post;

class MyController extends Controller
{

    function displayName()
    {
        $post = new Post;
        $data = $post->dataPost();
        return view('display', compact('data'));
    }
}
