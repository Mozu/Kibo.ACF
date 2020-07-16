<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\CartClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;


/**
* Use this resource to manage storefront shopping carts as shoppers add and remove items for purchase. Each time a shopper's cart is modified, the Carts resource updates the estimated total with any applicable discounts.
*/
class CartResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves the cart specified in the request.
	*
	* @param string $cartId Identifier of the cart to delete.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Cart 
	* @deprecated deprecated since version 1.17
	*/
	public function getCart($cartId, $responseFields =  null)
	{
		$mozuClient = CartClient::getCartClient($cartId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the cart specified in the request.
	*
	* @param string $cartId Identifier of the cart to delete.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getCartAsync($cartId, $responseFields =  null)
	{
		$mozuClient = CartClient::getCartClient($cartId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves a cart's contents for the current shopper. If the shopper does not have an active cart on the site, the service creates one.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Cart 
	* @deprecated deprecated since version 1.17
	*/
	public function getOrCreateCart($responseFields =  null)
	{
		$mozuClient = CartClient::getOrCreateCartClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a cart's contents for the current shopper. If the shopper does not have an active cart on the site, the service creates one.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getOrCreateCartAsync($responseFields =  null)
	{
		$mozuClient = CartClient::getOrCreateCartClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves summary information associated with the cart of the current shopper, including the number of items, the current total, and whether the cart has expired. All anonymous idle carts that do not proceed to checkout expire after 14 days.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return CartSummary 
	* @deprecated deprecated since version 1.17
	*/
	public function getCartSummary($responseFields =  null)
	{
		$mozuClient = CartClient::getCartSummaryClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves summary information associated with the cart of the current shopper, including the number of items, the current total, and whether the cart has expired. All anonymous idle carts that do not proceed to checkout expire after 14 days.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getCartSummaryAsync($responseFields =  null)
	{
		$mozuClient = CartClient::getCartSummaryClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves summary information associated with the cart of user specified in the request, including the number of items in the cart, the current total, and whether the cart has expired. All anonymous idle carts that do not proceed to checkout expire after 14 days.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
	* @return CartSummary 
	* @deprecated deprecated since version 1.17
	*/
	public function getUserCartSummary($userId, $responseFields =  null)
	{
		$mozuClient = CartClient::getUserCartSummaryClient($userId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves summary information associated with the cart of user specified in the request, including the number of items in the cart, the current total, and whether the cart has expired. All anonymous idle carts that do not proceed to checkout expire after 14 days.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getUserCartSummaryAsync($userId, $responseFields =  null)
	{
		$mozuClient = CartClient::getUserCartSummaryClient($userId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the cart of the user specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
	* @return Cart 
	* @deprecated deprecated since version 1.17
	*/
	public function getUserCart($userId, $responseFields =  null)
	{
		$mozuClient = CartClient::getUserCartClient($userId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the cart of the user specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getUserCartAsync($userId, $responseFields =  null)
	{
		$mozuClient = CartClient::getUserCartClient($userId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Update the current shopper's cart.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param Cart $cart Properties of a shopping cart.
	* @return Cart 
	* @deprecated deprecated since version 1.17
	*/
	public function updateCart($cart, $responseFields =  null)
	{
		$mozuClient = CartClient::updateCartClient($cart, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Update the current shopper's cart.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function updateCartAsync($cart, $responseFields =  null)
	{
		$mozuClient = CartClient::updateCartClient($cart, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the cart specified in the request.
	*
	* @param string $cartId Identifier of the cart to delete.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteCart($cartId)
	{
		$mozuClient = CartClient::deleteCartClient($cartId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the cart specified in the request.
	*
	* @param string $cartId Identifier of the cart to delete.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function deleteCartAsync($cartId)
	{
		$mozuClient = CartClient::deleteCartClient($cartId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the cart of the currently active shopper.
	*
	* @deprecated deprecated since version 1.17
	*/
	public function deleteCurrentCart()
	{
		$mozuClient = CartClient::deleteCurrentCartClient();
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the cart of the currently active shopper.
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function deleteCurrentCartAsync()
	{
		$mozuClient = CartClient::deleteCurrentCartClient();
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
