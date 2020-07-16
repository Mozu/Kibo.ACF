<?php

namespace Drupal\kibo_sdk_proxy\Plugin\rest\resource;

use Drupal\kibo_sdk_proxy\KiboApiClient;
use Drupal\rest\Plugin\ResourceBase;
use Drupal\rest\ResourceResponse;
use Drupal\kibo_sdk_proxy\Mozu\Api\Resources\Commerce\Catalog\Storefront\ProductResource;
use Drupal\kibo_sdk_proxy\Mozu\Api\DataViewMode;

/**
 * Provides a Kibo Resource
 *
 * @RestResource(
 *   id = "kibo_product_resource",
 *   label = @Translation("Kibo Product Resource"),
 *   uri_paths = {
 *     "canonical" = "/kibo_api/product",
 *     "https://www.drupal.org/link-relations/create" = "/kibo_api/product"
 *   }
 * )
 */

class KiboProductResource extends ResourceBase {
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
    $kiboProductService = new ProductResource($KiboApiClientInstance->getKiboApiContext(), DataViewMode::LIVE);

    
  
    // $response = array(
    //     "data" => $data,
    // );
    // return new ResourceResponse($response);

    switch ($data['type']) {
      case 'get':
          $response = $kiboProductService->getProduct($data['id']);
          break;
      default :
        $response = $kiboProductService->getProduct($data['id']);
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