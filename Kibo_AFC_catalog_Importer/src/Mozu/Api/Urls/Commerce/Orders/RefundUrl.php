<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Orders;

use Drupal\acf_kibo\Mozu\Api\MozuUrl;
use Drupal\acf_kibo\Mozu\Api\UrlLocation;

class RefundUrl  {

	/**
		* Get Resource Url for CreateRefund
		* @param string $orderId Unique identifier of the order.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function createRefundUrl($orderId, $responseFields)
	{
		$url = "/api/commerce/orders/{orderId}/refunds?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ResendRefundEmail
		* @param string $orderId Unique identifier of the order.
		* @param string $refundId Unique ID of the refund.
        
		* @return string Resource Url
	*/
	public static function resendRefundEmailUrl($orderId, $refundId)
	{
		$url = "/api/commerce/orders/{orderId}/refunds/{refundId}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("orderId", $orderId);
		$url = $mozuUrl->formatUrl("refundId", $refundId);
		return $mozuUrl;
	}
	
}

?>
