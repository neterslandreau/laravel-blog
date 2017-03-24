<div class="blog-masthead">
	<div class="container">
		<nav class="nav blog-nav">
			<a class="glyphicon glyphicon-home nav-link" href="/"><span class=""> Home</span></a>
			@if (Auth::check())
				<a class="glyphicon glyphicon-plus-sign nav-link" href="/articles/create"><span> New</span></a>
				@if (isset($owner) && ($owner))
					<a class="glyphicon glyphicon-pencil nav-link" href="/articles/{{ $article->slug }}/edit" role="button"><span> Edit</span></a>
					<a class="glyphicon glyphicon-trash nav-link" href="/articles/{{ $article->slug }}/delete" role="button"><span> Trash</span></a>
			   @endif

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

