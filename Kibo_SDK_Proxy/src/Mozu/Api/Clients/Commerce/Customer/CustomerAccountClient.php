<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Clients\Commerce\Customer;

use Drupal\kibo_sdk_proxy\Mozu\Api\MozuClient;
use Drupal\kibo_sdk_proxy\Mozu\Api\Urls\Commerce\Customer\CustomerAccountUrl;


/**
* Use the Customer Accounts resource to manage the components of shopper accounts, including attributes, contact information, company notes, and groups associated with the customer account.
*/
class CustomerAccountClient {

	/**
	* Retrieves a list of customer accounts.
	*
	* @param string $fields The fields to include in the response.
	* @param string $filter A set of expressions that consist of a field, operator, and value and represent search parameter syntax when filtering results of a query. Valid operators include equals (eq), does not equal (ne), greater than (gt), less than (lt), greater than or equal to (ge), less than or equal to (le), starts with (sw), or contains (cont). For example - "filter=IsDisplayed+eq+true"
	* @param bool $isAnonymous If true, retrieve anonymous shopper accounts in the response.
	* @param int $pageSize 
	* @param string $q A list of order search terms (not phrases) to use in the query when searching across order number and the name or email of the billing contact. When entering, separate multiple search terms with a space character.
	* @param int $qLimit The maximum number of search results to return in the response. You can limit any range between 1-100.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $sortBy 
	* @param int $startIndex 
	* @return MozuClient
	*/
	public static function getAccountsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $filter =  null, $fields =  null, $q =  null, $qLimit =  null, $isAnonymous =  null, $responseFields =  null)
	{
		$url = CustomerAccountUrl::getAccountsUrl($fields, $filter, $isAnonymous, $pageSize, $q, $qLimit, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the current login state of the customer account specified in the request.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getLoginStateClient($accountId, $responseFields =  null)
	{
		$url = CustomerAccountUrl::getLoginStateUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieve details of a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getAccountClient($accountId, $responseFields =  null)
	{
		$url = CustomerAccountUrl::getAccountUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Creates a new customer account based on the information specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerAccount $account Properties of the customer account.
	* @return MozuClient
	*/
	public static function addAccountClient($account, $responseFields =  null)
	{
		$url = CustomerAccountUrl::addAccountUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($account);
		return $mozuClient;

	}
	
	/**
	* Modifies the password associated with a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param bool $unlockAccount Specifies whether to unlock the specified customer account.
	* @param PasswordInfo $passwordInfo The information required to modify a shopper account password.
	*/
	public static function changePasswordClient($passwordInfo, $accountId, $unlockAccount =  null)
	{
		$url = CustomerAccountUrl::changePasswordUrl($accountId, $unlockAccount);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($passwordInfo);
		return $mozuClient;

	}
	
	/**
	* Adds a new user login to a defined customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerLoginInfo $customerAuthInfo The login information for a customer account.
	* @return MozuClient
	*/
	public static function addLoginToExistingCustomerClient($customerAuthInfo, $accountId, $responseFields =  null)
	{
		$url = CustomerAccountUrl::addLoginToExistingCustomerUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($customerAuthInfo);
		return $mozuClient;

	}
	
	/**
	* Updates the customer lifetime value of the specified customer account in the event of an order import or a lifetime value calculation error.
	*
	* @param int $accountId Unique identifier of the customer account.
	*/
	public static function recomputeCustomerLifetimeValueClient($accountId)
	{
		$url = CustomerAccountUrl::recomputeCustomerLifetimeValueUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Lock or unlock a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param bool $isLocked If true, the customer account is locked from logging in.
	*/
	public static function setLoginLockedClient($isLocked, $accountId)
	{
		$url = CustomerAccountUrl::setLoginLockedUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($isLocked);
		return $mozuClient;

	}
	
	/**
	* Requires the password for the customer account to be changed.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param bool $isPasswordChangeRequired If true, the password for the customer account must be changed.
	*/
	public static function setPasswordChangeRequiredClient($isPasswordChangeRequired, $accountId)
	{
		$url = CustomerAccountUrl::setPasswordChangeRequiredUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($isPasswordChangeRequired);
		return $mozuClient;

	}
	
	/**
	* Creates a new customer account and logs the user associated with the customer account into the site.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerAccountAndAuthInfo $accountAndAuthInfo The authentication information associated with a customer account. The data includes the account properties such as the name, username, authorization access, and email address, the required password to match, and indicates if the account was imported from a third party resource. 
	* @return MozuClient
	*/
	public static function addAccountAndLoginClient($accountAndAuthInfo, $responseFields =  null)
	{
		$url = CustomerAccountUrl::addAccountAndLoginUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($accountAndAuthInfo);
		return $mozuClient;

	}
	
	/**
	* Creates multiple customer accounts based on the information specified in the request.
	*
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param array|CustomerAccountAndAuthInfo $customers The authentication information associated with a customer account. The data includes the account properties such as the name, username, authorization access, and email address, the required password to match, and indicates if the account was imported from a third party resource. 
	* @return MozuClient
	*/
	public static function addAccountsClient($customers, $responseFields =  null)
	{
		$url = CustomerAccountUrl::addAccountsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($customers);
		return $mozuClient;

	}
	
	/**
	* Changes a collection of customer account passwords.
	*
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param AccountPasswordInfoCollection $accountPasswordInfos The details of the changed customer account passwords.
	* @return MozuClient
	*/
	public static function changePasswordsClient($accountPasswordInfos, $responseFields =  null)
	{
		$url = CustomerAccountUrl::changePasswordsUrl($responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($accountPasswordInfos);
		return $mozuClient;

	}
	
	/**
	* Retrieves the current login state of a customer account by providing the customer's email address.
	*
	* @param string $customerSetCode The unique idenfitier of the customer set.
	* @param string $emailAddress The email address associated with the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return MozuClient
	*/
	public static function getLoginStateByEmailAddressClient($emailAddress, $customerSetCode =  null, $responseFields =  null)
	{
		$url = CustomerAccountUrl::getLoginStateByEmailAddressUrl($customerSetCode, $emailAddress, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves the current login state of a customer account by providing the user name associated with the customer account.
	*
	* @param string $customerSetCode The unique idenfitier of the customer set.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $userName The user name associated with the customer account.
	* @return MozuClient
	*/
	public static function getLoginStateByUserNameClient($userName, $customerSetCode =  null, $responseFields =  null)
	{
		$url = CustomerAccountUrl::getLoginStateByUserNameUrl($customerSetCode, $responseFields, $userName);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Retrieves a list of customer purchase order accounts according to according to any specified sort options.
	*
	* @param int $pageSize When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with this parameter set to 25, to get the 51st through the 75th items, set startIndex to 50.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param string $sortBy The element to sort the results by and the channel in which the results appear. Either ascending (a-z) or descending (z-a) channel. Optional. Refer to [Sorting and Filtering](../../../../Developer/api-guides/sorting-filtering.htm) for more information.
	* @param int $startIndex When creating paged results from a query, this value indicates the zero-based offset in the complete result set where the returned entities begin. For example, with pageSize set to 25, to get the 51st through the 75th items, set this parameter to 50.
	* @return MozuClient
	*/
	public static function getCustomersPurchaseOrderAccountsClient($startIndex =  null, $pageSize =  null, $sortBy =  null, $responseFields =  null)
	{
		$url = CustomerAccountUrl::getCustomersPurchaseOrderAccountsUrl($pageSize, $responseFields, $sortBy, $startIndex);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	/**
	* Resets the password for a customer account.
	*
	* @param ResetPasswordInfo $resetPasswordInfo Information required to reset the password for a customer account.
	*/
	public static function resetPasswordClient($resetPasswordInfo)
	{
		$url = CustomerAccountUrl::resetPasswordUrl();
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($resetPasswordInfo);
		return $mozuClient;

	}
	
	/**
	* Updates a customer account.
	*
	* @param int $accountId Unique identifier of the customer account.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param CustomerAccount $account Properties of the customer account.
	* @return MozuClient
	*/
	public static function updateAccountClient($account, $accountId, $responseFields =  null)
	{
		$url = CustomerAccountUrl::updateAccountUrl($accountId, $responseFields);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url)->withBody($account);
		return $mozuClient;

	}
	
	/**
	* Deletes a customer account. A customer account cannot be deleted if any orders exist, past or present.
	*
	* @param int $accountId Unique identifier of the customer account.
	*/
	public static function deleteAccountClient($accountId)
	{
		$url = CustomerAccountUrl::deleteAccountUrl($accountId);
		$mozuClient = new MozuClient();
		$mozuClient->withResourceUrl($url);
		return $mozuClient;

	}
	
	
}

?>
