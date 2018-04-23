@extends('admin.layout.app')
@section('title', 'Upraviť produkt')

@section('content')
	<main>
		@if (session('message'))
			<div class="alert alert-success">
				{{ session('message') }}
			</div>
		@endif
		<section id="show-product">
			<h1>Upraviť produkt</h1>
			<form id="delete-form" action="{{ route('delete_product', ['id' => $product->id]) }}" method="POST" style="display: none;">
				<input type="hidden" name="_method" value="DELETE">
				@csrf
			</form>
			<form action="{{ route('update_product', ['id' => $product->id]) }}" enctype="multipart/form-data" method="post">
				@csrf
				<input type="hidden" name="_method" value="PUT">
				<div class="form-group row">
					<label for="inputCodeOfProduct" class="col-2 col-form-label col-form-label-lg">Kód:</label>
					<div class="col-10">
						<input type="text" name="product_code" class="form-control form-control-lg" id="inputCodeOfProduct" placeholder="Názov produktu..." value="{{$product->code}}" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputNameOfProduct" class="col-2 col-form-label col-form-label-lg">Názov:</label>
					<div class="col-10">
						<input type="text" name="product_name" class="form-control form-control-lg" id="inputNameOfProduct" placeholder="Názov produktu..." value="{{$product->product()->first()->name}}" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputCategoryName" class="col-2 col-form-label col-form-label-lg">Kategória:</label>
					<div class="col-10">
						<select class="custom-select select-category" id="inputCategoryName" name="chosen_category">
							@foreach ($categories as $category)
								<option value="{{$category->id}}"
								@if ($category->id == $selected_category->id)
									selected
								@endif
								>{{ucfirst($category->name)}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputSubcategoryName" class="col-2 col-form-label col-form-label-lg" name="chosen_subcategory">Podkategória:</label>
					<div class="col-10">
						<select class="custom-select select-subcategory" id="inputSubcategoryName" name="chosen_subcategory">
							@foreach ($selected_category->subcategories()->get() as $subcategory)
								<option value="{{$subcategory->id}}"
										@if ($subcategory->id == $selected_subcategory->id)
										selected
										@endif
								>{{ucfirst($subcategory->name)}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<!--<div class="form-group row">
					<label for="inputAtribute" class="col-2 col-form-label col-form-label-lg">Atribút:</label>
					<div class="col-4">
						<input type="text" class="form-control form-control-lg" id="inputAtribute" placeholder="Názov, e.g. Farba">
					</div>
					<div class="col-3">
						<input type="text" class="form-control form-control-lg" placeholder="Hodnota, e.g. biela">
					</div>
					<div class="col-3">
						<a href="#" class="btn btn-secondary">Vytvor</a>
					</div>
				</div> -->
				<div class="form-group row">
					<label class="col-2 col-form-label col-form-label-lg"></label>
					<div class="col-10">
						<div class="custom-file">
							<input type="file" name="product_image" class="custom-file-input" id="customFile">
							<label class="custom-file-label" for="customFile">Zmeniť obrázok...</label>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label class="col-2 col-form-label col-form-label-lg"></label>
					<div class="col-10">
						<img src="{{asset('storage/product-images/'.$product->image()->first()->file)}}" width="350" height="auto"/>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputBrandName" class="col-2 col-form-label col-form-label-lg">Značka:</label>
					<div class="col-10">
						<input type="text" name="product_brand" class="form-control form-control-lg" id="inputBrandName" placeholder="Značka produktu..." value="{{$product->brand->first()->name}}" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPrice" class="col-2 col-form-label col-form-label-lg">Cena:</label>
					<div class="col-10">
						<input type="number" name="product_price" class="form-control form-control-lg" id="inputPrice" placeholder="Cena produktu s DPH" value="{{$product->price}}" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputCountOfProducts" class="col-2 col-form-label col-form-label-lg">Sklad:</label>
					<div class="col-10">
						<input type="number" name="product_count" class="form-control form-control-lg" id="inputCountOfProducts" placeholder="Počet kusov na sklade..."
							   value="{{$product->count}}" required>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputProductInfo" class="col-2 col-form-label col-form-label-lg">Popis:</label>
					<div class="col-10">
								<textarea name="product_description" class="form-control form-control-lg" id="inputProductInfo" rows="3" placeholder="Popis..." required>{{$product->product()->first()->description}}</textarea>
					</div>
				</div>
				<div class="form-group">
					<button type="button" class="btn btn-danger" onclick="event.preventDefault();
							document.getElementById('delete-form').submit();">Zmazať</button>
					<button type="submit" class="btn btn-primary">Uložiť</button>
				</div>
			</form>
		</section>
	</main>
@endsection