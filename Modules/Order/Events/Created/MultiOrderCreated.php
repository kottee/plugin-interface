<?php
namespace Plenty\Modules\Order\Events\Created;

use Plenty\Modules\Order\Events\OrderCreated;
use Plenty\Modules\Order\Models\Order;

/**
 * An event class fired after a new multi order is created.
 */
abstract class MultiOrderCreated extends \Plenty\Modules\Order\Events\OrderCreated 

{

	/**
	 * OrderEvent constructor.
	 */
	abstract public function __construct(
		Order $order
	);

	/**
	 * Get the order instance.
	 */
	abstract public function getOrder(
	):Order;

}