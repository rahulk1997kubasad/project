<!DOCTYPE HTML>
<html>  
<?php
    include 'head.php';
    
    ?>

<body>
  <div class="register_container">
<form class="form-signin" id="usersignup" method="POST" action="">
<br><br><br>
<div class="row-center">
    <div class="col s12 m12 l12">
      <div class="card blue-grey darken-1" style="margin-left:auto;margin-right:auto;width:30em;background-color:rgba(0,0,0,0.5) !important">
        <div id="error"></div>
        <div class="card-content">
          
          <div class="input-field col s12">
          <input id="username" type="text" name="username" >
          <label for="name">Name</label>
        </div>
     
    
        <div class="input-field col s12">
          <input id="mobile" type="text" name="mobile" pattern="[0-9]{10}">
          <label for="tel">mobile</label>
        </div>
      
      
        <div class="input-field col s12">
          <input id="email" type="email" name="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$">
          <label for="email">Email</label>
        </div>
     
  
        <div class="input-field col s12">
          <input id="referral_id" type="text" name="referral_id" >
          <label for="referral_id">Referral_id</label>
        </div>
      
     
     
            <a class="waves-effect waves-light btn" ><input type="submit" name="btn-save" id ="btn-submit"></a></div>
            
            
            
            
        </div>
        </div>
    </div>
  
    
    
    </form>
</div>
<script type="text/javascript">
$(document).ready(function(){
$('#usersignup').submit(function(e){

  var data1 = $("#usersignup").serialize();


$.ajax({

  type : 'POST',
  url : 'register_webapi.php',
  data : data1,
  success : function(response){
    var json = $.parseJSON(response); // create an object with the key of the array
       if(json.Success == 'true')
       {
        location.href = "log_page.php"; 
        alert(json.Message);  
               alert(json.password);
       }
       else
        alert(json.Message); // where html is the key of array that you want, $response['html'] = "<a>something..</a>";

    }
})
e.preventDefault();
});
});
</script>

  </body>

</html>
    
  
