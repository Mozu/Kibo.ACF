<?php

/*
* <auto-generated>
*     This code was generated by a Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/


namespace Drupal\acf_kibo\Mozu\Api\Contracts\AppDev;



/**
*	Properties of the authentication ticket refresh requests, which includes the refresh token string.
*/
class AuthTicketRequest
{
	/**
	*Alphanumeric string used for access tokens. This token refreshes access for accounts by generating a new developer or application account authentication ticket after an access token expires.
	*/
	public $refreshToken;

}

?>