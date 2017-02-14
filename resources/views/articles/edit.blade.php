@extends('layouts.blog-layout')

@section ('content')

    <div class="col-sm-8 blog-main">

    <div class="inline-headers">
    <h1 class="inline">Edit Article</h1><a href="/articles/{{ $article->slug }}">Cancel</a>
    </div>

        <hr>

        @include ('layouts.errors')
        <form method="post" action="/articles/{{ $article->slug }}/edit">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $article->title }}">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" class="form-control">{{ $article->body }}</textarea>
            </div>

            <div class="form-group">
                <label for="tags">Tags</label>
                <input id="tags" name="tags" value="{{ $articleTags }}">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Update</button>
            </div>
        </form>

    </div>
    <script>
        var tags = [
            @foreach ($allTags as $tag)
            {tag: "{{ $tag }}" },
            @endforeach
        ];
    </script>

@endsection