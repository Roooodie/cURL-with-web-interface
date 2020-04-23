<?php

	$curlthis	= $_POST['url'];
	$method		= $_POST['method'];

	if ($_POST['key1'] && $_POST['value1']) {
		
		$key1	= $_POST['key1'];
		$value1 = $_POST['value1'];

	} else {
		$key1	= '';
		$value1 = '';
	}
	
	if ($_POST['key2'] && $_POST['value2']) {
		
		$key2	= $_POST['key2'];
		$value2 = $_POST['value2'];

	} else {
		$key2	= '';
		$value2 = '';
	}

	if ($_POST['key3'] && $_POST['value3']) {
		
		$key3	= $_POST['key3'];
		$value3 = $_POST['value3'];

	} else {
		$key3	= '';
		$value3 = '';
	}

	if ($_POST['key4'] && $_POST['value4']) {
		
		$key4	= $_POST['key4'];
		$value4 = $_POST['value4'];

	} else {
		$key4	= '';
		$value4 = '';
	}

	if ($_POST['key5'] && $_POST['value5']) {
		
		$key5	= $_POST['key5'];
		$value5 = $_POST['value5'];

	} else {
		$key5	= '';
		$value5 = '';
	}

	if ($_POST['key6'] && $_POST['value6']) {
		
		$key6	= $_POST['key6'];
		$value6 = $_POST['value6'];

	} else {
		$key6	= '';
		$value6 = '';
	}

	if ($_POST['key7'] && $_POST['value7']) {
		
		$key7	= $_POST['key7'];
		$value7 = $_POST['value7'];

	} else {
		$key7	= '';
		$value7 = '';
	}

	if ($_POST['key8'] && $_POST['value8']) {
		
		$key8	= $_POST['key8'];
		$value8 = $_POST['value8'];

	} else {
		$key8	= '';
		$value8 = '';
	}

if ($_POST['method'] == "GET") {
	
	// Get cURL resource
	$curl = curl_init();
	// Set some options - we are passing in a useragent too here
	curl_setopt_array($curl, [
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => $curlthis,
	    CURLOPT_USERAGENT => 'Mozilla'
	    ]); 


	// Send the request & save response to $resp
	$resp = curl_exec($curl);
	// Close request to clear up some resources
	curl_close($curl);

	$profile = json_decode($resp, TRUE);

	echo "<pre>";
	print_r($profile);
	echo "</pre>";

} elseif ($_POST['method'] == "POST") {
	
	// Get cURL resource
	$curl = curl_init();
	// Set some options - we are passing in a useragent too here
	curl_setopt_array($curl, [
	    CURLOPT_RETURNTRANSFER => 1,
	    CURLOPT_URL => $curlthis,
	    CURLOPT_USERAGENT => 'Mozilla',
	    CURLOPT_POST => 1,
	    CURLOPT_POSTFIELDS => [
	        $key1 => $value1,
	        $key2 => $value2,
	        $key3 => $value3,
	        $key4 => $value4,
	        $key5 => $value5,
	        $key6 => $value6,
	        $key7 => $value7,
	        $key8 => $value8
	    ]
	]);


	// Send the request & save response to $resp
	$resp = curl_exec($curl);
	// Close request to clear up some resources
	curl_close($curl);

	$profile = json_decode($resp, TRUE);

	echo "<pre>";
	print_r($profile);
	echo "</pre>";
} elseif ($_POST['method'] == "PUT") {
	
	$curl = curl_init();      

		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "PUT"); 
		curl_setopt($curl, CURLOPT_URL, $curlthis);                           
		curl_setopt($curl, CURLOPT_POSTFIELDS, [
	        $key1 => $value1,
	        $key2 => $value2,
	        $key3 => $value3,
	        $key4 => $value4,
	        $key5 => $value5,
	        $key6 => $value6,
	        $key7 => $value7,
	        $key8 => $value8
	    ]);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);                                                                                                                   
		 
		$resp = curl_exec($curl);
		curl_close($curl);

		$profile = json_decode($resp, TRUE);

		echo "<pre>";
		print_r($profile);
		echo "</pre>";

} elseif ($_POST['method'] == "DELETED") {
		$curl = curl_init();

		curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "DELETE"); 
		curl_setopt($curl, CURLOPT_URL, $curlthis);                           
		curl_setopt($curl, CURLOPT_POSTFIELDS, [
	        $key1 => $value1,
	        $key2 => $value2,
	        $key3 => $value3,
	        $key4 => $value4,
	        $key5 => $value5,
	        $key6 => $value6,
	        $key7 => $value7,
	        $key8 => $value8
	    ]);
		curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);                                                                                                          
		 
		$resp = curl_exec($curl);
		curl_close($curl);

		$profile = json_decode($resp, TRUE);

		echo "<pre>";
		print_r($profile);
		echo "</pre>";
}



?>