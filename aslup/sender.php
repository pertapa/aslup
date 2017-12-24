<?php
		//include "otentik.php";
		$hostmysql = "localhost";
		$username = "root";
		$password = "root";
		$database = "smsd";

		 $conn = mysql_connect("$hostmysql","$username","$password");
		 //if($_POST){
     	 //$operator = $_POST['operator'];	
         //$kode = $_POST['kode'];
         //$harga = $_POST['harga'];
         //$lr_amnt = $_POST['lr_amnt'];
         //$tujuan = $_POST['tujuan'];

         if(empty($kode) || empty($harga) || empty($lr_amnt) || empty($tujuan)){
             echo "data tidak komplet";
         }else{
             //prosess data
            //echo "data komplet <br>";
			$hasil= $kode . " " . $tujuan;
			//echo "$hasil";
			mysql_query("INSERT INTO smsd.outbox(Coding,DestinationNumber,TextDecoded) VALUES('Default_No_Compression','081555656088','".$hasil."')")
			or die(mysql_error());  
			echo "Operator :  <b>$operator</b><br>";
			echo "Harga    :  <b> USD $lr_amnt</b><br>";
			echo "Tujuan   :  <b>$tujuan</b>";
			
         }
     //}
?>
