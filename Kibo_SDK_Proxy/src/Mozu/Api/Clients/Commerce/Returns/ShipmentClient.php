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
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Returns\ShipmentUrl;


/**
* Use the Return Shipments subresource to manage shipments for a return replacement.
*/
class ShipmentClient {

	/**
	* Retrieves the details of the specified return replacement shipment.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param string $shipmentId Unique identifier of the shipment to retrieve.
	* @return MozuClient
	*/
	public static function getShipmentClient($returnId, $shipmentId, $responseFields =  null)
	{
		$url = ShipmentUrl::getShipmentUrl($responseFields, $returnId, $shipmentId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a shipment from one or more packages associated with a return replacement.
	*
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param array|string $packageIds List of unique identifiers for each package associated with this shipment. Not all packages must belong to the same shipment.
	* @return MozuClient
	*/
	public static function createPackageShipmentsClient($packageIds, $returnId)
	{
		$url = ShipmentUrl::createPackageShipmentsUrl($returnId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($packageIds);
		return $mozuClient;

	}
	
	/**
	* Deletes a shipment for a return replacement.
	*
	* @param string $returnId Unique identifier of the return whose items you want to get.
	* @param string $shipmentId Unique identifier of the shipment to retrieve.
	*/
	public static function deleteShipmentClient($returnId, $shipmentId)
	{
		$url = ShipmentUrl::deleteShipmentUrl($returnId, $shipmentId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>

