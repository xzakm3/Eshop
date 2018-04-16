<header>
	<div class="special-menu-part">
                <span class="login-register">
                    <a href="#" data-toggle="modal" data-target="#exampleModal">Prihlásiť sa</a> |
                    <a href="#">Registrovať</a>
                </span>
	</div>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>

		<div class="collapse navbar-collapse" id="navbarSupportedContent">
			<a class="navbar-brand" href="#">
				<img src="images/logo.png" width="130px" height="auto" alt="Logo">
			</a>
			<ul class="navbar-nav mr-auto">
				<li class="nav-item active">
					<a class="nav-link" href="#">Domov
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
			<i class="fas fa-shopping-cart fa-2x"></i>
		</div>
	</nav>

	<div class="row search-row">
		<div class="col-md-4 offset-md-4 col-sm-10 offset-sm-1">
			<form class="form">
				<input class="form-control" type="search" placeholder="Search" aria-label="Search">
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
					<form>
						<div class="form-group">
							<label for="loginName" class="col-form-label">Email:</label>
							<input type="text" class="form-control" id="loginName">
						</div>
						<div class="form-group">
							<label for="inputPassword" class="col-form-label">Heslo:</label>
							<input type="password" class="form-control" id="inputPassword">
							</textarea>
						</div>
					</form>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-secondary">Prihlásiť</button>
				</div>
			</div>
		</div>
	</div>
</header>