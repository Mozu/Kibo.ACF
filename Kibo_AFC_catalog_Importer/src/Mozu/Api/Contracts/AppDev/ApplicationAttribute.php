<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\AppDev;



/**
*	This property is not exposed in documentation.
*/
class ApplicationAttribute
{
	/**
	*Comma delimited list of attribute codes.
	*/
	public $attributeCodes;

	/**
	*json representation of attribute definitions
	*/
	public $attributeJson;

	/**
	*Mozu.AppDev.Contracts.ApplicationAttribute isAppliedToBase ApiTypeMember DOCUMENT_HERE 
	*/
	public $isAppliedToBase;

	/**
	*Mozu.AppDev.Contracts.ApplicationAttribute packageId ApiTypeMember DOCUMENT_HERE 
	*/
	public $packageId;

	/**
	*Will contain ProductTypeCollection if Product, else AttributeSet
	*/
	public $productTypeJson;

	/**
	*Source Tenant Id
	*/
	public $sourceTenantId;

	/**
	*Source Tenant Name
	*/
	public $sourceTenantName;

	/**
	*Customer, Order, or Product
	*/
	public $subsystem;

	/**
	*Collection of attributes that may be paged list or a list, depending on the usage per object and API type. 
	*/
	public $attributes;

}

?>