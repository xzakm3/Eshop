@extends('admin.layout.app')
@section('title', 'Domov')

@section('content')
	<main>
		<section id="dashboard">
			<p>
				Ahoj <b>{{Auth::user()->email}}</b>
			</p>
		</section>
	</main>
@endsection
