<?php
$callback = $_GET['callback'];
$data = ['name' => 'Reynald', 'city' => 'Bambang'];
$jsonData = json_encode($data); 
$response = "$callback($jsonData)"; //call the submitted js function: myfunction($jsonData)

header('Content-Type: application/javascript');
echo $response;