@extends('user.layout.app')
@section('title', 'Potvrdenie objednávky')

@section('content')
	<main>
		<section id="order-confirmation">
			<section id="shopping-steps">
				<span class="shopping-cart">Nákupný košík</span>
				<i class="fas fa-chevron-right"></i>
				<span class="delivery-and-payment">Doručenie a platba</span>
				<i class="fas fa-chevron-right"></i>
				<span class="last-control">
							Posledná kontrola
						</span>
				<i class="fas fa-chevron-right"></i>
				<span class="order-confirmation">
							<b>Potvrdenie objednávky</b>
						</span>
			</section>
			<section id="order-finished-info">
				<div class="alert alert-light" role="alert">
					Hotovo.
				</div>
				<p>
					<b>Objednávka bola spracovaná.</b>
					<br> Na Váš email príde potvrdenie o prijatí objednávky.
				</p>
				<p></p>
			</section>
			<section id="summary-buttons">
				<div class="row">
					<div class="col-md-6">
					</div>
					<div class="col-md-6 col-sm-12 next">
						<a href="{{ route('landing_page') }}" class="btn btn-danger">Do obchodu
							<i class="fas fa-chevron-right"></i>
						</a>
					</div>
				</div>
			</section>
		</section>
	</main>
@endsection