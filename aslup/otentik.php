<?php
		$hostmysql = "localhost";
		$username = "root";
		$password = "root";
		$database = "smsd";

		 $conn = mysql_connect("$hostmysql","$username","$password");
       if($_POST){
	 	 $operator = $_POST['operator'];	
         $kode = $_POST['kode'];
         $harga = $_POST['harga'];
         $lr_amnt = $_POST['lr_amnt'];
         $tujuan = $_POST['tujuan'];
		 $akun=$_POST['akun'];
		 if(empty($kode) || empty($harga) || empty($lr_amnt) || empty($tujuan) || empty($akun)){
             echo "data tidak komplet";
         }else{
             //prosess data
            //echo "data komplet <br>";
			$hasil= $kode . " " . $tujuan;
			echo "Operator :  <b>$operator</b><br>";
			echo "Harga    :  <b> USD $lr_amnt</b><br>";
			echo "Tujuan   :  <b>$tujuan</b><br>";
			echo "Order    :  <b>$akun</b><br>";
			
			echo "<form name=\"kirim\" action=\"https://sci.libertyreserve.com\" method=\"post\">";
			echo "<input type=\"hidden\" name=\"lr_acc\" value=\"U3068418\">";
			echo "<input type=\"hidden\" name=\"lr_store\" value=\"pulsa store\">";
      		echo "<input type=\"hidden\" name=\"lr_currency\" value=\"LRUSD\">";
            echo "<input type=\"hidden\" name=\"lr_comments\" value=\"Pulsa Online\">";
            echo "<input type=\"hidden\" name=\"lr_merchant_ref\" value=\"OID_000001\">";
			echo "<input type=\"hidden\" name=\"lr_amnt\" value=\"".$lr_amnt."\">";
			echo "<input type=\"hidden\" name=\"order_id\" value=\"".$akun."\">";
			echo "<input type=\"submit\" name=\"submit\"value=\"Kirim\">";
			echo "<input type=\"hidden\" name=\"lr_success_url\" value=\"http://localhost/aslup/incl.php\">";
      		echo "<input type=\"hidden\" name=\"lr_fail_url\" value=\"http://localhost/aslup/gagal.php\">";
        	echo "</form>";
			mysql_query("INSERT INTO smsd.smentara(Coding,DestinationNumber,TextDecoded,akun) VALUES('Default_No_Compression','081555656088','".$hasil."','".$akun."')")
			or die(mysql_error());  
         }
     }
?>
