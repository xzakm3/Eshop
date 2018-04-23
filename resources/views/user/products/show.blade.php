@extends('user.layout.app')
@section('title', 'Detail produktu')

@section('content')
	@if (session('message'))
		<div class="alert alert-danger">
			{{ session('message') }}
		</div>
	@endif
	<main>
		<section id="product-info">
			<section class="row">
				<div class="col-md-8">
					<img src="{{asset('storage/product-images/'.$product->image()->first()->file)}}" width="70%" height/>
				</div>
				<div class="col-md-4 structural">
					<h4>{{$product->product()->first()->name}}</h4>
					<p>
						<b>Dostupnosť:</b>
						@if(($product->count) > 0)
							Skladom
						@else
							Nie je na sklade
						@endif
					</p>
					<p>
						<b>Kód:</b> {{$product->code}}</p>
					<p>
						<b>Značka:</b> {{$product->brand()->first()->name}}</p>
					<p>
						<b>Cena s DPH:</b> {{$product->price}}€</p>
					<p>
						<b>Cena bez DPH:</b> {{$product->price * 0.8}}€</p>
					<br>
					<p>
						<b>Na sklade:</b>
						<em>{{$product->count}}</em> ks
					</p>
					<form class="form-inline" action="{{ route('buy_many_product', ['id' => $product->id]) }}" method="POST">
						@csrf
						<div class="form-group mx-sm-3 mb-2">
							<label for="inputCount" class="sr-only">Počet kusov</label>
							<input type="number" name="count" class="form-control" id="inputCount" placeholder="1">
						</div>
						<button type="submit" class="btn btn-secondary mb-2">
							<i class="fas fa-shopping-cart fa"></i> Vlož to košíka
						</button>
					</form>
				</div>
			</section>
			<section class="card">
				<div class="card-header">
					Popis
				</div>
				<div class="card-body">
					<p class="card-text">{{$product->product()->first()->description}}</p>
				</div>
			</section>
			<section>
				<h2>Podobné produkty</h2>
				<div class="row">
					@foreach($products as $product)
						<div class="product col-lg-3 col-md-6 col-sm-6 col-7">
							<div class="card">
								<img class="card-img-top" src="{{asset('storage/product-images/'.$product->image()->first()->file)}}" alt="Card image cap" width="150" height="auto">
								<div class="card-body">
									<h5 class="card-title">{{$product->product()->first()->name}}</h5>
									<h6 class="card-subtitle">{{$product->brand()->first()->name}}</h6>
									<p class="card-price">{{$product->price}}€</p>
									<div class="row">
										<div class="col-md-6 card-buttons">
											<a href="#" class="btn btn-dark">Kúpiť</a>
										</div>
										<div class="col-md-6 card-buttons">
											<a href="{{route('show_product', ['id' => $product->id])}}" class="btn btn-light">Detail</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endforeach
				</div>
			</section>
		</section>
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
	</main>
@endsection