<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Resources\Commerce\Admin;

use Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Admin\LocationTypeClient;
use Drupal\acf_kibo\Mozu\Api\ApiContext;


/**
* Use the Location Types resource to manage the types of locations your tenant maintains, such as warehouses, physical storefronts, and kiosks.
*/
class LocationTypeResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieve a list of all location types defined for the tenant.
	*
	* @return array|LocationType 
	* @deprecated deprecated since version 1.17
	*/
	public function getLocationTypes()
	{
		$mozuClient = LocationTypeClient::getLocationTypesClient();
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieve a list of all location types defined for the tenant.
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getLocationTypesAsync()
	{
		$mozuClient = LocationTypeClient::getLocationTypesClient();
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of the location type specified in the request.
	*
	* @param string $locationTypeCode The user-defined code that identifies the location type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return LocationType 
	* @deprecated deprecated since version 1.17
	*/
	public function getLocationType($locationTypeCode, $responseFields =  null)
	{
		$mozuClient = LocationTypeClient::getLocationTypeClient($locationTypeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of the location type specified in the request.
	*
	* @param string $locationTypeCode The user-defined code that identifies the location type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getLocationTypeAsync($locationTypeCode, $responseFields =  null)
	{
		$mozuClient = LocationTypeClient::getLocationTypeClient($locationTypeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a new location type based on the information specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param LocationType $locationType Properties of a type of physical location, such as warehouse or kiosk. Location types enable tenants to group similar locations for filtering and location usage type definition.
	* @return LocationType 
	* @deprecated deprecated since version 1.17
	*/
	public function addLocationType($locationType, $responseFields =  null)
	{
		$mozuClient = LocationTypeClient::addLocationTypeClient($locationType, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a new location type based on the information specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function addLocationTypeAsync($locationType, $responseFields =  null)
	{
		$mozuClient = LocationTypeClient::addLocationTypeClient($locationType, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the name of a defined location type.
	*
	* @param string $locationTypeCode The user-defined code that identifies the location type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param LocationType $locationType Properties of a type of physical location, such as warehouse or kiosk. Location types enable tenants to group similar locations for filtering and location usage type definition.
	* @return LocationType 
	* @deprecated deprecated since version 1.17
	*/
	public function updateLocationType($locationType, $locationTypeCode, $responseFields =  null)
	{
		$mozuClient = LocationTypeClient::updateLocationTypeClient($locationType, $locationTypeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates the name of a defined location type.
	*
	* @param string $locationTypeCode The user-defined code that identifies the location type.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function updateLocationTypeAsync($locationType, $locationTypeCode, $responseFields =  null)
	{
		$mozuClient = LocationTypeClient::updateLocationTypeClient($locationType, $locationTypeCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the location type specified in the request.
	*
	* @param string $locationTypeCode The user-defined code that identifies the location type.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteLocationType($locationTypeCode)
	{
		$mozuClient = LocationTypeClient::deleteLocationTypeClient($locationTypeCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the location type specified in the request.
	*
	* @param string $locationTypeCode The user-defined code that identifies the location type.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function deleteLocationTypeAsync($locationTypeCode)
	{
		$mozuClient = LocationTypeClient::deleteLocationTypeClient($locationTypeCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

