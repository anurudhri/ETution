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
			<h1>SMS</h1>  
           
            
          </section>
          <!-- Main content -->
          
          
         
          <section class="content">
		 
		  <div class="col-md-8">
		<!-- Horizontal Form -->
              <div class="box box-success">
                <div class="box-header with-border">
                  <h3 class="box-title"> Send SMS</h3>
                  
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
                <form class="form-horizontal"  method="post" action="add.php?action=send_sms"enctype="multipart/form-data">
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
                        <input type="text" class="form-control" id="mobile" value="<?php echo $row['new_mobile_number'];?>" onKeyPress="return isNumberKey(event)" maxlength="10" name="mobile_number"  placeholder="Mobile Number">
                      </div> 
                    </div>
                   <div class="form-group">
                     <label for="inputPassword3" class="col-sm-3 control-label"> Message </label>
                      <div class="col-sm-7">
						<textarea class="form-control" placeholder="" value="" name="msg" row=4> </textarea>
                      </div> 
                    </div>
                  
                 
                  </div><!-- /.box-body -->
                 <div class="box-footer">
                   
                    <button type="submit" class="btn btn-info pull-right">Send</button>
                  </div><!-- /.box-footer -->
                 
                 
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


