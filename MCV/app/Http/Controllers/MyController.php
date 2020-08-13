<?php
    namespace App\Http\Controllers;

use PhpParser\Node\Expr\AssignOp\Concat;

class MyController extends Controller{
        
        function displayName(){
            $data = ['name'=>'Rizwan Ahmed'];
            return view('display', compact('data'));
        }
    }