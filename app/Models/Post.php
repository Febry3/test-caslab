<?php

namespace App\Models;

use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = [
        'judul',
        'sub_judul',
        'kategori',
        'deadline_tp',
        'deskripsi_tp',
        'link_tp',
    ];

    public static function createPost($judul, $sub_judul, $kategori, $deadline_tp, $deskripsi_tp, $link_tp)
    {
        $post = Post::create([
            'judul' => $judul,
            'sub_judul' => $sub_judul,
            'kategori' => $kategori,
            'deadline_tp' => $deadline_tp,
            'deskripsi_tp' => $deskripsi_tp,
            'link_tp' => $link_tp,
        ]);
    }

    public static function fetchAllPost()
    {
        return Post::all()->sortByDesc('updated_at');
    }

    public static function fetchPostById($id)
    {
        $post = Post::where('post_id', $id)->first();
        return $post;
    }

    public static function updatePost(Request $request, $id)
    {
        Post::where('post_id', $id)->update([
            'judul' => $request->judul,
            'sub_judul' => $request->sub_judul,
            'kategori' => $request->kategori,
            'deadline_tp' => $request->deadline_tp,
            'deskripsi_tp' => $request->deskripsi_tp,
            'link_tp' => $request->link_tp,
        ]);
    }

    public static function deletePost($id)
    {
        Post::where('post_id', $id)->delete();
    }
}
