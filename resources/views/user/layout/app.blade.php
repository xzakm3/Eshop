<!doctype html>
<html lang="sk">
<head>
	@include('user.layout.partials.head')
</head>

<body>
	<div class="main-container">
		@include('user.layout.partials.header')
		@include('user.layout.partials.aside')
		@yield('content')
		@include('user.layout.partials.footer')
	</div>
</body>
</html>