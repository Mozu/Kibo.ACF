<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\ShippingRuntime;



/**
*	Properties of the product option to create such as attribute detail, fully qualified name, and list of product option values.
*/
class ProductOption
{
	/**
	*The fully qualified name of the attribute. The attributeDefiniteId may be used to generate this name.
	*/
	public $attributeFQN;

	/**
	*The data type of the source product property, typically of type Bool, DateTime, Number, or String.
	*/
	public $dataType;

	/**
	*The value of a property, used by numerous objects within  including facets, attributes, products, localized content, metadata, capabilities ( and third-party), location inventory adjustment, and more. The value may be a string, integer, or double. Validation may be run against the entered and saved values depending on the object type.
	*/
	public $value;

}

?>