<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Returns;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Returns\PackageUrl;


/**
* Use the Return Packages subresource to manage physical packages used to ship return replacement items.
*/
class PackageClient {

	/**
	* Retrieves the package label image supplied by the carrier for a return replacement.
	*
	* @param string $packageId Unique identifier of the package for which to retrieve the label.
	* @param bool $returnAsBase64Png Specifies whether to return the RMA label image as Base64-encoded PNG image instead of as a byte array encoded in the original image format. The default is .
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return MozuClient
	*/
	public static function getPackageLabelClient($returnId, $packageId, $returnAsBase64Png =  null)
	{
		$url = PackageUrl::getPackageLabelUrl($packageId, $returnAsBase64Png, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the details of a package of return replacement items.
	*
	* @param string $packageId Unique identifier of the package for which to retrieve the label.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @return MozuClient
	*/
	public static function getPackageClient($returnId, $packageId, $responseFields =  null)
	{
		$url = PackageUrl::getPackageUrl($packageId, $responseFields, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new physical package of return replacement items.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param Package $package Properties of a physical package shipped for an order.
	* @return MozuClient
	*/
	public static function createPackageClient($pkg, $returnId, $responseFields =  null)
	{
		$url = PackageUrl::createPackageUrl($responseFields, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($pkg);
		return $mozuClient;

	}
	
	/**
	* Updates one or more properties of a package associated with a return replacement.
	*
	* @param string $packageId Unique identifier of the package for which to retrieve the label.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param Package $package Properties of a physical package shipped for an order.
	* @return MozuClient
	*/
	public static function updatePackageClient($pkg, $returnId, $packageId, $responseFields =  null)
	{
		$url = PackageUrl::updatePackageUrl($packageId, $responseFields, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($pkg);
		return $mozuClient;

	}
	
	/**
	* Deletes a package associated with a return replacement.
	*
	* @param string $packageId Unique identifier of the package for which to retrieve the label.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	*/
	public static function deletePackageClient($returnId, $packageId)
	{
		$url = PackageUrl::deletePackageUrl($packageId, $returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
