<?php 

namespace Drupal\kibo_sdk_proxy\Mozu\Api\Security;

class Scope
{
	public $id; 
	public $name;
	
	public function __construct($id, $name) {
		$this->id = $id;
		$this->name = $name;
	}

}

?>