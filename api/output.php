<?php
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

