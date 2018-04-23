<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name','description'];

	public function productInstances()
	{
		return $this->hasMany('App\ProductInstance', 'product_id');
	}
}
