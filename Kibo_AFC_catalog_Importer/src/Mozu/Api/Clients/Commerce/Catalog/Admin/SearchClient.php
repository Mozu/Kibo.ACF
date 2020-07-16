<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Catalog\Admin;

use Drupal\acf_kibo\Mozu\Api\MozuClient;
use Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Catalog\Admin\SearchUrl;


/**
* Use the Search resource to manage all settings and options for providing product search on your site, as well as search tuning rules.
*/
class SearchClient {

	/**
	* Retrieves the details of the specified search tuning rule.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $searchTuningRuleCode The unique identifier of the search tuning rule.
	* @return MozuClient
	*/
	public static function getSearchTuningRuleClient($searchTuningRuleCode, $responseFields =  null)
	{
		$url = SearchUrl::getSearchTuningRuleUrl($responseFields, $searchTuningRuleCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of search tuning rules and their properties.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return MozuClient
	*/
	public static function getSearchTuningRulesClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = SearchUrl::getSearchTuningRulesUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of the specified search tuning rule sort fields. Sort fields allow you to control the product relevance whenver shoppers sort products on a page. For more information about sort relevance, refer to [Search Tuning Rules and Sorting](../../../developer/api-guides/search-tuning-rules.htm#search_tuning_rules_and_sorting).
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return MozuClient
	*/
	public static function getSearchTuningRuleSortFieldsClient($responseFields =  null)
	{
		$url = SearchUrl::getSearchTuningRuleSortFieldsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the search settings for the specified site.Refer to [Search Settings API Overview](../../../../developer/api-guides/search-settings.htm) for more information about 's search settings.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return MozuClient
	*/
	public static function getSettingsClient($responseFields =  null)
	{
		$url = SearchUrl::getSettingsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a collection of synonyms definitions for product searches.Refer to [Search Synonyms](../../../../developer/api-guides/search-settings.htm#search_synonyms) for more information about search synonyms.
	*
	* @param string $localeCode The two character country code that sets the locale, such as US for United States. Sites, tenants, and catalogs use locale codes for localizing content, such as translated product text per supported country.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return MozuClient
	*/
	public static function getSynonymDefinitionCollectionClient($localeCode, $responseFields =  null)
	{
		$url = SearchUrl::getSynonymDefinitionCollectionUrl($localeCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of synonym definitions according to any specified filter criteria and sort options.Refer to [Search Synonyms](../../../../developer/api-guides/search-settings.htm#search_synonyms) for more information about search synonyms.
	*
	* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return MozuClient
	*/
	public static function getSynonymDefinitionsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $responseFields =  null)
	{
		$url = SearchUrl::getSynonymDefinitionsUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of the specified synonym defintion.Refer to [Search Synonyms](../../../../developer/api-guides/search-settings.htm#search_synonyms) for more information about search synonyms.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param int $synonymId The unique identifier of the synonym definition.
	* @return MozuClient
	*/
	public static function getSynonymDefinitionClient($synonymId, $responseFields =  null)
	{
		$url = SearchUrl::getSynonymDefinitionUrl($responseFields, $synonymId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a search tuning rule for your site. You can use search tuning rules to fine tune the product search results that appear when a shopper searches for a specific keyword, or navigates to a category page.For more information on search tuning rules, refer to [Search Tuning Rules](../../../../developer/api-guides/search-tuning-rules.htm).
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param SearchTuningRule $searchTuningRuleIn The details of the new search tuning rule.
	* @return MozuClient
	*/
	public static function addSearchTuningRuleClient($searchTuningRuleIn, $responseFields =  null)
	{
		$url = SearchUrl::addSearchTuningRuleUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($searchTuningRuleIn);
		return $mozuClient;

	}
	
	/**
	* Updates the details of the search tuning rule sort fields.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param SearchTuningRuleSortFields $searchTuningRuleSortFieldsIn The details of the updated search tuning rule sort fields.
	* @return MozuClient
	*/
	public static function updateSearchTuningRuleSortFieldsClient($searchTuningRuleSortFieldsIn, $responseFields =  null)
	{
		$url = SearchUrl::updateSearchTuningRuleSortFieldsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($searchTuningRuleSortFieldsIn);
		return $mozuClient;

	}
	
	/**
	* Updates a collection of synonym definitions.Refer to [Search Synonyms](../../../../developer/api-guides/search-settings.htm#search_synonyms) for more information about search synonyms.
	*
	* @param string $localeCode The two character country code that sets the locale, such as US for United States. Sites, tenants, and catalogs use locale codes for localizing content, such as translated product text per supported country.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param SynonymDefinitionCollection $collection The updated details of the synonym definition collection.
	* @return MozuClient
	*/
	public static function updateSynonymDefinitionCollectionClient($collection, $localeCode, $responseFields =  null)
	{
		$url = SearchUrl::updateSynonymDefinitionCollectionUrl($localeCode, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($collection);
		return $mozuClient;

	}
	
	/**
	* Creates a new synonym definition.Refer to [Search Synonyms](../../../../developer/api-guides/search-settings.htm#search_synonyms) for more information about search synonyms.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param SynonymDefinition $synonymDefinition The details of the new synonym definition.
	* @return MozuClient
	*/
	public static function addSynonymDefinitionClient($synonymDefinition, $responseFields =  null)
	{
		$url = SearchUrl::addSynonymDefinitionUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($synonymDefinition);
		return $mozuClient;

	}
	
	/**
	* Updates the details of the specified search tuning rule.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $searchTuningRuleCode The unique identifier of the search tuning rule.
	* @param SearchTuningRule $searchTuningRuleIn The details of the updated search tuning rule.
	* @return MozuClient
	*/
	public static function updateSearchTuningRuleClient($searchTuningRuleIn, $searchTuningRuleCode, $responseFields =  null)
	{
		$url = SearchUrl::updateSearchTuningRuleUrl($responseFields, $searchTuningRuleCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($searchTuningRuleIn);
		return $mozuClient;

	}
	
	/**
	* Updates the search setting properties for a specific site.Refer to [Search Settings API Overview](../../../../developer/api-guides/search-settings.htm) for more information about 's search settings.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param SearchSettings $settings The search settings to update.
	* @return MozuClient
	*/
	public static function updateSettingsClient($settings, $responseFields =  null)
	{
		$url = SearchUrl::updateSettingsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($settings);
		return $mozuClient;

	}
	
	/**
	* Updates the details of a synonym definition.Refer to [Search Synonyms](../../../../developer/api-guides/search-settings.htm#search_synonyms) for more information about search synonyms.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param int $synonymId The unique identifier of the synonym definition.
	* @param SynonymDefinition $synonymDefinition The updated synonym definition details.
	* @return MozuClient
	*/
	public static function updateSynonymDefinitionClient($synonymDefinition, $synonymId, $responseFields =  null)
	{
		$url = SearchUrl::updateSynonymDefinitionUrl($responseFields, $synonymId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($synonymDefinition);
		return $mozuClient;

	}
	
	/**
	* Deletes the specified search tuning rule from the site.
	*
	* @param string $searchTuningRuleCode The unique identifier of the search tuning rule.
	*/
	public static function deleteSearchTuningRuleClient($searchTuningRuleCode)
	{
		$url = SearchUrl::deleteSearchTuningRuleUrl($searchTuningRuleCode);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Deletes the specified synonym definition.Refer to [Search Synonyms](../../../../developer/api-guides/search-settings.htm#search_synonyms) for more information about search synonyms.
	*
	* @param int $synonymId The unique identifier of the synonym definition.
	*/
	public static function deleteSynonymDefinitionClient($synonymId)
	{
		$url = SearchUrl::deleteSynonymDefinitionUrl($synonymId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
