<?php 
require_once("api.php");
$email=$_POST['Email'];
if(!preg_match("^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$^",$email))
{ 
echo "enter a valid email";
}else{
$password=$_POST['password'];
$obj=new apis();
$res=$obj->login($email,$password);  
echo json_encode($res);
}  		
?>