<?php 
 error_reporting(0); 
 require "includes/config.php";
  ?>
  <?php 
include "head_css_file.php";
?>
 
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
<?php 
include "includes/header.php";
?>
 <?php 
include "sidebar.php";
?> 
      <!-- Full Width Column -->
      <div class="content-wrapper">
        <div class="container">
			
			<ol class="breadcrumb">
              <li><a href="index.php"><i class="fa fa-dashboard"></i> Home</a></li>
              <li><a href="#">Staff </a></li>
              
            </ol>
          <section class="content-header">
			<h1>Tutor Management</h1>  
           
            
          </section>
          <!-- Main content -->
          
          
          <?php 
   if($_REQUEST['action']=='success') { ?>
   <div class="alert alert-success" style="text-align:center;">
        
        <strong><?php  echo "SMS SEND Successfully"; ?></strong>
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
                  <h3 class="box-title">View Staff</h3>
                  
                </div><!-- /.box-header -->
                <!-- form start -->
              <?php
  $sql = "SELECT * FROM register_new_user where new_id=".$_REQUEST['id'];
  //echo $sql;
$result = mysql_query($sql);
if (!$result) 
{
  die("error".mysql_error());
}  
?>
<?php
while($row = mysql_fetch_array($result))
{
	
?>  
                <form class="form-horizontal"  method="post" enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Tutor Name </label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" disabled value="<?php echo $row['new_name'];?>" name="name"  placeholder="Name">
                      </div>
                    </div>
                    <input type="hidden" class="form-control" id="" name="new_id"  placeholder="Name">
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-3 control-label">Email </label>
                      <div class="col-sm-7">
                        <input type="email" class="form-control" id="" disabled value="<?php echo $row['new_email'];?>" name="email"  placeholder="Email">
                      </div>
                    </div>
                    <div class="form-group">
                     <label for="inputPassword3" class="col-sm-3 control-label">Mobile Number </label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="mobile" value="<?php echo $row['new_mobile_number'];?>" onKeyPress="return isNumberKey(event)" maxlength="10" name="mobile_number"disabled  placeholder="Mobile Number">
                      </div> 
                    </div>
                   <div class="form-group">
                     <label for="inputPassword3" class="col-sm-3 control-label">Address </label>
                      <div class="col-sm-7">
						<textarea class="form-control" placeholder="Address" disabled value="" name="address" row=4> <?php echo $row['new_address'];?></textarea>
                      </div> 
                    </div>
                    <div class="form-group">
                     <label for="inputPassword3" class="col-sm-3 control-label">Location(Area) </label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id=""disabled  value="<?php echo $row['new_location'];?>" name="location" placeholder="Location">
                      </div> 
                      
                    </div> 
                   <div class="form-group">
                     <label for="inputPassword3" class="col-sm-3 control-label">Upload Image </label>
                      <div class="col-sm-7">
                        <input type="file"  id="" name="filess" disabled placeholder="">
                          <img src="upload/<?php echo $row['new_image']; ?>" width="100" height="150" />
                      </div> 
                      
                    </div> 
                <div class="form-group">
                     <label for="inputPassword3" class="col-sm-3 control-label">Qualification</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" disabled value="<?php echo $row['new_quali'];?>" id="" name="Qualification" placeholder="Qualification">
                      </div> 
                      
                    </div>    
                    
                    
                    <div class="form-group">
                     <label for="inputPassword3" class="col-sm-3 control-label">Subject Taken</label>
                      <div class="col-sm-7">
                        <input type="text" class="form-control" id="" disabled value="<?php echo $row['new_subject'];?>" name="subject" placeholder="Subject Taken">
                      </div> 
                      
                    </div> 
                  </div><!-- /.box-body -->
                 
                </form>
                
                
                <?php } ?>
              </div><!-- /.box -->
              	
			
			
			
			
			  
			  </div>	  
			  
			  
			  
           
          </section><!-- /.content -->
        </div><!-- /.container -->
      </div><!-- /.content-wrapper -->
      <?php 
include "includes/footer.php";
?>   
         
<?php 
include "footer_js_file.php";
?> 
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


