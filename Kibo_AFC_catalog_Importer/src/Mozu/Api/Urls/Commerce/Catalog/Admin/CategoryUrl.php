<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Catalog\Admin;

use Drupal\acf_kibo\Mozu\Api\MozuUrl;
use Drupal\acf_kibo\Mozu\Api\UrlLocation;

class CategoryUrl  {

	/**
		* Get Resource Url for GetCategories
		* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
		* @param int $pageSize The number of results to display on each page when creating paged results from a query. The maximum value is 200.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $sortBy 
		* @param int $startIndex 
		* @return string Resource Url
	*/
	public static function getCategoriesUrl($filter, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/admin/categories/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetChildCategories
		* @param int $categoryId Unique identifier of the category to modify.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getChildCategoriesUrl($categoryId, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/categories/{categoryId}/children?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("categoryId", $categoryId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCategory
		* @param int $categoryId Unique identifier of the category to modify.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getCategoryUrl($categoryId, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/categories/{categoryId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("categoryId", $categoryId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddCategory
		* @param bool $incrementSequence If true, when adding a new product category, set the sequence number of the new category to an increment of one integer greater than the maximum available sequence number across all product categories. If false, set the sequence number to zero.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param bool $useProvidedId Optional. If ,  uses the  you specify in the request as the category's id. If ,  generates an  for the category regardless if you specify an id in the request.If you specify an id already in use and set this parameter to ,  returns an error.
		* @return string Resource Url
	*/
	public static function addCategoryUrl($incrementSequence, $responseFields, $useProvidedId)
	{
		$url = "/api/commerce/catalog/admin/categories/?incrementSequence={incrementSequence}&useProvidedId={useProvidedId}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("incrementSequence", $incrementSequence);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("useProvidedId", $useProvidedId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ValidateDynamicExpression
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function validateDynamicExpressionUrl($responseFields)
	{
		$url = "/api/commerce/catalog/admin/categories/ValidateDynamicExpression?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ValidateRealTimeDynamicExpression
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function validateRealTimeDynamicExpressionUrl($responseFields)
	{
		$url = "/api/commerce/catalog/admin/categories/ValidateRealTimeDynamicExpression?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateCategory
		* @param bool $cascadeVisibility If true, when changing the display option for the category, change it for all subcategories also. The default value is false.
		* @param int $categoryId Unique identifier of the category to modify.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateCategoryUrl($cascadeVisibility, $categoryId, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/categories/{categoryId}?cascadeVisibility={cascadeVisibility}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("cascadeVisibility", $cascadeVisibility);
		$url = $mozuUrl->formatUrl("categoryId", $categoryId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteCategoryById
		* @param bool $cascadeDelete Specifies whether to also delete all subcategories associated with the specified category.If you set this value is false, only the specified category is deleted.The default value is false.
		* @param int $categoryId Unique identifier of the category to modify.
		* @param bool $forceDelete Specifies whether the category, and any associated subcategories, are deleted even if there are products that reference them. The default value is false.
		* @param bool $reassignToParent Specifies whether any subcategories of the specified category are reassigned to the parent of the specified category.This field only applies if the cascadeDelete parameter is false.The default value is false.
		* @return string Resource Url
	*/
	public static function deleteCategoryByIdUrl($cascadeDelete, $categoryId, $forceDelete, $reassignToParent)
	{
		$url = "/api/commerce/catalog/admin/categories/{categoryId}/?cascadeDelete={cascadeDelete}&forceDelete={forceDelete}&reassignToParent={reassignToParent}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("cascadeDelete", $cascadeDelete);
		$url = $mozuUrl->formatUrl("categoryId", $categoryId);
		$url = $mozuUrl->formatUrl("forceDelete", $forceDelete);
		$url = $mozuUrl->formatUrl("reassignToParent", $reassignToParent);
		return $mozuUrl;
	}
	
}

?>

