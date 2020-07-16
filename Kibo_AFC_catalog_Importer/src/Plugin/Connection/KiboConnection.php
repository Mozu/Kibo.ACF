<?php

namespace Drupal\acf_kibo\Plugin\Connection;

use Drupal\acf_kibo\KiboApiClient as KiboApiClient;
use Drupal\acf_kibo\Form\KiboSettingsForm as Form;
use Drupal\basic_data\Entity\BasicDataInterface;
use Drupal\connection\Plugin\ConnectionBase;
use GuzzleHttp\Exception\RequestException;


/**
 * Class KiboConnection
 *
 * @package Drupal\connection\Plugin\DrupalConnection
 *
 * @Connection(
 *   id = "kibo_connection",
 *   label = @Translation("kibo Connection"),
 * )
 */
class KiboConnection extends ConnectionBase {
 /**
   * Setter for $kiboAPIService.
   */

  protected $kiboApiService;

  const CONFIG_KEY = 'acf_kibo.settings';

  protected function setKiboApiService() {
    $this->kiboApiService = $this->kiboApiService ?: new KiboApiClient();
    return $this->kiboApiService;
  }

  protected function getConfigSettings() {
    return $this->config->get(Form::CONFIG_KEY);
  }

  /**
   * {@inheritdoc}
   */
  public function response($url)
  {

    // Run products request.
    try {
        $results = $this->apiRequest();

        $mappedResults = array_filter(array_map(
          function($product) {
            if (!strlen(($product['productCode'] ?? ''))) {
              return NULL;
            }

            $sizes = $this->handleAttribute("tenant~size", $product) ?? [];
            $colors = $this->handleAttribute("tenant~color", $product) ?? [];

            return [
              'title'       => ($product['content']['productName'] ?? ''),
              'sku'         => ($product['productCode'] ?? ''),
              'description' => ($product['content']['productShortDescription'] ?? ''),
              'price'       => ($product['price']['price'] ?? 0),
              'color'       => $colors[0] ?? '',
              'size'        => $sizes[0] ?? '',
              'colors'       => $colors ?? [],
              'sizes'        => $sizes ?? [],
              //'category'    => $this->handleCategories($product),
              'images'      => $this->handleImages($product),
              "category" => $this->handleCategories($product),
              "inventory" => (5)
            ];
          },
          $results
        ));

        return json_encode($mappedResults);
    } catch (RequestException $e) {
      $this->logger->error($e->getMessage());
    }
  }

  public function apiRequest() {

    $this->setKiboApiService();
    $configs = $this->getConfigSettings();
    $params = [];
    //TO_DO
    //Need to add back in Paging

    $response = $this->kiboApiService->get($configs, $params);
    $this->totalCount = $response['totalCount'];
    return $response['items'];

  }

   /**
   * Parse Kibo attribute
   *
   * @param string $product Kibo attribute FQN
   * @param array $product Kibo Product data
   *
   * @return string[]
   */
  private function handleAttribute($fqn, array $product)
  {

    $options = ($product['options'] ?? []);
    if (!is_array($options)) {
      return [];
    }

    $this->logger->info("options");
    $attributeIdx = array_search($fqn, array_column($options, 'attributeFQN'));
    $attribute = $options[$attributeIdx];
     // $attribute = array_filter(
    //     $options,
    //     function ($value) use (&$fqn) {
    //         return $e["attributeFQN"] == $fqn;
    //     }
    // );
    if(!is_array($attribute)) {
      return [];
    }

    $this->logger->info("attribute" );

    $values = ($attribute['values'] ?? []);
    if (!is_array($values)) {
      return [];
    }

    $this->logger->info("Values");
    
    return array_filter(array_map(
      function ($value) {
        return ($value['stringValue'] ?? NULL);
      },
      $values
    ));
  }

  /**
   * Parse product image URLs.
   *
   * @param array $product Kibo Product data
   *
   * @return string[]
   */
  private function handleImages(array $product)
  {

    $images = ($product['content']['productImages']?? []);
    if (!is_array($images)) {
      return [];
    }

    return array_filter(array_map(
      function ($image) {
        $imageUrl = stripslashes($image['imageUrl']);
        return ("http:" . $imageUrl ?? NULL);
      },
      $images
    ));
    //$image = ($product['content']['productImages'][0] ?? []);
    //return $image['imageUrl'] ?? '';
  }
  
  /**
   * Parse product image URLs.
   *
   * @param array $product Kibo Product data
   *
   * @return string[]
   */
  private function handleCategories(array $product)
  {
    $categories = ($product['categories']?? []);
    if (!is_array($categories)) {
      return [];
    }

    return array_filter(array_map(
      function ($cat) {
        return ($cat['content']['name'] ?? NULL);
      },
      $categories
    ));
  }
}
