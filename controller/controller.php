<?php
class ProcessorClass
{
	public function CheckEmail($email)
	{
    	if(!preg_match('/^[_A-z0-9-]+((\.|\+)[_A-z0-9-]+)*@[A-z0-9-]+(\.[A-z0-9-]+)*(\.[A-z]{2,4})$/', $email))
		{
			return false;
		} 
		else 
		{
			return true;
		}
      
	}
	public function Admin_Login_Function($username, $password)
	{
		include('dbconnect.php');
		$password = md5($password);
		$query = "SELECT * FROM `authentication` WHERE `email` = '$username' AND `password` = '$password' AND `status` = 1"; 
		$result = mysqli_query($conn, $query);
		return $result;
		mysqli_close($conn);
	}
	public function Admin_Login_with_username($username, $password)
	{
		include('dbconnect.php');
		$password = md5($password);
		$query = "SELECT * FROM `authentication` WHERE `username`='$username' AND `password`='$password' AND `status`='1'";
		$result = mysqli_query($conn, $query);
		return $result;
		mysqli_close($conn);
	}
	
	
	public function Forgot_Password($email)
	{
		include('dbconnect.php');
		$query = "SELECT * FROM `authentication` WHERE `email` = '$email' AND `status`= '1'"; 
		$result = mysqli_query($conn, $query);
		return $result;
		mysqli_close($conn);
	}
	
	public function Send_Password($password,$email)
	{
		$subject = "Password";
		$email_from = "support@avishankarain.com";
		$message = "
		Your Secret Password is:
		".$password."
		Please Keep Your Password Safe and dont Share with Anyone.
		Thank You.
		";
		$email_to = $email;
		$headers = "From:" . $email_from;
		if(!mail($email_to,$subject,$message,$headers))
		{
			header('Location: ../index.php?email=notsent#toregister');
		}
		else{
			header('Location: ../index.php?email=sent#toregister');
		}
	}
	public function Upload_products($pCode, $pCat, $pName, $pQty, $pBprice, $pSprice)
	{
		require_once('dbconnect.php');
		$query = "INSERT INTO `product_info` (`p_code`, `p_cat`, `p_name`, `p_qty`, `pb_price`, `ps_price`, `p_photo`, `status`) VALUES ('$pCode', '$pCat', '$pName', '$pQty', '$pBprice', '$pSprice', '', '1')"; 
		$result = mysqli_query($conn, $query);
		return $result;
		mysqli_close($conn);
	}
	
}

?>