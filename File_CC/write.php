
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
 
margin: 4px 550px;
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
<form action="writeFile.php" method="post">
   <br> <h4 align="center">FILE NAME : <input type="text" name="fname"autocomplete="off" ></h4>
   <br> <h4 align="center">FILE DATA : <input type="text" name="data" autocomplete="off"></h4>
   <button class="button button1" >WRITE</button>
   
</form>
</body>
</html>
