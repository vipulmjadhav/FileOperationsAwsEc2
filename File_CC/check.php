
<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 16px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
 
margin: 10px 600px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 2px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
</html>

<?php
	#include "./con.php";
	
	error_reporting(0);

if($_POST['lin'])
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];

	
	include "./access_control.php";
	
}

if($_POST['sup'])
{
	$user = $_POST['user'];
	$pass = $_POST['pass'];
	include './con.php';
	
	$var = 'r233';
	
	$sql = "insert into info values('$user','$pass','r233')";
	
	mysqli_select_db($conn,'info');
    
	$result = mysqli_query($conn,$sql);
	
	echo "<script type='text/javascript'>alert('sign up successfull');</script>";
	
	echo "<button class='button button1' onclick=\"location.href='login.php'\"> LogIn to Access App!!!</button>";

	

}
	
function fun3()
{
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
}

function fun1()
{
echo "inside fun1";
}

function fun2()
{
echo "inside fun2";
}
?>
