@extends('user.layout.app')
@section('title', 'Vyhľadané produkty')

@section('content')
<main id="search-results">
	<h2>Výsledky vyhľadávania: "{{$search_input}}"</h2>
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
					<a href="{{route('show_product', ['id' => $product->id])}}">
						<img src="{{asset('storage/product-images/'.$product->image()->first()->file)}}" width="100" height="auto"/>
					</a>
				</td>
				<td>
					<a href="{{route('show_product', ['id' => $product->id])}}">
						{{$product->code}}
					</a>
				</td>
				<td scope="row">
					<a href="{{route('show_product', ['id' => $product->id])}}">
						{{$product->product()->first()->name}}
					</a>
				</td>
				<td>
					<a href="{{route('show_product', ['id' => $product->id])}}">
						{{$product->brand()->first()->name}}
					</a>
				</td>
			</tr>
		@endforeach
		</tbody>
	</table>
</main>
@endsection