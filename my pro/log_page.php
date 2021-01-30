<?php 
session_start();
?>
<!DOCTYPE HTML>
<html>  
    <head>
        <title>Login</title>
<style>
    body{
background:url(wallpapers/login-back.jpg);
background-size: 1550px;
background-position: center;
    }
   .label
    {
        color: #000000;
        font-size:20px;
        
    }
    
</style>
        
    </head>
<body><?php
    include 'head.php';
    
    ?>
<form method="post" id="userlogin">
    <br><br><br><br>
    <div class="row-center">
    <div class="col s12 m12 l12">
      <div class="card blue-grey darken-1" style="margin-left:auto;margin-right:auto;width:30em;background-color:rgba(0,0,0,0.5) !important">
        <div class="card-content">
        <div class="input-field col s12">
          <input id="email" type="email" name="Email">
          <label for="email">E-mail</label>
        </div>
     
    
        <div class="input-field col s12">
          <input id="password" type="password" name="password" >
          <label for="tel">password</label>
        </div>
        
            <a class="waves-effect waves-light btn"><input type="submit"></a>
          </div>
            
            
            
            
        </div>
        </div>
    </div>
  
    

   
</form>
<script type = text/javascript>
function test()
{
    
    $("#logout").click(function() {
       var Admin ="<?php $_SESSION['USER']?>";
        $.ajax({
            type: 'POST',
            url: 'apis/destroysession_webapi.php?key=USER',
            data : 'Admin',

            success: function(data){
            //  alert(data);
                 alert("Logout Successfully");
                 document.location="../index.php";
                 
                
            }


        });
        // session_destroy();
    });
}
</script>
</body>
</html>