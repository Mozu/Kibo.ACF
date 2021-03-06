<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Settings;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Settings\GeneralSettingsClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;


/**
* Define global site settings such as the site name, shipping and email addresses, and logo images. Block undesirable IP addresses using this resource.
*/
class GeneralSettingsResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieve a site's general global settings.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return GeneralSettings 
	* @deprecated deprecated since version 1.17
	*/
	public function getGeneralSettings($responseFields =  null)
	{
		$mozuClient = GeneralSettingsClient::getGeneralSettingsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieve a site's general global settings.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getGeneralSettingsAsync($responseFields =  null)
	{
		$mozuClient = GeneralSettingsClient::getGeneralSettingsClient($responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates a site's general global settings.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param GeneralSettings $generalSettings General settings used on the storefront site.
	* @return GeneralSettings 
	* @deprecated deprecated since version 1.17
	*/
	public function updateGeneralSettings($generalSettings, $responseFields =  null)
	{
		$mozuClient = GeneralSettingsClient::updateGeneralSettingsClient($generalSettings, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates a site's general global settings.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function updateGeneralSettingsAsync($generalSettings, $responseFields =  null)
	{
		$mozuClient = GeneralSettingsClient::updateGeneralSettingsClient($generalSettings, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

