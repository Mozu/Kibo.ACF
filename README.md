# Kibo.ACF
Acquia Commerce Framework Kibo connector/reference architecture

Proof of concept/reference providing an Acquia Commerce Framework product data connector and ACF React components for the Kibo commerce. 

This repo contains 3 Drupal modules.

### Kibo_ACF_blocks_Examples
A set of example Drupal PDB React components for the Product and Cart for use with AFC catalog and Kibo SDK Proxy.

### Kibo_AFC_catalog_Importer
Product data connector for importing Kibo products into a Drupal Catalog.  

### Kibo_SDK_Proxy
Proxy module to handle requests from PDB components to Kibo Commerce. This works alongside Drupal's Custom Rest Resource feature https://www.drupal.org/docs/8/api/restful-web-services-api/custom-rest-resources in order to pass Kibo Api requests from the drupal storefront to Kibo.
