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
           Encrypt & Decrypt Key
            <small></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">File Download</li>
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
   
   <?php 
   if($_REQUEST['action']=='error123') { ?>
   <div class="alert alert-danger" style="text-align:center;">
        
        <strong><?php  echo "Auditor Not Verified Your File"; ?></strong>
      </div>
  <?php
    }
   ?>
        <!-- Main content -->
        <section class="content">
       <blockquote style="float:right;">
        <small style="color:#F00;">IF Page Is Empty Means<cite title=""> Auditor Not Verified Your File</cite></small>
      </blockquote>  


       <div class="row">
            <div class="col-lg-9 col-xs-6">
       <!-- Horizontal Form -->
              <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title"> Enter Your Encrypt & Decrypt Key Download The File</h3>
                </div><!-- /.box-header -->
                <!-- form start -->
                <form class="form-horizontal" action="add.php?action=file_download" method="post">
				<?php 
 $sql="select * from add_encrypted_files where encrypted_delete=0 and encrypted_status=0 and encrypted_id=".$_REQUEST['id'];
 //echo $sql; die;
 $result = mysql_query($sql);
 while($row = mysql_fetch_array($result))
   {
	
      ?> 	
	             <div class="box-body">
                    <input type="hidden"  name="file_id" value="<?php echo $_REQUEST['id']; ?>">
                    
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Decrypt Key</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="" value="<?php echo $row['decrpt_key'];?>" name="decrypt" required placeholder="Decrypt Key">
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-3 control-label">Encrypt Key</label>
                      <div class="col-sm-5">
                        <input type="text" class="form-control" id="encrypt" value="<?php echo $row['encrypted_encrypted_key'];?>" name="encrypt" required placeholder="Encrypt Key">
                      </div>
                    </div>
                  </div><!-- /.box-body -->
                  <div class="box-footer">
                    
                    <button type="submit" class="btn btn-info pull-right" onclick="top.location='upload/<?php echo $row['encrypted_upload']; ?>'" >Download</button>
               
                  </div><!-- /.box-footer -->
                  <?php } ?>
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

  



