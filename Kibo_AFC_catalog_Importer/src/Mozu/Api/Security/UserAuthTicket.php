<?php 

namespace Drupal\acf_kibo\Mozu\Api\Security;

use Drupal\acf_kibo\Mozu\Api\Contracts\AppDev\AuthTicket;

class UserAuthTicket extends AuthTicket {
	public $authenticationScope;
	public $siteId;
	public $tenantId;
}

?>