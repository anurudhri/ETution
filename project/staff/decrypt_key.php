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
            <li class="active">Decrypt Key</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
      
       <div class="row">
		    <div class="col-lg-9 col-xs-6">
           <form class="form-horizontal" action="auditor_admin.php" method="post">
                  <div class="box-body">
                                      
                   <div class="form-group">
                     <label for="inputPassword3" class="col-sm-3 control-label">Decrypt Key</label>
                      <div class="col-sm-7">
                        <input type="password" class="form-control" id="" name="" required placeholder="">
                      </div> 
                    </div>
                     
                    
                  </div><!-- /.box-body -->
                  
                    <button type="submit" class="btn btn-info pull-right">Update Key</button>
                  
                </form>
            
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

  






