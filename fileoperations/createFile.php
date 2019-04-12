<?php

$fname = $_POST['fname'];
if(empty($fname))
{
 echo "Please Enter File Name !!";
}
else
{
if(!file_exists($fname))
{
$query = "touch $fname";

$query2 = "chmod 777 $fname";

shell_exec($query);
shell_exec($query2);

echo "$fname ---> File Created Successfully !!";
}
else
{
	echo "File Exist Already !!";
	$o = shell_exec('ls');
	echo "<pre>$o</pre>";

}
}
#shell_exec('./simple.sh');

?>
