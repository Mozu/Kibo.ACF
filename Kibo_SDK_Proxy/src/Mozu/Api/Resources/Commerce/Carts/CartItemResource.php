<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Carts;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Carts\CartItemClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;


/**
* Use the Cart Items subresource to manage a collection of items in an active shopping cart.
*/
class CartItemResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a particular cart item by providing the cart item ID.
	*
	* @param string $cartItemId Identifier of the cart item to delete.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return CartItem 
	* @deprecated deprecated since version 1.17
	*/
	public function getCartItem($cartItemId, $responseFields =  null)
	{
		$mozuClient = CartItemClient::getCartItemClient($cartItemId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a particular cart item by providing the cart item ID.
	*
	* @param string $cartItemId Identifier of the cart item to delete.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getCartItemAsync($cartItemId, $responseFields =  null)
	{
		$mozuClient = CartItemClient::getCartItemClient($cartItemId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves a list of cart items including the total number of items in the cart.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return CartItemCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getCartItems($responseFields =  null)
	{
		$mozuClient = CartItemClient::getCartItemsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of cart items including the total number of items in the cart.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getCartItemsAsync($responseFields =  null)
	{
		$mozuClient = CartItemClient::getCartItemsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Adds a product to the current shopper's cart.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CartItem $cartItem Properties of an item added to an active shopping cart.
	* @return CartItem 
	* @deprecated deprecated since version 1.17
	*/
	public function addItemToCart($cartItem, $responseFields =  null)
	{
		$mozuClient = CartItemClient::addItemToCartClient($cartItem, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Adds a product to the current shopper's cart.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function addItemToCartAsync($cartItem, $responseFields =  null)
	{
		$mozuClient = CartItemClient::addItemToCartClient($cartItem, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Update the quantity of an individual cart item in the cart of the current shopper.
	*
	* @param string $cartItemId Identifier of the cart item to delete.
	* @param int $quantity The number of cart items in the shopper's active cart.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return CartItem 
	* @deprecated deprecated since version 1.17
	*/
	public function updateCartItemQuantity($cartItemId, $quantity, $responseFields =  null)
	{
		$mozuClient = CartItemClient::updateCartItemQuantityClient($cartItemId, $quantity, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Update the quantity of an individual cart item in the cart of the current shopper.
	*
	* @param string $cartItemId Identifier of the cart item to delete.
	* @param int $quantity The number of cart items in the shopper's active cart.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function updateCartItemQuantityAsync($cartItemId, $quantity, $responseFields =  null)
	{
		$mozuClient = CartItemClient::updateCartItemQuantityClient($cartItemId, $quantity, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Update the product or product quantity of an item in the current shopper's cart.
	*
	* @param string $cartItemId Identifier of the cart item to delete.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CartItem $cartItem Properties of an item added to an active shopping cart.
	* @return CartItem 
	* @deprecated deprecated since version 1.17
	*/
	public function updateCartItem($cartItem, $cartItemId, $responseFields =  null)
	{
		$mozuClient = CartItemClient::updateCartItemClient($cartItem, $cartItemId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Update the product or product quantity of an item in the current shopper's cart.
	*
	* @param string $cartItemId Identifier of the cart item to delete.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function updateCartItemAsync($cartItem, $cartItemId, $responseFields =  null)
	{
		$mozuClient = CartItemClient::updateCartItemClient($cartItem, $cartItemId, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Removes all items in the current shopper's active cart.
	*
	* @return Cart 
	* @deprecated deprecated since version 1.17
	*/
	public function removeAllCartItems()
	{
		$mozuClient = CartItemClient::removeAllCartItemsClient();
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Removes all items in the current shopper's active cart.
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function removeAllCartItemsAsync()
	{
		$mozuClient = CartItemClient::removeAllCartItemsClient();
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes a specific cart item by providing the cart item ID.
	*
	* @param string $cartItemId Identifier of the cart item to delete.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteCartItem($cartItemId)
	{
		$mozuClient = CartItemClient::deleteCartItemClient($cartItemId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes a specific cart item by providing the cart item ID.
	*
	* @param string $cartItemId Identifier of the cart item to delete.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function deleteCartItemAsync($cartItemId)
	{
		$mozuClient = CartItemClient::deleteCartItemClient($cartItemId);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
