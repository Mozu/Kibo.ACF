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
*	Properties for the site associated with a subscription including audit info, if active, and the unique ID for the site.
*/
class SubscribingSite
{
	/**
	*Indicates if the object or feature is active.
	*/
	public $isActive;

	/**
	*Unique identifier for the site. This ID is used at all levels of a store, catalog, and tenant to associate objects to a site.
	*/
	public $siteId;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

}

?>