<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
	protected $fillable = ['user_id', 'payment_method_id', 'delivery_type_id', 'total_price'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function deliveryType()
	{
		return $this->belongsTo('App\DeliveryType', 'delivery_type_id');
	}

	public function paymentMethod()
	{
		return $this->belongsTo('App\PaymentMethod', 'payment_method_id');
	}

	public function deliveryData()
	{
		return $this->belongsTo('App\DeliveryData', 'delivery_data_id');
	}

	public function productsInOrder()
	{
		return $this->hasMany('App\ProductInOrder', 'order_id');
	}
}
