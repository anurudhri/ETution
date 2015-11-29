
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
            Home
            <small>Control panel</small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Profile</li>
          </ol>
        </section>
<?php $sql="select count(*) as `count` from register_new_user where new_delete=0";
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
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3><?php echo $data['count']; ?></h3>
                  <p>Total Tutor</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
<!--
                <a href="encrypted_files.php" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
-->
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>100<sup style="font-size: 20px">%</sup></h3>
                  <p>User Status</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
<!--
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
-->
              </div>
            </div><!-- ./col -->
           
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
                  <h3><?php
date_default_timezone_set("Asia/india");
echo date("h:i:sa");
?></h3>
                  <p>Time</p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
<!--
                <a href="#" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
-->
              </div>
            </div><!-- ./col -->
           
         <div class="col-md-6">
              <!-- Widget: user widget style 1 -->
              <div class="box box-widget widget-user">
                <!-- Add the bg color to the header using any of the bg-* classes -->
                <div style="background: url('dist/img/photo1.png') center center;" class="widget-user-header bg-black">
                  <h3 class="widget-user-username"><?php echo $_SESSION['SESS_NAME']; ?></h3>
                  <h5 class="widget-user-desc"></h5>
                </div>
                <div class="widget-user-image">
                  <img alt="User Avatar" src="images/user.png" class="img-circle">
                </div>
                
                <div class="box-footer">
                  <div class="row">
                    <div class="col-sm-3 border-right">
                      <div class="description-block">
                        <h5 class="description-header">Name</h5>
                        <span class="description-text"><?php echo $_SESSION['SESS_NAME']; ?></span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-6 border-right">
                      <div class="description-block">
                        <h5 class="description-header">Email</h5>
                        <span class="description-text"><?php echo $_SESSION['SESS_EMAIL']; ?></span>
                      </div><!-- /.description-block -->
                    </div><!-- /.col -->
                    <div class="col-sm-3">
                      <div class="description-block">
                        <h5 class="description-header">Mobile</h5>
                        <span class="description-text"><?php echo $_SESSION['SESS_MOBILE']; ?></span>
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

  


