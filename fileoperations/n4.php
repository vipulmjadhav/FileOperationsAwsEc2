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

<form action="listb.php" method="post">
   <br> <h2 align="center">LIST OF FILES : <button class="button button1" >FILE LIST</button></h2>
</form>

<form action="readFile.php" method="post">
   <br> <h2 align="center">READ DATA<button class="button button1" >READ FILE</button></h2>
</form>

</body>
</html>

<?php

#include './access_control.php';


?>
















