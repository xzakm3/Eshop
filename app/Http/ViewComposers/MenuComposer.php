<?php

namespace App\Http\ViewComposers;

use App\Category;
use Illuminate\View\View;

class MenuComposer
{
	public function __construct()
	{
	}

	/**
	 * Bind data to the view.
	 *
	 * @param  View  $view
	 * @return void
	 */
	public function compose(View $view)
	{
		$categories = Category::with('subcategories')->get();
		$view->with('categories', $categories);
	}
}