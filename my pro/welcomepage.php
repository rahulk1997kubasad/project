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
<body>
<form method="post" id="logout">
    <br><br><br><br>
    <div class="row-center">
    <div class="col s12 m12 l12">
      <div class="card blue-grey darken-1" style="margin-left:auto;margin-right:auto;width:30em;background-color:rgba(0,0,0,0.5) !important">
        <div class="card-content">
        <p></p>
     
             <div id="page-inner">
            <div class="row">

                <div class="col-md-15">
                    <div class="card">
                        <div class="card-action">

                            <div class="content pb-0">
                                <div class="animated fadeIn">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="card">
    <div class="card-header"></div><br>
                                        
                                                    <form id="managecat" name="catform"   method="post" enctype="multipart/form-data" action="login_webapi.php" >
                                                    <div class="card-body card-block">
                                                        
                                                         
                                                        <div class="form-group">
                                                            <input type="text"  style="width:99%;" name="category_name" placeholder="Enter categories name" class="form-control"  value="<?php print_r($_SESSION['USER']['user_name']) ?> "><br>
                                                            <br>
                                                           
                                                            <input type="text"  style="width:99%;" name="category_name" placeholder="Enter categories name" class="form-control"  value="<?php print_r($_SESSION['USER']['E-mail']) ?> ">
                                                            <br><br>
                                                             <input type="text"  style="width:99%;" name="category_name" placeholder="Enter categories name" class="form-control"  value="<?php print_r($_SESSION['USER']['mobile']) ?> ">
                                                        </div>
<br><br>
                                                        <button type="submit" class="btn btn-lg btn-info btn-block" value="Upload" id="catsubmit" >LOGOUT</button>
                                                       

                                                        
                                                   </button>
                                                        <div class="field_error">

                                                        </div>
                                                    </div>
                                                </form>
                                               



                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>






      
          </div>
            
            
            
            
        </div>
        </div>
    </div>
  
    </div>

   
</form>
<script type="text/javascript">
$(document).ready(function(){
$('#logout').submit(function(e){

  var data1 = $("#logout").serialize();


$.ajax({

  type : 'POST',
  url : 'destroysession.php',
  data : data1,
  success : function(response){
    var json = $.parseJSON(response); // create an object with the key of the array
       if(json.Success == 'true')
       {
        location.href = "log_page.php"; 
        alert(json.Message); 
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