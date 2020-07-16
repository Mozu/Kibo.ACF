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

class ShippingStatesUrl  {

	/**
		* Get Resource Url for GetStates
		* @param string $profileCode The unique, user-defined code of the profile with which the shipping state is associated.
		* @return string Resource Url
	*/
	public static function getStatesUrl($profileCode)
	{
		$url = "/api/commerce/shipping/admin/profiles/{profilecode}/shippingstates";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("profileCode", $profileCode);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateStates
		* @param string $profilecode The unique, user-defined code of the profile with which the shipping state is associated.
		* @return string Resource Url
	*/
	public static function updateStatesUrl($profilecode)
	{
		$url = "/api/commerce/shipping/admin/profiles/{profilecode}/shippingstates";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("profilecode", $profilecode);
		return $mozuUrl;
	}
	
}

?>
