<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Article;
use App\Comment;

class CommentsController extends Controller
{
    public function store(string $slug)
    {
		$article = Article::where('slug', $slug)->first();

        $this->validate(request(), ['body' => 'required|min:2']);

        $article->addComment(request('body'), auth()->id());

        return back();
    }
}
