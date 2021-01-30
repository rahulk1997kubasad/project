<?php 
require_once("api.php");
function generate_password($len = 8){
 			$chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789";
 			$password = substr( str_shuffle( $chars ), 0, $len );
 			return $password;
	}

$user_name=$_POST['username'];
$email=$_POST['Email'];
$mobile=$_POST['mobile'];
$referral_id=$_POST['referral_id'];
$password=generate_password();
$obj=new apis();
$res=$obj->register($user_name,$email,$mobile,$referral_id,$password);  
echo json_encode($res);  		
?>

