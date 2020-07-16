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
*	Data for event deliveries. Returned content details a summary of actions, events, and results for a delivery event.
*/
class EventDeliverySummary
{
	/**
	*The date and time in UTC format set when the object was created.
	*/
	public $createDate;

	/**
	*Status of the delivery process `EventDeliveryStatusType`. System-supplied and read-only.
	*/
	public $deliveryStatus;

	/**
	*Unique identifier of the source property, such as a catalog, discount, order, or email template.For a product field it will be the name of the field.For a category ID, must be a positive integer not greater than 2000000. By default,  auto-generates a category ID when categories are created. If you want to specify an ID during creation (which preserves category link relationships when migrating tenant data from one sandbox to another), you must also include the  query string in the endpoint. For example, . Then, use the  property to specify the desired category ID.For a product attribute it will be the Attribute FQN.For a document, the ID must be specified as a 32 character, case-insensitive, alphanumeric string. You can specify the ID as 32 sequential characters or as groups separated by dashes in the format 8-4-4-4-12. For example, or.For email templates, the ID must be one of the following values:			
	*/
	public $id;

	/**
	*Indicates whether delivery of the event is currently being attempted at this moment in time
	*/
	public $isRunning;

	/**
	*The date that the delivery was last attempted (either successfully or not)
	*/
	public $lastExecutionDate;

	/**
	*The date that the delivery will next be attempted, if the event has not been successfully delivered yet and there are still retries remaining
	*/
	public $nextExecutionDate;

	/**
	*Number of delivery attempts remaining
	*/
	public $retriesRemaining;

	/**
	*The date and time in UTC format the object was updated most recently.
	*/
	public $updateDate;

	/**
	*Details about each attempted delivery of the event to the endpoint
	*/
	public $deliveryAttempts;

	/**
	*Event Summary
	*/
	public $eventSummary;

}

?>