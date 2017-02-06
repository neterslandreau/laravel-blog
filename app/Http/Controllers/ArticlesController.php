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

        return view('articles.index', compact('articles', 'archives'));
    }

    public function show(string $slug)
    {
        $article = Article::where('slug', $slug)->first();
        return view('articles.show', compact('article'));
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store()
    {
        $this->validate(request(), [
            'title' => 'required',
            'body' => 'required',

        ]);

        auth()->user()->publish(
            new Article(request(['title', 'body']))
        );

        return redirect()->home();
    }
}
