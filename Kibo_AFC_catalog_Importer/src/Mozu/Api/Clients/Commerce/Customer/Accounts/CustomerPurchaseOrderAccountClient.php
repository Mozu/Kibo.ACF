<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Customer\Accounts;

use Drupal\acf_kibo\Mozu\Api\MozuClient;
use Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Customer\Accounts\CustomerPurchaseOrderAccountUrl;


/**
* Use the Customer Account Purchase Order resource to manage purchase order details for specific customer acocunts.
*/
class CustomerPurchaseOrderAccountClient {

	/**
	* Retrieves the details of the specified customer purchase order account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return MozuClient
	*/
	public static function getCustomerPurchaseOrderAccountClient($accountId, $responseFields =  null)
	{
		$url = CustomerPurchaseOrderAccountUrl::getCustomerPurchaseOrderAccountUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of purchase order transactions for the specified customer account according to any specified sort options.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return MozuClient
	*/
	public static function getCustomerPurchaseOrderTransactionsClient($accountId, $startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = CustomerPurchaseOrderAccountUrl::getCustomerPurchaseOrderTransactionsUrl($accountId, $filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Adds a purchase order account to the specified customer account.This adds the ability for the specified customer account to use the purchase order payment method.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param CustomerPurchaseOrderAccount $customerPurchaseOrderAccount Unique identifier of the customer purchase order account.
	* @return MozuClient
	*/
	public static function createCustomerPurchaseOrderAccountClient($customerPurchaseOrderAccount, $accountId, $responseFields =  null)
	{
		$url = CustomerPurchaseOrderAccountUrl::createCustomerPurchaseOrderAccountUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($customerPurchaseOrderAccount);
		return $mozuClient;

	}
	
	/**
	* Creates a purchase order transaction on the specified customer purchase order account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param PurchaseOrderTransaction $purchaseOrderTransaction The purchase order transaction type to add to the specified customer account.
	* @return MozuClient
	*/
	public static function createPurchaseOrderTransactionClient($purchaseOrderTransaction, $accountId, $responseFields =  null)
	{
		$url = CustomerPurchaseOrderAccountUrl::createPurchaseOrderTransactionUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($purchaseOrderTransaction);
		return $mozuClient;

	}
	
	/**
	* Updates the details of the purchase order account for the specified customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param CustomerPurchaseOrderAccount $customerPurchaseOrderAccount Unique identifier of the customer purchase order account.
	* @return MozuClient
	*/
	public static function updateCustomerPurchaseOrderAccountClient($customerPurchaseOrderAccount, $accountId, $responseFields =  null)
	{
		$url = CustomerPurchaseOrderAccountUrl::updateCustomerPurchaseOrderAccountUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($customerPurchaseOrderAccount);
		return $mozuClient;

	}
	
	/**
	* Deletes the specified customer purchase order account.This removes the ability for the specified customer account to use the purchase order payment method.
	*
	* @param int $accountId Unique identifier of the customer account.
	*/
	public static function deleteCustomerPurchaseOrderAccountClient($accountId)
	{
		$url = CustomerPurchaseOrderAccountUrl::deleteCustomerPurchaseOrderAccountUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
