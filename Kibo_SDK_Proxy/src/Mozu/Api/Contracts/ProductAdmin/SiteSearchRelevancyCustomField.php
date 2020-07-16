<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\ProductAdmin;



/**
*	Properties for setting custom field site search keyword relevancy settings. Relevancy determines the calculated matched of entered search strings against keywords. The relevancy weight can determine the order of importance for matching a search term such as categories before or after product names.
*/
class SiteSearchRelevancyCustomField
{
	/**
	*Name of the field.
	*/
	public $fieldName;

	/**
	*Relative weight of the field for relevancy purposes.
	*/
	public $fieldWeight;

}

?>