<?php
namespace Plenty\Modules\Accounting\Vat\Models;


/**
 * The VAT rate model is always associated with a VAT configuration and contains the id, name and percentage of a VAT rate. Each VAT configuration can have 4 rates.
 */
abstract class VatRate 
{
	public		$id;
	public		$vatRate;
	public		$name;
	
	/**
	 * returns this model as an array
	 */
	public function toArray(
	):array
	{
		return [];
	}

}