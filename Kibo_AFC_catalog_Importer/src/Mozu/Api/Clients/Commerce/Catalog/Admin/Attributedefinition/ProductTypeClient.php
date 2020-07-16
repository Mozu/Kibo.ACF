<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Catalog\Admin\Attributedefinition;

use Drupal\acf_kibo\Mozu\Api\MozuClient;
use Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Catalog\Admin\Attributedefinition\ProductTypeUrl;

use Drupal\acf_kibo\Mozu\Api\Headers;

/**
* Use the Product Types resource to manage the types for your product catalog. Product types act as configuration templates, which store a set of attributes common to all products associated with that type. Unlike categories, products can only be associated with a single product type.
*/
class ProductTypeClient {

	/**
	* Retrieves a list of product types according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getProductTypesClient($dataViewMode, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = ProductTypeUrl::getProductTypesUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of the product type specified in the request.
	*
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getProductTypeClient($dataViewMode, $productTypeId, $responseFields =  null)
	{
		$url = ProductTypeUrl::getProductTypeUrl($productTypeId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Creates a new product type based on the information supplied in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ProductType $productType A product type is like a product template.
	* @return MozuClient
	*/
	public static function addProductTypeClient($dataViewMode, $productType, $responseFields =  null)
	{
		$url = ProductTypeUrl::addProductTypeUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Updates one or more properties of a product type.
	*
	* @param int $productTypeId Identifier of the product type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ProductType $productType A product type is like a product template.
	* @return MozuClient
	*/
	public static function updateProductTypeClient($dataViewMode, $productType, $productTypeId, $responseFields =  null)
	{
		$url = ProductTypeUrl::updateProductTypeUrl($productTypeId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($productType)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	/**
	* Deletes the product type by providing the product type ID.
	*
	* @param int $productTypeId Identifier of the product type.
	*/
	public static function deleteProductTypeClient($dataViewMode, $productTypeId)
	{
		$url = ProductTypeUrl::deleteProductTypeUrl($productTypeId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withHeader(Headers::X_VOL_DATAVIEW_MODE ,$dataViewMode);
		return $mozuClient;

	}
	
	
}

?>
