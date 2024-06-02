<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

class BlogController extends Controller
{
    public function index(): View {

        return view('blog.index' ,[
            'posts' => Post::paginate(25)
        ]);
    }

    public function show(string $slug, Post $post): RedirectResponse | View {
        if ($post->slug !== $slug) {
            return to_route('blog.show', array('slug' => $post->slug, 'id' => $post->id));
        }
        return view('blog.show', [
            'post' => $post
        ]);
    }
}
