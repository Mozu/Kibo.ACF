<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Settings\Checkout;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Settings\Checkout\CustomerCheckoutSettingsClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;


/**
* Use the Customer Checkout Settings resource to define login settings that apply when shoppers proceed to checkout.
*/
class CustomerCheckoutSettingsResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves all checkout settings defined for the site: Payment settings, such as the payment gateway ID and credentials, supported credit cards, and more; Customer Checkout settings, such as whether login is required, and any custom attributes; and Order Processing settings, such as when payment is authorized and captured, and any custom attributes.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return CustomerCheckoutSettings 
	* @deprecated deprecated since version 1.17
	*/
	public function getCustomerCheckoutSettings($responseFields =  null)
	{
		$mozuClient = CustomerCheckoutSettingsClient::getCustomerCheckoutSettingsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves all checkout settings defined for the site: Payment settings, such as the payment gateway ID and credentials, supported credit cards, and more; Customer Checkout settings, such as whether login is required, and any custom attributes; and Order Processing settings, such as when payment is authorized and captured, and any custom attributes.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getCustomerCheckoutSettingsAsync($responseFields =  null)
	{
		$mozuClient = CustomerCheckoutSettingsClient::getCustomerCheckoutSettingsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Modifies existing site checkout settings. Modify Payment, Customer Checkout, and Order Processing settings in one PUT.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerCheckoutSettings $customerCheckoutSettings The properties of the customer checkout settings such as whether shoppers must be logged in.
	* @return CustomerCheckoutSettings 
	* @deprecated deprecated since version 1.17
	*/
	public function updateCustomerCheckoutSettings($customerCheckoutSettings, $responseFields =  null)
	{
		$mozuClient = CustomerCheckoutSettingsClient::updateCustomerCheckoutSettingsClient($customerCheckoutSettings, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Modifies existing site checkout settings. Modify Payment, Customer Checkout, and Order Processing settings in one PUT.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function updateCustomerCheckoutSettingsAsync($customerCheckoutSettings, $responseFields =  null)
	{
		$mozuClient = CustomerCheckoutSettingsClient::updateCustomerCheckoutSettingsClient($customerCheckoutSettings, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
