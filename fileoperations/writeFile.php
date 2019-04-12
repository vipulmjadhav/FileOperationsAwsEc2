<?php

	$fname = $_POST['fname'];
	$txt = $_POST['data'];
	//echo "$fname";
	if(file_exists($fname))
{		
	$fd = fopen($fname,"a") or die ("unable to open file for writing!!!");

	//echo "$txt";
	fwrite($fd,$txt);
	
	 $myfile = readfile($fname);
	
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



