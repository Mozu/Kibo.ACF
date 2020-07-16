<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\Customer\Credit;



/**
*	Properties of a transaction performed for a customer credit that update the remaining balance of the credit.
*/
class CreditTransaction
{
	/**
	*Notes entered and saved with an order. These notes may be entered by a shopper on a wishlist or for an order. Comments may also be entered by  Admins on an order that may be visible only to authorized shoppers and users.
	*/
	public $comments;

	/**
	*Unique identifier of the source property, such as a catalog, discount, order, or email template.For a product field it will be the name of the field.For a category ID, must be a positive integer not greater than 2000000. By default,  auto-generates a category ID when categories are created. If you want to specify an ID during creation (which preserves category link relationships when migrating tenant data from one sandbox to another), you must also include the  query string in the endpoint. For example, . Then, use the  property to specify the desired category ID.For a product attribute it will be the Attribute FQN.For a document, the ID must be specified as a 32 character, case-insensitive, alphanumeric string. You can specify the ID as 32 sequential characters or as groups separated by dashes in the format 8-4-4-4-12. For example, or.For email templates, the ID must be one of the following values:			
	*/
	public $id;

	/**
	*The amount to apply to the credit balance. The defined transaction type determines whether this amount represents a positive or negative integer.
	*/
	public $impactAmount;

	/**
	*Unique identifier of the order associated with the payment.
	*/
	public $orderId;

	/**
	*Specifies the type of transaction, including customer transactions and credit transactions.Valid values for credit transactions are the following:* —decreases the credit amount* —updates the credit amountValid values for customer transaction types are the following:* * * * 
	*/
	public $transactionType;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

}

?>