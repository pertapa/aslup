<html>
	<meta http-equiv="refresh" content="5;url=kirim.php">

</html>
<?php

/**
 * @author yoga pratama	SUHANDI
 * @copyright 2010
 */
 
 /** koneksi db */

  
  $connection=mysql_connect("localhost","root","") or die('matek');
  mysql_select_db("smsd",$connection) or die('mati');
  $tujuan=$_POST['DestinationNumber'];
  $pesan=$_POST['TextDecoded'];
  /*echo $telp;
  /echo $pesan;
*/
///————————mulai script——————-
$query3 = "INSERT INTO outbox (DestinationNumber,TextDecoded) VALUES ('$tujuan','$pesan')";
mysql_query($query3,$connection) or die('ketam'.mysql_error());

?>
