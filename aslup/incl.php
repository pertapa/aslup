<html>
<head>
<title>Untitled Document</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head>

<body>
<?		$hostmysql = "localhost";
		$username = "root";
		$password = "root";
		$database = "smsd";

    $conn = mysql_connect("$hostmysql","$username","$password");
	$jumlah=$_REQUEST['lr_amnt'];
	echo "$jumlah"; echo "<br>";
	$order=$_REQUEST['order_id'];
	echo "$order";
	mysql_query("INSERT INTO smsd.outbox SELECT * FROM smsd.smentara WHERE akun='".$order."'")
	or die(mysql_error());  
	mysql_query("DELETE FROM smsd.smentara WHERE akun='".$order."'")
	or die(mysql_error());  
?>
</body>
</html>
