<?php
session_start();
error_reporting(0);

$username = $_POST['username'];
$password = $_POST['password'];
$at = "@";
if($username == "" || $password == "")
{
	echo 'username empty';
}
else
{
	if($username != "")
	{
		if(strpos($username,$at))
		{
			include('../controller/controller.php');
			$call = new ProcessorClass();
			$value = $call->CheckEmail($username);
			if($value == true)
			{
				$flag = $call->Admin_Login_Function($username, $password);
				$arrey = mysqli_fetch_array($flag, MYSQLI_ASSOC);
				
				if(mysqli_num_rows($flag) == 1)
				{
					$_SESSION['userid'] = $arrey['id'];
					echo 'done';
				}
				else
				{
					echo 'error';
				}
			}
		}
		else
		{
			include('../controller/controller.php');
			$call = new ProcessorClass();
			$flag = $call->Admin_Login_with_username($username,$password);
			$arrey = mysqli_fetch_array($flag, MYSQLI_ASSOC);
			if(mysqli_num_rows($flag) == 1)
			{
				$_SESSION['userid'] = $arrey['id'];
				echo 'done';
			}
			else
			{
				echo 'error';
			}
		}
	}
}
?>