<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\Event;



/**
*	This specifies if a tenant is associated with a subscription.
*/
class SubscribingTenant
{
	/**
	*Indicates if the object or feature is active.
	*/
	public $isActive;

	/**
	*This specifies the type of subscribing context, which is derived from the state of the subscription. If any subscribing sites exist; for example, a subscription that is not at the tenant level, then the value will be 'site'.
	*/
	public $subscribingContextLevelType;

	/**
	*Unique identifier for the tenant.
	*/
	public $tenantId;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*This specifies the subscribing sites.
	*/
	public $subscribingSites;

}

?>