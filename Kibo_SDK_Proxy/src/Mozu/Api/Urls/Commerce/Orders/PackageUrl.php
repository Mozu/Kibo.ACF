<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Orders;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuUrl;
use Drupal\kibo_sdk_proxy\Mozu\Api\UrlLocation;

class PackageUrl  {

	/**
		* Get Resource Url for GetAvailablePackageFulfillmentActions
		* @param string $orderId Unique identifier of the order.
		* @param string $packageId Unique identifier of the package for which to retrieve the label.
		* @return string Resource Url
	*/
	public static function getAvailablePackageFulfillmentActionsUrl($orderId, $packageId)
	{
		$url = "/api/commerce/orders/{orderId}/packages/{packageId}/actions";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("packageId", $packageId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetPackageLabel
		* @param string $orderId Unique identifier of the order.
		* @param string $packageId Unique identifier of the package for which to retrieve the label.
		* @return string Resource Url
	*/
	public static function getPackageLabelUrl($orderId, $packageId)
	{
		$url = "/api/commerce/orders/{orderId}/packages/{packageId}/label";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("packageId", $packageId);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetPackage
		* @param string $orderId Unique identifier of the order.
		* @param string $packageId Unique identifier of the package for which to retrieve the label.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getPackageUrl($orderId, $packageId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/packages/{packageId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("packageId", $packageId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreatePackage
		* @param string $orderId Unique identifier of the order.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function createPackageUrl($orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/packages?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdatePackage
		* @param string $orderId Unique identifier of the order.
		* @param string $packageId Unique identifier of the package for which to retrieve the label.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updatePackageUrl($orderId, $packageId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/packages/{packageId}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("packageId", $packageId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeletePackage
		* @param string $orderId Unique identifier of the order.
		* @param string $packageId Unique identifier of the package for which to retrieve the label.
		* @return string Resource Url
	*/
	public static function deletePackageUrl($orderId, $packageId)
	{
		$url = "/api/commerce/orders/{orderId}/packages/{packageId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("packageId", $packageId);
		return $mozuUrl;
	}
	
}

?>
