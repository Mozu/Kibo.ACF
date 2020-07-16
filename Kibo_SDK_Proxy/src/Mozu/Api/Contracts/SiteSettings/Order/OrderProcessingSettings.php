<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\SiteSettings\Order;



/**
*	Settings that determine how orders are processed and order payments are authorized for the site.
*/
class OrderProcessingSettings
{
	/**
	*Abandoned order threshold in minutes indicates the number of minutes until a pending order is considered abandoned.
	*/
	public $abandonedOrderThresholdInMinutes;

	/**
	*Determines whether payment authorization occurs when the order is placed or when the order is shipped.
	*/
	public $paymentProcessingFlowType;

	/**
	*If true, use the override price defined for products in the order to calculate discounts for the order.
	*/
	public $useOverridePriceToCalculateDiscounts;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

}

?>