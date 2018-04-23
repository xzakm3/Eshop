<aside>
	<ul>
		<li class="nav-item">
			<a href="{{ route('admin') }}">Domov</a>
		</li>
		<li class="nav-item">
			<a href="#" data-toggle="collapse" data-target="#categories">Kategórie
				<i class="fas fa-angle-down"></i>
			</a>
			<ul class="collapse" id="categories">
				@foreach ($categories as $category)
					<li class="nav-item">
						<a href="#" data-toggle="collapse" data-target="#{{str_replace(" ","-",$category->name)}}">{{ucfirst($category->name)}}
							<i class="fas fa-angle-down"></i>
						</a>
						<ul class="collapse" id="{{str_replace(" ","-",$category->name)}}">
							@foreach ($category->subcategories as $subcategory)
								<li class="nav-item">
									<a href="{{ route('search_filtered_products', ['category' => $category->name, '$subcategory' => $subcategory->name])}}">{{ucfirst($subcategory->name)}}</a>
								</li>
							@endforeach
						</ul>
				@endforeach
			</ul>
		</li>
		<li class="nav-item add-product-button">
			<a href="{{ route('add_product') }}">Pridať produkt <i class="fas fa-plus"></i></a>
		</li>
	</ul>
</aside>