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
*	Properties of a specific product variation.
*/
class ProductVariation
{
	/**
	*The difference between the weight associated with this product, variation option, or extra and the base product. For example, if a product with a monogram weighs an extra 1/4 lb, the DeltaWeight value is "0.25". The amount of the delta is set by the weight type for the storefront.
	*/
	public $deltaWeight;

	/**
	*If the product is in explicit pricing mode, this is the fixed weight of the variation.
	*/
	public $fixedWeight;

	/**
	*List of supported types of fulfillment for the product or variation. The types include direct ship, in-store pickup, or both.
	*/
	public $fulfillmentTypesSupported;

	/**
	*Indicates if the object or feature is active.
	*/
	public $isActive;

	/**
	*If true, the production variation is no longer available for sale. For example, if a client stops selling all "small" shirts, all product variations with the "small" option are set to IsOrphan. System-supplied and read only.
	*/
	public $isOrphan;

	/**
	*The universal product code (UPC) is the barcode defined for the product. The UPC is unique across all sales channels. 
	*/
	public $upc;

	/**
	*If true, one or more product variations are configured for the specified product code.
	*/
	public $variationExists;

	/**
	*System-generated key that represents the attribute values that uniquely identify a specific product variation.
	*/
	public $variationkey;

	/**
	*Merchant-created code associated with a specific product variation. Variation product codes maintain an association with the base product code.
	*/
	public $variationProductCode;

	/**
	*If the product is in relative pricing mode, this is the difference between associated prices for a product, variation option, or extra. The difference is calculated by subtracting the base price from the associated price with this product, option, and/or extra. For example, if a product with a defined monogram extra costs an additional $10, the `deltaPrice `value is "10". Between options, a price for a medium may be $10 and a large $12 giving a `deltaPrice `value of "2".Refer to [Product Variant Pricing and Weight](../../../guides/catalog/products.htm#product_variant_pricing_and_weight) in the Products guides topic for more information.
	*/
	public $deltaPrice;

	/**
	*If the product is in Explicit pricing mode, this is the price of the variation.Refer to [Product Variant Pricing and Weight](../../../guides/catalog/products.htm#product_variant_pricing_and_weight) in the Products guides topic for more information.
	*/
	public $fixedPrice;

	/**
	*The difference between associated prices for a product, variation option, or extra that is localized per the `localeCode`. The difference is calculated by subtracting the base price from the associated price with this product, option, and/or extra. Depending on the localeCode, the price may be converted such as from USD (US Dollar) to EUR (euro).
	*/
	public $localizedDeltaPrice;

	/**
	*Price of the variation using fixed per currency This collection allows for multiple currencies.
	*/
	public $localizedFixedPrice;

	/**
	*List of option attributes configured for an object. These values are associated and used by products, product bundles, and product types.
	*/
	public $options;

	/**
	*Supplier-defined properties assigned for the product.
	*/
	public $supplierInfo;

}

?>