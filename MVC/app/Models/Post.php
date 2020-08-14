<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function dataPost(){
        return [
            'name' => 'Rizwan Ahmed',
            'Rank' => 'CEO'
        ];
    }
}
