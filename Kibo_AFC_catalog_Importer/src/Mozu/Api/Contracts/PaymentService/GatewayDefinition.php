<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\PaymentService;



/**
*	Properties of the payment gateway.
*/
class GatewayDefinition
{
	/**
	*The 2-letter geographic code representing the country for the physical or mailing address. Currently limited to the US.
	*/
	public $countryCode;

	/**
	*Unique identifier of the source property, such as a catalog, discount, order, or email template.For a product field it will be the name of the field.For a category ID, must be a positive integer not greater than 2000000. By default,  auto-generates a category ID when categories are created. If you want to specify an ID during creation (which preserves category link relationships when migrating tenant data from one sandbox to another), you must also include the  query string in the endpoint. For example, . Then, use the  property to specify the desired category ID.For a product attribute it will be the Attribute FQN.For a document, the ID must be specified as a 32 character, case-insensitive, alphanumeric string. You can specify the ID as 32 sequential characters or as groups separated by dashes in the format 8-4-4-4-12. For example, or.For email templates, the ID must be one of the following values:			
	*/
	public $id;

	/**
	*The implementing type name of the integration with the payment gateway.
	*/
	public $integrationImplTypeName;

	/**
	*The user supplied name that appears in . You can use this field for identification purposes.
	*/
	public $name;

	/**
	*URL of the production payment service.
	*/
	public $prodServiceURL;

	/**
	*URL of the test payment service environment.
	*/
	public $testServiceURL;

	/**
	*Credential fields for the payment gateway. For security purposes,  does not return these credential fields.
	*/
	public $credentialDefinitions;

	/**
	*Definition of the preauthorization gateway.
	*/
	public $preAuthorizeDefinition;

	/**
	*The types of credit cards supported by the payment gateway.
	*/
	public $supportedCards;

}

?>
