<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Platform\Appdev;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Platform\Appdev\PackageUrl;


/**
* This resource is not public.
*/
class PackageClient {

	/**
	* This operation is not public.
	*
	* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}. 
	* @param string $fileName 
	* @return MozuClient
	*/
	public static function getFileClient($applicationKey, $fileName)
	{
		$url = PackageUrl::getFileUrl($applicationKey, $fileName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

