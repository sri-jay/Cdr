<?php
session_start();

if(isset($_GET['method']) && !empty($_GET['method']))
{
	if(function_exists($_GET['method']))
	{
		$_GET['method']();
	}
}

function getDocument()
{
	$document_id = $_GET['id'];

	$connection = mysqli_connect("sriduth.db.10434227.hostedresource.com","sriduth","J@yhari2013","sriduth");

	if(mysqli_connect_errno($connection))
	{
		echo "Connection Error has occurred";
		exit;
	}

	$query = "SELECT * FROM scrtchpd_data WHERE id='$document_id'";

	$result = mysqli_query($connection,$query);

	mysqli_close($connection);

	$data = mysqli_fetch_array($result);
	
	$code = stripslashes($data['code']);
	$script_code =stripslashes($data['scripts_']);

	$json =  array("code" => $code,"scripts" => $script_code);

	$send = str_replace('\\/', '/', json_encode($json));

	//echo $json['code'];
	echo $send;

}

function storeDocument()
{
	$code = $_GET['code'];
	$script_code = $_GET['script_data'];
	$id = $_SESSION['id'];	

	$code = stripslashes($code);
	//$script_code = stripslashes($script_code);

	$connection = mysqli_connect("sriduth.db.10434227.hostedresource.com","sriduth","J@yhari2013","sriduth");

	if(mysqli_connect_errno($connection))
	{
		echo "Connection Error has occurred";
		exit;
	}
	$query_ = "SELECT * FROM scrtchpd_data WHERE id = '$id';";

	$result_ = mysqli_query($connection,$query_);

	if(!$result_)
	{
		echo mysqli_error($connection);
	}

	if(mysqli_num_rows($result_) != 0)
	{
		$query = "UPDATE scrtchpd_data SET code = '$code' , scripts_ = '$script_code' WHERE id = '$id';";
	}
	else
	{
		$query = "INSERT INTO scrtchpd_data (id,code,scripts_) VALUES ('$id','$code','$script_code');";
	}

	$result = mysqli_query($connection,$query);

	//$reply = "http://emptybrains.net/sriduth/cdr/home.php?id=".$id;
	//$reply= $code.$script_code.$id;
	echo mysqli_error($connection);

	mysqli_close($connection);	
}

?>