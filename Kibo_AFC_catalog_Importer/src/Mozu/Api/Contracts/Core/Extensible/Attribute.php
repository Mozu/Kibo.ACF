<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\Core\Extensible;



/**
*	Properties of an attribute used to describe customers or orders.
*/
class Attribute
{
	/**
	*The administrator name associated with the object/data.
	*/
	public $adminName;

	/**
	*Merchant-defined code for an extensible attribute. This code may be used to generate an object's fully qualified name, such as for products.
	*/
	public $attributeCode;

	/**
	*The fully qualified name of the attribute. The attributeDefiniteId may be used to generate this name.
	*/
	public $attributeFQN;

	/**
	*The data type of the source product property, typically of type Bool, DateTime, Number, or String.
	*/
	public $dataType;

	/**
	*Whether the customer or order attribute appears in  only, or in both  and the website storefront. Possible values are Admin and AdminAndStorefront.
	*/
	public $displayGroup;

	/**
	*Unique identifier of the source property, such as a catalog, discount, order, or email template.For a product field it will be the name of the field.For a category ID, must be a positive integer not greater than 2000000. By default,  auto-generates a category ID when categories are created. If you want to specify an ID during creation (which preserves category link relationships when migrating tenant data from one sandbox to another), you must also include the  query string in the endpoint. For example, . Then, use the  property to specify the desired category ID.For a product attribute it will be the Attribute FQN.For a document, the ID must be specified as a 32 character, case-insensitive, alphanumeric string. You can specify the ID as 32 sequential characters or as groups separated by dashes in the format 8-4-4-4-12. For example, or.For email templates, the ID must be one of the following values:			
	*/
	public $id;

	/**
	*The type of input selection used to define a value for the attribute, including Yes/No, Date, DateTime, List, TextBox, or TextArea.
	*/
	public $inputType;

	/**
	*Indicates if the object or feature is active.
	*/
	public $isActive;

	/**
	*If true, the attribute can have more than one value.
	*/
	public $isMultiValued;

	/**
	*Flag used to indicate if this attribute definition is read-only. Once an attribute definition is set to read-only this action cannot be undone. 
	*/
	public $isReadOnly;

	/**
	*Indicates if the property, attribute, product option, or product extra is required. If true, the object must have a defined value.
	*/
	public $isRequired;

	/**
	*If true, the attribute is visible in its defined display group.
	*/
	public $isVisible;

	/**
	*The namespace for the accessible APIs and source capabilities in the core of  APIs.
	*/
	public $namespace;

	/**
	*Integer that represents the sequence order of the attribute.
	*/
	public $order;

	/**
	*An attribute value type is either predefined vocabulary by the admin during attribute set up or user-defined with an appropriate type (AdminEntered or ShopperEntered depending on the user). These types are used by products and attributes. The difference between predefined values versus manually entered values is such that the first choice is a set of options to choose from. AdminEntered and ShopperEntered are values that are entered rather than system-supplied and are not stored in the database, but captured during a live commerce operations such as during an order.
	*/
	public $valueType;

	/**
	*List of metadata key-value pairs defined for an extensible attribute.
	*/
	public $attributeMetadata;

	/**
	*Basic audit info about the object, including date, time, and user account. This data may be captured when creating, updating, and removing data.
	*/
	public $auditInfo;

	/**
	*Localizable content (such as a name and/or description) for an attribute. The content may be localized when displayed according to the locale code specified by the master catalog. Content can include descriptive text for product extensible attributes, catalog-level descriptions (displayed if isContentOverriden is true), product bundles, and customer account notes.
	*/
	public $content;

	/**
	*Properties used when validating a value entered for an object, including extensible attributes, products attributes, and database entries.
	*/
	public $validation;

	/**
	*List of valid vocabulary values defined for an attribute.
	*/
	public $vocabularyValues;

}

?>
