<?php
require('vendor/autoload.php');

$client = new \Google_Client();
$client->setApplicationName('Google Sheets API');
$client->setScopes([\Google_Service_Sheets::SPREADSHEETS]);
$client->setAccessType('offline');

$path = 'data.json';
$client->setAuthConfig($path);

$service = new \Google_Service_Sheets($client);

$spreadsheetId = '1hGZRViqZdaoYbptFI_ifbp8-6sYENAzpf6kQB0YB3zk';
$range = 'Sheet1'; 
$response = $service->spreadsheets_values->get($spreadsheetId, $range);
$values = $response->getValues();
echo "<pre>";
print_r($values);
echo "</pre>";