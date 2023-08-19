<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostsCotroller extends Controller
{
    public function show($id){
        $today = date('Y-m-d');
        return view('posts.post', ['id'=>$id, 'today'=>$today]);
    }
}
