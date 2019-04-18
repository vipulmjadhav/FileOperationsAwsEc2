<?php


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


	$fname = $_POST['fname'];
	$txt = $_POST['data'];
	//echo "$fname";
	
	$txt = encryptionFunc($txt,3);
	$fname = $_POST['fname'];
	
	$path = './uploads/'.$fname;
	
	
	if(file_exists($path))
	{	
	
	$fd = fopen($path,"a") or die ("unable to open file for writing!!!");

	//echo "$txt";
	fwrite($fd,$txt);
	
	$myfile = readfile($path);
	
	echo "\n\n   ---> DATA WRITEEN SUCESSFULLY";

	fclose($fd);
	}
else
{
	echo "file does not exists!!";
	$o = shell_exec('ls');
	echo "<pre> $o </pre>";
}
?>



