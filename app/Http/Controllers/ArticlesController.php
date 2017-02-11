<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use Carbon\Carbon;

class ArticlesController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['index', 'show']);
    }

    public function index()
    {
        $articles = Article::latest()
            ->filter(request(['month', 'year']))
            ->get();

        return view('articles.index', compact('articles'));
    }

    public function show(string $slug)
    {
        $article = Article::where('slug', $slug)->first();
        $tags = $article->tagnames;
        return view('articles.show', compact('article', 'tags'));
    }

    public function create()
    {
        $tags = Article::existingTags()->pluck('name');
        return view('articles.create', compact('tags'));
    }

    public function store()
    {

        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',

        ]);

        $article = Article::create([
            'user_id' => auth()->id(),
            'title' => request('title'),
            'body' => request('body')
        ]);
        if (request('tags')) {
            $article->tag(explode(',', request('tags')));
        }

        session()->flash('message', 'Your article has been published.');

        return redirect()->home();
    }

    public function tagged(string $tag)
    {
        $articles = Article::withAllTags([$tag])->get();
        return view('articles.index', compact('articles'));
    }
}
