<!DOCTYPE html>
<html>
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
      
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
         View Files
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Encrypted Files</li>
             <li class="active">View Files</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
      
					<?php 
 
 $sql = "SELECT * FROM add_encrypted_files WHERE encrypted_delete=0  ORDER BY encrypted_id DESC";
 
 $result = mysql_query($sql);
 
 ?>
  	
       <div class="row">
          <div class="col-lg-9 col-xs-6">
      <!-- textarea -->
                    <div class="form-group">
                      <label></label>
                      
                      <?php
  
   $row = mysql_fetch_array($result);
   
	  
	  
   ?>
                      <textarea class="form-control" rows="15" placeholder="" disabled ><?php echo ucfirst($row['encrypted_file_name']); ?></textarea>
                      
                    
                    </div>
       
         </div>
     
     
     </div>
     
     
        </section><!-- /.content -->
    
      </div><!-- /.content-wrapper -->
  
<?php 
include "includes/footer.php";
?>   
         
<?php 
include "footer_js_file.php";
?> 


 </body>
</html>

  




