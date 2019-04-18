<?php


$fname = $_POST['fname'];

$path = './uploads/'.$fname;

if(empty($path))
{
 echo "Please Enter File Name !!";
}
else
{
if(!file_exists($path))
{
$query = "touch $path";

$query2 = "chmod 777 $path";

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
