<header>
	<div class="special-menu-part">
		@guest
			<span class="login-register">
				<a href="{{ route('login') }}" data-toggle="modal" data-target="#exampleModal">{{ __('Prihlásiť sa') }}</a> |
				<a href="{{ route('register') }}">{{ __('Registrovať sa') }}</a>
			</span>
		@else
			<ul class="navbar-nav ml-auto">
				<!-- Authentication Links -->
				<li class="nav-item dropdown">
					<a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
						{{ Auth::user()->email }} <span class="caret"></span>
					</a>

					<div class="dropdown-menu" aria-labelledby="navbarDropdown" style="left: unset !important;">
						@if (Auth::user()->hasRole("ADMIN"))
							<a class="dropdown-item" href="{{ route('admin') }}">
								{{ __('Admin Profil') }}
							</a>
							<div class="dropdown-divider"></div>
						@endif
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
		@endguest
	</div>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<a class="navbar-brand" href="{{ route('landing_page') }}">
				<img src="http://localhost:8000/images/logo/logo.png" width="130px" height="auto" alt="Logo">
			</a>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="{{ route('landing_page') }}">Domov
						<span class="sr-only">(current)</span>
					</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">O nás</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Poradňa</a>
				</li>
				<li class="nav-item">
					<a class="nav-link" href="#">Kontakt</a>
				</li>
			</ul>
		</div>
		<div>
			<a href="{{ route('customer_shopping_cart') }}">
				<i class="fas fa-shopping-cart fa-2x"></i>
			</a>
		</div>
	</nav>

	<div class="row search-row">
		<div class="col-md-4 offset-md-4 col-sm-10 offset-sm-1">
			<form class="form"  action="{{ route('customer_search_products') }}" method="GET">
				<input class="form-control" type="search" placeholder="Search" aria-label="Search" name="search_input">
				<button class="btn search-button" type="submit">
					<i class="fas fa-search"></i>
				</button>
			</form>
		</div>
	</div>
	<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		<div class="modal-dialog" role="document">
			<div class="modal-content">
				<div class="modal-header">
					<h5 class="modal-title" id="exampleModalLabel">Prihlásenie</h5>
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
					</button>
				</div>
				<div class="modal-body">
					<form id="login-form" method="POST" action="{{ route('login') }}">
						@csrf
						<div class="form-group">
							<label for="loginEmail" class="col-form-label">{{ __('Email') }}:</label>
							<input type="email" id="loginEmail" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

							@if ($errors->has('email'))
								<span class="invalid-feedback">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
							@endif
						</div>
						<div class="form-group">
							<label for="inputPassword" class="col-form-label">{{ __('Heslo') }}:</label>
							<input type="password" id="inputPassword" class="form-control" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

							@if ($errors->has('password'))
								<span class="invalid-feedback">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
							@endif
						</div>
						<button type="submit" class="btn btn-secondary">Prihlásiť sa</button>
					</form>
				</div>
			</div>
		</div>
	</div>
</header>