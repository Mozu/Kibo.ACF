<?php 

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Security;

use Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\AppDev\AuthTicket;

class UserAuthTicket extends AuthTicket {
	public $authenticationScope;
	public $siteId;
	public $tenantId;
}

?>