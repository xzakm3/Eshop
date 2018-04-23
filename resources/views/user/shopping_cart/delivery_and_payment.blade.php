@extends('user.layout.app')
@section('title', 'Výber platby a doručenia')

@section('content')
	<main>
		<section id="delivery-and-payment">
			<section id="shopping-steps">
				<span class="shopping-cart">Nákupný košík</span>
				<i class="fas fa-chevron-right"></i>
				<span class="delivery-and-payment">
							<b>Doručenie a platba</b>
						</span>
				<i class="fas fa-chevron-right"></i>
				<span class="last-control">Posledná kontrola</span>
				<i class="fas fa-chevron-right"></i>
				<span class="order-confirmation">Potvrdenie objednávky</span>
			</section>
			<section id="form">
				<form action="{{ route('update_delivery_data') }}" method="POST">
					@csrf
					@if(Auth::check())
						<div class="row d-md-none">
							<div class="col-sm-12">
								<button type="button" class="btn btn-secondary">Preniesť údaje z konta</button>
							</div>
						</div>
					@endif
					<div class="row">
						<div class="form-group col-md-6 col-sm-12">
							<label for="inputEmail">Email *</label>
							<input type="email" name="user_email" class="form-control" id="inputEmail" placeholder="Email" required>
						</div>
						<div class="form-group col-md-6 col-sm-12 d-none d-md-block">
							<label for="delivery-method-1">Spôsob doručenia *</label>
							<select class="custom-select select-deliver" id="delivery-method-1" name="user_delivery_method_1">
								@foreach ($deliveries as $delivery)
									<option value="{{$delivery->id}}">{{ucfirst($delivery->name)}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6 col-sm-12">
							<label for="inputPhoneNumber">Telefónne číslo *</label>
							<input type="text" name="user_phone_number" class="form-control" id="inputPhoneNumber" placeholder="e.g. +421 902 902 902" required>
						</div>
						<div class="form-group col-md-6 col-sm-12 d-none d-md-block">
							<label for="payment-method-1">Spôsob platby *</label>
							<select class="custom-select select-payment-method" id="payment-method-1" name="user_payment_method_1">
								@foreach ($payments as $payment)
									<option value="{{$payment->id}}">{{ucfirst($payment->name)}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="row">
						<div class="form-group col-md-6 col-sm-12">
							<h2>Fakturačné údaje</h2>
						</div>
						@if(Auth::check())
							<div class="form-group col-md-6 d-none d-md-block">
								<button type="button" class="btn btn-secondary">Preniesť údaje z konta</button>
							</div>
						@endif
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-sm-12">
							<label for="inputName">Meno *</label>
							<input type="text" name="user_name" class="form-control" id="inputName" placeholder="Meno" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-sm-12">
							<label for="inputSurname">Priezvisko *</label>
							<input type="text" name="user_surname" class="form-control" id="inputSurname" placeholder="Priezvisko" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-sm-12">
							<label for="inputAddress">Ulica a číslo domu *</label>
							<input type="text" name="user_address" class="form-control" id="inputAddress" placeholder="e.g. Jašíková 21" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-sm-12">
							<label for="inputCity">Mesto *</label>
							<input type="text" name="user_city" class="form-control" id="inputCity" placeholder="e.g. Bratislava" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-sm-12">
							<label for="inputPSC">PSČ *</label>
							<input type="number" name="user_psc" class="form-control" id="inputPSC" placeholder="e.g. 82103" required>
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-sm-12">
							<label for="inputICO">IČO</label>
							<input type="number" name="user_ico" class="form-control" id="inputICO" placeholder="e.g. 12345678">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-sm-12">
							<label for="inputDIC">DIČ</label>
							<input type="number" name="user_dic" class="form-control" id="inputDIC" placeholder="e.g. 1234512345">
						</div>
					</div>
					<div class="form-row">
						<div class="form-group col-md-6 col-sm-12">
							<label for="inputICDPH">IČ DPH</label>
							<input type="text" name="user_icdph" class="form-control" id="inputICDPH" placeholder="e.g. SK1234512345">
						</div>
					</div>
					<div class="row d-md-none">
						<div class="form-group col-sm-12">
							<label for="delivery-method-2">Spôsob doručenia *</label>
							<select class="custom-select select-deliver" id="delivery-method-2" name="user_delivery_method_2">
								@foreach ($deliveries as $delivery)
									<option value="{{$delivery->id}}">{{ucfirst($delivery->name)}}</option>
								@endforeach
							</select>
						</div>
					</div>
					<div class="row d-md-none">
						<div class="form-group col-sm-12">
							<label for="payment-method-2">Spôsob platby *</label>
							<select class="custom-select select-payment-method" id="payment-method-2" name="user_payment_method_2">
								@foreach ($payments as $payment)
									<option value="{{$payment->id}}">{{ucfirst($payment->name)}}</option>
								@endforeach
							</select>
						</div>
					</div>

						<section id="summary-buttons">
							<div class="row">
								<div class="col-md-6 col-sm-12 back">
									<a href="{{ route('customer_shopping_cart') }}" class="btn btn-secondary">
										<i class="fas fa-chevron-left"></i> Nákupný košík</a>
								</div>
								<div class="col-md-6 col-sm-12 next">
									<button type="submit"  class="btn btn-danger" id="button-last-control">Posledná kontrola
										<i class="fas fa-chevron-right"></i>
									</button>
								</div>
							</div>
						</section>
				</form>
			</section>
		</section>
	</main>
@endsection