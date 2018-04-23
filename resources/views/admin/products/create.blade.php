@extends('admin.layout.app')
@section('title', 'Nový produkt')

@section('content')
	<main>
		@if (session('message'))
			<div class="alert alert-success">
				{{ session('message') }}
			</div>
		@endif
		<section id="add-product">
			<h1>Nový produkt</h1>
			<form action="/admin/products" enctype="multipart/form-data" method="post">
				@csrf
				<div class="form-group row">
					<label for="inputCodeOfProduct" class="col-2 col-form-label col-form-label-lg">Kód:</label>
					<div class="col-10">
						<input type="text" name="code" class="form-control form-control-lg" id="inputCodeOfProduct" placeholder="Kód produktu..." required>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputNameOfProduct" class="col-2 col-form-label col-form-label-lg">Názov:</label>
					<div class="col-10">
						<input type="text" name="product_name" class="form-control form-control-lg" id="inputNameOfProduct" placeholder="Názov produktu..." required>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputCategoryName" class="col-2 col-form-label col-form-label-lg">Kategória:</label>
					<div class="col-10">
						<select class="custom-select select-category" id="inputCategoryName" name="chosen_category">
							@foreach ($categories as $category)
								<option value="{{$category->id}}">{{ucfirst($category->name)}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputSubcategoryName" class="col-2 col-form-label col-form-label-lg">Podkategória:</label>
					<div class="col-10">
						<select class="custom-select select-subcategory" id="inputSubcategoryName" name="chosen_subcategory">
							@foreach ($categories[0]->subcategories as $subcategory)
								<option value="{{$subcategory->id}}">{{ucfirst($subcategory->name)}}</option>
							@endforeach
						</select>
					</div>
				</div>
				<!-- <div class="form-group row">
					<label for="inputAtribute" class="col-2 col-form-label col-form-label-lg">Atribút:</label>
					<div class="col-4">
						<input type="text" name="attribute_name" class="form-control form-control-lg" id="inputAtribute" placeholder="Názov atribútu...">
					</div>
					<div class="col-3">
						<input type="text" name="attribute_value" class="form-control form-control-lg" placeholder="Hodnota...">
					</div>
					<div class="col-3">
						<a id="add-attribute" class="btn btn-secondary">Vytvor</a>
					</div>
				</div> -->
				<div class="form-group row">
					<label class="col-2 col-form-label col-form-label-lg"></label>
					<div class="col-10">
						<div class="custom-file">
							<input type="file" name="product_image" class="custom-file-input" id="customFile" required>
							<label class="custom-file-label" for="customFile">Vybrať súbor...</label>
						</div>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputBrandName"  class="col-2 col-form-label col-form-label-lg">Značka:</label>
					<div class="col-10">
						<input type="text" name="product_brand" class="form-control form-control-lg" id="inputBrandName" placeholder="Značka produktu..." required>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputPrice" class="col-2 col-form-label col-form-label-lg">Cena:</label>
					<div class="col-10">
						<input type="number" name="product_price" class="form-control form-control-lg" id="inputPrice" placeholder="Cena produktu..." required>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputCountOfProducts" class="col-2 col-form-label col-form-label-lg">Sklad:</label>
					<div class="col-10">
						<input type="number" name="product_count" class="form-control form-control-lg" id="inputCountOfProducts" placeholder="Počet kusov na sklade..." required>
					</div>
				</div>
				<div class="form-group row">
					<label for="inputProductInfo" class="col-2 col-form-label col-form-label-lg">Popis:</label>
					<div class="col-10">
						<textarea name="product_description" class="form-control form-control-lg" id="inputProductInfo" rows="3" placeholder="Popis..." required></textarea>
					</div>
				</div>
				<div class="form-group">
					<button type="submit" class="btn btn-primary">Uložiť produkt</button>
				</div>
			</form>
		</section>
	</main>
@endsection