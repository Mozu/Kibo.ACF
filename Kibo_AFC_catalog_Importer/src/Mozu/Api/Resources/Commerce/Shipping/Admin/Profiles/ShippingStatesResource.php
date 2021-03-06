<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Resources\Commerce\Shipping\Admin\Profiles;

use Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Shipping\Admin\Profiles\ShippingStatesClient;
use Drupal\acf_kibo\Mozu\Api\ApiContext;


/**
* Use the ShippingStates sub-resource to manage the states your shipping profile supports. For example, you can specify one of your shipping profiles to only support Texas, Oklahoma, Arkansas, Louisiana, and New Mexico.Each shipping state is composed of a user-definied code and name.
*/
class ShippingStatesResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a list of shipping states and their details.
	*
	* @param string $profileCode The unique, user-defined code of the profile with which the shipping state is associated.
	* @return array|ShippingStates 
	* @deprecated deprecated since version 1.17
	*/
	public function getStates($profileCode)
	{
		$mozuClient = ShippingStatesClient::getStatesClient($profileCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of shipping states and their details.
	*
	* @param string $profileCode The unique, user-defined code of the profile with which the shipping state is associated.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getStatesAsync($profileCode)
	{
		$mozuClient = ShippingStatesClient::getStatesClient($profileCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the details of the shipping states.
	*
	* @param string $profilecode The unique, user-defined code of the profile with which the shipping state is associated.
	* @param array|ShippingStates $states The updated details of the shipping states associated with the specified profilecode.
	* @return array|ShippingStates 
	* @deprecated deprecated since version 1.17
	*/
	public function updateStates($states, $profilecode)
	{
		$mozuClient = ShippingStatesClient::updateStatesClient($states, $profilecode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates the details of the shipping states.
	*
	* @param string $profilecode The unique, user-defined code of the profile with which the shipping state is associated.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function updateStatesAsync($states, $profilecode)
	{
		$mozuClient = ShippingStatesClient::updateStatesClient($states, $profilecode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

