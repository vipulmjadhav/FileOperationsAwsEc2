<?php

include './con.php';

$sql = "SELECT keyname FROM info WHERE  
              user = '$user' AND  pass = '$pass'"; 	

define('DBHOST','localhost');
define('DBUSER','root');
define('DBPASS','root');
define('DBNAME','logindata');



try {

    //create PDO connection 
  #  $db = new PDO("mysql:host=".DBHOST.";port=3306;dbname=".DBNAME, DBUSER, DBPASS);
  #  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    //show error
    echo '<p class="bg-danger">'.$e->getMessage().'</p>';
    exit;
}     
     
     
     
        
mysqli_select_db($conn,'info');
    
$result = mysqli_query($conn,$sql);
  
    
while($row = $result->fetch_assoc())
{
	$key = $row['keyname'];
}

if($result->num_rows>0){
	echo "LOGIN SUCCESSFUL";
}
else
{
	echo "Login Failed!!!";
	exit();
}

if($key == "rwx933")
{
	header("location: ./n2.php");
	
}
if($key == "rw133")
{
	header("location: ./n3.php");
}

if($key == "r233")
{
	header("location: ./n4.php");
}


?>
