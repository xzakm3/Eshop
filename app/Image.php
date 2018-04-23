<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{

	protected $fillable = ['file', 'product_instance_id'];

    public function productInstance()
	{
		return $this->belongsTo('App\ProductInstance', 'product_instance_id');
	}
}
