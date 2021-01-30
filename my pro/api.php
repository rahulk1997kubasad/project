<?php 
class apis{
		function __construct() {
    		$this->con = mysqli_connect("localhost","root","","simple");
		    if (mysqli_connect_errno()) {
				  echo "Failed to connect to MySQL: " . mysqli_connect_error();
				  exit();	
			}
  		}
		//function for the authenticate user for login
  		function login($email,$password){
			$sql= "SELECT * FROM `reg` WHERE `E-mail` = '$email' AND `password` = '$password'";
			$result = mysqli_query($this->con,$sql);	
			if(mysqli_num_rows($result)==1)
   			{
   				$sql1="SELECT `user_name`,`E-mail`,`mobile` FROM `reg` WHERE `E-mail` = '$email'";
				$result1 = mysqli_query($this->con,$sql1);
				$row = mysqli_fetch_assoc($result1);

			
				
				$response['data']=$row;
				$this -> startsession("USER",$row);
					$response['Success']='true';
			  	$response['Message']='login Successfull..';
			}else
			{
				$response['Success']='false';
			 	$response['Message']='login Unsuccessfull..';
			}
			return $response;
		}
		function register($user_name,$email,$mobile,$referral_id,$password)
		{
			$sql= "SELECT * FROM `reg` WHERE `E-mail` = '$email' AND `user_name`='$user_name'";
			$result = mysqli_query($this->con,$sql);	
			if(mysqli_num_rows($result)==1)
   			{
       			$response['Success']='false';
			  	$response['Message']='this email or user name is already taken';
    		} else {
    			 $sql= "INSERT INTO `reg` (`user_name`, `E-mail`, `mobile`,`reffer_id`,`password`) VALUES ('$user_name', '$email', '$mobile','$referral_id', '$password')";
			  	$result = mysqli_query($this->con,$sql);
			  	if($result){
			  		$sql1="SELECT `user_name`,`E-mail`,`mobile` FROM `reg` WHERE `user_id` = '$referral_id'";
				$result1 = mysqli_query($this->con,$sql1);
				$row = mysqli_fetch_assoc($result1);
			  		$response['Success']='true';
			  	$response['Message']='User Register successfull..';
			  	$response['password']='your password is'.$password;
			  	$response['data']=$row;
			  	}else{
			  		$response['Success']='false';
			  		$response['Message']='user register Unsuccessfull..' ;
			  	}
     		}
			return $response;

		}
	
	function startsession($key,$data)
		{
			session_start();
			$_SESSION[$key]=$data;
			$response['Success']='true';
			$response['Message']=" session started";
			return $response; 
		}
//13-11-2020
		function destroysession($key,$data)
		{
			unset($key);
			session_destroy();
			$_SESSION[$key]=$data;
			$response['Success']='true';
			$response['Message']=" session destroyed";
			return $response;
		}
}