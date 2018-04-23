@extends('admin.layout.app')
@section('title', 'Prehľad produktov')

@section('content')
	@if (session('message'))
		<div class="alert alert-danger">
			{{ session('message') }}
		</div>
	@endif
	<main>
		<section id="admin-product-management">
			<section id="filter">
				<form class="form-inline row" action="{{ route('search_products') }}" method="GET">
					@csrf
					<div class="col-lg-2 col-md-12 col-sm-12">
						<select class="custom-select" name="chosen_subcategory">
							@foreach ($selected_category->subcategories()->get() as $subcategory)
								<option value="{{$subcategory->id}}"
								@if ($subcategory->id == $selected_subcategory->id)
									selected
								@endif
								>{{ucfirst($subcategory->name)}}</option>
							@endforeach
						</select>
					</div>
					<div class="col-lg-2 col-md-12 col-sm-12">
						<h4>Hľadať podľa:</h4>
					</div>
					<div class="col-lg-2 col-md-12 col-sm-12">
						<select class="custom-select" name="searching_type">
							<option value="1"
									@if(isset($action_id) && $action_id == 1)
										selected
									@endif>Názov produktu</option>
							<option value="2"
									@if(isset($action_id) && $action_id == 2)
									selected
									@endif>Kód</option>
							<option value="3"
									@if(isset($action_id) && $action_id == 3)
									selected
									@endif>Značka</option>
						</select>
					</div>
					<div class="col-lg-4 col-md-12 col-sm-12">
						<input name="search_input" class="form-control mr-sm-2 search-input" type="search" placeholder="Search" aria-label="Search" value="@if(isset($search_input)){{$search_input}}@endif" required>
					</div>
					<div class="col-lg-2 col-md-12 col-sm-12">
						<button class="btn btn-outline-success my-2 my-sm-0 search-action" type="submit">Hľadaj</button>
					</div>
				</form>
			</section>
			<section id="content">
				<nav class="pagination-top">
					{{ $products->appends(request()->input())->links() }}
				</nav>
				<section id="products">
					<table class="table table-hover">
						<thead>
						<tr>
							<th scope="col"></th>
							<th scope="col">Kód</th>
							<th scope="col">Názov</th>
							<th scope="col">Značka</th>
						</tr>
						</thead>
						<tbody>
							@foreach ($products as $product)
									<tr>
											<td>
												<a href="{{ route('edit_product',['id' => $product->id]) }}">
													<img src="{{asset('storage/product-images/'.$product->image()->first()->file)}}" width="100" height="auto"/>
												</a>
											</td>
											<td>
												<a href="{{ route('edit_product',['id' => $product->id]) }}">
													{{$product->code}}
												</a>
											</td>
											<td scope="row">
												<a href="{{ route('edit_product',['id' => $product->id]) }}">
													{{$product->product()->first()->name}}
												</a>
											</td>
											<td>
												<a href="{{ route('edit_product',['id' => $product->id]) }}">
													{{$product->brand()->first()->name}}
												</a>
											</td>
									</tr>
							@endforeach
						</tbody>
					</table>
				</section>
				<nav class="pagination-bottom">
					{{ $products->appends(request()->input())->links() }}
				</nav>
			</section>
		</section>
	</main>
@endsection