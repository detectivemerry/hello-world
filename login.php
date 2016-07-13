<?php

/*
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
error_reporting(E_ERROR);
try{
    $conn = new mysqli("127.0.0.1", "root", "root", "bencoolen");
    $userid = $_GET["userid"];
    $password = $_GET['password'];
    $query = "SELECT count(*) as found from profiles where userid ='" .
            $userid . "' and password = '" . $password . "'";
    $result = $conn->query($query);
    $count = $result->fetch_array(MYSQLI_NUM);
    $json_out = json_encode(array("result"=>$count[0]));//
    echo $json_out;
    $conn->close();
}
catch(Exception $e) {
    $json_out = json_encode(array("result"=>0));
    echo $json_out;

}
*/



//Original unedited version
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");
error_reporting(E_ERROR);
try{
	$conn = new mysqli("localhost", "root", "root", "bencoolen");
	$userid = $_GET["userid"];
	$password = $_GET['password'];
	$query = "SELECT count(*) as found from profiles where userid ='" .
			$userid . "' and password = '" . $password . "'";
	$result = $conn->query($query);
	$count = $result->fetch_array(MYSQLI_NUM);
	$json_out = "[" . json_encode(array("result"=>$count[0])) . "]";
	echo $json_out;
	$conn->close();
}
catch(Exception $e) {
	$json_out = "[".json_encode(array("result"=>0))."]";
	echo $json_out;
	
}


?>


