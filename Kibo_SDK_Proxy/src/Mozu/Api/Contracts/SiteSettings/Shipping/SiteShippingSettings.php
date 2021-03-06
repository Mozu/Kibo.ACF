<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\SiteSettings\Shipping;



/**
*	Properties of the shipping settings configured for an individual site.
*/
class SiteShippingSettings
{
	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*The combined price for all items in the order, including all selected options but excluding any discounts.
	*/
	public $orderHandlingFee;

	/**
	*Properties of the package signature requirements for the site.
	*/
	public $signatureRequirement;

}

?>
