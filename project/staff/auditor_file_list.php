<!DOCTYPE html>
<html>
  <?php 
include "head_css_file.php";
?>
  
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
<?php 
include "includes/auditor_header.php";
?>
 <?php 
include "auditor_sidebar.php";
?>     
      
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Auditor File List
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"> Auditor File</li>
          </ol>
        </section>

<?php if($_REQUEST['action']=='block') { ?>
   <div class="alert alert-success" style="text-align:center;">
  <strong><?php  echo "Inactive Successfully"; ?></strong>      </div>
  <?php } ?>
<?php if($_REQUEST['action']=='unblock') { ?>
   <div class="alert alert-success" style="text-align:center;">
  <strong><?php  echo "Activated successfully "; ?></strong>      </div>
  <?php } ?>


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
                        
                        <th>Status</th>
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
                       
                        <td><?php if($row['encrypted_status']!= '0') { ?>
		   <span class="label label-warning">Inactive</span>
		   <?php }else { ?>
        <span class="label label-success">Active</span>
      <?php } ?></td>
                        <td>
							
							
                        <div class="btn-group">
                      <button type="button" class="btn btn-danger btn-flat">Actions</button>
                      <button type="button" class="btn btn-danger btn-flat dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">            
            <?php if($row['encrypted_status']!= '1') { ?>			 
             <li>				
				 <a href="add.php?action=change_status&id=<?php echo $row['encrypted_id']; ?>" onClick="javascript:return confirm('Are you sure you want to inactive this?')" ><i class="icon-remove"></i>Inactive</a></li>
				 <?php }              
            else { ?>
             <li><a onClick="javascript:return confirm('Are you sure you want to active this?')" href="add.php?action=change_unstatus&id=<?php echo $row['encrypted_id']; ?>"><i class="fa fa-times-circle-o"></i>Active</a></li><?php } ?>
             
              <li><a href="add.php?action=delete_encrypted&id=<?php echo $row['encrypted_id']; ?>" onClick="javascript:return confirm('Are you sure you want to delete this?')"><i class="fa fa-trash-o"></i>Delete</a></li>
                        
                      </ul>
                    </div>
                    
                        </td>
                       
                 <?php } ?>    
                     
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
  





