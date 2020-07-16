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
 *   id = "kibo_cart_item_resource",
 *   label = @Translation("Kibo Cart Item Resource"),
 *   uri_paths = {
 *     "canonical" = "/kibo_api/cart/item",
 *     "https://www.drupal.org/link-relations/create" = "/kibo_api/cart/item"
 *   }
 * )
 */

class KiboCartItemResource extends ResourceBase {
    /**
   * Responds to POST requests.
   *
   * Returns response of Kibo SDK request
   *
   * @return \Drupal\rest\ResourceResponse
   */
  public function post($data) {
    // $logger = \Drupal::logger("MozuClient");

    // $logger->info('Cart Item:' . print_r($data, true));
    // $response = array(
    //     "data" => $data,
    // );
    // return new ResourceResponse($response);

    if(!$data){
        $response = ['message' => 'No Cart Item Defined'];
        $requestResponse = new ResourceResponse($response);
    }

    $KiboApiClientInstance = KiboApiClient::getInstance();

    $kiboCartItemService = new CartItemResource($KiboApiClientInstance->getKiboApiContext($data['kiboAuthToken']));
    switch ($data['type']) {
      case 'get':
          $response = $kiboCartItemService->getOrCreateCart();
          break;
      case 'add':
          $response = $kiboCartItemService->addItemToCart($data['data']);
          break;
      case 'update':
          $response = $kiboCartItemService->updateCartItem($data->data, $data['data']['id']);
          break;
      case 'remove':
        $response = $kiboCartItemService->deleteCartItem($data['data']['id']);
        break;
      default :
        $response = $kiboCartItemService->getCartItem($data['data']['id']);
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