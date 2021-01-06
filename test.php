<!-- <html>
<title> PHP MYSQL - Search</title>
<head>
</head>

<body>
<form  method="POST">
<center><h3>Search Database</h3></center>
<center><table>
<tr>
	<td>Search</td>
	<td><input type="text" name="value" size="100"></td>
	<td><button type="submit" name="search">Search</button></td>
</tr>
</table></center>
</form>
</body>

</html> -->

<?php
   if( $_GET["name"]) {
      echo "Welcome ". $_GET['name']. "<br />";
      echo "You are ". $_GET['age']. " years old.";
      
      exit();
   }
?>
<html>
   <body>
   
      <form  method = "GET">
         Name: <input type = "text" name = "name" />
         Age: <input type = "text" name = "age" />
         <input type = "submit" />
      </form>
      
   </body>
</html>