<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\ProductRuntime;



/**
*	Mozu.ProductRuntime.Contracts.PriceListNode ApiType DOCUMENT_HERE 
*/
class PriceListNode
{
	/**
	*Specifies the id of the price list's parent within the ancestor/descendant hierarchy, if applicable.
	*/
	public $parentPriceListId;

	/**
	*Specifies the code of the price list within the ancestor/descendant hierarchy, if applicable.
	*/
	public $priceListCode;

	/**
	*Specifies the internal id of the price list within the ancestor/descendant hierarchy, if applicable.
	*/
	public $priceListId;

	/**
	*Denotes the place of the ancestor/descendant within the hierarchy. A value of 1 is the closest ancestor/descendant to the current price list. For example an ancestor that has a value of 1 is the direct parent of the current price list.
	*/
	public $priceListLevel;

}

?>
