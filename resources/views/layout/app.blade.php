<!doctype html>
<html lang="sk">
<head>
	@include('layout.partials.head')
</head>

<body>
	<div class="main-container">
		@include('layout.partials.header')
		@include('layout.partials.aside')
		<main role="main" class="container">
			@yield('content')
		</main>
		@include('layout.partials.footer')
	</div>
</body>
</html>