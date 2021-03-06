<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Resources\Commerce\Orders;

use Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Orders\FulfillmentActionClient;
use Drupal\acf_kibo\Mozu\Api\ApiContext;


/**
* Use the Fulfillment resource to manage shipments or pickups of collections of packages for an order.
*/
class FulfillmentActionResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Sets the fulfillment action to "Ship" or "PickUp". To ship an order or prepare it for in-store pickup, the order must have a customer name, the "Open" or "OpenAndProcessing" status. To ship the order, it must also have the full shipping address and shipping method. Shipping all packages or picking up all pickups for an order will complete a paid order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param FulfillmentAction $action Properties of an action to perform when fulfilling an item in an order, whether through in-store pickup or direct shipping.
	* @return Order 
	* @deprecated deprecated since version 1.17
	*/
	public function performFulfillmentAction($action, $orderId, $responseFields =  null)
	{
		$mozuClient = FulfillmentActionClient::performFulfillmentActionClient($action, $orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Sets the fulfillment action to "Ship" or "PickUp". To ship an order or prepare it for in-store pickup, the order must have a customer name, the "Open" or "OpenAndProcessing" status. To ship the order, it must also have the full shipping address and shipping method. Shipping all packages or picking up all pickups for an order will complete a paid order.
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function performFulfillmentActionAsync($action, $orderId, $responseFields =  null)
	{
		$mozuClient = FulfillmentActionClient::performFulfillmentActionClient($action, $orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Resends an email with details about the package fulfillment to the shopper. 
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param FulfillmentAction $action Properties of an action to perform when fulfilling an item in an order, whether through in-store pickup or direct shipping.
	* @return Order 
	* @deprecated deprecated since version 1.17
	*/
	public function resendPackageFulfillmentEmail($action, $orderId, $responseFields =  null)
	{
		$mozuClient = FulfillmentActionClient::resendPackageFulfillmentEmailClient($action, $orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Resends an email with details about the package fulfillment to the shopper. 
	*
	* @param string $orderId Unique identifier of the order.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function resendPackageFulfillmentEmailAsync($action, $orderId, $responseFields =  null)
	{
		$mozuClient = FulfillmentActionClient::resendPackageFulfillmentEmailClient($action, $orderId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

