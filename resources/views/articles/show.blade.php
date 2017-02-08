@extends ('layouts.blog-layout')
@section ('content')

    <div class="col-sm-8 blog-main">
        <h1>{{ $article->title }}</h1>
        {{ $article->body }}

        @if (count($article->tags))
            <ul>
                @foreach ($article->tags as $tag)
                    <li>
                        <a href="/articles/tags/{{ $tag->name }}">
                            {{ $tag->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        @endif
        <hr>

        <div class="comments">
            <ul class="list-group">

                @foreach ($article->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{ $comment->user->username }} said {{ $comment->created_at->diffForHumans() }}: &nbsp;
                    </strong>
                    {{ $comment->body }}
                </li>
                @endforeach

            </ul>
        </div>
        <hr>

        <div class="card">
            <div class="card-block">
                @include('layouts.errors')
                <form method="post" action="/articles/{{ $article->slug }}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea class="form-control" name="body" placeholder="Your comment here." required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
