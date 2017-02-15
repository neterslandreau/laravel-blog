<div class="col-sm-3 offset-sm-1 blog-sidebar">

    <div class="sidebar-module sidebar-module-inset well">
        <h4><em>The Neters Group</em></h4>
        <p>
            Are you tired of hearing news you really don't want to hear?
            Spend some time here with us, and we'll show you what really boring news can be like!
        </p>
    </div>

    <div class="sidebar-module">
        <h4>Archives</h4>
        <ol class="list-unstyled">

            @foreach ($archives as $archive)
                <li>
                    <a href="\?month={{ $archive->month }}&year={{ $archive->year }}">
                        {{ $archive->month }} {{ $archive->year }}
                    </a>
                </li>
            @endforeach

        </ol>
    </div>

    <div class="sidebar-module">
        <h4>Tags</h4>
        <div id="tagcloud">

        @foreach ($tags as $tag)
            <a href="/articles/tagged/{{ $tag->slug }}" rel="{{ $tag->count }}">{{ $tag->name }}</a>
        @endforeach
        
        </div>
        
    </div>

</div>
