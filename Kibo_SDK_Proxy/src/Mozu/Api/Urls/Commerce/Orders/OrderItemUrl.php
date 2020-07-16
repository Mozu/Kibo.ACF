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

class OrderItemUrl  {

	/**
		* Get Resource Url for GetOrderItemViaLineId
		* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
		* @param int $lineId The specific line id that's associated with the order item.
		* @param string $orderId Unique identifier of the order.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getOrderItemViaLineIdUrl($draft, $lineId, $orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/items/{lineId}?draft={draft}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("draft", $draft);
		$url = $mozuUrl->formatUrl("lineId", $lineId);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetOrderItem
		* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
		* @param string $orderId Unique identifier of the order.
		* @param string $orderItemId Unique identifier of the item to remove from the order.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getOrderItemUrl($draft, $orderId, $orderItemId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/items/{orderItemId}?draft={draft}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("draft", $draft);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("orderItemId", $orderItemId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetOrderItems
		* @param bool $draft If true, retrieve the draft version of the order, which might include uncommitted changes to the order or its components.
		* @param string $orderId Unique identifier of the order.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @return string Resource Url
	*/
	public static function getOrderItemsUrl($draft, $orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/items?draft={draft}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("draft", $draft);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for CreateOrderItem
		* @param string $orderId Unique identifier of the order.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param bool $skipInventoryCheck If true, skip the process to validate inventory when creating this product reservation.
		* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
		* @return string Resource Url
	*/
	public static function createOrderItemUrl($orderId, $responseFields, $skipInventoryCheck, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/items?updatemode={updateMode}&version={version}&skipInventoryCheck={skipInventoryCheck}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("skipInventoryCheck", $skipInventoryCheck);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateOrderItemDiscount
		* @param int $discountId discountId parameter description DOCUMENT_HERE 
		* @param string $orderId Unique identifier of the order.
		* @param string $orderItemId Unique identifier of the item to remove from the order.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
		* @return string Resource Url
	*/
	public static function updateOrderItemDiscountUrl($discountId, $orderId, $orderItemId, $responseFields, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/items/{orderItemId}/discounts/{discountId}?updatemode={updateMode}&version={version}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("discountId", $discountId);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("orderItemId", $orderItemId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateItemDuty
		* @param decimal $dutyAmount The amount added to the order item for duty fees.
        
		* @param string $orderId Unique identifier of the order.
		* @param string $orderItemId Unique identifier of the item to remove from the order.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version Determines whether or not to check versioning of items for concurrency purposes.
		* @return string Resource Url
	*/
	public static function updateItemDutyUrl($dutyAmount, $orderId, $orderItemId, $responseFields, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/items/{orderItemId}/dutyAmount/{dutyAmount}?updatemode={updateMode}&version={version}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("dutyAmount", $dutyAmount);
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("orderItemId", $orderItemId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateItemFulfillment
		* @param string $orderId Unique identifier of the order.
		* @param string $orderItemId Unique identifier of the item to remove from the order.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
		* @return string Resource Url
	*/
	public static function updateItemFulfillmentUrl($orderId, $orderItemId, $responseFields, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/items/{orderItemId}/fulfillment?updatemode={updateMode}&version={version}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("orderItemId", $orderItemId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateItemProductPrice
		* @param string $orderId Unique identifier of the order.
		* @param string $orderItemId Unique identifier of the item to remove from the order.
		* @param decimal $price The override price to specify for this item in the specified order.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
		* @return string Resource Url
	*/
	public static function updateItemProductPriceUrl($orderId, $orderItemId, $price, $responseFields, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/items/{orderItemId}/price/{price}?updatemode={updateMode}&version={version}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("orderItemId", $orderItemId);
		$url = $mozuUrl->formatUrl("price", $price);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateItemQuantity
		* @param string $orderId Unique identifier of the order.
		* @param string $orderItemId Unique identifier of the item to remove from the order.
		* @param int $quantity The number of cart items in the shopper's active cart.
		* @param string $responseFields Use this field to include those fields which are not included by default.
		* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
		* @return string Resource Url
	*/
	public static function updateItemQuantityUrl($orderId, $orderItemId, $quantity, $responseFields, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/items/{orderItemId}/quantity/{quantity}?updatemode={updateMode}&version={version}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("orderItemId", $orderItemId);
		$url = $mozuUrl->formatUrl("quantity", $quantity);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteOrderItem
		* @param string $orderId Unique identifier of the order.
		* @param string $orderItemId Unique identifier of the item to remove from the order.
		* @param string $updateMode Specifies whether to update the original order, update the order in draft mode, or update the order in draft mode and then commit the changes to the original. Draft mode enables users to make incremental order changes before committing the changes to the original order. Valid values are "ApplyToOriginal," "ApplyToDraft," or "ApplyAndCommit."
		* @param string $version System-supplied integer that represents the current version of the order, which prevents users from unintentionally overriding changes to the order. When a user performs an operation for a defined order, the system validates that the version of the updated order matches the version of the order on the server. After the operation completes successfully, the system increments the version number by one.
		* @return string Resource Url
	*/
	public static function deleteOrderItemUrl($orderId, $orderItemId, $updateMode, $version)
	{
		$url = "/api/commerce/orders/{orderId}/items/{orderItemId}?updatemode={updateMode}&version={version}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("orderItemId", $orderItemId);
		$url = $mozuUrl->formatUrl("updateMode", $updateMode);
		$url = $mozuUrl->formatUrl("version", $version);
		return $mozuUrl;
	}
	
}

?>
