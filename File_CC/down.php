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
  font-size: 13px;
 
margin: 10px 600px;
  -webkit-transition-duration: 0.4s; /* Safari */
  transition-duration: 0.4s;
  cursor: pointer;
}

.button1 {
  background-color: white; 
  color: black; 
  border: 1px solid #4CAF50;
}

.button1:hover {
  background-color: #4CAF50;
  color: white;
}
</style>
</head>
</html>

<?php

 echo " <p><br> <h3 align = 'center' > File To Download </h3></p>";

if ($handle = opendir('uploads/'))
{
	while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != ".." && $entry != "testfile.txt") {
	      echo("<button align = 'center' class  = 'button button1' onclick=\"location.href='down1.php?file=".$entry."'\">".$entry."</button>");
			
        }
    }

    closedir($handle);
}



?>
