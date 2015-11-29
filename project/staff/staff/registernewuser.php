<?php 
 error_reporting(0); 
 require "includes/config.php";
  ?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Tutor Management</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/AdminLTE.min.css">
   
    <link rel="stylesheet" href="dist/css/skins/_all-skins.min.css">

  </head>
  <!-- ADD THE CLASS layout-top-nav TO REMOVE THE SIDEBAR. -->
  <body class="hold-transition skin-blue layout-top-nav">
    <div class="wrapper">

      <header class="main-header">
        <nav class="navbar navbar-static-top">
          <div class="container">
            <div class="navbar-header">
              <a href="#" class="navbar-brand"><b></b></a>
              <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse">
                <i class="fa fa-bars"></i>
              </button>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse pull-left" id="navbar-collapse">
              <ul class="nav navbar-nav">                
                <li class="active"><a href="index.php"><i class="fa fa-home"></i>Home <span class="sr-only"></span></a> </li>                  
                 <li></li>                                                          
              </ul>
             
            </div><!-- /.navbar-collapse -->
            <!-- Navbar Right Menu -->
            <div class="navbar-custom-menu">
                <ul class="nav navbar-nav">
                  <!-- Messages: style can be found in dropdown.less-->
                 
                  <!-- Tasks Menu -->
                  <li class="dropdown tasks-menu">
                    <!-- Menu Toggle Button -->                    
                    <a href="index.php"><i class="fa fa-key">Stuent Login</i></a></li>
                 <li><a href="registernewuser.php"><i class="fa fa-sign-in">Staff Register</i></a> </li>
                
                </ul>
              </div><!-- /.navbar-custom-menu -->
          
            
            
            
            
             
          </div><!-- /.container-fluid -->
        </nav>
      </header>
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
			
			<ol class="breadcrumb">
              <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">Staff Register</a></li>
              
            </ol>
          <section class="content-header">
			<h1>Tutor Management</h1>  
           
            
          </section>
          <!-- Main content -->
          
          
          <?php 
   if($_REQUEST['action']=='success') { ?>
   <div class="alert alert-success" style="text-align:center;">
        
        <strong><?php  echo "Register Successfully"; ?></strong>
      </div>
  <?php
    }
   ?>
    <?php 
   if($_REQUEST['action']=='error') { ?>
   <div class="alert alert-danger" style="text-align:center;">
        
        <strong><?php  echo "Some Problem Occured."; ?></strong>
      </div>
  <?php
    }
   ?>
          <section class="content">
			 
		  <div class="col-md-8">
		<!-- Horizontal Form -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title">Staff Register</h3>
                  
                </div><!-- /.box-header -->
                <!-- form start -->
                
                <form class="form-horizontal" action="add.php?action=add_new_user" method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Tutor Name </label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="name"  placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-3 control-label">Email </label>
                      <div class="col-sm-7">
                        <input type="email" class="form-control" id="" name="email"  placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                     <label for="inputPassword3" class="col-sm-3 control-label">Mobile Number </label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="mobile" onKeyPress="return isNumberKey(event)" maxlength="10" name="mobile_number"  placeholder="Mobile Number">
                      </div> 
                    </div>
                   <div class="form-group">
                     <label for="inputPassword3" class="col-sm-3 control-label">Address </label>
                      <div class="col-sm-7">
						<textarea class="form-control" placeholder="Address" name="address" row=4> </textarea>
                      </div> 
                    </div>
                    <div class="form-group">
                     <label for="inputPassword3" class="col-sm-3 control-label">Location(Area) </label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="location" placeholder="Location">
                      </div> 
                      
                    </div> 
                   <div class="form-group">
                     <label for="inputPassword3" class="col-sm-3 control-label">Upload Image </label>
                      <div class="col-sm-7">
                        <input type="file"  id="" name="filess" placeholder="">
                      </div> 
                      
                    </div> 
                <div class="form-group">
                     <label for="inputPassword3" class="col-sm-3 control-label">Qualification</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="Qualification" placeholder="Qualification">
                      </div> 
                      
                    </div>    
                    
                    
                    <div class="form-group">
                     <label for="inputPassword3" class="col-sm-3 control-label">Subject Taken</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" name="subject" placeholder="Subject Taken">
                      </div> 
                      
                    </div> 
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" class="btn btn-info pull-right">Register</button>
                  </div><!-- /.box-footer -->
                </form>
              </div><!-- /.box -->
              	
			
			
			
			
			  
			  </div>	  
			  
			  
			  
           
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="container">
          <div class="pull-right hidden-xs">
            <b></b> 
          </div>
          <strong>Copyright &copy; 2015 <a href="#"></a>.</strong>
        </div><!-- /.container -->
      </footer>
   
   
   
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.4 -->
    <script src="plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="plugins/slimScroll/jquery.slimscroll.min.js"></script>
    <!-- FastClick -->
    <script src="plugins/fastclick/fastclick.min.js"></script>
    <!-- AdminLTE App -->
    <script src="dist/js/app.min.js"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="dist/js/demo.js"></script>
  </body>
</html>
<script type="text/javascript">

   $('.alert').fadeOut('3000');
</script>

<script type="text/javascript">

  function isNumberKey(evt)
      {
         var charCode = (evt.which) ? evt.which : event.keyCode
         if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
			else         
			return true;
      }
$("#confirm_password").keyup(function(){
     if($(this).val() != $("#new_password").val()){
     $("#password_error").html("Password didn't match").show();                       
     }
     else
     {
		  $("#password_error").html("Password didn't match").hide();       
	 }
     
});
</script>


