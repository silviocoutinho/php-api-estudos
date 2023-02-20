<?php

	$data = [];

	//request
	if(isset($_GET['option'])){

		switch ($_GET['option']) {
			case 'status':
				$data['status'] = 'SUCCESS';
				$data['data'] = 'API running OK!';
				break;		
		}

	} else {
		$data['status'] = 'ERROR';
	}

	// emitir a resposta da API
	response($data);


	//construcao de response
	function response($data){
		header("Content-Type:application/json");
		echo json_encode($data);
	}
?>