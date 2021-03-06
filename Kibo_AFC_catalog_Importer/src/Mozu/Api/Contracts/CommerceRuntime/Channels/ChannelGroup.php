<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\CommerceRuntime\Channels;



/**
*	Properties of a group of channels that share common information.
*/
class ChannelGroup
{
	/**
	*User-defined code that identifies the channel group.
	*/
	public $code;

	/**
	*The user supplied name that appears in . You can use this field for identification purposes.
	*/
	public $name;

	/**
	*Unique identifier of the Mozu tenant.
	*/
	public $tenantId;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

}

?>
