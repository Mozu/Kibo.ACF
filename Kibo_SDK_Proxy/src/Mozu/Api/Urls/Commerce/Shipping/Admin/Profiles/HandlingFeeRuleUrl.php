<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Shipping\Admin\Profiles;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuUrl;
use Drupal\kibo_sdk_proxy\Mozu\Api\UrlLocation;

class HandlingFeeRuleUrl  {

	/**
		* Get Resource Url for GetProductHandlingFeeRule
		* @param string $id Unique identifier of the customer segment to retrieve.
		* @param string $profilecode The unique, user-defined code of the profile with which the product handling fee rule is associated.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getProductHandlingFeeRuleUrl($id, $profilecode, $responseFields)
	{
		$url = "/api/commerce/shipping/admin/profiles/{profilecode}/rules/producthandlingfees/{id}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("id", $id);
		$url = $mozuUrl->formatUrl("profilecode", $profilecode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetProductHandlingFeeRules
		* @param string $profilecode The unique, user-defined code of the profile with which the product handling fee rule is associated.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getProductHandlingFeeRulesUrl($profilecode, $responseFields)
	{
		$url = "/api/commerce/shipping/admin/profiles/{profilecode}/rules/producthandlingfees?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("profilecode", $profilecode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateProductHandlingFeeRule
		* @param string $profilecode The unique, user-defined code of the profile with which the product handling fee rule is associated.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function createProductHandlingFeeRuleUrl($profilecode, $responseFields)
	{
		$url = "/api/commerce/shipping/admin/profiles/{profilecode}/rules/producthandlingfees?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("profilecode", $profilecode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateProductHandlingFeeRule
		* @param string $id Unique identifier of the customer segment to retrieve.
		* @param string $profilecode The unique, user-defined code of the profile with which the product handling fee rule is associated.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function updateProductHandlingFeeRuleUrl($id, $profilecode, $responseFields)
	{
		$url = "/api/commerce/shipping/admin/profiles/{profilecode}/rules/producthandlingfees/{id}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("id", $id);
		$url = $mozuUrl->formatUrl("profilecode", $profilecode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteProductHandlingFeeRule
		* @param string $id Unique identifier of the customer segment to retrieve.
		* @param string $profilecode The unique, user-defined code of the profile with which the product handling fee rule is associated.
		* @return string Resource Url
	*/
	public static function deleteProductHandlingFeeRuleUrl($id, $profilecode)
	{
		$url = "/api/commerce/shipping/admin/profiles/{profilecode}/rules/producthandlingfees/{id}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("id", $id);
		$url = $mozuUrl->formatUrl("profilecode", $profilecode);
		return $mozuUrl;
	}
	
}

?>

