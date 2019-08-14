<?php
  include "class.php";
   $doll=new dollars();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form method="post" action="">
	<input type="text" name="name"/><br>
	<input type="text" name="user"/><br>
	<input type="submit" value="submit"/>

</form>
<div id="mog" style="background:blue;">

<p> my name is<?php


echo $doll->name;
?>
</p>
	</div>
</body>
</html>