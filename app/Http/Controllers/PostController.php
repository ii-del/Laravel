<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index(Post $post) // インポートしたいPostをインスタンス化して＄Postとして使用
    {
        return $post->get(); // $postの中身を戻り値にする
    }
}
