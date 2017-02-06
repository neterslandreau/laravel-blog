@extends ('layouts.blog-layout')

@section ('content')
    @include('layouts.blog-header')

<div class="col-sm-8 blog-main">

    @foreach ($articles as $article)

        @include('articles.article')

    @endforeach

    <nav class="blog-pagination">
        <a class="btn btn-outline-primary" href="#">Older</a>
        <a class="btn btn-outline-secondary disabled" href="#">Newer</a>
    </nav>

</div>
@endsection