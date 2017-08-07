# Swagger\Client\UserApi

All URIs are relative to *http://localhost/swagger/api/v1*

Method | HTTP request | Description
------------- | ------------- | -------------
[**getAllUsers**](UserApi.md#getAllUsers) | **GET** /users | Get all users
[**getUserById**](UserApi.md#getUserById) | **GET** /users/{id} | Get user by id


# **getAllUsers**
> \Swagger\Client\Model\InlineResponse200 getAllUsers()

Get all users

Get all the users as list

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi();

try {
    $result = $api_instance->getAllUsers();
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getAllUsers: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters
This endpoint does not need any parameter.

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

# **getUserById**
> \Swagger\Client\Model\InlineResponse200 getUserById($id)

Get user by id

Get the user by user id

### Example
```php
<?php
require_once(__DIR__ . '/vendor/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi();
$id = 56; // int | User ID

try {
    $result = $api_instance->getUserById($id);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getUserById: ', $e->getMessage(), PHP_EOL;
}
?>
```

### Parameters

Name | Type | Description  | Notes
------------- | ------------- | ------------- | -------------
 **id** | **int**| User ID |

### Return type

[**\Swagger\Client\Model\InlineResponse200**](../Model/InlineResponse200.md)

### Authorization

No authorization required

### HTTP request headers

 - **Content-Type**: application/json, application/x-www-form-urlencoded, multipart/form-data
 - **Accept**: Not defined

[[Back to top]](#) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to Model list]](../../README.md#documentation-for-models) [[Back to README]](../../README.md)

