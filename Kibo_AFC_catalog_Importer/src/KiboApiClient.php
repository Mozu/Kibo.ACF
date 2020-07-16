<?php

namespace Drupal\acf_kibo;

use Drupal\acf_kibo\Mozu\Api\Contracts\AppDev\AppAuthInfo;
use Drupal\acf_kibo\Mozu\Api\Resources\Platform\TenantResource;
use Drupal\acf_kibo\Mozu\Api\Security\AppAuthenticator;
use Drupal\acf_kibo\Mozu\Api\ApiContext;
use Drupal\acf_kibo\Mozu\Api\Resources\Commerce\Catalog\Storefront\ProductResource;
use Drupal\acf_kibo\Mozu\Api\DataViewMode;

use Drupal\acf_kibo\Form\KiboSettingsForm as Form;
/**
 * Generic RESTful client for Kibo API.
 */
class KiboApiClient {

  // TO_DO
  // Add back in Query Params

  public function request($method, $config, $query_params = []) {

    $appAuthInfo = new AppAuthInfo();

    $tenantId = $config->get('tenantId');
    $siteId = $config->get('siteId');
    $catalogId = $config->get('catalogId');
    $sharedSecret = $config->get('sharedSecret');
    $applicationId = $config->get('applicationId');

    $appAuthInfo->sharedSecret =  $sharedSecret ?: "c2c163861bd74d879d17c86a319fc1d3";
    $appAuthInfo->applicationId = $applicationId ?: "mzint.Kibo_Importer.1.0.0.Release";

    try {
      AppAuthenticator::initialize($appAuthInfo,null);

      $tenantResource = new TenantResource();
      $tenant = $tenantResource->getTenant($tenantId ?: "28812");
      //$tenant = $promise->wait()->json();

      
      $apiContext = new ApiContext($tenant);
      $apiContext->setTenantId($tenant['id']);
      $apiContext->setMasterCatalogId($catalogId ?: 1);
      $apiContext->setSiteId($siteId ?: 47008);
      
      #You might need to create an API Context with a specific Mastercatalog or catalogId if you own a multi-catalog tenant<br>
      $productResource = new ProductResource($apiContext, DataViewMode::LIVE);
      $result = $productResource->getProducts(0, 10, null, null, null, null, null);

      return $result;
      
    } 
    catch (RequestException $e) {
      $this->logger->error($e->getMessage());
    }
  }

  /**
   * Get request method.
   */
  public function get($config, $params = []) {
    return $this->request('GET', $config, $params);
  }

}
