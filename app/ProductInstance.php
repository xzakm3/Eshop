<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInstance extends Model
{
    protected $fillable = ['code', 'count', 'price', 'product_id', 'brand_id', 'subcategory_id'];

	public function product()
	{
		return $this->belongsTo('App\Product');
	}

	public function subcategory()
	{
		return $this->belongsTo('App\Subcategory');
	}

	public function brand()
	{
		return $this->belongsTo('App\Brand');
	}

	public function image()
	{
		return $this->hasOne('App\Image');
	}
}
