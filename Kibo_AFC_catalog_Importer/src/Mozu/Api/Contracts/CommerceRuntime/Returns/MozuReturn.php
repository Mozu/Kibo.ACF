<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\CommerceRuntime\Returns;



/**
*	Properties of a return of one or more previously fulfilled items.
*/
class MozuReturn
{
	/**
	*Available actions you can complete for an order. These actions may differ depending on the status of the order, such as actions required to enter a payment, return of a package, and fulfillment of a shipment.
	*/
	public $availableActions;

	/**
	*Code that identifies the channel associated with the site for the shopper's created shopping cart, order, and return.
	*/
	public $channelCode;

	/**
	*3-letter ISO 4217 standard global currency code. Currently, only "USD" (US Dollar) is supported.
	*/
	public $currencyCode;

	/**
	*Unique identifer of the customer account. This ID is used to associate numerous types of data and object with the customer account, including orders, returns, wish lists, and in-store credit.
	*/
	public $customerAccountId;

	/**
	*The type of customer interaction used to create this shopping cart. Possible values are Website, Call, Store, or Unknown.
	*/
	public $customerInteractionType;

	/**
	*Unique identifier of the source property, such as a catalog, discount, order, or email template.For a product field it will be the name of the field.For a category ID, must be a positive integer not greater than 2000000. By default,  auto-generates a category ID when categories are created. If you want to specify an ID during creation (which preserves category link relationships when migrating tenant data from one sandbox to another), you must also include the  query string in the endpoint. For example, . Then, use the  property to specify the desired category ID.For a product attribute it will be the Attribute FQN.For a document, the ID must be specified as a 32 character, case-insensitive, alphanumeric string. You can specify the ID as 32 sequential characters or as groups separated by dashes in the format 8-4-4-4-12. For example, or.For email templates, the ID must be one of the following values:			
	*/
	public $id;

	/**
	*The unique, user-defined code that identifies a location. This location can be the location where the order was entered, location for newly in-stock products, and where products are returned.
	*/
	public $locationCode;

	/**
	*The total value of the return to the merchant for accounting purposes. This total represents the combined product loss and shipping loss associated with the return.
	*/
	public $lossTotal;

	/**
	*If this return is associated with a previously completed order, the unique identifier of the original order.
	*/
	public $originalOrderId;

	/**
	*The order number of the original order where the return was created.
	*/
	public $originalOrderNumber;

	/**
	*The total tax amount levied on the product loss amount.
	*/
	public $productLossTaxTotal;

	/**
	*The total value of the product returned to the merchant for accounting purposes, calculated by multiplying the cost of the item by its quantity returned.
	*/
	public $productLossTotal;

	/**
	*The status that indicates whether you have received the return item from the shopper. The accepted values are , , or .
	*/
	public $receiveStatus;

	/**
	*If a refund action was performed for this return, the total amount refunded to the shopper. The refund amount can differ from the sum of the price of the returned items.
	*/
	public $refundAmount;

	/**
	*The status of the refund. The accepted values are  if the shopper only wants a replacement or  if either a partial or full refund is applied to the return.
	*/
	public $refundStatus;

	/**
	*The status of the replacement order. The accepted values are  if there is no replacement order or  if a replacement order exits.
	*/
	public $replaceStatus;

	/**
	*A merchant-specific identifier used to sequentially order returns.
	*/
	public $returnNumber;

	/**
	*Unique identifier for the last order created as a result of the return. If the return results in shipping a replacement item, the order includes shipment information for the replaced items. If the return results in a refund, the order includes payment transactions to credit the shopper.
	*/
	public $returnOrderId;

	/**
	*The type of return, which is  or .At the top-level return level, this field is DEPRECATED because Refund and Replace items can now be mixed within a single return. For backwards-compatibility with older applications, the field defaults to .
	*/
	public $returnType;

	/**
	*The total tax amount levied on the shipping loss amount.
	*/
	public $shippingLossTaxTotal;

	/**
	*The total value of shipping the returned product to the merchant for accounting purposes, calculated by multiplying the shipping cost of the item by its quantity returned.
	*/
	public $shippingLossTotal;

	/**
	*Unique identifier of the site.
	*/
	public $siteId;

	/**
	*The current status of the object.This value is read only. Valid values for this field are: "Active", "Expired", and "Inactive".
	*/
	public $status;

	/**
	*Unique identifier of the Mozu tenant.
	*/
	public $tenantId;

	/**
	*Unique identifier of the customer account (shopper or system user). System-supplied and read-only. If the shopper user is anonymous, the user ID represents a system-generated user ID string.
	*/
	public $userId;

	/**
	*Unique identifier of the customer visit in which the cart was created or last modified.
	*/
	public $visitId;

	/**
	*Unique identifier of the web session in which the cart, order, return, or wish list was created or last modified.
	*/
	public $webSessionId;

	/**
	*The date by which a shopper must ship items associated with a return in an "awaiting items" state to the merchant.
	*/
	public $rmaDeadline;

	/**
	*Identifier and datetime stamp information recorded when a user or application creates, updates, or deletes a resource entity. This value is system-supplied and read-only.
	*/
	public $auditInfo;

	/**
	*Collection (list or paged) of change messages logged for each modification made by a shopper to their carts, wishlists, orders, package, payment, pickup, and returns. Change log messages are system-supplied based on shopper actions and read only.
	*/
	public $changeMessages;

	/**
	*contact ApiType DOCUMENT_HERE 
	*/
	public $contact;

	/**
	*An array list of objects in the returned collection.
	*/
	public $items;

	/**
	*Paged list collection of note content for objects including customers, orders, and returns. 
	*/
	public $notes;

	/**
	*Array list of physical packages shipped for a specified order.
	*/
	public $packages;

	/**
	*Wrapper for a collection of payments associated with an order or return. An order can include a number of payments until the full total is covered. 
	*/
	public $payments;

}

?>