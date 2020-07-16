<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\CommerceRuntime\Discounts;



/**
*	The value of the shipping discount for each line item.
*/
class AppliedLineItemShippingDiscount
{
	/**
	*The number of the line items that are used for this particular discount.
	*/
	public $discountQuantity;

	/**
	*The impact of a discount for each discount quantity. 
	*/
	public $impactPerUnit;

	/**
	*Carrier-supplied, unique code that represents the shipping method service type associated with the shipping discount.
	*/
	public $methodCode;

	/**
	*Name of the discount added and applied to a shopping cart and order for a shopper's purchase. 
	*/
	public $discount;

}

?>