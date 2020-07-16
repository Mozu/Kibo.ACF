<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Catalog\Admin;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Catalog\Admin\PriceListUrl;


/**
* Use the Price Lists resource to view and create price lists. You can use price lists to override the catalog pricing of products for specific customer segments and/or sites. You can override products' list price, sale price, advanced pricing information such as MSRP, cost, MAP, and the catalog price of any extras associated with the product in a price list. You can also restrict discounts from applying to the overridden product pricing in a price list. Refer to [Price Lists](../../../guides/catalog/price-lists.htm) in the Guides section for more information about price lists.
*/
class PriceListClient {

	/**
	* Retrieves a list of price lists according to any specified facets, filter criteria, and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return MozuClient
	*/
	public static function getPriceListsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = PriceListUrl::getPriceListsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of the specified price list.
	*
	* @param string $priceListCode The unique, user-defined code of the price list.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return MozuClient
	*/
	public static function getPriceListClient($priceListCode, $responseFields =  null)
	{
		$url = PriceListUrl::getPriceListUrl($priceListCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Adds a new price list to the tenant.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param PriceList $priceList The details of the new price list.
	* @return MozuClient
	*/
	public static function addPriceListClient($priceList, $responseFields =  null)
	{
		$url = PriceListUrl::addPriceListUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($priceList);
		return $mozuClient;

	}
	
	/**
	* admin-pricelists Post BulkAddPriceListEntries description DOCUMENT_HERE 
	*
	* @param bool $invalidateCache 
	* @param bool $publishEvents 
	* @param array|PriceListEntry $priceListEntriesIn 
	*/
	public static function bulkAddPriceListEntriesClient($priceListEntriesIn, $publishEvents =  null, $invalidateCache =  null)
	{
		$url = PriceListUrl::bulkAddPriceListEntriesUrl($invalidateCache, $publishEvents);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($priceListEntriesIn);
		return $mozuClient;

	}
	
	/**
	* admin-pricelists Post BulkDeletePriceListEntries description DOCUMENT_HERE 
	*
	* @param bool $invalidateCache 
	* @param bool $publishEvents 
	* @param array|PriceListEntry $priceListEntriesIn 
	*/
	public static function bulkDeletePriceListEntriesClient($priceListEntriesIn, $publishEvents =  null, $invalidateCache =  null)
	{
		$url = PriceListUrl::bulkDeletePriceListEntriesUrl($invalidateCache, $publishEvents);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($priceListEntriesIn);
		return $mozuClient;

	}
	
	/**
	* admin-pricelists Post BulkUpdatePriceListEntries description DOCUMENT_HERE 
	*
	* @param bool $invalidateCache 
	* @param bool $publishEvents 
	* @param array|PriceListEntry $priceListEntriesIn 
	*/
	public static function bulkUpdatePriceListEntriesClient($priceListEntriesIn, $publishEvents =  null, $invalidateCache =  null)
	{
		$url = PriceListUrl::bulkUpdatePriceListEntriesUrl($invalidateCache, $publishEvents);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($priceListEntriesIn);
		return $mozuClient;

	}
	
	/**
	* Updates the details of the specified price list.
	*
	* @param string $priceListCode The unique, user-defined code of the price list.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param PriceList $priceList The details of the updated price list.
	* @return MozuClient
	*/
	public static function updatePriceListClient($priceList, $priceListCode, $responseFields =  null)
	{
		$url = PriceListUrl::updatePriceListUrl($priceListCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($priceList);
		return $mozuClient;

	}
	
	/**
	* Deletes the specified price list from the tenant.
	*
	* @param bool $cascadeDeleteEntries Specifies whether to deletes all price list entries associated with the price list.
	* @param string $priceListCode The unique, user-defined code of the price list.
	*/
	public static function deletePriceListClient($priceListCode, $cascadeDeleteEntries =  null)
	{
		$url = PriceListUrl::deletePriceListUrl($cascadeDeleteEntries, $priceListCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
