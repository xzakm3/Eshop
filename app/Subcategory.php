<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{
    public function category()
	{
		return $this->belongsTo('App\Category');
	}

	public function products()
	{
		return $this->hasMany('App\ProductInstance', 'subcategory_id')->with('brand');
	}

	public function products_with_brand($name)
	{
		return $this->hasMany('App\ProductInstance', 'subcategory_id')->with('brand')->where('brand.name', $name);
	}
}
