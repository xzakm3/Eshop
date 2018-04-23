@extends('user.layout.app')
@section('title', 'Prehľad produktov')

@section('content')
	<main id="landing-page-content">
		@if(count($products) > 0)
			<section id="filter-panel">
				<form class="form-inline row" action="{{ route('customer_filtered_products', ['category' => $selected_category->name, '$subcategory' => $selected_subcategory->name]) }}" method="GET">
					@csrf
					<div class="col-md-2 col-sm-6">
						<select class="custom-select" name="chosen_brand">
							<option value="0" selected>Výrobca</option>
							@foreach ($brands as $brand)
								<option value="{{$brand->id}}"
										@if (isset($selected_brand) && $brand->id == $selected_brand->id)
											selected
										@endif
								>{{$brand->name}}</option>
							@endforeach
						</select>
					</div>
					<div class="col-md-2 col-sm-6">
						<select class="custom-select" name="chosen_priority">
							<option value="0"
									@if($action_id == 0)
										selected
									@endif>Zoradiť podľa</option>
							<option value="1"
									@if($action_id == 1)
										selected
									@endif>Cena zostupne</option>
							<option value="2"
									@if($action_id == 2)
										selected
									@endif>Cena vzostupne</option>
							<option value="3"
									@if($action_id == 3)
										selected
									@endif>Názov zostupne</option>
							<option value="4"
									@if($action_id == 4)
										selected
									@endif>Názov vzostupne</option>
							<option value="5"
									@if($action_id == 5)
										selected
									@endif>Najnovšie</option>
							<option value="6"
									@if($action_id == 6)
										selected
									@endif>Najstaršie</option>
						</select>
					</div>
					<div class="col-md-3 col-sm-12">
						<button type="submit" class="btn btn-secondary">Filtrovať</button>
					</div>
					<div class="col-md-5 col-sm-12">
						<nav>
							{{ $products->appends(request()->input())->links() }}
						</nav>
					</div>
				</form>
			</section>
			<section id="filtered-products">
				<h2> Akustické gitary </h2>
				<div class="row">
					@if(count($products) > 4)
						<?php $first_part_last = 4; ?>
					@else
						<?php $first_part_last = count($products); ?>
					@endif
					@for ($i = 0; $i < $first_part_last; $i++)
						<div class="product col-lg-3 col-md-6 col-sm-6 col-7">
							<div class="card">
								<img class="card-img-top"src="{{asset('storage/product-images/'.$products[$i]->image()->first()->file)}}" alt="Card image cap" width="150" height="205">
								<div class="card-body">
									<h5 class="card-title">{{$products[$i]->product()->first()->name}}</h5>
									<h6 class="card-subtitle">{{$products[$i]->brand()->first()->name}}</h6>
									<p class="card-price">{{$products[$i]->price}}€</p>
									<div class="row">
										<div class="col-md-6 card-buttons">
											<a href="{{route('buy_one_product', ['id' => $products[$i]->id])}}" class="btn btn-dark">Kúpiť</a>
										</div>
										<div class="col-md-6 card-buttons">
											<a href="{{route('show_product', ['id' => $products[$i]->id])}}" class="btn btn-light">Detail</a>
										</div>
									</div>
								</div>
							</div>
						</div>
					@endfor
				</div>
				@if(count($products) > 4)
					@if(count($products) == 8)
						<?php $second_part_last = 8; ?>
					@else
						<?php $second_part_last = count($products); ?>
					@endif
					<div class="row">
						@for ($i = 4; $i < $second_part_last; $i++)
							<div class="product col-lg-3 col-md-6 col-sm-6 col-7">
								<div class="card">
									<img class="card-img-top"src="{{asset('storage/product-images/'.$products[$i]->image()->first()->file)}}" alt="Card image cap" width="150" height="205">
									<div class="card-body">
										<h5 class="card-title">{{$products[$i]->product()->first()->name}}</h5>
										<h6 class="card-subtitle">{{$products[$i]->brand()->first()->name}}</h6>
										<p class="card-price">{{$products[$i]->price}}€</p>
										<div class="row">
											<div class="col-md-6 card-buttons">
												<a href="{{route('buy_one_product', ['id' => $products[$i]->id])}}" class="btn btn-dark">Kúpiť</a>
											</div>
											<div class="col-md-6 card-buttons">
												<a href="{{route('show_product', ['id' => $products[$i]->id])}}" class="btn btn-light">Detail</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						@endfor
					</div>
				@endif
				<div class="row">
					<div class="col-sm-12">
						<nav>
							{{ $products->appends(request()->input())->links() }}
						</nav>
					</div>
				</div>

			</section>
		@else
			<h2> Žiadne produkty sa nenašli. </h2>
		@endif
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