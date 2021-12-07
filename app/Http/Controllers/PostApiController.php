<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    public function index()
    {
        return Post::all();
    }

    public function post(Post $post)
    {
        return Post::all();
    }

    public function store()
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        return Post::create([
            'title' => request('title'),
            'description' => request('description'),
        ]);
    }

    public function update(Post $post)
    {
        request()->validate([
            'title' => 'required',
            'description' => 'required',
        ]);

        $success = $post->update([
            'title' => request('title'),
            'description' => request('description'),
        ]);

        return [
            'success' => $success
        ];
    }

    public function destroy(Post $post)
    {
        $success = $post->delete();

        return [
            'success' => $success
        ];
    }
}
