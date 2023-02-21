<?php
    define('API_BASE', 'http://api-php5.dvl.to/api/index.php?option=');

    $resultado = api_request('status');
    echo $resultado;

    function api_request($option){
        $client = curl_init(API_BASE . $option);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($client);
    }