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
*	Mozu.SiteSettings.General.Contracts.General.Routing.CustomRouteSettings ApiType DOCUMENT_HERE 
*/
class CustomRouteSettings
{
	/**
	*The mappings configured for the site. Mappings allow you to map the values of URL parameters to other JSON variables or to  objects such as facet values. 
	*/
	public $mappings;

	/**
	*The validators configured for a site. Validators require that URL parameters meet certain conditions before  considers the template a match. 
	*/
	public $validators;

	/**
	*The routes configured for the site. Routes contain all the information necessary to match incoming URLs to a specific page in .
	*/
	public $routes;

}

?>
