<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Platform;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Platform\TenantDataClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;


/**
* Use the tenant data resource to store tenant-level information required for a third-party application in the  database.
*/
class TenantDataResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves the value of a record in the  database.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return string 
	* @deprecated deprecated since version 1.17
	*/
	public function getDBValue($dbEntryQuery, $responseFields =  null)
	{
		$mozuClient = TenantDataClient::getDBValueClient($dbEntryQuery, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the value of a record in the  database.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getDBValueAsync($dbEntryQuery, $responseFields =  null)
	{
		$mozuClient = TenantDataClient::getDBValueClient($dbEntryQuery, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a new record in the  database based on the information supplied in the request.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $value The value string to create.
	* @deprecated deprecated since version 1.17
	*/
	public function createDBValue($value, $dbEntryQuery)
	{
		$mozuClient = TenantDataClient::createDBValueClient($value, $dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Creates a new record in the  database based on the information supplied in the request.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function createDBValueAsync($value, $dbEntryQuery)
	{
		$mozuClient = TenantDataClient::createDBValueClient($value, $dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates a record in the  database based on the information supplied in the request.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $value The value string to create.
	* @deprecated deprecated since version 1.17
	*/
	public function updateDBValue($value, $dbEntryQuery)
	{
		$mozuClient = TenantDataClient::updateDBValueClient($value, $dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Updates a record in the  database based on the information supplied in the request.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function updateDBValueAsync($value, $dbEntryQuery)
	{
		$mozuClient = TenantDataClient::updateDBValueClient($value, $dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Removes a previously defined record in the  database.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteDBValue($dbEntryQuery)
	{
		$mozuClient = TenantDataClient::deleteDBValueClient($dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Removes a previously defined record in the  database.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function deleteDBValueAsync($dbEntryQuery)
	{
		$mozuClient = TenantDataClient::deleteDBValueClient($dbEntryQuery);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
