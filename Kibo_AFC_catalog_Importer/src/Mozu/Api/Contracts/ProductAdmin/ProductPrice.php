<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\ProductAdmin;



/**
*	The price of the product in the specified currency code (USD). This price can either be the sale price or the price for which the merchang intends to sell the product.
*/
class ProductPrice
{
	/**
	*The credit value of the product or bundled product. When the `goodsType `is `DigitalCredit`, this value is populated to indicate the value of the credit. This is used to create store credit in the fulfillment of gift cards.
	*/
	public $creditValue;

	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $isoCurrencyCode;

	/**
	*The minimum advertised price a client can charge for the associated product, as determined by the supplier. Client administrators can override the minimum advertised price at the catalog level.
	*/
	public $map;

	/**
	*If the product has a supplier-defined minimum advertised price, the date and time after which the client can sell the product for less than the minimum advertised price.
	*/
	public $mapEndDate;

	/**
	*If the product has a supplier-defined minimum advertised price, the date and time after which the client cannot sell the product for less than the minimum advertised price.
	*/
	public $mapStartDate;

	/**
	*The manufacturer's suggested retail price (MSRP) for the product. This content may be defined by the supplier.
	*/
	public $msrp;

	/**
	*Price that the merchant intends to sell the product which is not necessarily the list price. This is the price the merchant intends to sell the product if no sale price is present.
	*/
	public $price;

	/**
	*The set sale price for a product consisting of a price with a discount already applied.For price list entries, this property is the product's sale price if the  is set to .
	*/
	public $salePrice;

}

?>