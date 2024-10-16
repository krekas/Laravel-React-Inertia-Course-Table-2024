<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Inertia\Inertia;
use Inertia\Response;
use App\Http\Resources\PostResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PostController extends Controller
{
    public function index(): Response
    {
        $posts = Post::all();

        return Inertia::render('Posts/Index', compact('posts'));
    }
}