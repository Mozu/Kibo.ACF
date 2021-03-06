<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Catalog\Storefront;

use Drupal\acf_kibo\Mozu\Api\MozuUrl;
use Drupal\acf_kibo\Mozu\Api\UrlLocation;

class ProductUrl  {

	/**
		* Get Resource Url for GetProducts
		* @param string $cursorMark In your first deep paged request, set this parameter to . Then, in all subsequent requests, set this parameter to the subsequent values of  that's returned in each response to continue paging through the results. Continue this pattern until  is null, which signifies the end of the paged results.
		* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param string $responseOptions Options you can specify for the response. This parameter is null by default.You can primarily use this parameter to return volume price band information in product details, which you can then display on category pages and search results depanding on your theme configuration. To return volume price band information, set this parameter to .
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getProductsUrl($cursorMark, $filter, $pageSize, $responseFields, $responseOptions, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/storefront/products/?filter={filter}&startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&responseOptions={responseOptions}&cursorMark={cursorMark}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("cursorMark", $cursorMark);
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("responseOptions", $responseOptions);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetProductInventory
		* @param string $locationCodes Array of location codes for which to retrieve product inventory information.
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getProductInventoryUrl($locationCodes, $productCode, $responseFields)
	{
		$url = "/api/commerce/catalog/storefront/products/{productCode}/locationinventory?locationCodes={locationCodes}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("locationCodes", $locationCodes);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetProduct
		* @param bool $acceptVariantProductCode Specifies whether to accept a product variant's code as the .When you set this parameter to , you can pass in a product variant's code in the GetProduct call to retrieve the product variant details that are associated with the base product.
		* @param bool $allowInactive If true, allow inactive categories to be retrieved in the category list response. If false, the categories retrieved will not include ones marked inactive.
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param int $quantity The number of cart items in the shopper's active cart.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
		* @param bool $supressOutOfStock404 Specifies whether to supress the 404 error when the product is out of stock.
		* @param string $variationProductCode Merchant-created code associated with a specific product variation. Variation product codes maintain an association with the base product code.
		* @return string Resource Url
	*/
	public static function getProductUrl($acceptVariantProductCode, $allowInactive, $productCode, $quantity, $responseFields, $skipInventoryCheck, $supressOutOfStock404, $variationProductCode)
	{
		$url = "/api/commerce/catalog/storefront/products/{productCode}?variationProductCode={variationProductCode}&allowInactive={allowInactive}&skipInventoryCheck={skipInventoryCheck}&supressOutOfStock404={supressOutOfStock404}&quantity={quantity}&acceptVariantProductCode={acceptVariantProductCode}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("acceptVariantProductCode", $acceptVariantProductCode);
		$url = $mozuUrl->formatUrl("allowInactive", $allowInactive);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("quantity", $quantity);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("skipInventoryCheck", $skipInventoryCheck);
		$url = $mozuUrl->formatUrl("supressOutOfStock404", $supressOutOfStock404);
		$url = $mozuUrl->formatUrl("variationProductCode", $variationProductCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetProductForIndexing
		* @param datetime $lastModifiedDate The date when the product was last updated.
		* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
		* @param long $productVersion The product version.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getProductForIndexingUrl($lastModifiedDate, $productCode, $productVersion, $responseFields)
	{
		$url = "/api/commerce/catalog/storefront/products/indexing/{productCode}&productVersion={productVersion}&lastModifiedDate={lastModifiedDate}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("lastModifiedDate", $lastModifiedDate);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("productVersion", $productVersion);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ConfiguredProduct
		* @param bool $includeOptionDetails If true, the response returns details about the product. If false, returns a product summary such as the product name, price, and sale price.
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param int $quantity The number of cart items in the shopper's active cart.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
		* @return string Resource Url
	*/
	public static function configuredProductUrl($includeOptionDetails, $productCode, $quantity, $responseFields, $skipInventoryCheck)
	{
		$url = "/api/commerce/catalog/storefront/products/{productCode}/configure?includeOptionDetails={includeOptionDetails}&skipInventoryCheck={skipInventoryCheck}&quantity={quantity}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("includeOptionDetails", $includeOptionDetails);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("quantity", $quantity);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("skipInventoryCheck", $skipInventoryCheck);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ValidateProduct
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param int $quantity The number of cart items in the shopper's active cart.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param bool $skipDefaults Normally, product validation applies default extras to products that do not have options specified. If , product validation does not apply default extras to products.
		* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
		* @return string Resource Url
	*/
	public static function validateProductUrl($productCode, $quantity, $responseFields, $skipDefaults, $skipInventoryCheck)
	{
		$url = "/api/commerce/catalog/storefront/products/{productCode}/validate?skipInventoryCheck={skipInventoryCheck}&quantity={quantity}&skipDefaults={skipDefaults}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("quantity", $quantity);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("skipDefaults", $skipDefaults);
		$url = $mozuUrl->formatUrl("skipInventoryCheck", $skipInventoryCheck);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ValidateDiscounts
		* @param bool $allowInactive If true, allow inactive categories to be retrieved in the category list response. If false, the categories retrieved will not include ones marked inactive.
		* @param int $customerAccountId The unique identifier of the customer account for which to retrieve wish lists.
		* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
		* @param string $variationProductCode Merchant-created code associated with a specific product variation. Variation product codes maintain an association with the base product code.
		* @return string Resource Url
	*/
	public static function validateDiscountsUrl($allowInactive, $customerAccountId, $productCode, $responseFields, $skipInventoryCheck, $variationProductCode)
	{
		$url = "/api/commerce/catalog/storefront/products/{productCode}/validateDiscounts?variationProductCode={variationProductCode}&customerAccountId={customerAccountId}&allowInactive={allowInactive}&skipInventoryCheck={skipInventoryCheck}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("allowInactive", $allowInactive);
		$url = $mozuUrl->formatUrl("customerAccountId", $customerAccountId);
		$url = $mozuUrl->formatUrl("productCode", $productCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("skipInventoryCheck", $skipInventoryCheck);
		$url = $mozuUrl->formatUrl("variationProductCode", $variationProductCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetProductCosts
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getProductCostsUrl($responseFields)
	{
		$url = "/api/commerce/catalog/storefront/products/costs?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetProductInventories
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getProductInventoriesUrl($responseFields)
	{
		$url = "/api/commerce/catalog/storefront/products/locationinventory?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
}

?>

