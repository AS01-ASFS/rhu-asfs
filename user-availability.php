<?php 
require_once("config.php");
if(!empty($_POST["modalemail"])) {


	$email= $_POST["modalemail"];
	
		$result =mysqli_query($db, "SELECT email_address FROM rhu_staff WHERE email_address='$email'");
		$count=mysqli_num_rows($result);
if($count>0)
{
echo "<span style='color:green'> Registered Email .</span>";
 echo "<script>$('#btnmodalsubmit').prop('disabled',false);</script>";
} else{
	
	echo "<span style='color:red'> This email address is not registered. .</span>";
 echo "<script>$('#btnmodalsubmit').prop('disabled',true);</script>";
}
} 