<?php
   include("config.php");
   
   if($_SERVER["REQUEST_METHOD"] == "POST") {
      // username and password sent from form 
      
      $empusername = mysqli_real_escape_string($db,$_POST['username']);
      $emppassword = mysqli_real_escape_string($db,$_POST['password']); 
      
      $sql = "SELECT rhu_id FROM rhu_account WHERE username = '$empusername' and password = '$emppassword'";
      $result = mysqli_query($db,$sql);
      $row = mysqli_fetch_array($result,MYSQLI_ASSOC);
      //$active = $row['active'];
      
      $count = mysqli_num_rows($result);  
      
      // If result matched $empusername and $emppassword, table row must be 1 row
        
      if($count == 1) {
         //session_register("empusername");
        $_SESSION['login_emp'] = $empusername;
         $_SESSION['emp_id'] = $row['rhu_id'];
         $status=1;

         $successlog=mysqli_query($db, "INSERT INTO doctorlog(aid,username,status) 
            VALUES('".$_SESSION['emp_id']."','".$_SESSION['login_emp']."','$status')");

           $_SESSION['successlogin'] = "Login Sucessful";
           header("Location: employee/emp-index.php");
           exit();
         
            //header("location: welcome.php");
      }else {
        $_SESSION['login_emp'] = $empusername;
         $status = 0;
          
         $errorlog = mysqli_query($db, "INSERT into doctorlog (username,status) VALUES('".$_SESSION['login_emp']."','$status')");

           $_SESSION['errorlogin'] = "Invalid Credential(s)!";
           header("Location: rhu_login.php");
           exit();
         //$error = "Your Login Name or Password is invalid";
      }
   }