<?php

$fname = $_POST['fname'];
	
$path = './uploads/'.$fname;


if(file_exists($path))
{
$query = "rm $path";

if(!shell_exec($query))
{
	echo "Successfully Removed !!";
}
else
{
	echo "failed to delete !!";
}

}
else
{
echo "File Does Not Present !!!";
}
