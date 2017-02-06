<div class="blog-masthead">
    <div class="container">
        <nav class="nav blog-nav">
            <a class="nav-link active" href="/">Home</a>
            <a class="nav-link" href="#">New features</a>
            <a class="nav-link" href="#">Press</a>
            @if (Auth::check())
                <a class="nav-link" href="/articles/create">Add Article</a>

                <a class="nav-link ml-auto" href="{{ route('logout') }}"
                   onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
                    Logout as {{ Auth::user()->username }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    {{ csrf_field() }}
                </form>
            @else
                <a class="nav-link ml-auto" href="/login">Log In</a>
                <a class="nav-link" href="/register">Register</a>
            @endif
        </nav>
    </div>
</div>

