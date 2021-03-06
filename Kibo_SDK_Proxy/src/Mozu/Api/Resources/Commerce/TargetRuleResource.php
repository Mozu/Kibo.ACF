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

use Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\TargetRuleClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;


/**
* Use the TargetRules resource to manage your target rules for products and zones. For example, you can set specific rules that dictate shipping options for specific products.
*/
class TargetRuleResource {

		private $apiContext;
			
	public function __construct(ApiContext $apiContext) 
	{
		$this->apiContext = $apiContext;
	}

	



	/**
	* Retrieves a list of target rules and their details according to any specified facets, filter criteria, and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return TargetRuleCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getTargetRules($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = TargetRuleClient::getTargetRulesClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of target rules and their details according to any specified facets, filter criteria, and sort options.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getTargetRulesAsync($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$mozuClient = TargetRuleClient::getTargetRulesClient($startIndex, $pageSize, $sortBy, $filter, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of the specified target rule.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return TargetRule 
	* @deprecated deprecated since version 1.17
	*/
	public function getTargetRule($code, $responseFields =  null)
	{
		$mozuClient = TargetRuleClient::getTargetRuleClient($code, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of the specified target rule.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function getTargetRuleAsync($code, $responseFields =  null)
	{
		$mozuClient = TargetRuleClient::getTargetRuleClient($code, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Creates a new target rule.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param TargetRule $targetRule The details of the new target rule.
	* @return TargetRule 
	* @deprecated deprecated since version 1.17
	*/
	public function createTargetRule($targetRule, $responseFields =  null)
	{
		$mozuClient = TargetRuleClient::createTargetRuleClient($targetRule, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Creates a new target rule.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function createTargetRuleAsync($targetRule, $responseFields =  null)
	{
		$mozuClient = TargetRuleClient::createTargetRuleClient($targetRule, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Validates the details of a target rule.
	*
	* @param TargetRule $targetRule The details of the target rule you want to validate.
	* @deprecated deprecated since version 1.17
	*/
	public function validateTargetRule($targetRule)
	{
		$mozuClient = TargetRuleClient::validateTargetRuleClient($targetRule);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Validates the details of a target rule.
	*
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function validateTargetRuleAsync($targetRule)
	{
		$mozuClient = TargetRuleClient::validateTargetRuleClient($targetRule);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the details of the specified target rule.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param TargetRule $targetRule The details of the updated target rule.
	* @return TargetRule 
	* @deprecated deprecated since version 1.17
	*/
	public function updateTargetRule($targetRule, $code, $responseFields =  null)
	{
		$mozuClient = TargetRuleClient::updateTargetRuleClient($targetRule, $code, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates the details of the specified target rule.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function updateTargetRuleAsync($targetRule, $code, $responseFields =  null)
	{
		$mozuClient = TargetRuleClient::updateTargetRuleClient($targetRule, $code, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the specified target rule.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteTargetRule($code)
	{
		$mozuClient = TargetRuleClient::deleteTargetRuleClient($code);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the specified target rule.
	*
	* @param string $code User-defined code that uniqely identifies the channel group.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\MozuResult. errorFn is passed Drupal\kibo_sdk_proxy\Mozu\Api\ApiException
	*/
	public function deleteTargetRuleAsync($code)
	{
		$mozuClient = TargetRuleClient::deleteTargetRuleClient($code);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

