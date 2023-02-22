<?php

	$data['status'] = 'ERROR';
	$data['data'] = 'Invalid option!';

	//request
	if(isset($_GET['option'])){

		switch ($_GET['option']) {
			case 'status':
				success($data);
				$data['data'] = 'API running OK!';
				break;

		}

	}

	// emitir a resposta da API
	response($data);

	//=====================================================
	function success(&$data){
		$data['status'] = 'SUCCESS';
	}

	//=====================================================
	//construcao de response
	function response($data){
		header("Content-Type:application/json");
		echo json_encode($data);
	}
?>
