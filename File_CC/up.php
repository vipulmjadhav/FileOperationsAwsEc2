<?php
# echo inside upload
?>

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
 
margin: 4px 570px;
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
<form method = "POST" action = "./up1.php" enctype = "multipart/form-data">

	<input align = "center" type = "file" name = "fileToUpload" id = "fileToUpload" class = "button button1" >
	<input align = "center" type = "submit" values = "upload file" name = "submit" class = "button button1">

</form>
</body>

</html>
