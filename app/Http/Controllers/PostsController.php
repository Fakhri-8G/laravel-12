<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post; // <-- Import data dari Models

class PostsController extends Controller
{
    public function tampil()
    {
        $post = Post::all();
        return view('halaman_post2', compact('post'));
    }

    // hapus data
    public function des($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('/post')->with('success', 'Berhasil Menghapus Data');
    }

    // Buat data
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required',
        ]);

        Post::create($request->all());
        return redirect('/post')->with('success', 'Data Berhasil di Tambahkan');
    }
}
