<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Platform\Entitylists;

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Platform\Entitylists\EntityClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;


/**
* Entities are JSON entries within the MZDB ( Mongo DB) for handling large data sets to heavily filter (&gt;2,000 items). Each entity is associated to an EntityList with schema, rules, and formatting for storing the content. This content can be accessed via the  API and  Hypr tags.
*/
class EntityResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves an entity with an associated entity list and context level at tenant, master catalog, catalog, or site. 
	*
	* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
	* @param string $id Unique identifier of the customer segment to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return JObject 
	* @deprecated deprecated since version 1.17
	*/
	public function getEntity($entityListFullName, $id, $responseFields =  null)
	{
		$mozuClient = EntityClient::getEntityClient($entityListFullName, $id, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves an entity with an associated entity list and context level at tenant, master catalog, catalog, or site. 
	*
	* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
	* @param string $id Unique identifier of the customer segment to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getEntityAsync($entityListFullName, $id, $responseFields =  null)
	{
		$mozuClient = EntityClient::getEntityClient($entityListFullName, $id, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves a collection of entities with an associated entity list and context level at tenant, master catalog, catalog, or site. 
	*
	* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return EntityCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getEntities($entityListFullName, $pageSize =  null, $startIndex =  null, $filter =  null, $sortBy =  null, $responseFields =  null)
	{
		$mozuClient = EntityClient::getEntitiesClient($entityListFullName, $pageSize, $startIndex, $filter, $sortBy, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a collection of entities with an associated entity list and context level at tenant, master catalog, catalog, or site. 
	*
	* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getEntitiesAsync($entityListFullName, $pageSize =  null, $startIndex =  null, $filter =  null, $sortBy =  null, $responseFields =  null)
	{
		$mozuClient = EntityClient::getEntitiesClient($entityListFullName, $pageSize, $startIndex, $filter, $sortBy, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Inserts a new entity per the entered item, the entity list full name, and associated response fields. 
	*
	* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param JObject $item JSON code for objects.
	* @return JObject 
	* @deprecated deprecated since version 1.17
	*/
	public function insertEntity($item, $entityListFullName, $responseFields =  null)
	{
		$mozuClient = EntityClient::insertEntityClient($item, $entityListFullName, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Inserts a new entity per the entered item, the entity list full name, and associated response fields. 
	*
	* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function insertEntityAsync($item, $entityListFullName, $responseFields =  null)
	{
		$mozuClient = EntityClient::insertEntityClient($item, $entityListFullName, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the content and associations for an existing entity.
	*
	* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
	* @param string $id Unique identifier of the customer segment to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param JObject $item JSON code for objects.
	* @return JObject 
	* @deprecated deprecated since version 1.17
	*/
	public function updateEntity($item, $entityListFullName, $id, $responseFields =  null)
	{
		$mozuClient = EntityClient::updateEntityClient($item, $entityListFullName, $id, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates the content and associations for an existing entity.
	*
	* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
	* @param string $id Unique identifier of the customer segment to retrieve.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function updateEntityAsync($item, $entityListFullName, $id, $responseFields =  null)
	{
		$mozuClient = EntityClient::updateEntityClient($item, $entityListFullName, $id, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes an entity depending on the context of tenant, master catalog, catalog, or site level. Entities are associated to an entity list (schema and formatting) for displaying within a namespace and context level.
	*
	* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
	* @param string $id Unique identifier of the customer segment to retrieve.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteEntity($entityListFullName, $id)
	{
		$mozuClient = EntityClient::deleteEntityClient($entityListFullName, $id);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes an entity depending on the context of tenant, master catalog, catalog, or site level. Entities are associated to an entity list (schema and formatting) for displaying within a namespace and context level.
	*
	* @param string $entityListFullName The full name of the EntityList including namespace in name@nameSpace format
	* @param string $id Unique identifier of the customer segment to retrieve.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function deleteEntityAsync($entityListFullName, $id)
	{
		$mozuClient = EntityClient::deleteEntityClient($entityListFullName, $id);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

