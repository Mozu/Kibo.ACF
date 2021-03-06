<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\SiteSettings\General\General\Routing;



/**
*	Mozu.SiteSettings.General.Contracts.General.Routing.Route ApiType DOCUMENT_HERE 
*/
class Route
{
	/**
	*When true, specifies that the route is a canonical route.
	*/
	public $canonical;

	/**
	*An array of key-value pairs that provide default values for required route parameters.
	*/
	public $defaults;

	/**
	*For Arc.js routes, specifies the Arc.js function name to create a route to. For example:
	*/
	public $functionId;

	/**
	*Specifies the internal route to use for a particular URL template. For example, the "ProductDetails" internal route routes matching URLs to a product page.
	*/
	public $internalRoute;

	/**
	*The list of mappings that a particular route uses.
	*/
	public $mappings;

	/**
	*Specifies the pattern of URL constants, variables, and segments that result in a match for a particular route.
	*/
	public $template;

	/**
	*Specifies whether a custom route uses an  or  protocol. This allows you to set encryption on a route generated from a non-secure request, or vice-versa.
	*/
	public $urlScheme;

	/**
	*Specifies the validators that a particular route uses.
	*/
	public $validators;

}

?>
