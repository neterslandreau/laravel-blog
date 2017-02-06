<div class="col-sm-3 offset-sm-1 blog-sidebar">
    <div class="sidebar-module sidebar-module-inset">
        <h4><em>The Neters Group</em></h4>
        <p>
            Are you tired of hearing news you really don't want to hear?
            Spend some time here with us, and we'll show you what really bad news can be like!
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
    <?php /* * ?>
    <div class="sidebar-module">
        <h4>Elsewhere</h4>
        <ol class="list-unstyled">
            <li><a href="#">GitHub</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Facebook</a></li>
        </ol>
    </div>
    <?php /* */ ?>
</div>
