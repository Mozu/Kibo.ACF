<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\ProductRuntime;



/**
*	The properties of a product, referenced and used by carts, orders, wish lists, and returns.
*/
class Product
{
	/**
	*The date and time in UTC when the product is no longer active in the catalog.
	*/
	public $catalogEndDate;

	/**
	*The date and time in UTC format when the product is active in the catalog.
	*/
	public $catalogStartDate;

	/**
	*Date and time when the entity was created, represented in UTC Date/Time.
	*/
	public $createDate;

	/**
	*The date and time in UTC format when the product first became available in the catalog. This field is used to calculate the number of days the product has been available in the catalog for a dynamic expression.
	*/
	public $dateFirstAvailableInCatalog;

	/**
	*The total number of days the product has been available in the catalog. This field is related to the DaysAvailableInCatalog field in a dynamic expression.
	*/
	public $daysAvailableInCatalog;

	/**
	*List of supported types of fulfillment for the product or variation. The types include direct ship, in-store pickup, or both.
	*/
	public $fulfillmentTypesSupported;

	/**
	*The type of goods in a bundled product. A bundled product is composed of products associated to sell together. Possible values include “Physical” and “DigitalCredit”. This comes from the `productType `of the product. Products are defaulted to a Physical `goodsType`. Gift cards have a `goodsType `of DigitalCredit.
	*/
	public $goodsType;

	/**
	*Indicates if the object or feature is active.
	*/
	public $isActive;

	/**
	*Indicates if the product must be shipped alone in a container. This is used for products and products within a bundle. If true, this product cannot be shipped in a package with other items and must ship in a package by itself.
	*/
	public $isPackagedStandAlone;

	/**
	*Indicates if the product in a cart, order, or wish list is purchased on a recurring schedule. If true, the item can be purchased or fulfilled at regular intervals, such as a monthly billing cycle. For example, digital or physical product subscriptions are recurring cart items. This property is not used at this time and is reserved for future functionality.
	*/
	public $isRecurring;

	/**
	*Indicates if the item is subject to taxation, used by products, options, extras, cart and order items, line items, and wish lists. If true, the entity is subject to tax based on the relevant tax rate and rules.
	*/
	public $isTaxable;

	/**
	*The manufacturer's part number for the product.
	*/
	public $mfgPartNumber;

	/**
	*The list of manufacturer part numbers defined for the product.
	*/
	public $mfgPartNumbers;

	/**
	*Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	*/
	public $productCode;

	/**
	*Integer that represents the sequential order of the product.
	*/
	public $productSequence;

	/**
	*A product type is like a product template.
	*/
	public $productType;

	/**
	*The unique identifier of the product type of the product.
	*/
	public $productTypeId;

	/**
	*The usage type that applies to this product, which is Standard (a single product without configurable options), Configurable (a product that includes configurable option attributes), Bundle (a collection of products sold as a single entity), or Component (an invididual product that represents a component in a bundle).
	*/
	public $productUsage;

	/**
	*The current state of the document or product definition. States for documents include Active, Draft, or Latest. Active documents are published and cannot be deleted. Querying Latest returns the most recent version of the document, regardless of whether it is published or a draft. States for product include New, Draft, or Live.
	*/
	public $publishState;

	/**
	*The universal product code (UPC) is the barcode defined for the product. The UPC is unique across all sales channels. 
	*/
	public $upc;

	/**
	*The list of universal product codes defined for the product.
	*/
	public $upCs;

	/**
	*The date and time in UTC format the object was updated most recently.
	*/
	public $updateDate;

	/**
	*A list of price lists for which the product is valid.
	*/
	public $validPriceLists;

	/**
	*Merchant-created code associated with a specific product variation. Variation product codes maintain an association with the base product code.
	*/
	public $variationProductCode;

	/**
	*List of shipping discounts that can be applied to the configured product. These discounts are calculated and updated as shoppers add content to their cart and continue checkout steps to order submission.
	*/
	public $availableShippingDiscounts;

	/**
	*Properties of a collection of component products that make up a single product bundle with its own product code. Tenants can define product bundles for any product type that supports the Bundle product usage.
	*/
	public $bundledProducts;

	/**
	*The list of all categories associated with the product. These categories contain products, can have discounts associated, and define the grouping of products to display on the storefront.
	*/
	public $categories;

	/**
	*Complex type that contains content for a language specified by LocaleCode.
	*/
	public $content;

	/**
	*Properties and data of inventory information for configured and bundled products. If product stock is managed, the data specifies out of stock behavior.
	*/
	public $inventoryInfo;

	/**
	*Dimensions of the packaged product.
	*/
	public $measurements;

	/**
	*List of option attributes configured for an object. These values are associated and used by products, product bundles, and product types.
	*/
	public $options;

	/**
	*Unit price that the tenant intends to sell the product if no sale price is set.
	*/
	public $price;

	/**
	*For products with options that vary the cost of the product, the range between lowest and highest possible price of the product based on the current selection of options.
	*/
	public $priceRange;

	/**
	*Properties that describe the behavior the system uses when determining the price of products.
	*/
	public $pricingBehavior;

	/**
	*Collection of property attributes defined for the object. Properties are associated to all objects within , including documents, products, and product types.
	*/
	public $properties;

	/**
	*The current state of the configured product determines whether or not the product is eligible for purchase. Products with options are only purchasable if the shopper has selected all required options. If the product is not ready for purchase, a message lists missing options that are required.
	*/
	public $purchasableState;

	/**
	*A summary of all variations that exist for the product.
	*/
	public $variations;

	/**
	*The details of any volume price bands associated with the product.Refer to [Volume Pricing](https://www.mozu.com/docs/guides/catalog/price-lists.htm#volume_pricing) for more information.
	*/
	public $volumePriceBands;

	/**
	*The details of the volume price range associated with the product. Volume price ranges consist of a lower price and an upper price, and either lower or upper prices can be affected by discounts.You can display the volume price range on product listing pages, such as category and search result pages, and product detail pages.Refer to [Volume Pricing Storefront Behavior](https://www.mozu.com/docs/guides/catalog/price-lists.htm#volume_pricing_storefront_behavior) for more information.
	*/
	public $volumePriceRange;

}

?>
