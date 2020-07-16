<?php

namespace Drupal\kibo_sdk_proxy;

use Drupal\kibo_sdk_proxy\Mozu\Api\Contracts\AppDev\AppAuthInfo;
use Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Platform\TenantResource;
use Drupal\kibo_sdk_proxy\Mozu\Api\Security\AppAuthenticator;
use Drupal\kibo_sdk_proxy\Mozu\Api\ApiContext;
use Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Catalog\Storefront\ProductResource;
use Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\CartResource;
use Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Carts\CartItemResource;
use Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Customer\CustomerAuthTicketResource;
use Drupal\kibo_sdk_proxy\Mozu\Api\Security\CustomerAuthenticator;
use Drupal\kibo_sdk_proxy\Mozu\Api\Security\UserAuthTicket;
use Drupal\kibo_sdk_proxy\Mozu\Api\DataViewMode;
/**
 * Generic RESTful client for Kibo API.
 */
class KiboApiClient {

  protected static $instance = null;

  private $kiboAppAuth;

  protected $kiboApiContext;


  public function getConfigSettings() {
    return \Drupal::config('acf_kibo.settings');
  }


  private function setKiboAppAuth($config){

    if(!$this->kiboAppAuth) {
      $appAuthInfo = new AppAuthInfo();
      $appAuthInfo->sharedSecret = $config->get('sharedSecret') ?: "c2c163861bd74d879d17c86a319fc1d3";
      $appAuthInfo->applicationId = $config->get('applicationId') ?: "mzint.Kibo_Importer.1.0.0.Release";
      AppAuthenticator::initialize($appAuthInfo,null);
      $this->kiboAppAuth = $appAuthInfo;
    }
    
    return $this->kiboAppAuth;
  }

  private function setApiContext(){

    if(!$this->kiboApiContext) {
      try {

        $config = $this->getConfigSettings();

        $tenantId = $config->get('tenantId') ?: 28812;
        $siteId = $config->get('siteId') ?: 47008;
        $catalogId = $config->get('catalogId') ?: 1;

        $this->setKiboAppAuth($config);
        $tenantResource = new TenantResource();

        $tenant = $tenantResource->getTenant($tenantId);
        
        $apiContext = new ApiContext($tenant);

        //Passing in a tenant with new Apicontext dose not seem to set the tenantId
        $apiContext->setTenantId($tenant->id);
        $apiContext->setMasterCatalogId($catalogId);
        $apiContext->setSiteId($siteId);

        $this->kiboApiContext = $apiContext;
      }
      catch (RequestException $e) {
        $this->logger->error($e->getMessage());
      }
    }
  return $this->kiboApiContext;
}

  private function __construct()
  {
    $this->setApiContext();
  }


  public static function getInstance()
  {
    if(!isset(self::$instance))
    {
     
      self::$instance = new KiboApiClient();
    }
   
    
    return self::$instance;
  }


  public function getKiboApiContext($authTicket = null) {
    $apiContext = $this->kiboApiContext;

    if($authTicket) {
      $class = new UserAuthTicket();
      foreach ($authTicket as $key => $value) $class->{$key} = $value;

      $apiContext->setUserAuthTicket($class);
    }
    return $apiContext;
  }

  //Old Stuff
  // Trying to make 1 endpoint and failing.

  // public function request($resource, $method, $options = []) {

  //   $appAuthInfo = new AppAuthInfo();
  //   // $config = [];
  //   // $tenantId = $config->get('tenantId');
  //   // $siteId = $config->get('siteId');
  //   // $catalogId = $config->get('catalogId');
  //   // $sharedSecret = $config->get('sharedSecret');
  //   // $applicationId = $config->get('applicationId');

  //   $appAuthInfo->sharedSecret =  $sharedSecret ?: "c2c163861bd74d879d17c86a319fc1d3";
  //   $appAuthInfo->applicationId = $applicationId ?: "mzint.Kibo_Importer.1.0.0.Release";

  //   try {
  //     AppAuthenticator::initialize($appAuthInfo,null);

  //     $tenantResource = new TenantResource();
  //     $tenant = $tenantResource->getTenant($tenantId ?: "28812");

  //     $apiContext = new ApiContext($tenant);
  //     $apiContext->setTenantId($tenant['id']);
  //     $apiContext->setMasterCatalogId($catalogId ?: 1);
  //     $apiContext->setSiteId($siteId ?: 47008);

  //     $class = (new \ReflectionClass(ucfirst($resource) . 'Resource'));
  //     $instance = $class->newInstanceArgs($apiContext);

  //     $method = $class->getMethod(ucfirst($method));

  //     if(!$method) {
  //       return null;
  //     }

  //     $result = $method->invokeArgs($instance, $options);
  //     return $result;
      
  //     #You might need to create an API Context with a specific Mastercatalog or catalogId if you own a multi-catalog tenant<br>
  //     //$productResource = new ProductResource($apiContext, DataViewMode::LIVE);
  //     //$result = $productResource->getProducts(0, 10, null, null, null, null, null);

  //     //return $result;
      
  //   } 
  //   catch (RequestException $e) {
  //     $this->logger->error($e->getMessage());
  //   }
  // }

  

}
