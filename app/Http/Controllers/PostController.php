<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{

    // Menampilkan semua post
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // Menampilkan form untuk membuat post baru
    public function create()
    {
        return view('posts.create');
    }

    // Menyimpan post baru ke database
    public function store(Request $request)
    {
        // Validasi data yang masuk
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'genre' => 'nullable|string', // Kolom genre yang baru ditambahkan
        ]);

        // Simpan data ke database
        Post::create($request->all());

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('posts.index')
                         ->with('success', 'Post created successfully.');
    }

    // Menampilkan detail dari satu post
    public function show(Post $post)
    {
        return view('posts.show', compact('post'));
    }

    // Menampilkan form untuk mengedit post
    public function edit(Post $post)
    {
        return view('posts.edit', compact('post'));
    }

    // Memperbarui post yang ada di database
    public function update(Request $request, Post $post)
    {
        // Validasi data yang masuk
        $request->validate([
            'title' => 'required',
            'content' => 'required',
            'genre' => 'nullable|string', // Kolom genre yang baru ditambahkan
        ]);

        // Update data di database
        $post->update($request->all());

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('posts.index')
                         ->with('success', 'Post updated successfully.');
    }

    // Menghapus post dari database
    public function destroy(Post $post)
    {
        // Hapus data dari database
        $post->delete();

        // Redirect kembali ke halaman index dengan pesan sukses
        return redirect()->route('posts.index')
                         ->with('success', 'Post deleted successfully.');
    }
}
