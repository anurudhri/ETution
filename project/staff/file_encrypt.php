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
   <?php 
   if($_REQUEST['action']=='success') { ?>
   <div class="alert alert-success" style="text-align:center;">
        
        <strong><?php  echo "File Successfully Uploaded"; ?></strong>
      </div>
  <?php
    }
   ?>   
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
           File Encrypt
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">File Encrypt</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
      
       <div class="row">
            <div class="col-lg-9 col-xs-6">
       <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">Encrypt</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" method="post" action="add.php?action=encryped_file"  enctype="multipart/form-data">
                  <div class="box-body">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">File Name</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="" name="file_name" required placeholder="File Name">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputPassword3" class="col-sm-3 control-label">File Upload</label>
                      <div class="col-sm-5">
                        <input type="file" name="filess">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Encrypt Key</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="" name="encrypt_key" required placeholder="Encrypt Key">
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    <button type="reset" class="btn btn-default">Reset</button>
                    <button type="submit" class="btn btn-info pull-right">Upload</button>
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

  <script type="text/javascript">

   $('.alert').fadeOut('slow');
</script>



