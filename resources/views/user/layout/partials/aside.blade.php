<aside>
	<div class="aside-menu-header">
		<h3>Kategórie</h3>
		<button type="button" data-toggle="collapse" data-target="#asideNavbarSupportedContent" aria-controls="asideNavbarSupportedContent"
				aria-expanded="false" aria-label="Toggle navigation">
			<i class="fas fa-angle-down fa-2x"></i>
		</button>
	</div>

	<div class="collapse navbar-collapse" id="asideNavbarSupportedContent">
		<ul>
			@foreach ($categories as $category)
				<li class="nav-item">
					<a href="#">{{ucfirst($category->name)}}</a>
					@if (count($category->subcategories) > 0)
						<ul class="submenu">
							@foreach ($category->subcategories as $subcategory)
								<li class="nav-item">
									<a href="#">{{ucfirst($subcategory->name)}}</a>
								</li>
							@endforeach
						</ul>
					@endif
			@endforeach
		</ul>
	</div>
</aside>