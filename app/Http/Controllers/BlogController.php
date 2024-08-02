<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Illuminate\View\View;

// Commande pour créer ce contrôleur : php artisan make:controller BlogController

class BlogController extends Controller
{
    /**
     * Affiche la liste des articles de blog.
     */
    public function index(): View {
        // Renvoie la vue 'blog.index' avec une pagination des articles (25 par page)
        return view('blog.index', [
            'posts' => Post::paginate(25)
        ]);
    }

    /**
     * Affiche un article de blog spécifique.
     */
    public function show(string $slug, int $id): RedirectResponse | View {
        $post = Post::findOrFail($id);

        // Redirige si le slug ne correspond pas à celui de l'article
        if ($post->slug !== $slug) {
            return to_route('blog.show', ['slug' => $post->slug, 'id' => $post->id]);
        }

        // Renvoie la vue 'blog.show' avec l'article
        return view('blog.show', [
            'post' => $post
        ]);
    }

    /**
     * Edite un article
     */
    public function edit($id): View {
        $post = Post::findOrFail($id);
    
        return view('blog.edit', ['post' => $post]);
    }

    public function update(Request $request, $id): RedirectResponse {
        $post = Post::findOrFail($id);
    
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'slug' => 'required|string|max:255',
            'excerpt' => 'required|string',
        ]);
    
        $post->update($validated);
    
        return redirect()->route('blog.show', ['slug' => $post->slug, 'id' => $post->id])->with('success', 'Post mis à jour avec succès.');
    }
}
