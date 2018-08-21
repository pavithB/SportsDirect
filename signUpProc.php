<?php
    if(isset($_POST["submit"])){
      
      session_start();
	$fName = $_POST["fName"];
	$uName = $_POST["uName"];
	$password = $_POST["pw"];
	$cpassword=$_POST["cpw"];
	$address = $_POST["uaddress"];
	$useremail = $_POST["uemail"];
        
   
          if($password==$cpassword){
	
		include("connect.php");
		$query ="INSERT INTO `user` (`FullName`, `UserName`, `Password`, `Email`, `Address`) VALUES ('$fName', '$uName', '$password', '$useremail', '$address')";
		$result = mysqli_query($con,$query);
		if(!$result)
			
		
			echo "Registration Successful";
			//include("signin.php");
              header('Location:signin.php');
			mysqli_close($con);
	
		}else{
                echo "<script type='text/javascript'>alert('!!!Confirm Password Is Wrong!!! ');</script>";
                include("signup.php");
             
                  }

}else{
echo "failed";
 //header("signin.php");
}
//mysqli_close($con);

?>