<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Urls\Platform;

use Drupal\acf_kibo\Mozu\Api\MozuUrl;
use Drupal\acf_kibo\Mozu\Api\UrlLocation;

class UserDataUrl  {

	/**
		* Get Resource Url for GetDBValue
		* @param string $dbEntryQuery The database entry string to create.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getDBValueUrl($dbEntryQuery, $responseFields)
	{
		$url = "/api/platform/userdata/{dbEntryQuery}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("dbEntryQuery", $dbEntryQuery);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateDBValue
		* @param string $dbEntryQuery The database entry string to create.
		* @return string Resource Url
	*/
	public static function createDBValueUrl($dbEntryQuery)
	{
		$url = "/api/platform/userdata/{dbEntryQuery}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("dbEntryQuery", $dbEntryQuery);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateDBValue
		* @param string $dbEntryQuery The database entry string to create.
		* @return string Resource Url
	*/
	public static function updateDBValueUrl($dbEntryQuery)
	{
		$url = "/api/platform/userdata/{dbEntryQuery}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("dbEntryQuery", $dbEntryQuery);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteDBValue
		* @param string $dbEntryQuery The database entry string to create.
		* @return string Resource Url
	*/
	public static function deleteDBValueUrl($dbEntryQuery)
	{
		$url = "/api/platform/userdata/{dbEntryQuery}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("dbEntryQuery", $dbEntryQuery);
		return $mozuUrl;
	}
	
}

?>

