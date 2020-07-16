<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\ProductAdmin;



/**
*	For range type facets, a single range of facet values. For example, a price facet might have a $0-$25 range query.
*/
class FacetRangeQuery
{
	/**
	*The maximum value to use for the facet range query.
	*/
	public $rangeValueEnd;

	/**
	*The minimum value to use for the facet range query.
	*/
	public $rangeValueStart;

}

?>