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
           Enter Your Email Id
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">File Download</li>
          </ol>
        </section>
 <!-- Main content -->
        <section class="content">
     
       <div class="row">
            <div class="col-lg-9 col-xs-6">
       <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"> Enter Your Email Id</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="add.php?action=mail" enctype="multipart/form-data" method="post">
				
	             <div class="box-body">
                    <input type="hidden"  name="id" value="<?php echo $_REQUEST['id']; ?>">
                    
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Email Id</label>
                      <div class="col-sm-5">
                        <input type="email" class="form-control" id="" name="emailid" required placeholder="Email Id">
                      </div>
                    </div>
                    
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" class="btn btn-info pull-right" onClick="javascript:return confirm('Your Key Will be send Your Email')" >Submit</button>
               
                  </div><!-- /.box-footer -->
                
                </form>
              </div><!-- /.box -->
    
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

  



