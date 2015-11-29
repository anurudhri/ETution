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
         Tutor List
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">List</li>
          </ol>
        </section>


        <!-- Main content -->
        <section class="content">
     <div class="col-md-3">
                <div class="box-body">
                  <form role="form" method="post">                  
                    <div class="form-group">
                      <label>Location Search</label>
                     
                      <select  class="form-control" name="location">
						<option value="">Select</option>
					 <?php 
  $act = "select * from register_new_user where new_delete=0  ORDER BY new_id DESC";
 $resultt = mysql_query($act);
 while($rowt = mysql_fetch_array($resultt))
   {
 ?>
   <option value="<?php echo $rowt['new_location']; ?>"><?php echo ($rowt['new_location']); ?> </option>
                <?php
			}
			?>    
                      </select>
                        
                    </div>
                   
                    <div class="footer">
                    
                    <button type="submit" class="btn btn-info pull-right">Search</button>
                  </div><!-- /.box-footer --> 
                    
                     </form>
                </div><!-- /.box-body -->
             </div>
             
             <?php 

$search = '';

if(!empty($_REQUEST['location']))
{
	$search .= " new_location='".stripcslashes($_REQUEST['location'])."'";
	$a = $_REQUEST['location'];
	
}

//echo 'kk'.$_POST['income_to'];
  $sql1="select * From register_new_user where ".$search." order by new_id desc" ;
//echo $sql1;
	$in=mysql_query($sql1);
	
		//echo $sql;
	?>
            
       <div class="row">
            <div class="col-xs-12">
       
        <div class="box">
                <div class="box-header">
                  <h3 class="box-title"></h3>
                </div><!-- /.box-header -->
                <div class="box-body">
					
					
					
                  <table id="example1" class="table table-bordered table-striped">
                    <thead>
                      <tr>
                        <th>S.No</th>
                        <th>Tutor Name</th>
                        <th>Address</th>
                         <th>Email</th>
                         <th>Location</th>
                          <th>Subjects</th>
                        <th>Actions</th>
                        
                      </tr>
                    </thead>
                    <tbody>
		 <?php
   $i=0;
   while($row = mysql_fetch_array($in))
   {
	   $i++;
	  
   ?>																
                      <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo ucfirst($row['new_name']); ?></td>
                        <td><?php echo ucfirst($row['new_address']); ?></td>
                        <td><?php echo ucfirst($row['new_email']); ?></td>
                        <td><?php echo ucfirst($row['new_location']); ?></td>
                         <td><?php echo ucfirst($row['new_subject']); ?></td>
                        <td>
							
							
                        <div class="btn-group">
                      <button type="button" class="btn btn-danger btn-flat">Actions</button>
                      <button type="button" class="btn btn-danger btn-flat dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                      </button>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="view_staff.php?id=<?php echo $row['new_id']; ?>"><i class="fa fa-eye"></i>view Staff</a></li>

                        <li><a href="send_sms.php?id=<?php echo $row['new_id']; ?>"><i class="fa fa-download"></i>SMS</a></li>

                                             
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


