<?php

    require_once 'configs.php';
    echo '<h3>APLICAÇÃO</h3><hr>';

    for ($i=0; $i < 10; $i++) {
        $resultado = api_request('random&min=333&max=300');

        if ($resultado['status'] == 'ERROR'){
            die('Aconteceu um erro na chamada à API');
        }

        echo "O valor randomico: " . $resultado['data']. "<br>";
    }
    echo 'Terminado';

    function api_request($option){

        $client = API_BASE . $option;

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $client);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);

        $response = curl_exec($curl);

        return json_decode($response, true);
    }
