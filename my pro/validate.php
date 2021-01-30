
<?php
function testemail($email){
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
   echo "Invalid email format";
}
}
function testnumber($mobile){
if(!preg_match("/^[0-9]{3}-[0-9]{10}$/", $mobile)) {
    echo "invalid";
}
}
?>