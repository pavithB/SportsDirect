<?php


	
	session_start();
	if(isset($_SESSION["userlog"]))
	{

		include("connect.php");
 $tsession =($_SESSION["userlog"]);

   //write sql querry

   $check="select UserName,pole from user where UserName='$tsession'";

   //Execute select SQL Querry
   $tempresult=mysqli_query($con,$check);

      //  echo "<script type='text/javascript'>alert('check 1');</script>";
   //read sigle row of result set
   $row=mysqli_fetch_array($tempresult);

       // echo "<script type='text/javascript'>alert('$row[pole]');</script>";
        if($row[pole]==1){
            echo "<script type='text/javascript'>alert('You Already Voted ');</script>";
        }



   if($row[pole]==0){


     //  echo "<script type='text/javascript'>comfirm('check 2 ');</script>";
         header("Location:poll.php");

   }else{


       //temep for testing
      // header("Location:poll.php");


     echo "<script type='text/javascript'>comfirm('You Already Voted ');</script>";


   header("Location:pollalert.php");
      // include_once"../home.html";
	   
	   // include_once("../home.html") ;

   
   }





	mysqli_close($con);
//header("Location:poll.php")
	}else{

        //include"../signin.php";

echo "<script type='text/javascript'>alert(' You Must Login Before Vote To The Weekly Pole ');</script>";

        header("Location:../signin.php");


}
?>