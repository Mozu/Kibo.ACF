<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Resources\Commerce\Catalog\Admin;

use Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Catalog\Admin\ProductReservationClient;
use Drupal\acf_kibo\Mozu\Api\ApiContext;

use Drupal\acf_kibo\Mozu\Api\Headers;

/**
* Use the Product Reservations resource to temporarily hold a product from inventory while a shopper is filling out payment information. You can create a product reservation when a shopper proceeds to check out and then release the reservation when the order process is complete.
*/
class ProductReservationResource {

		private $apiContext;
		private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* Retrieves a list of product reservations according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return ProductReservationCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getProductReservations($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = ProductReservationClient::getProductReservationsClient($this->dataViewMode, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of product reservations according to any specified filter criteria and sort options.
	*
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getProductReservationsAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = ProductReservationClient::getProductReservationsClient($this->dataViewMode, $startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of a product reservation.
	*
	* @param int $productReservationId Unique identifier of the product reservation.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return ProductReservation 
	* @deprecated deprecated since version 1.17
	*/
	public function getProductReservation($productReservationId, $responseFields =  null)
	{
		$mozuClient = ProductReservationClient::getProductReservationClient($this->dataViewMode, $productReservationId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of a product reservation.
	*
	* @param int $productReservationId Unique identifier of the product reservation.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getProductReservationAsync($productReservationId, $responseFields =  null)
	{
		$mozuClient = ProductReservationClient::getProductReservationClient($this->dataViewMode, $productReservationId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a new product reservation for a product. This action places a hold on the product inventory for the quantity specified during the ordering process.
	*
	* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
	* @param array|ProductReservation $productReservations A hold placed on product inventory for a particular product so that the quantity specified is set aside and available for purchase during the ordering process.
	* @return array|ProductReservation 
	* @deprecated deprecated since version 1.17
	*/
	public function addProductReservations($productReservations, $skipInventoryCheck =  null)
	{
		$mozuClient = ProductReservationClient::addProductReservationsClient($this->dataViewMode, $productReservations, $skipInventoryCheck);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a new product reservation for a product. This action places a hold on the product inventory for the quantity specified during the ordering process.
	*
	* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function addProductReservationsAsync($productReservations, $skipInventoryCheck =  null)
	{
		$mozuClient = ProductReservationClient::addProductReservationsClient($this->dataViewMode, $productReservations, $skipInventoryCheck);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Commits a product reservation to decrement the product's inventory by the quantity specified then release the reservation once the order process completed successfully.
	*
	* @param array|ProductReservation $productReservations A hold placed on product inventory for a particular product so that the quantity specified is set aside and available for purchase during the ordering process.
	* @deprecated deprecated since version 1.17
	*/
	public function commitReservations($productReservations)
	{
		$mozuClient = ProductReservationClient::commitReservationsClient($this->dataViewMode, $productReservations);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Commits a product reservation to decrement the product's inventory by the quantity specified then release the reservation once the order process completed successfully.
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function commitReservationsAsync($productReservations)
	{
		$mozuClient = ProductReservationClient::commitReservationsClient($this->dataViewMode, $productReservations);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates an existing product reservation for a product.
	*
	* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
	* @param array|ProductReservation $productReservations A hold placed on product inventory for a particular product so that the quantity specified is set aside and available for purchase during the ordering process.
	* @return array|ProductReservation 
	* @deprecated deprecated since version 1.17
	*/
	public function updateProductReservations($productReservations, $skipInventoryCheck =  null)
	{
		$mozuClient = ProductReservationClient::updateProductReservationsClient($this->dataViewMode, $productReservations, $skipInventoryCheck);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates an existing product reservation for a product.
	*
	* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function updateProductReservationsAsync($productReservations, $skipInventoryCheck =  null)
	{
		$mozuClient = ProductReservationClient::updateProductReservationsClient($this->dataViewMode, $productReservations, $skipInventoryCheck);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes a product reservation. For example, delete a reservation when an order is not processed to return the product quantity back to inventory.
	*
	* @param int $productReservationId Unique identifier of the product reservation.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteProductReservation($productReservationId)
	{
		$mozuClient = ProductReservationClient::deleteProductReservationClient($this->dataViewMode, $productReservationId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes a product reservation. For example, delete a reservation when an order is not processed to return the product quantity back to inventory.
	*
	* @param int $productReservationId Unique identifier of the product reservation.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function deleteProductReservationAsync($productReservationId)
	{
		$mozuClient = ProductReservationClient::deleteProductReservationClient($this->dataViewMode, $productReservationId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
