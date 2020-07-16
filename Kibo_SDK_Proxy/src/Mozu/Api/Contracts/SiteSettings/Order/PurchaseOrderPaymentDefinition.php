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
*	The details of the purchase order payment.
*/
class PurchaseOrderPaymentDefinition
{
	/**
	*Specifies whether another payment can be used with the purchase order.
	*/
	public $allowSplitPayment;

	/**
	*Indicates if the object or process is enabled. This indicator is used on external payment workflows and product option values. For product options, if true, the product option value is available for a shopper to choose. During configuration, this property will be false if the option value is invalid with other selected options. For external payment workflows, if true, the workflow is enabled and available for routing payments for the submitted order.
	*/
	public $isEnabled;

	/**
	*The details of the custom fields associated with the purchase order payment type for the specific site.You can create custom text fields that customers or CSRs can fill out when they use the purchase order payment method before submitting the order.Refer to [Custom Text Fields](https://www.mozu.com/docs/guides/orders/purchase-order.htm#custom_text_fields) in the Purchase Orders guides topic for more information.
	*/
	public $customFields;

	/**
	*The complete set of payment terms details for which all your customers are possibly applicable on that specific site.Refer to [Payment Terms](https://www.mozu.com/docs/guides/orders/purchase-order.htm#payment_terms) in the Purchase Orders guides topic for more information.
	*/
	public $paymentTerms;

}

?>