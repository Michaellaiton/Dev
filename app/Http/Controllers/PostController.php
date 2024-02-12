<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    //
    public function create(){
        return view('post.create');
    }

    public function store(Request $request)
    {
        // Valida y almacena tu mensaje de notificación
        $request->validate([
            'title' => 'required|string',
            'description' => 'required|string',
        ]);

        Post::create($request->only(['title', 'description']));

        return response()->json(['message' => 'Post created successfully'], 200);
    }



}
