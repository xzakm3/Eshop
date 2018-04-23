<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductInOrder extends Model
{
	protected $fillable = ['order_id', 'product_instance_id', 'product_count'];

	public function order()
	{
		return $this->belongsTo('App\Order');
	}

	public function productInstance()
	{
		return $this->belongsTo('App\ProductInstance', 'product_instance_id');
	}
}
