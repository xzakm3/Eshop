@extends('user.layout.app')
@section('title', 'Eshop hudobných nástrojov')

@section('content')
	<main id="landing-page-content">
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="d-block w-100" src="images/slider/guitar.jpeg" alt="First slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/slider/piano.jpeg" alt="Second slide">
				</div>
				<div class="carousel-item">
					<img class="d-block w-100" src="images/slider/drums.jpeg" alt="Third slide">
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<section id="products">
			<section>
				<h1>Novinky</h1>
				<div class="row">
					<div class="product col-lg-3 col-md-6 col-sm-6 col-7">
						<div class="card">
							<img class="card-img-top" src="{{asset('storage/product-images/'.$products[0]->image()->first()->file)}}" width="150" height="205"/>
							<div class="card-body">
								<h5 class="card-title">{{$products[0]->product()->first()->name}}</h5>
								<h6 class="card-subtitle">{{$products[0]->brand()->first()->name}}</h6>
								<p class="card-price">{{$products[0]->price}}€</p>
								<div class="row">
									<div class="col-md-6 card-buttons">
										<a href="{{route('buy_one_product', ['id' => $products[0]->id])}}" class="btn btn-dark">Kúpiť</a>
									</div>
									<div class="col-md-6 card-buttons">
										<a href="{{route('show_product', ['id' => $products[0]->id])}}" class="btn btn-light">Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="product col-lg-3 col-md-6 col-sm-6 col-7">
						<div class="product card">
							<img class="card-img-top" src="{{asset('storage/product-images/'.$products[1]->image()->first()->file)}}" width="150" height="205"/>
							<div class="card-body">
								<h5 class="card-title">{{$products[1]->product()->first()->name}}</h5>
								<h6 class="card-subtitle">{{$products[1]->brand()->first()->name}}</h6>
								<p class="card-price">{{$products[1]->price}}€</p>
								<div class="row">
									<div class="col-md-6 card-buttons">
										<a href="{{route('buy_one_product', ['id' => $products[1]->id])}}" class="btn btn-dark">Kúpiť</a>
									</div>
									<div class="col-md-6 card-buttons">
										<a href="{{route('show_product', ['id' => $products[1]->id])}}"  class="btn btn-light">Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="product col-lg-3 col-md-6 col-sm-6 col-7">
						<div class="product card">
							<img class="card-img-top" src="{{asset('storage/product-images/'.$products[2]->image()->first()->file)}}" width="150" height="205"/>
							<div class="card-body">
								<h5 class="card-title">{{$products[2]->product()->first()->name}}</h5>
								<h6 class="card-subtitle">{{$products[2]->brand()->first()->name}}</h6>
								<p class="card-price">{{$products[2]->price}}€</p>
								<div class="row">
									<div class="col-md-6 card-buttons">
										<a href="{{route('buy_one_product', ['id' => $products[2]->id])}}" class="btn btn-dark">Kúpiť</a>
									</div>
									<div class="col-md-6 card-buttons">
										<a href="{{route('show_product', ['id' => $products[2]->id])}}"  class="btn btn-light">Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="product col-lg-3 col-md-6 col-sm-6 col-7">
						<div class="product card">
							<img class="card-img-top" src="{{asset('storage/product-images/'.$products[3]->image()->first()->file)}}" width="150" height="205"/>
							<div class="card-body">
								<h5 class="card-title">{{$products[3]->product()->first()->name}}</h5>
								<h6 class="card-subtitle">{{$products[3]->brand()->first()->name}}</h6>
								<p class="card-price">{{$products[3]->price}}€</p>
								<div class="row">
									<div class="col-md-6 card-buttons">
										<a href="{{route('buy_one_product', ['id' => $products[3]->id])}}" class="btn btn-dark">Kúpiť</a>
									</div>
									<div class="col-md-6 card-buttons">
										<a href="{{route('show_product', ['id' => $products[3]->id])}}"  class="btn btn-light">Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<h1>Odporúčané pre Vás</h1>
				<div class="row">
					<div class="product col-lg-3 col-md-6 col-sm-6 col-7">
						<div class="card">
							<img class="card-img-top" src="{{asset('storage/product-images/'.$products[4]->image()->first()->file)}}" width="150" height="205"/>
							<div class="card-body">
								<h5 class="card-title">{{$products[4]->product()->first()->name}}</h5>
								<h6 class="card-subtitle">{{$products[4]->brand()->first()->name}}</h6>
								<p class="card-price">{{$products[4]->price}}€</p>
								<div class="row">
									<div class="col-md-6 card-buttons">
										<a href="{{route('buy_one_product', ['id' => $products[4]->id])}}" class="btn btn-dark">Kúpiť</a>
									</div>
									<div class="col-md-6 card-buttons">
										<a href="{{route('show_product', ['id' => $products[4]->id])}}"  class="btn btn-light">Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="product col-lg-3 col-md-6 col-sm-6 col-7">
						<div class="product card">
							<img class="card-img-top" src="{{asset('storage/product-images/'.$products[5]->image()->first()->file)}}" width="150" height="205"/>
							<div class="card-body">
								<h5 class="card-title">{{$products[5]->product()->first()->name}}</h5>
								<h6 class="card-subtitle">{{$products[5]->brand()->first()->name}}</h6>
								<p class="card-price">{{$products[5]->price}}€</p>
								<div class="row">
									<div class="col-md-6 card-buttons">
										<a href="{{route('buy_one_product', ['id' => $products[5]->id])}}" class="btn btn-dark">Kúpiť</a>
									</div>
									<div class="col-md-6 card-buttons">
										<a href="{{route('show_product', ['id' => $products[5]->id])}}"  class="btn btn-light">Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="product col-lg-3 col-md-6 col-sm-6 col-7">
						<div class="product card">
							<img class="card-img-top" src="{{asset('storage/product-images/'.$products[6]->image()->first()->file)}}" width="150" height="205"/>
							<div class="card-body">
								<h5 class="card-title">{{$products[6]->product()->first()->name}}</h5>
								<h6 class="card-subtitle">{{$products[6]->brand()->first()->name}}</h6>
								<p class="card-price">{{$products[6]->price}}€</p>
								<div class="row">
									<div class="col-md-6 card-buttons">
										<a href="{{route('buy_one_product', ['id' => $products[6]->id])}}" class="btn btn-dark">Kúpiť</a>
									</div>
									<div class="col-md-6 card-buttons">
										<a href="{{route('show_product', ['id' => $products[6]->id])}}"  class="btn btn-light">Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="product col-lg-3 col-md-6 col-sm-6 col-7">
						<div class="product card">
							<img class="card-img-top" src="{{asset('storage/product-images/'.$products[7]->image()->first()->file)}}" width="150" height="205"/>
							<div class="card-body">
								<h5 class="card-title">{{$products[7]->product()->first()->name}}</h5>
								<h6 class="card-subtitle">{{$products[7]->brand()->first()->name}}</h6>
								<p class="card-price">{{$products[7]->price}}€</p>
								<div class="row">
									<div class="col-md-6 card-buttons">
										<a href="{{route('buy_one_product', ['id' => $products[7]->id])}}" class="btn btn-dark">Kúpiť</a>
									</div>
									<div class="col-md-6 card-buttons">
										<a href="{{route('show_product', ['id' => $products[7]->id])}}"  class="btn btn-light">Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<section>
				<h1>Najpredávanejšie</h1>
				<div class="row">
					<div class="product col-lg-3 col-md-6 col-sm-6 col-7">
						<div class="card">
							<img class="card-img-top" src="{{asset('storage/product-images/'.$products[8]->image()->first()->file)}}" width="150" height="205"/>
							<div class="card-body">
								<h5 class="card-title">{{$products[8]->product()->first()->name}}</h5>
								<h6 class="card-subtitle">{{$products[8]->brand()->first()->name}}</h6>
								<p class="card-price">{{$products[8]->price}}€</p>
								<div class="row">
									<div class="col-md-6 card-buttons">
										<a href="{{route('buy_one_product', ['id' => $products[8]->id])}}" class="btn btn-dark">Kúpiť</a>
									</div>
									<div class="col-md-6 card-buttons">
										<a href="{{route('show_product', ['id' => $products[8]->id])}}" class="btn btn-light">Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="product col-lg-3 col-md-6 col-sm-6 col-7">
						<div class="product card">
							<img class="card-img-top" src="{{asset('storage/product-images/'.$products[9]->image()->first()->file)}}" width="150" height="205"/>
							<div class="card-body">
								<h5 class="card-title">{{$products[9]->product()->first()->name}}</h5>
								<h6 class="card-subtitle">{{$products[9]->brand()->first()->name}}</h6>
								<p class="card-price">{{$products[9]->price}}€</p>
								<div class="row">
									<div class="col-md-6 card-buttons">
										<a href="{{route('buy_one_product', ['id' => $products[9]->id])}}" class="btn btn-dark">Kúpiť</a>
									</div>
									<div class="col-md-6 card-buttons">
										<a href="{{route('show_product', ['id' => $products[9]->id])}}"  class="btn btn-light">Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="product col-lg-3 col-md-6 col-sm-6 col-7">
						<div class="product card">
							<img class="card-img-top" src="{{asset('storage/product-images/'.$products[10]->image()->first()->file)}}" width="150" height="205"/>
							<div class="card-body">
								<h5 class="card-title">{{$products[10]->product()->first()->name}}</h5>
								<h6 class="card-subtitle">{{$products[10]->brand()->first()->name}}</h6>
								<p class="card-price">{{$products[10]->price}}€</p>
								<div class="row">
									<div class="col-md-6 card-buttons">
										<a href="{{route('buy_one_product', ['id' => $products[10]->id])}}" class="btn btn-dark">Kúpiť</a>
									</div>
									<div class="col-md-6 card-buttons">
										<a href="{{route('show_product', ['id' => $products[10]->id])}}"  class="btn btn-light">Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
					<div class="product col-lg-3 col-md-6 col-sm-6 col-7">
						<div class="product card">
							<img class="card-img-top" src="{{asset('storage/product-images/'.$products[11]->image()->first()->file)}}" width="150" height="205"/>
							<div class="card-body">
								<h5 class="card-title">{{$products[11]->product()->first()->name}}</h5>
								<h6 class="card-subtitle">{{$products[11]->brand()->first()->name}}</h6>
								<p class="card-price">{{$products[11]->price}}€</p>
								<div class="row">
									<div class="col-md-6 card-buttons">
										<a href="{{route('buy_one_product', ['id' => $products[11]->id])}}" class="btn btn-dark">Kúpiť</a>
									</div>
									<div class="col-md-6 card-buttons">
										<a href="{{route('show_product', ['id' => $products[11]->id])}}"  class="btn btn-light">Detail</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
		</section>

	</main>
@endsection
