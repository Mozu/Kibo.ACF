<?php

namespace Drupal\kibo_sdk_proxy\Plugin\rest\resource;

use Drupal\kibo_sdk_proxy\KiboApiClient as KiboApiClient;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\CartResource;
use Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Carts\CartItemResource;

/**
 * Provides a Kibo Resource
 *
 * @RestResource(
 *   id = "kibo_cart_resource",
 *   label = @Translation("Kibo Cart Resource"),
 *   uri_paths = {
 *     "canonical" = "/kibo_api/cart",
 *     "https://www.drupal.org/link-relations/create" = "/kibo_api/cart"
 *   }
 * )
 */

class KiboCartResource extends ResourceBase {
    /**
   * Responds to POST requests.
   *
   * Returns response of Kibo SDK request
   *
   * @return \Drupal\rest\ResourceResponse
   */
  public function post($data) {

    if(!$data){
        $response = ['message' => 'No Cart Defined'];
        $requestResponse = new ResourceResponse($response);
    }

    $KiboApiClientInstance = KiboApiClient::getInstance();

    $kiboCartService = new CartResource($KiboApiClientInstance->getKiboApiContext($data['kiboAuthToken']));

    switch ($data['type']) {
      case 'get':
          $response = $kiboCartService->getOrCreateCart();
          break;
      case 'create':
          $response = $kiboCartService->getOrCreateCart();
          break;
      case 'update':
          $response = $kiboCartService->updateCart($data['data']);
          break;
      case 'remove':
        $response = $kiboCartService->deleteCart($data['data']['id']);
        break;
      default :
        $response = $kiboCartService->getCartSummary();
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