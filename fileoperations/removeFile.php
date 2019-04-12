<?php

$fname = $_POST['fname'];

if(file_exists($fname))
{
$query = "rm $fname";

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
