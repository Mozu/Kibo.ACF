<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\Core;



/**
*	Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
*/
class AuditInfo
{
	/**
	*Unique identifier of the user created the resource entity. This value is system-supplied and read-only.
	*/
	public $createBy;

	/**
	*Date and time when the entity was created, represented in UTC Date/Time.
	*/
	public $createDate;

	/**
	*Unique identifier of the user who last modified the item. This value is system-supplied and read-only.
	*/
	public $updateBy;

	/**
	*Date and time when the entity was last updated, represented in UTC Date/Time.
	*/
	public $updateDate;

}

?>
