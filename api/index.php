<?php

	$data['status'] = 'ERROR';
	$data['data'] = 'Invalid option!';

	//request
	if(isset($_GET['option'])){

		switch ($_GET['option']) {
			case 'status':
				define_response($data, 'API running OK!!');
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

	//=====================================================
	function define_response(&$data, $value){
		$data['status'] = 'SUCCESS';
		$data['data'] = $value;
	}

	//=====================================================
	//construcao de response
	function response($data){
		header("Content-Type:application/json");
		echo json_encode($data);
	}
?>
