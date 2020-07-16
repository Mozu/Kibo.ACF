<?php

namespace Drupal\kibo_sdk_proxy\Plugin\rest\resource;

use Drupal\kibo_sdk_proxy\KiboApiClient;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Customer\CustomerAuthTicketResource;

/**
 * Provides a Kibo Resource
 *
 * @RestResource(
 *   id = "kibo_customer_resource",
 *   label = @Translation("Kibo Customer Resource"),
 *   uri_paths = {
 *     "canonical" = "/kibo_api/customer",
 *     "https://www.drupal.org/link-relations/create" = "/kibo_api/customer"
 *   }
 * )
 */

class KiboCustomerResource extends ResourceBase {
    /**
   * Responds to POST requests.
   *
   * Returns response of Kibo SDK request
   *
   * @return \Drupal\rest\ResourceResponse
   */
  public function post($data) {

    if(!$data){
        $response = ['message' => 'No Methods Defined'];
        $requestResponse = new ResourceResponse($response);
    }

    switch ($data['type']) {
      case 'createAnonAuthTicket':
        $KiboApiClientInstance = KiboApiClient::getInstance();
        $customerAuthResource = new CustomerAuthTicketResource($KiboApiClientInstance->getKiboApiContext());

        $config = $KiboApiClientInstance->getConfigSettings();

        $anonTicket = $customerAuthResource->createAnonymousShopperAuthTicket();
        $anonTicket->tenantId = $config->get('tenantId') ?: 28812;
        $anonTicket->siteId = $config->get('siteId') ?: 47008;
        //$anonTicket->authenticationScope = "tenant";

        $response = $anonTicket;
        break;
      
    }

    //Json Encode
    //This is me giving up
    
    $requestResponse = new ResourceResponse(json_encode($response));
    
    //Hack to invalidate cache for every call
    $build = array(
      '#cache' => array(
        'max-age' => 0,
      ),
    );
    $requestResponse->addCacheableDependency($build);

    return $requestResponse;
    
}
}