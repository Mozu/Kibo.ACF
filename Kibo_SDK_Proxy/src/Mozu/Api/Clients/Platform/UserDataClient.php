<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Platform;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Platform\UserDataUrl;


/**
* Use the user data subresource to store user-level data required for a third-party application in the  database.
*/
class UserDataClient {

	/**
	* Retrieves the value of a record in the  database.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getDBValueClient($dbEntryQuery, $responseFields =  null)
	{
		$url = UserDataUrl::getDBValueUrl($dbEntryQuery, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new record in the  database based on the information supplied in the request.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $value The value string to create.
	*/
	public static function createDBValueClient($value, $dbEntryQuery)
	{
		$url = UserDataUrl::createDBValueUrl($dbEntryQuery);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($value);
		return $mozuClient;

	}
	
	/**
	* Updates a record in the  database based on the information supplied in the request.
	*
	* @param string $dbEntryQuery The database entry string to create.
	* @param string $value The value string to create.
	*/
	public static function updateDBValueClient($value, $dbEntryQuery)
	{
		$url = UserDataUrl::updateDBValueUrl($dbEntryQuery);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($value);
		return $mozuClient;

	}
	
	/**
	* Removes a previously defined record in the  database.
	*
	* @param string $dbEntryQuery The database entry string to create.
	*/
	public static function deleteDBValueClient($dbEntryQuery)
	{
		$url = UserDataUrl::deleteDBValueUrl($dbEntryQuery);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
