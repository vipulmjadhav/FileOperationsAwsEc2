	<?php


function decrypt($str, $offset) 
{
    $decrypted_text = "";
    $offset = $offset % 26;
    if($offset < 0) 
    {
        $offset += 26;
    }
    $i = 0;
    
    while($i < strlen($str))
    {
        $c = strtoupper($str{$i}); 
        
        if(($c >= "A") && ($c <= 'Z')) 
        {
            if((ord($c) - $offset) < ord("A")) 
            {
                $decrypted_text .= chr(ord($c) - $offset + 26);
            } 
            else 
            {
            $decrypted_text .= chr(ord($c) - $offset);
            }
        
        }
         
        else 
        {
          $decrypted_text .= " ";
      	}
      	
      $i++;
    }
    
    return $decrypted_text;
}

	
	#include './access_control.php';
	
	
	
	$fname = $_POST['fname'];
	
	$path = './uploads/'.$fname;
	
	if(file_exists($path)){
	//readfile($path); 
		$FileData = file_get_contents($path);

	$r = decrypt($FileData,3);
	echo "$r";

	}
else
{
	echo "file does not exists";
	$o = shell_exec('ls ./uploads');
	echo "<pre>$o</pre>";
}

	?>
	
	
	<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 0px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
 
margin: 300px 300px;
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
<body>
	<table>
		<form method = "POST" action = "./n2.php" >
		<td><button  class="button button1" id="backk" type="submit"><h3>Back</h3></button></td>
		</form>
	</table>
	
</body>

</html>
