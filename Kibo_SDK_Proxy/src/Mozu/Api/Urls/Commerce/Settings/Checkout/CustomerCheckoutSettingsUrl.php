<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Settings\Checkout;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuUrl;
use Drupal\kibo_sdk_proxy\Mozu\Api\UrlLocation;

class CustomerCheckoutSettingsUrl  {

	/**
		* Get Resource Url for GetCustomerCheckoutSettings
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getCustomerCheckoutSettingsUrl($responseFields)
	{
		$url = "/api/commerce/settings/checkout/customercheckoutsettings?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateCustomerCheckoutSettings
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function updateCustomerCheckoutSettingsUrl($responseFields)
	{
		$url = "/api/commerce/settings/checkout/customercheckoutsettings?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
}

?>
