<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public static function fetchAllPost()
    {
        $posts = Post::fetchAllPost();
        return view('/tugas')->with('message', session('message'))->with('posts', $posts);
    }

    public static function createPost(Request $request)
    {

        $post = Post::createPost($request->judul, $request->sub_judul, $request->kategori, $request->deadline_tp, $request->deskripsi_tp, $request->link_tp);

        return redirect('tugas')->with('message', 'succ');
    }

    public static function fetchPostById($id)
    {
        $post = Post::fetchPostById($id);
        return view('tugasbyid')->with('post', $post);
    }

    public static function loadEditPage($id)
    {
        $post = Post::fetchPostById($id);
        return view('edit')->with('post', $post);
    }

    public static function updatePost(Request $request, $id)
    {
        Post::updatePost($request, $id);

        return redirect('/tugas')->with('message', 'success');
    }

    public static function deletePost($id)
    {
        Post::deletePost($id);
        return redirect('/tugas')->with('message', 'success');
    }
}
