<div class="blog-post">
    <h2 class="blog-post-title">
        <a href="/articles/{{ $article->id }}">
            {{ $article->title }}
        </a>
    </h2>

    <p class="blog-post-meta">

        <a href="#">{{ $article->user->name }}</a> on
        {{ $article->created_at->toFormattedDateString() }}

    </p>

    {{ $article->body }}

</div>
