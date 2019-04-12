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
 
margin: 10px 600px;
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
<div class="container">
  <div class="login">
    <h1 align="center">Login to App</h1>
    <form method="post" action="./check.php">
      <p><br> <h4 align="center">USERNAME : <input type="text" name="user"></h4></p>
      
    <p><br> <h4 align="center">PASSWORD : <input type="password" name="pass"></h4></p>
      <button class="button button1" >LogIn</button>
      
    </form>
  </div>
 

</div>
</body>
</html>
