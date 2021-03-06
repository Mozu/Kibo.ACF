<?php


/**
* <auto-generated>
*     This code was generated by Codezu.     
*
*     Changes to this file may cause incorrect behavior and will be lost if
*     the code is regenerated.
* </auto-generated>
*/

namespace Drupal\acf_kibo\Mozu\Api\Resources\Platform;

use Drupal\acf_kibo\Mozu\Api\Clients\Platform\ApplicationClient;
use Drupal\acf_kibo\Mozu\Api\ApiContext;


/**
* Use the Developer resource to view and update information and files related to application packages.
*/
class ApplicationResource {

				



	/**
	* Returns a collection of package names for the application specified in the request.
	*
	* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return PackageNamesCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getAppPackageNames($applicationKey, $responseFields =  null)
	{
		$mozuClient = ApplicationClient::getAppPackageNamesClient($applicationKey, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Returns a collection of package names for the application specified in the request.
	*
	* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getAppPackageNamesAsync($applicationKey, $responseFields =  null)
	{
		$mozuClient = ApplicationClient::getAppPackageNamesClient($applicationKey, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the available versions for the application specified in the request.
	*
	* @param string $nsAndAppId The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return ApplicationVersionsCollection 
	* @deprecated deprecated since version 1.17
	*/
	public function getAppVersions($nsAndAppId, $responseFields =  null)
	{
		$mozuClient = ApplicationClient::getAppVersionsClient($nsAndAppId, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the available versions for the application specified in the request.
	*
	* @param string $nsAndAppId The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getAppVersionsAsync($nsAndAppId, $responseFields =  null)
	{
		$mozuClient = ApplicationClient::getAppVersionsClient($nsAndAppId, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the metadata for a file in an application package.
	*
	* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
	* @param string $filepath Represents the file name and location.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return FileMetadata 
	* @deprecated deprecated since version 1.17
	*/
	public function getPackageFileMetadata($applicationKey, $filepath, $responseFields =  null)
	{
		$mozuClient = ApplicationClient::getPackageFileMetadataClient($applicationKey, $filepath, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the metadata for a file in an application package.
	*
	* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
	* @param string $filepath Represents the file name and location.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getPackageFileMetadataAsync($applicationKey, $filepath, $responseFields =  null)
	{
		$mozuClient = ApplicationClient::getPackageFileMetadataClient($applicationKey, $filepath, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Retrieves the metadata for a folder in an application package.
	*
	* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return FolderMetadata 
	* @deprecated deprecated since version 1.17
	*/
	public function getPackageMetadata($applicationKey, $responseFields =  null)
	{
		$mozuClient = ApplicationClient::getPackageMetadataClient($applicationKey, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Retrieves the metadata for a folder in an application package.
	*
	* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function getPackageMetadataAsync($applicationKey, $responseFields =  null)
	{
		$mozuClient = ApplicationClient::getPackageMetadataClient($applicationKey, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Insert or update the specified file into the specified application package.
	*
	* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
	* @param string $filepath The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
	* @param string $lastModifiedTime The date and time of the last file insert or update. This parameter is optional.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param Stream $stream Data stream that delivers information. Used to input and output data.
	* @return FileMetadata 
	* @deprecated deprecated since version 1.17
	*/
	public function upsertPackageFile($stream, $applicationKey, $filepath, $lastModifiedTime =  null, $responseFields =  null, $contentType= null)
	{
		$mozuClient = ApplicationClient::upsertPackageFileClient($stream, $applicationKey, $filepath, $lastModifiedTime, $responseFields, $contentType);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Insert or update the specified file into the specified application package.
	*
	* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
	* @param string $filepath The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
	* @param string $lastModifiedTime The date and time of the last file insert or update. This parameter is optional.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function upsertPackageFileAsync($stream, $applicationKey, $filepath, $lastModifiedTime =  null, $responseFields =  null, $contentType= null)
	{
		$mozuClient = ApplicationClient::upsertPackageFileClient($stream, $applicationKey, $filepath, $lastModifiedTime, $responseFields, $contentType);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Renames a file in an application package.
	*
	* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @param RenameInfo $renameInfo Information required to update the name of a file in a package, which consists of the original name and the new name.
	* @return FileMetadata 
	* @deprecated deprecated since version 1.17
	*/
	public function renamePackageFile($renameInfo, $applicationKey, $responseFields =  null)
	{
		$mozuClient = ApplicationClient::renamePackageFileClient($renameInfo, $applicationKey, $responseFields);
		$mozuClient->execute();
		return $mozuClient->getResult();

	}
	
/**
	* Renames a file in an application package.
	*
	* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
	* @param string $responseFields Filtering syntax appended to an API call to increase or decrease the amount of data returned inside a JSON object. This parameter should only be used to retrieve data. Attempting to update data using this parameter may cause data loss.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function renamePackageFileAsync($renameInfo, $applicationKey, $responseFields =  null)
	{
		$mozuClient = ApplicationClient::renamePackageFileClient($renameInfo, $applicationKey, $responseFields);
		return $mozuClient->executeAsync();

	}
	
	/**
	* Deletes the specified file from the specified application package.
	*
	* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
	* @param string $filepath Represents the file name and location.
	* @deprecated deprecated since version 1.17
	*/
	public function deletePackageFile($applicationKey, $filepath)
	{
		$mozuClient = ApplicationClient::deletePackageFileClient($applicationKey, $filepath);
		$mozuClient->execute();

	}
	
/**
	* Deletes the specified file from the specified application package.
	*
	* @param string $applicationKey The application key uniquely identifies the developer namespace, application ID, version, and package in Dev Center. The format is {Dev Account namespace}.{Application ID}.{Application Version}.{Package name}.
	* @param string $filepath Represents the file name and location.
	* @return Promise - use $promise->then(sucessfn, errorfn). successFn is passed Drupal\acf_kibo\Mozu\Api\MozuResult. errorFn is passed Drupal\acf_kibo\Mozu\Api\ApiException
	*/
	public function deletePackageFileAsync($applicationKey, $filepath)
	{
		$mozuClient = ApplicationClient::deletePackageFileClient($applicationKey, $filepath);
		return $mozuClient->executeAsync();

	}
	
	
}

?>

