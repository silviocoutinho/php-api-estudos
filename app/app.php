<?php

    require_once 'configs.php';
    echo '<h3>APLICAÇÃO</h3><hr>';

    $resultado = api_request('status');

    echo '<pre>';
    print_r($resultado);
    echo '</pre>';

    function api_request($option){
        echo '<h3>'.API_BASE.$option.'</h3>';
        $client = API_BASE . $option;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $client);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        $response = curl_exec($curl);

        return json_decode($response, true);
    }
