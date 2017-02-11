@extends('layouts.blog-layout')

@section ('content')

    <div class="col-sm-8 blog-main">

    <h1>Create Article</h1>

        <hr>

        @include ('layouts.errors')
        <form method="post" action="/articles">

            {{ csrf_field() }}

            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>

            <div class="form-group">
                <label for="body">Body</label>
                <textarea id="body" name="body" class="form-control"></textarea>
            </div>

            <div class="form-group">
                <label for="tags">Tags</label>
                <input id="tags" name="tags">
            </div>

            <div class="form-group">
                <button type="submit" class="btn btn-primary">Publish</button>
            </div>
        </form>

    </div>
    <script>
        var tags = [
            @foreach ($tags as $tag)
            {tag: "{{ $tag }}" },
            @endforeach
        ];
    </script>

@endsection