<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Resources\Commerce\Catalog\Admin\Products;

use Drupal\acf_kibo\Mozu\Api\Clients\Commerce\Catalog\Admin\Products\ProductExtraClient;
use Drupal\acf_kibo\Mozu\Api\ApiContext;

use Drupal\acf_kibo\Mozu\Api\Headers;

/**
* Use the Extras resource to configure an extra product attribute for products associated with the product type that uses the extra attribute.
*/
class ProductExtraResource {

		private $apiContext;
		private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* Retrieves a list of extras configured for the product according to any defined filter and sort criteria.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @return array|ProductExtra 
	* @deprecated deprecated since version 1.17
	*/
	public function getExtras($productCode)
	{
		$mozuClient = ProductExtraClient::getExtrasClient($this->dataViewMode, $productCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a list of extras configured for the product according to any defined filter and sort criteria.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getExtrasAsync($productCode)
	{
		$mozuClient = ProductExtraClient::getExtrasClient($this->dataViewMode, $productCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves a collection of all localized delta price values for a product extra. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $value The value string to create.
	* @return array|ProductExtraValueDeltaPrice 
	* @deprecated deprecated since version 1.17
	*/
	public function getExtraValueLocalizedDeltaPrices($productCode, $attributeFQN, $value)
	{
		$mozuClient = ProductExtraClient::getExtraValueLocalizedDeltaPricesClient($this->dataViewMode, $productCode, $attributeFQN, $value);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a collection of all localized delta price values for a product extra. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $value The value string to create.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getExtraValueLocalizedDeltaPricesAsync($productCode, $attributeFQN, $value)
	{
		$mozuClient = ProductExtraClient::getExtraValueLocalizedDeltaPricesClient($this->dataViewMode, $productCode, $attributeFQN, $value);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the localized delta price value for a product extra. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @return ProductExtraValueDeltaPrice 
	* @deprecated deprecated since version 1.17
	*/
	public function getExtraValueLocalizedDeltaPrice($productCode, $attributeFQN, $value, $currencyCode, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::getExtraValueLocalizedDeltaPriceClient($this->dataViewMode, $productCode, $attributeFQN, $value, $currencyCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the localized delta price value for a product extra. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getExtraValueLocalizedDeltaPriceAsync($productCode, $attributeFQN, $value, $currencyCode, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::getExtraValueLocalizedDeltaPriceClient($this->dataViewMode, $productCode, $attributeFQN, $value, $currencyCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the details of an extra attribute configuration for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return ProductExtra 
	* @deprecated deprecated since version 1.17
	*/
	public function getExtra($productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::getExtraClient($this->dataViewMode, $productCode, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the details of an extra attribute configuration for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getExtraAsync($productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::getExtraClient($this->dataViewMode, $productCode, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Adds a localized delta price value for a product extra. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @param ProductExtraValueDeltaPrice $localizedDeltaPrice The properties of the price difference between the product extra and the base product.
	* @return ProductExtraValueDeltaPrice 
	* @deprecated deprecated since version 1.17
	*/
	public function addExtraValueLocalizedDeltaPrice($localizedDeltaPrice, $productCode, $attributeFQN, $value, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::addExtraValueLocalizedDeltaPriceClient($this->dataViewMode, $localizedDeltaPrice, $productCode, $attributeFQN, $value, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Adds a localized delta price value for a product extra. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function addExtraValueLocalizedDeltaPriceAsync($localizedDeltaPrice, $productCode, $attributeFQN, $value, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::addExtraValueLocalizedDeltaPriceClient($this->dataViewMode, $localizedDeltaPrice, $productCode, $attributeFQN, $value, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Configure an extra attribute for the product specified in the request.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ProductExtra $productExtra Properties of an extra attribute to defined for a product that is associated with a product type that uses the extra. Setting up extras for a product enables shopper-entered information, such as initials for a monogram.
	* @return ProductExtra 
	* @deprecated deprecated since version 1.17
	*/
	public function addExtra($productExtra, $productCode, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::addExtraClient($this->dataViewMode, $productExtra, $productCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Configure an extra attribute for the product specified in the request.
	*
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function addExtraAsync($productExtra, $productCode, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::addExtraClient($this->dataViewMode, $productExtra, $productCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates all localized delta price values for a product extra. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $value The value string to create.
	* @param array|ProductExtraValueDeltaPrice $localizedDeltaPrice The properties of the price difference between the product extra and the base product.
	* @return array|ProductExtraValueDeltaPrice 
	* @deprecated deprecated since version 1.17
	*/
	public function updateExtraValueLocalizedDeltaPrices($localizedDeltaPrice, $productCode, $attributeFQN, $value)
	{
		$mozuClient = ProductExtraClient::updateExtraValueLocalizedDeltaPricesClient($this->dataViewMode, $localizedDeltaPrice, $productCode, $attributeFQN, $value);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates all localized delta price values for a product extra. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $value The value string to create.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function updateExtraValueLocalizedDeltaPricesAsync($localizedDeltaPrice, $productCode, $attributeFQN, $value)
	{
		$mozuClient = ProductExtraClient::updateExtraValueLocalizedDeltaPricesClient($this->dataViewMode, $localizedDeltaPrice, $productCode, $attributeFQN, $value);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the localized delta price value for a product extra. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @param ProductExtraValueDeltaPrice $localizedDeltaPrice The properties of the price difference between the product extra and the base product.
	* @return ProductExtraValueDeltaPrice 
	* @deprecated deprecated since version 1.17
	*/
	public function updateExtraValueLocalizedDeltaPrice($localizedDeltaPrice, $productCode, $attributeFQN, $value, $currencyCode, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::updateExtraValueLocalizedDeltaPriceClient($this->dataViewMode, $localizedDeltaPrice, $productCode, $attributeFQN, $value, $currencyCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates the localized delta price value for a product extra. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param string $value The value string to create.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function updateExtraValueLocalizedDeltaPriceAsync($localizedDeltaPrice, $productCode, $attributeFQN, $value, $currencyCode, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::updateExtraValueLocalizedDeltaPriceClient($this->dataViewMode, $localizedDeltaPrice, $productCode, $attributeFQN, $value, $currencyCode, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the configuration of an extra attribute for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @param ProductExtra $productExtra Properties of an extra attribute to defined for a product that is associated with a product type that uses the extra. Setting up extras for a product enables shopper-entered information, such as initials for a monogram.
	* @return ProductExtra 
	* @deprecated deprecated since version 1.17
	*/
	public function updateExtra($productExtra, $productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::updateExtraClient($this->dataViewMode, $productExtra, $productCode, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Updates the configuration of an extra attribute for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function updateExtraAsync($productExtra, $productCode, $attributeFQN, $responseFields =  null)
	{
		$mozuClient = ProductExtraClient::updateExtraClient($this->dataViewMode, $productExtra, $productCode, $attributeFQN, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Delete a product extra configuration for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteExtra($productCode, $attributeFQN)
	{
		$mozuClient = ProductExtraClient::deleteExtraClient($this->dataViewMode, $productCode, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Delete a product extra configuration for the product specified in the request.
	*
	* @param string $attributeFQN The fully qualified name of the attribute, which is a user defined attribute identifier.
	* @param string $productCode Merchant-created code that uniquely identifies the product such as a SKU or item number. Once created, the product code is read-only.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function deleteExtraAsync($productCode, $attributeFQN)
	{
		$mozuClient = ProductExtraClient::deleteExtraClient($this->dataViewMode, $productCode, $attributeFQN);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the localized delta price value for a product extra. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $value Use this field to include those fields which are not included by default.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteExtraValueLocalizedDeltaPrice($productCode, $attributeFQN, $value, $currencyCode)
	{
		$mozuClient = ProductExtraClient::deleteExtraValueLocalizedDeltaPriceClient($this->dataViewMode, $productCode, $attributeFQN, $value, $currencyCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the localized delta price value for a product extra. Localized delta prices are deltas between two differing monetary conversion amounts between countries, such as US Dollar vs Euro.
	*
	* @param string $attributeFQN Fully qualified name for an attribute.
	* @param string $currencyCode The three character ISO currency code, such as USD for US Dollars.
	* @param string $productCode The unique, user-defined product code of a product, used throughout  to reference and associate to a product.
	* @param string $value Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function deleteExtraValueLocalizedDeltaPriceAsync($productCode, $attributeFQN, $value, $currencyCode)
	{
		$mozuClient = ProductExtraClient::deleteExtraValueLocalizedDeltaPriceClient($this->dataViewMode, $productCode, $attributeFQN, $value, $currencyCode);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

