<?php

require_once 'output.php';

	$data['status'] = 'ERROR';
	$data['data'] = array();

	//request
	if(isset($_GET['option'])){

		switch ($_GET['option']) {
			case 'status':
				api_status(&$data);
				break;
			case 'random':
				$min = 0;
				$max = 1000;

				/*
				verifica sem vem min e / ou max no GET
				*/
				if(isset($_GET['min'])){
					$min =  intval($_GET['min']) ;
				}

				if(isset($_GET['max'])){
					$max = intval($_GET['max']);
				}
				if($min >= $max){
					response($data);
					return;
				}

				define_response($data, rand($min, $max));
				break;


		}

	}

	// emitir a resposta da API
	response($data);

