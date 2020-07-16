<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Clients\Platform;

use Drupal\acf_kibo\Mozu\Api\MozuClient;
use Drupal\acf_kibo\Mozu\Api\Urls\Platform\TenantUrl;


/**
* Use the tenants resource to manage information about a  tenant.
*/
class TenantClient {

	/**
	* Retrieve details about a specific tenant by providing the tenant ID.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param int $tenantId Unique identifier of the Mozu tenant.
	* @return MozuClient
	*/
	public static function getTenantClient($tenantId, $responseFields =  null)
	{
		$url = TenantUrl::getTenantUrl($responseFields, $tenantId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
