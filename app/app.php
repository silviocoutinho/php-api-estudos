<?php
    define('API_BASE', 'http://api-php5.dvl.to/api/index.php?option=');

    echo '<h3>APLICAÇÃO</h3><hr>';

    $resultado = api_request('status');

    echo '<pre>';
    print_r($resultado);

    function api_request($option){
        $client = curl_init(API_BASE . $option);
        curl_setopt($client, CURLOPT_RETURNTRANSFER, TRUE);
        $response = curl_exec($client);
        return json_decode($response, true);
    }