<?php
	#include "./con.php";

	$user = $_POST['user'];
	$pass = $_POST['pass'];

	
	include "./access_control.php";
	
	/*$sql = "SELECT * FROM info WHERE  
              user = '$user' AND  pass = '$pass'"; 	
            
	mysqli_select_db($conn,'info');
    
  $result = mysqli_query($conn,$sql);
  
  if($result->num_rows>0){
	
	echo "LOGIN SUCCESSFUL";
	
  	#header("location: ./n2.php");
    
    }
  else{
	echo "LOGIN FAILED";
    }
*/
?>
