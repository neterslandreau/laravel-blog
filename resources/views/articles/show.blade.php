@extends ('layouts.blog-layout')
@section ('content')

    <div class="col-sm-8 blog-main">
        <h1>{{ $article->title }}</h1>
        {{ $article->body }}
        <hr>
        <div class="comments">
            <ul class="list-group">

                @foreach ($article->comments as $comment)
                <li class="list-group-item">
                    <strong>
                        {{ $comment->created_at->diffForHumans() }}: &nbsp;
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
                <form method="post" action="/articles/{{ $article->id }}/comments">
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
