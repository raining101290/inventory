<?php
	session_start();
	error_reporting(0);

	$pCode = $_POST['pCode'];
	$pCat = $_POST['pCat'];
	$pName = $_POST['pName'];
	$pQty = $_POST['pQty'];
	$pBprice = $_POST['pBprice'];
	$pSprice = $_POST['pSprice'];

	if($pCat == 0 || $pName == "" || $pQty == "" || $pBprice == "" || $pSprice == "")
	{
		echo 'error';
	}
	else{
		include('../controller/controller.php');
		$call = new ProcessorClass();
		$flag = $call->Upload_products($pCode, $pCat, $pName, $pQty, $pBprice, $pSprice);
		if($flag == true){
			echo 'done';
		}
	}
?>