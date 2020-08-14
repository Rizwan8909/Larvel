<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    public function dataPost()
    {
        return [
            'name' => 'Rizwan Ahmed',
            'Rank' => 'CEO'
        ];
    }

    public function dataPost2()
    {
        return [

            [
                'name' => 'Rizwan Ahmed',
                'Rank' => 'CEO'
            ],

            [
                'name' => 'Rehan Ahmed',
                'Rank' => 'Manager'
            ],

            [
                'name' => 'Kainat Ahmed',
                'Rank' => 'HR Manager'
            ],


        ];
    }
}
