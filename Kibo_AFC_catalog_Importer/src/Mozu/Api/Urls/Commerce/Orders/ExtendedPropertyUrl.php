<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Orders;

use Drupal\acf_kibo\Mozu\Api\MozuUrl;
use Drupal\acf_kibo\Mozu\Api\UrlLocation;

class ExtendedPropertyUrl  {

	/**
		* Get Resource Url for GetExtendedProperties
		* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
		* @param string $orderId Unique identifier of the order.
		* @return string Resource Url
	*/
	public static function getExtendedPropertiesUrl($draft, $orderId)
	{
		$url = "/api/commerce/orders/{orderId}/extendedproperties?draft={draft}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("draft", $draft);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddExtendedProperties
		* @param string $orderId Unique identifier of the order.
		* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
		* @return string Resource Url
	*/
	public static function addExtendedPropertiesUrl($orderId, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/extendedproperties?updatemode={updateMode}&version={version}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateExtendedProperty
		* @param string $key The extended property key.
		* @param string $orderId Unique identifier of the order.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param bool $upsert Inserts and updates an extended property.
        
		* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
		* @return string Resource Url
	*/
	public static function updateExtendedPropertyUrl($key, $orderId, $responseFields, $updateMode, $upsert, $version)
	{
		$url = "/api/commerce/orders/{orderId}/extendedproperties/{key}?updatemode={updateMode}&version={version}&upsert={upsert}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("key", $key);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("upsert", $upsert);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateExtendedProperties
		* @param string $orderId Unique identifier of the order.
		* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param bool $upsert Inserts and updates the extended property.
        
		* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
		* @return string Resource Url
	*/
	public static function updateExtendedPropertiesUrl($orderId, $updateMode, $upsert, $version)
	{
		$url = "/api/commerce/orders/{orderId}/extendedproperties?updatemode={updateMode}&version={version}&upsert={upsert}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("upsert", $upsert);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteExtendedProperty
		* @param string $key The extended property key.
		* @param string $orderId Unique identifier of the order.
		* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
		* @return string Resource Url
	*/
	public static function deleteExtendedPropertyUrl($key, $orderId, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/extendedproperties/{key}?updatemode={updateMode}&version={version}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("key", $key);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteExtendedProperties
		* @param string $orderId Unique identifier of the order.
		* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
		* @return string Resource Url
	*/
	public static function deleteExtendedPropertiesUrl($orderId, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/extendedproperties?updatemode={updateMode}&version={version}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
}

?>

