<?php
session_start();
if(isset($_SESSION['userid'])){
	
}
else{
	session_destroy();
	header('Location:login.php');
}
?>