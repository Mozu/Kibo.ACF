<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Platform\Adminuser;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Platform\Adminuser\AdminUserUrl;


/**
* The Accounts resource displays the user accounts and account details associated with a developer or  tenant administrator. Email addresses uniquely identify admin user accounts.
*/
class AdminUserClient {

	/**
	* Retrieves a list of the  tenants or development stores for which the specified user has an assigned role.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
	* @return MozuClient
	*/
	public static function getTenantScopesForUserClient($userId, $responseFields =  null)
	{
		$url = AdminUserUrl::getTenantScopesForUserUrl($responseFields, $userId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of the specified administrator user account.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userId Unique identifier of the user whose tenant scopes you want to retrieve.
	* @return MozuClient
	*/
	public static function getUserClient($userId, $responseFields =  null)
	{
		$url = AdminUserUrl::getUserUrl($responseFields, $userId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
