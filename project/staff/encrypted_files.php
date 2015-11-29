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
          Encrypted File List
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Encrypted Files</li>
          </ol>
        </section>

<?php 
   if($_REQUEST['action']=='success') { ?>
   <div class="alert alert-success" style="text-align:center;">
        
        <strong><?php  echo "Download Successfully"; ?></strong>
      </div>
  <?php
    }
   ?>
    <?php 
   if($_REQUEST['action']=='error') { ?>
   <div class="alert alert-danger" style="text-align:center;">
        
        <strong><?php  echo "Enter Your Correct Encrypt & Decrypt Key ."; ?></strong>
      </div>
  <?php
    }
   ?>

        <!-- Main content -->
        <section class="content">
      
       <div class="row">
            <div class="col-xs-12">
       
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
					
					
					<?php 
 
 $sql = "SELECT * FROM add_encrypted_files WHERE encrypted_delete=0  ORDER BY encrypted_id DESC";
 
 $result = mysql_query($sql);
 
 ?>
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>File Name</th>
                        <th>Added Date & Time</th>
                        <th>Actions</th>
                        
                      </tr>
                    </thead>
                    <tbody>
		 <?php
   $i=0;
   while($row = mysql_fetch_array($result))
   {
	   $i++;
	  
   ?>																
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo ucfirst($row['encrypted_file_name']); ?></td>
                        <td><?php echo ucfirst($row['encrypted_added_date']); ?></td>
                        <td>
							
							
                        <div class="btn-group">
                      <button type="button" class="btn btn-danger btn-flat">Actions</button>
                      <button type="button" class="btn btn-danger btn-flat dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="email_verified.php?id=<?php echo $row['encrypted_id']; ?>"><i class="fa fa-download"></i>Download</a></li>
<!--
                        <li><a href="file_view.php?id=<?php echo $row['encrypted_id']; ?>"><i class="fa fa-eye"></i>View File</a></li>
-->
                        <li><a href="add.php?action=delete_encrypted&id=<?php echo $row['encrypted_id']; ?>" onClick="javascript:return confirm('Are you sure you want to delete this?')"><i class="fa fa-trash-o"></i>Delete</a></li>                       
                      </ul>
                    </div>
                    
                        </td>
                       
<?php  }  ?>            
                                   </tbody>
                  
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
           
 
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
<script type="text/javascript">

   $('.alert').fadeOut('slow');
</script>

