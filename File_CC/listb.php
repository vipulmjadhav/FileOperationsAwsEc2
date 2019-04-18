<?php

$out = shell_exec('ls ./uploads');
echo "<pre> $out </pre>";

?>

<script src="./jquery-3.3.1.min.js">  </script>

<script>
	$(document).ready(function(){
	
	$('#back').click(function(){
	
		$('#bk').show();
	})
						
	});

</script>

<html>
<head>
<style>
.button {
  background-color: #4CAF50; /* Green */
  border: none;
  color: white;
  padding: 0px 30px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 16px;
 
margin: 4px 300px;
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
	<table>
		<form method = "POST" action = "./n4.php" >
		<td><button  class="button button1" id="backk" type="submit"><h3>Back</h3></button></td>
		</form>
	</table>
	
</body>

</html>
