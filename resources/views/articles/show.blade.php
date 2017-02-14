@extends ('layouts.blog-layout')
@section ('content')

    <div class="col-sm-8 blog-main">
        <h1>
            {{ $article->title }}
            @if ($owner)
            <a class="btn-sm glyphicon glyphicon-pencil" href="/articles/{{ $article->slug }}/edit" role="button"></a>
            <a class="btn-sm glyphicon glyphicon-trash" href="/articles/{{ $article->slug }}/delete" role="button"></a>
            @endif
        </h1>

        {{ $article->body }}

        <hr>

        @if ($tags)
        <h4>Tags:</h4>
        <ul class="list-inline">
        <?php $tags = preg_split('/,/', $tags); ?>
            @foreach ($tags as $tag)
            <li>
                <a class="btn btn-info" href="/articles/tagged/{{ $tag }}" role="button">{{ $tag }}</a>
            </li>
            @endforeach
        </ul>
         <hr>
         @endif

        <div class="comments">
            <ul class="list-group">

                @foreach ($article->comments as $comment)
                <?php //dd($comment->id); ?>
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
                @if (auth()->id())
                <form method="post" action="/articles/{{ $article->slug }}/comments">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <textarea class="form-control" name="body" placeholder="Your comment here." required></textarea>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-primary">Add Comment</button>
                    </div>
                </form>
                @else
                    Please login to comment.
                @endif
            </div>
        </div>
    </div>
<script>
tags.split(',');
</script>
@endsection
