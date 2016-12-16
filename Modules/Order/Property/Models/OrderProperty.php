<?php
namespace Plenty\Modules\Order\Property\Models;

use Plenty\Modules\Order\Models\Order;
use Carbon\Carbon;

/**
 * The order properties model. Each order property has a type.
 */
abstract class OrderProperty 
{
	public		$id;
	public		$orderId;
	public		$typeId;
	public		$value;
	public		$createdAt;
	public		$updatedAt;
	public		$order;
	
	/**
	 * Returns this model as an array.
	 */
	public function toArray(
	):array
	{
		return [];
	}

}