<?php
ob_start();
session_start();
require "includes/config.php";
//error_reporting(0);
 $errmsg_arr = array();
	$errflag = false;
$action=$_GET['action'];
//----------------------------New User-------------------------------//
if($action == "add_new_user")
{
	$name = $_POST['name'];
	$email = $_POST['email'];
	$mobile_number = $_POST['mobile_number'];
	$address =$_POST['address'];
    $upload =$_POST['filess'];
	
	if (isset($_FILES['filess']['name']))
		    {
				$upload = $_FILES['filess']['name'];
			
			   $strFilePath="upload/";         
			$logo = $_FILES['filess']['name'];
			 
    $tmp_name = $_FILES['filess']['tmp_name'];
	
			$target_path = $strFilePath . basename( $_FILES['filess']['name']);  
		 copy($tmp_name, $target_path);   
			
	} 
	else
	{		
	$upload = '';	
	}
	
	
	$location =$_POST['location'];
	$qulai =$_POST['Qualification'];
	$subject =$_POST['subject'];
	
	
	$insert = "INSERT INTO `register_new_user`(`new_name`,`new_email`,`new_mobile_number`,`new_address`,`new_location`,`new_image`,`new_quali`,`new_subject`) VALUES ('$name','$email','$mobile_number','$address','$location','$upload','$qulai','$subject')"; 
	//echo $insert; exit();
	
	$in = mysql_query($insert);
	if($in)
	{
	header("location:registernewuser.php?action=success");	
	}
	else
	{
	header("location: registernewuser.php?action=error");	
	}
}


//----------------------------login-------------------------------//
if($action == "login")
{
	$username = $_POST['name'];
	$password = $_POST['password'];
 
	//Input Validations
	if($username == '') {
		//echo 'empty';exit;
		$errmsg_arr[] = 'Username missing';
		$errflag = true;
	}
	if($password == '') {
		$errmsg_arr[] = 'Password missing';
		$errflag = true;
	}
 
	
	$sql = "select * from student_login where st_name='".$username."' and st_password='".$password."'" ;
	//echo $sql; die();
	
	$result = mysql_query($sql); 
	$count = mysql_num_rows($result); 
    
	//Check whether the query was successful or not
	if($count > 0) {
		
		$row = mysql_fetch_array($result);
		 $_SESSION['SESS_ID'] = $row['st_id']; 
	     $_SESSION['SESS_NAME'] = $row['st_name']; 
	     $_SESSION['SESS_MOBILE'] = $row['st_mobile_number']; 
	     $_SESSION['SESS_EMAIL'] = $row['st_email']; 
			header("location: home.php");
			}
			
		else {
			
			//Login failed
			$errmsg_arr[] = 'Username and password not match.';
			$errflag = true;
			if($errflag) {
				$_SESSION['ERRMSG_ARR'] = $errmsg_arr;
				session_write_close();
				header("location: index.php?action=error");
				exit();
			}
		}		
	}
	
	
if($action == "send_sms")
{
//echo "khgkjgkk";
	//$username = $_POST['name'];
	  $number = $_POST['mobile_number'];
	 $msg = $_POST['msg'];	
   /****************************************************************************************/	
$str = trim(str_replace(' ','%20', $msg));
 $url="http://cloud.smsindiahub.in/vendorsms/pushsms.aspx?user=anurudhri&password=evesunsetanu&msisdn=".$number."&sid=WEBSMS&msg=".$str."&fl=0";
// create a new cURL resource

$ch = curl_init();

// set URL and other appropriate options
curl_setopt($ch, CURLOPT_URL,$url);
// grab URL and pass it to the browser
curl_exec($ch);


// close cURL resource, and free up system resources
curl_close($ch); 

//*******************************************************************************************************/
	
	if($ch)
	{
header("location:home.php?action=success");
	}
	else
	{
	
header("location:home.php?action=success");
	
	}		
		
}




	
?>






