<html>
<body>
<meta http-equiv="refresh" content="1; url=3.php">
<?
	//koneksi db
	$host="localhost";
	$uname="root";
	
	$con= mysql_connect($host,$uname,"") or die("koneksi gagal");
	mysql_select_db('sms');
	
	//perintah kirim
		mysql_query("INSERT INTO kirim (pesan,tujuan) VALUES ('$pesan','$tujuan')")
?>
</body>
</html>