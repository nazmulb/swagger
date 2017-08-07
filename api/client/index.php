<?php
require_once(__DIR__ . '/autoload.php');

$api_instance = new Swagger\Client\Api\UserApi();

try {
    $result = $api_instance->getUserById(2);
    print_r($result);
} catch (Exception $e) {
    echo 'Exception when calling UserApi->getAllUsers: ', $e->getMessage(), PHP_EOL;
}
