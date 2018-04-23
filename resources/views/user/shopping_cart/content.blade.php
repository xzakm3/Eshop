@extends('user.layout.app')
@section('title', 'Obsah košíka')

@section('content')
	<main>
		@if(isset($products))
			<?php $i = 0; ?>
			@foreach($products as $product)
				<form id="delete-product-form-{{$i}}" action="{{ route('remove_product_from_shopping_cart', ['product_name' => $product->name, 'product_price' => $product->price]) }}" method="POST" style="display: none;">
					<input type="hidden" name="_method" value="DELETE">
					@csrf
				</form>
				<?php $i++; ?>
			@endforeach
		@endif
		<section id="shopping-cart-content">
			<section id="shopping-steps">
						<span class="shopping-cart">
							<b>Nákupný košík</b>
						</span>
				<i class="fas fa-chevron-right"></i>
				<span class="delivery-and-payment">Doručenie a platba</span>
				<i class="fas fa-chevron-right"></i>
				<span class="last-control">Posledná kontrola</span>
				<i class="fas fa-chevron-right"></i>
				<span class="order-confirmation">Potvrdenie objednávky</span>
			</section>
			<table class="table">
				<thead>
				<tr>
					<th scope="col"></th>
					<th scope="col">Položka</th>
					<th scope="col">Jednotková cena</th>
					<th scope="col">Množstvo</th>
					<th scope="col">Cena spolu</th>
					<th scope="col"></th>
				</tr>
				</thead>
				<tbody>
				@if(isset($products))
					<?php $i = 0; ?>
					<form id="form-routing-to-delivery-and-payment" action="{{ route('update_shopping_cart') }}" method="POST" >
						@csrf
						@foreach($products as $product)
							<tr>
								<th scope="row">
									<img src="{{asset('storage/product-images/'.$product->image)}}" width="100" height="auto">
								</th>
								<td> <input type="hidden" name="names[]" value="{{$product->name}}">
									<a href="{{route('show_product', ['id' => $product->product_instance_id])}}">
										{{$product->name}}
									</a>
								</td>
								<td> {{$product->price}} €</td>
								<td>
									<a class="btn quantity-minus" onclick="productMinusOne(this)">
										<i class="fas fa-minus"></i>
									</a>
									<span class="count_of_products"><input type="hidden" name="counts[]" value="{{$product->count}}">{{$product->count}}</span>
									<a class="btn quantity-plus" onclick="productPlusOne(this)">
										<i class="fas fa-plus"></i>
									</a>
								</td>
								<td>{{$product->count * $product->price}}€</td>
								<td>
									<a href="#" onclick="event.preventDefault();
											document.getElementById('delete-product-form-{{$i}}').submit();">
										<i class="fas fa-times"></i>
									</a>
								</td>
							</tr>
							<?php $i++; ?>
						@endforeach
					</form>
				@endif
				</tbody>
			</table>
			@if($total_count > 0)
				<section id="summary-info">
					<div class="row">
						<div class="col-6">
							<span class="price-without-DPH">Celkom bez DPH</span>
						</div>
						<div class="col-6">
									<span class="price-without-DPH">
										<b>{{$total_count * 0.8}} €</b>
									</span>
						</div>
					</div>
					<div class="row">
						<div class="col-6">
							<span class="price-with-DPH">Celkom s DPH</span>
						</div>
						<div class="col-6">
							<span class="price-with-DPH">{{$total_count}} €</span>
						</div>
					</div>
				</section>
				<section id="summary-buttons">
					<div class="row">
						<div class="col-md-6 col-sm-12 back">
							<a href="{{route('landing_page')}}" class="btn btn-secondary">
								<i class="fas fa-chevron-left"></i> Pokračovať v nákupe</a>
						</div>
						<div class="col-md-6 col-sm-12 next">
							<button class="btn btn-danger"  onclick="event.preventDefault();
									document.getElementById('form-routing-to-delivery-and-payment').submit();">Prejsť k objednávke
								<i class="fas fa-chevron-right"></i>
							</button>
						</div>
					</div>
				</section>
			@endif
		</section>
	</main>
@endsection