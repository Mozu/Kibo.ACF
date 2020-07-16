<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Resources\Content\Documentlists;

use Drupal\acf_kibo\Mozu\Api\Clients\Content\Documentlists\DocumentTreeClient;
use Drupal\acf_kibo\Mozu\Api\ApiContext;

use Drupal\acf_kibo\Mozu\Api\Headers;

/**
* Use the document tree subresource to retrieve documents and manage content within the document hierarchy.
*/
class DocumentTreeResource {

		private $apiContext;
		private $dataViewMode;
		public function __construct(ApiContext $apiContext, $dataViewMode) 
	{
		$this->apiContext = $apiContext;
		$this->dataViewMode = $dataViewMode;
	}
	



	/**
	* Retrieve the content associated with the document, such as a product image or PDF specifications file.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $documentName The name of the document in the site.
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function getTreeDocumentContent($documentListName, $documentName)
	{
		$mozuClient = DocumentTreeClient::getTreeDocumentContentClient($this->dataViewMode, $documentListName, $documentName);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieve the content associated with the document, such as a product image or PDF specifications file.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $documentName The name of the document in the site.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getTreeDocumentContentAsync($documentListName, $documentName)
	{
		$mozuClient = DocumentTreeClient::getTreeDocumentContentClient($this->dataViewMode, $documentListName, $documentName);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Performs transformations on a document. For example, resizing an image.
	*
	* @param string $crop Crops the image based on the specified coordinates. The reference point for positive coordinates is the top-left corner of the image, and the reference point for negative coordinates is the bottom-right corner of the image.Usage: Example:  removes 10 pixels from all edges of the image.  leaves the image uncropped.
	* @param string $documentListName Name of content documentListName to delete
	* @param string $documentName The name of the document in the site.
	* @param int $height Specifies an exact height dimension for the image, in pixels.
	* @param int $max Specifies a pixel limitation for the largest side of an image.
	* @param int $maxHeight Specifies a pixel limitation for the height of the image, preserving the aspect ratio if the image needs resizing.
	* @param int $maxWidth Specifies a pixel limitation for the width of the image, preserving the aspect ratio if the image needs resizing.
	* @param int $quality Adjusts the image compression. Accepts values from 0-100, where 100 = highest quality, least compression.
	* @param int $width Specifies an exact width dimension for the image, in pixels.
	* @return Stream 
	* @deprecated deprecated since version 1.17
	*/
	public function transformTreeDocumentContent($documentListName, $documentName, $width =  null, $height =  null, $max =  null, $maxWidth =  null, $maxHeight =  null, $crop =  null, $quality =  null)
	{
		$mozuClient = DocumentTreeClient::transformTreeDocumentContentClient($documentListName, $documentName, $width, $height, $max, $maxWidth, $maxHeight, $crop, $quality);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Performs transformations on a document. For example, resizing an image.
	*
	* @param string $crop Crops the image based on the specified coordinates. The reference point for positive coordinates is the top-left corner of the image, and the reference point for negative coordinates is the bottom-right corner of the image.Usage: Example:  removes 10 pixels from all edges of the image.  leaves the image uncropped.
	* @param string $documentListName Name of content documentListName to delete
	* @param string $documentName The name of the document in the site.
	* @param int $height Specifies an exact height dimension for the image, in pixels.
	* @param int $max Specifies a pixel limitation for the largest side of an image.
	* @param int $maxHeight Specifies a pixel limitation for the height of the image, preserving the aspect ratio if the image needs resizing.
	* @param int $maxWidth Specifies a pixel limitation for the width of the image, preserving the aspect ratio if the image needs resizing.
	* @param int $quality Adjusts the image compression. Accepts values from 0-100, where 100 = highest quality, least compression.
	* @param int $width Specifies an exact width dimension for the image, in pixels.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function transformTreeDocumentContentAsync($documentListName, $documentName, $width =  null, $height =  null, $max =  null, $maxWidth =  null, $maxHeight =  null, $crop =  null, $quality =  null)
	{
		$mozuClient = DocumentTreeClient::transformTreeDocumentContentClient($documentListName, $documentName, $width, $height, $max, $maxWidth, $maxHeight, $crop, $quality);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves a document based on its document list and folder path in the document hierarchy.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $documentName The name of the document in the site.
	* @param bool $includeInactive Include inactive content.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Document 
	* @deprecated deprecated since version 1.17
	*/
	public function getTreeDocument($documentListName, $documentName, $includeInactive =  null, $responseFields =  null)
	{
		$mozuClient = DocumentTreeClient::getTreeDocumentClient($this->dataViewMode, $documentListName, $documentName, $includeInactive, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves a document based on its document list and folder path in the document hierarchy.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $documentName The name of the document in the site.
	* @param bool $includeInactive Include inactive content.
	* @param string $responseFields Use this field to include those fields which are not included by default.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getTreeDocumentAsync($documentListName, $documentName, $includeInactive =  null, $responseFields =  null)
	{
		$mozuClient = DocumentTreeClient::getTreeDocumentClient($this->dataViewMode, $documentListName, $documentName, $includeInactive, $responseFields);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Updates the binary data or content associated with a document, such as a product image or PDF specifications file, by supplying the document name.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $documentName The name of the document in the site.
	* @param Stream $stream Data stream that delivers information. Used to input and output data.
	* @deprecated deprecated since version 1.17
	*/
	public function updateTreeDocumentContent($stream, $documentListName, $documentName, $contentType= null)
	{
		$mozuClient = DocumentTreeClient::updateTreeDocumentContentClient($stream, $documentListName, $documentName, $contentType);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Updates the binary data or content associated with a document, such as a product image or PDF specifications file, by supplying the document name.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $documentName The name of the document in the site.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function updateTreeDocumentContentAsync($stream, $documentListName, $documentName, $contentType= null)
	{
		$mozuClient = DocumentTreeClient::updateTreeDocumentContentClient($stream, $documentListName, $documentName, $contentType);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the content associated with a document, such as a product image or PDF specifications file.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $documentName The name of the document in the site.
	* @param Stream $stream Data stream that delivers information. Used to input and output data.
	* @deprecated deprecated since version 1.17
	*/
	public function deleteTreeDocumentContent($stream, $documentListName, $documentName, $contentType= null)
	{
		$mozuClient = DocumentTreeClient::deleteTreeDocumentContentClient($stream, $documentListName, $documentName, $contentType);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		$mozuClient->execute();

	}
	
/**
	* Deletes the content associated with a document, such as a product image or PDF specifications file.
	*
	* @param string $documentListName Name of content documentListName to delete
	* @param string $documentName The name of the document in the site.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function deleteTreeDocumentContentAsync($stream, $documentListName, $documentName, $contentType= null)
	{
		$mozuClient = DocumentTreeClient::deleteTreeDocumentContentClient($stream, $documentListName, $documentName, $contentType);
		$mozuClient = $mozuClient->withContext($this->apiContext);
		return $mozuClient->executeAsync();

	}
	
	
}

?>
