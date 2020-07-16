<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Urls\Commerce\Catalog\Admin;

use Drupal\acf_kibo\Mozu\Api\MozuUrl;
use Drupal\acf_kibo\Mozu\Api\UrlLocation;

class CouponSetUrl  {

	/**
		* Get Resource Url for GetCouponSets
		* @param string $filter A set of filter expressions representing the search parameters for a query. This parameter is optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for a list of supported filters.
		* @param bool $includeCounts Specifies whether to include the number of redeemed coupons, existing coupon codes, and assigned discounts in the response body.
		* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
		* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
		* @return string Resource Url
	*/
	public static function getCouponSetsUrl($filter, $includeCounts, $pageSize, $responseFields, $sortBy, $startIndex)
	{
		$url = "/api/commerce/catalog/admin/couponsets/?startIndex={startIndex}&pageSize={pageSize}&sortBy={sortBy}&filter={filter}&includeCounts={includeCounts}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("filter", $filter);
		$url = $mozuUrl->formatUrl("includeCounts", $includeCounts);
		$url = $mozuUrl->formatUrl("pageSize", $pageSize);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		$url = $mozuUrl->formatUrl("sortBy", $sortBy);
		$url = $mozuUrl->formatUrl("startIndex", $startIndex);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetCouponSet
		* @param string $couponSetCode The unique identifier of the coupon set.
		* @param bool $includeCounts Specifies whether to include the number of redeemed coupons, existing coupon codes, and assigned discounts in the response body.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getCouponSetUrl($couponSetCode, $includeCounts, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/couponsets/{couponSetCode}?includeCounts={includeCounts}&responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("couponSetCode", $couponSetCode);
		$url = $mozuUrl->formatUrl("includeCounts", $includeCounts);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for GetUniqueCouponSetCode
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function getUniqueCouponSetCodeUrl($responseFields)
	{
		$url = "/api/commerce/catalog/admin/couponsets/unique-code?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"GET", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for AddCouponSet
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function addCouponSetUrl($responseFields)
	{
		$url = "/api/commerce/catalog/admin/couponsets/?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for ValidateUniqueCouponSetCode
		* @param string $code User-defined code that uniqely identifies the channel group.
		* @return string Resource Url
	*/
	public static function validateUniqueCouponSetCodeUrl($code)
	{
		$url = "/api/commerce/catalog/admin/couponsets/validate-unique-code";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"POST", false) ;
		$url = $mozuUrl->formatUrl("code", $code);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for UpdateCouponSet
		* @param string $couponSetCode The unique identifier of the coupon set.
		* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
		* @return string Resource Url
	*/
	public static function updateCouponSetUrl($couponSetCode, $responseFields)
	{
		$url = "/api/commerce/catalog/admin/couponsets/{couponSetCode}?responseFields={responseFields}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"PUT", false) ;
		$url = $mozuUrl->formatUrl("couponSetCode", $couponSetCode);
		$url = $mozuUrl->formatUrl("responseFields", $responseFields);
		return $mozuUrl;
	}
	
	/**
		* Get Resource Url for DeleteCouponSet
		* @param string $couponSetCode The unique identifier of the coupon set.
		* @return string Resource Url
	*/
	public static function deleteCouponSetUrl($couponSetCode)
	{
		$url = "/api/commerce/catalog/admin/couponsets/{couponSetCode}";
		$mozuUrl = new MozuUrl($url, UrlLocation::TENANT_POD,"DELETE", false) ;
		$url = $mozuUrl->formatUrl("couponSetCode", $couponSetCode);
		return $mozuUrl;
	}
	
}

?>
