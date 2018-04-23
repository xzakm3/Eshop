<header>
	<nav class="navbar navbar-expand-lg navbar-light bg-light justify-content-between">
		<a class="navbar-brand" href="{{ route('landing_page') }}">
			<img src="{{asset('images/logo/logo.png')}}" width="130px" height="auto" alt="Logo">
		</a>
		<ul class="navbar-nav">
			<li class="nav-item dropdown">
				<a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
					{{ Auth::user()->email }}
				</a>
				<div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
					<a class="dropdown-item" href="{{ route('logout') }}"
					   onclick="event.preventDefault();
													 document.getElementById('logout-form').submit();">
						{{ __('Odhlásiť sa') }}
					</a>

					<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
						@csrf
					</form>
				</div>
			</li>
		</ul>
	</nav>
</header>