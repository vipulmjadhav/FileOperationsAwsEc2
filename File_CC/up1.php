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

#echo "inside up";

if(isset($_FILES["fileToUpload"]))
{

   $FileData = file_get_contents($_FILES["fileToUpload"]["tmp_name"]);
   #echo $FileData;
  
}

$target_file = "/opt/lampp/htdocs/FinalCCMini/uploads/" . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;

#echo $target_file; 

$filetype = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

#echo $filetype;

function encryptionFunc($string,$offset)
{
	$ecr_text = "";
	$offset = $offset % 26;
	if($offset<0)
	{
		$offset+=26;
	}
	$i = 0;
	
	while($i < strlen($string))
	{
		$char = strtoupper($string{$i});
		
		if(($char>='A') && ($char<='Z'))
		{
			if((ord($char)+$offset) > ord('Z'))
			{
				$ecr_text .=chr(ord($char)+$offset - 26);
			}
			else
			{
				$ecr_text.=chr(ord($char)+$offset);
			}
		}
		else
		{
			$ecr_text.=" ";
		}
		$i++;
		
	}
	return $ecr_text;
	
}

if (file_exists($target_file)) {
    echo "Sorry, file already exists.";
    $uploadOk = 0;
}

if ($_FILES["fileToUpload"]["size"] > 500000) {
    echo "Sorry, your file is too large.";
    $uploadOk = 0;
}

if($uploadOk == 0)
{
	echo "not uploaded";
}
else
{
	$offset = 3;
	$encrypt = encryptionFunc($FileData,$offset);
	
	#echo "alert('$encrypt')";
	
	echo "<script type='text/javascript'>alert('File Uploaded Success -> Encrypted Text : $encrypt');</script>";

	
	
	echo "<br>";
	echo "<br>";
	
	$fd = fopen($target_file,'w')or die("cant open file -> ".$target_file);
	shell_exec("chmod 777 ".$target_file);
	
	fwrite($fd,$encrypt);
	
	fseek($fd,0);
	
	#echo "<button class='button button1' onclick=\"location.href='login.php'\"> LogIn to Access App!!!</button>";
	
	#echo readfile($target_file);
	
}



?>
		
