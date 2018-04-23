@extends('user.layout.app')
@section('title', 'Posledná kontrola')

@section('content')
	<main>
		<section id="last-control">
			<section id="shopping-steps">
				<span class="shopping-cart">Nákupný košík</span>
				<i class="fas fa-chevron-right"></i>
				<span class="delivery-and-payment">Doručenie a platba</span>
				<i class="fas fa-chevron-right"></i>
				<span class="last-control">
							<b>Posledná kontrola</b>
						</span>
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
				@foreach($products as $product)
					<tr>
						<th scope="row">
							<img src="{{asset('storage/product-images/'.$product->image)}}" width="100" height="auto">
						</th>
						<td>{{$product->name}}</td>
						<td>{{$product->price}} €</td>
						<td>
							{{$product->count}}
						</td>
						<td>{{$product->price * $product->count}}€</td>
						<td></td>
					</tr>
				@endforeach
				</tbody>
			</table>
			<section id="summary-info">
				<div class="row">
					<div class="col-6">
						<span>Doprava</span>
					</div>
					<div class="col-6">
								<span>
									<b>{{ucfirst($delivery)}}</b>
								</span>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<span>Platba</span>
					</div>
					<div class="col-6">
								<span>
									<b>{{ucfirst($payment)}}</b>
								</span>
					</div>
				</div>
				<div class="row">
					<div class="col-6">
						<span>Celkom bez DPH</span>
					</div>
					<div class="col-6">
								<span>
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
						<a href="{{ route('delivery_and_pay') }}" class="btn btn-secondary">
							<i class="fas fa-chevron-left"></i> Doručenie a platba</a>
					</div>
					<div class="col-md-6 col-sm-12 next">
						<a href="{{ route('order_confirmation') }}" class="btn btn-danger">Záväzne objednať
							<i class="fas fa-chevron-right"></i>
						</a>
					</div>
				</div>
			</section>
		</section>
	</main>
@endsection