<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>
<?php
		$hostmysql = "localhost";
		$username = "root";
		$password = "root";
		$database = "smsd";
    	$conn = mysql_connect("$hostmysql","$username","$password");
		$order=$_REQUEST['order_id'];
		echo "$order"; echo "<br>";
		mysql_query("DELETE FROM smsd.smentara WHERE akun='".$order."'")
		or die(mysql_error());  
?>
<body>

</body>
</html>
