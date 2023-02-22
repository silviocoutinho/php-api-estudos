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
				define_response($data, rand(0, 1000));
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
