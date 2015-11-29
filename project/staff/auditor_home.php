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
            Admin
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i>Home</a></li>
            <li class="active">Profile</li>
          </ol>
        </section>
<?php $sql="select count(*) as `count` from add_encrypted_files where encrypted_delete=0";
    // echo $sql; die; 
$result = mysql_query($sql);
//echo count;
$data=mysql_fetch_assoc($result);
//echo $data['count'];
//print_r($result);
?>
        <!-- Main content -->
        <section class="content">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-red"><i class="fa fa-files-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Total Files</span>
                  <span class="info-box-number"><?php echo $data['count']; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
          
   <?php $sql="select count(*) as `success` from add_encrypted_files where encrypted_delete=0 and encrypted_status=0";
    // echo $sql; die; 
$result = mysql_query($sql);

$data=mysql_fetch_assoc($result);

?>       
          
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-green"><i class="fa fa-flag-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Sucess Files</span>
                  <span class="info-box-number"><?php echo $data['success']; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
            
            <?php $sql="select count(*) as `unsuccess` from add_encrypted_files where encrypted_delete=0 and encrypted_status=1";
    // echo $sql; die; 
$result = mysql_query($sql);

$data=mysql_fetch_assoc($result);

?>       
            <div class="col-md-3 col-sm-6 col-xs-12">
              <div class="info-box">
                <span class="info-box-icon bg-yellow"><i class="fa fa-flag-o"></i></span>
                <div class="info-box-content">
                  <span class="info-box-text">Pending Files</span>
                  <span class="info-box-number"><?php echo $data['unsuccess']; ?></span>
                </div><!-- /.info-box-content -->
              </div><!-- /.info-box -->
            </div><!-- /.col -->
        
            </div><!-- ./col -->
            
   
              
           
         <div class="col-md-6">
              <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div style="background: url('dist/img/photo1.png') center center;" class="widget-user-header bg-black">
                  <h3 class="widget-user-username">Auditor</h3>
                  <h5 class="widget-user-desc"></h5>
                </div>
                <div class="widget-user-image">
                  <img alt="User Avatar" src="images/user.png" class="img-circle">
                </div>
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-4 border-right">
                      <div class="description-block">
                        <h5 class="description-header">Auditor</h5>
                        <span class="description-text"></span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-4 border-right">
                      <div class="description-block">
                        <h5 class="description-header">Email</h5>
                        <span class="description-text">auditor@gmail.com</span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-4">
                      <div class="description-block">
                        <h5 class="description-header">Status</h5>
                        <span class="description-text"><a href="#"><i class="fa fa-circle text-success"></i> Online</a></span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                  </div><!-- /.row -->
                </div>
              </div><!-- /.widget-user -->
            </div>
         
         
                      </div><!-- /.row -->
        
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

  


