<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Pulsawae - Isi pulsa mudah dan cepat tanpa registrasi</title>
<SCRIPT SRC="DynamicOptionList.js"></SCRIPT>

<link rel="stylesheet" href="style.css" type="text/css" />

<style type="text/css">
<!--
.style2 {font-size: 12px;}
-->
</style>
</head>

<body onLoad="initDynamicOptionLists();">
<div id="wraper">
	<div id="atasan">
		<div id="atasan-kiri">
			<div id="logo"><img src="images/logo.png" /></div>
		</div>
		<div id="atasan-kanan">
			<div id="navigasi-atas"><a href="#" class="link-ndukur">Home</a> &nbsp;&nbsp;<span class="pembatas">|</span>&nbsp;
			<a href="#" class="link-ndukur">Tentang kami</a>&nbsp;&nbsp;<span class="pembatas">|</span>&nbsp;&nbsp;
			<a href="#" class="link-ndukur">Layanan</a>&nbsp;&nbsp;<span class="pembatas">|</span>&nbsp;&nbsp;
			<a href="#" class="link-ndukur">Help</a>&nbsp;&nbsp;<span class="pembatas">|</span>&nbsp;&nbsp;
			<a href="#" class="link-ndukur">Kontak kami</a></div>
		</div>
	</div>
	<div class="clear"></div>
	
	<div id="bg-atas">
		<div id="sub-judul">
		<span class="font-sub-judul">Isi pulsa mudah dan cepat<br /> tanpa registrasi</span>
		</div>
	</div>
	<div class="clear"></div>
	<div id="bawah-bg">
		<div id="bawah-bg-kiri"></div>
		<div id="bawah-bg-tengah"></div>
		<div id="bawah-bg-kanan"></div>
	</div>
	
	<div id="bg-repeat">
		<div id="kiwo"></div>
		<div id="tengah">
			<div id="board-kiri"></div><div id="board-tengah" style="vertical-align:middle">
		<span class="font-sub-judul" style="color:#fff; margin-left:70px;">Apakah sudah benar?</span>

		<div style="clear:both"></div>
			<div style="background:#1F82C3; -moz-border-radius: 1.2em; border-radius: 12px; margin-top:20px; padding:10px; width:50%; float:left; margin-left:50px; ">
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
		     echo "<span style='font-size:12px; color:#fff; font-weight:bold;font-family:arial;letter-spacing:0px;'>";
             echo "Silahkan untuk melengkapi data terlebih dahulu!";
			 echo "</span>&nbsp;&nbsp;";
			 echo "<input type=\"button\" name=\"submit\"value=\"Back\" onClick='javascript:history.back()' style=\"background:#124A85; color:#fff; font-weight:bold; font-size:16px; width:70px;\"> &nbsp;&nbsp;";
		 } elseif(!is_numeric($tujuan)) {
		 		     echo "<span style='font-size:12px; color:#fff; font-family:arial;font-weight:bold;letter-spacing:0px;'>";
		 	echo "Data No.Tujuan harus bernilai numeric!";
			echo "</span>&nbsp;&nbsp;";
			echo "<input type=\"button\" name=\"submit\"value=\"Back\" onClick='javascript:history.back()' style=\"background:#124A85; color:#fff; font-weight:bold; font-size:16px; width:70px;\"> &nbsp;&nbsp;";
         }else{
             //prosess data
            //echo "data komplet <br>";
			$hasil= $kode . " " . $tujuan;
		
			echo "<table align=\"center\"  border=0>";
			echo "<tr>";
			echo "<td width:50%>Operator</td><td width:50%> :  <b>$operator</b></td>";
			echo "</tr>";
			
			echo "<tr>";
			if($_POST['payment_gw']==2) {
			echo "<td>Harga</td><td>:<b> IDR $harga</b></td>";
			} else {
			echo "<td>Harga</td><td>:<b> USD $lr_amnt</b></td>";
			}
			echo "</tr>";
			
			echo "<tr>";
			echo "<td>Tujuan   </td><td>:  <b>$tujuan</b></td>";
			echo "</tr>";
			
			echo "<tr>";
			echo "<td>Order</td><td>: <b>$akun</b></td>";
			echo "</tr>";
			

			echo "</table>";
			
			if($_POST['payment_gw']==2) {
			echo "<form method=post action=https://ipaymu.com/login/process.htm>";
			echo "<input type=hidden name=product value=\"Pulsawae\">";
			echo "<input type=hidden name=action value=\"produk\">";
			echo "<input type=hidden name=member value=\"agungpuji\">";
			echo "<input type=hidden name=price value=\"$harga\">";
			echo "<input type=hidden name=quantity value=1>";
			echo "<input type=hidden name=comments value=\"$operator - $harga\">";
			echo "<input type=hidden name=ureturn value=\"http://localhost/aslup/incl.php\">";
			echo "<input type=\"button\" name=\"submit\"value=\"Back\" onClick='javascript:history.back()' style=\"background:#124A85; color:#fff; font-weight:bold; font-size:16px; width:70px;\"> &nbsp;&nbsp;";
			echo "<input type=\"submit\" name=\"submit\"value=\"Kirim\" style=\"background:#124A85; color:#fff; font-weight:bold; font-size:16px; width:80px;\">";
			//echo "<input type=image src=\"https://ipaymu.com/login/images/buttons/shopcart/01.png\">";
			echo "</form>";
			} else {
			echo "<form name=\"kirim\" action=\"https://sci.libertyreserve.com\" method=\"post\">";
			echo "<table align=\"center\"><tr><td>";
			echo "<input type=\"hidden\" name=\"lr_acc\" value=\"U3068418\">";
			echo "<input type=\"hidden\" name=\"lr_store\" value=\"pulsa store\">";
      		echo "<input type=\"hidden\" name=\"lr_currency\" value=\"LRUSD\">";
            echo "<input type=\"hidden\" name=\"lr_comments\" value=\"Pulsa Online\">";
            echo "<input type=\"hidden\" name=\"lr_merchant_ref\" value=\"OID_000001\">";
			echo "<input type=\"hidden\" name=\"lr_amnt\" value=\"".$lr_amnt."\">";
			echo "<input type=\"hidden\" name=\"order_id\" value=\"".$akun."\">";
			echo "<input type=\"button\" name=\"submit\"value=\"Back\" onClick='javascript:history.back()' style=\"background:#124A85; color:#fff; font-weight:bold; font-size:16px; width:70px;\"> &nbsp;&nbsp;";
			echo "<input type=\"submit\" name=\"submit\"value=\"Kirim\" style=\"background:#124A85; color:#fff; font-weight:bold; font-size:16px; width:80px;\">";
			echo "<input type=\"hidden\" name=\"lr_success_url\" value=\"http://localhost/aslup/incl.php\">";
      		echo "<input type=\"hidden\" name=\"lr_fail_url\" value=\"http://localhost/aslup/gagal.php\">";
        	echo "</td></tr></table>";
			echo "</form>";
			mysql_query("INSERT INTO smsd.smentara(Coding,DestinationNumber,TextDecoded,akun) VALUES('Default_No_Compression','081555656088','".$hasil."','".$akun."')")
			or die(mysql_error());  
			}
         }
     }
?>
				<? if(isset($_POST['tujuan'])) { } else {?><span style="font-size:12px; color:#fff; font-family:arial;letter-spacing:0px;"><center>Silahkan cek terlebih dahulu operator,harga dan nomor tujuan, kemudian klik tombol <b>Kirim</b> jika benar.</center></span><? }?>
<? include "bca.php"; ?>
</div>
<div style="float:left;width:25%;vertical-align:top; margin-top:-9px;border:0px solid red; z-index:2px; position:relative"><img src="images/icon-sent.png"/></div>
			</div>
			
			<div id="board-kanan"></div>
		</div>
		<div id="tengen"></div>
		
		<div class="clear"></div>		
		<div id="kiwo2"></div>
		<div id="tengah2"></div>
		<div id="tengen2"></div>
		
		<div class="clear"></div>
		<div id="bawah-kiri"></div>
		<div id="bawah-tengah"></div>
		<div id="bawah-kanan"></div>
		
<div class="clear"></div>
<div id="prvider-kiri"></div>
<div id="provider-tengah"></div>
<div id="provider-kanan"></div>
	
		
<div class="clear"></div>
<div id="list-kiri"></div>
<div id="list-tengah"></div>
<div id="list-kanan"></div>
		

		
		<div class="clear"></div>
		<div id="footer-kiri"></div>
		<div id="footer-tengah">
			<div id="bawah-footer-kiri"><img src="images/ym.jpg" style="margin-left:10px;margin-top:5px;" /><br />
			<span style="margin-left:100px;"><!-- <a href="ymsgr:sendim?pulsawae_online"><img src="http://mail.opi.yahoo.com/online?u=pulsawae_online&m=g&t=1" alt="Pulsawae Online Support" border="0" title="Pulsawae Online Support" /></a>--></span>
</div>
			<div id="bawah-footer-nat"></div>
			<div id="bawah-footer-kanan" style="padding-top:7px;">
				<div style="float:left; width:60%;">
					<span class="font-sub-judul">&nbsp;&nbsp;Sekilas info</span><br />
					<li>Kekuatan Bisnis MLM Pulsa Isi Ulang</li>
					<li>Bisnis Pulsa Paling Mudah</li>
					<li>Perkembangan Usaha Pulsa yang Menjanjikan</li>
				</div>
				<div style="float:left; width:5%; border-left:1px dotted #c0c0c0; height:100px;">&nbsp;</div>
				<div style="float:left; width:30%; padding-top:0px;">
					<span class="font-sub-judul" style="color:#F8C305">Kurs</span> <span style="font-family:arial; color:#F8C305; font-size:12px; font-weight:bold ">USD</span> <br />
					<table width="150" style="border:0px solid #F8C305;" cellpadding="0" cellspacing="0">
					<tr>
						<td width="66" align="center" bgcolor="#F8C305" style="color:#fff;font-size:14px;">Jual  </td>
						<td width="72" align="center" bgcolor="#F8C305" style="color:#Fff;font-size:14px;">Beli</td>
					</tr>
					<tr>
						<td align="center" bgcolor="#FA7307"><span  style="color:#fff; font-size:16px; font-weight:bold"><? echo str_replace(".00",",-",$duit_dollar);
?></span></td>
						<td align="center" bgcolor="#FA7307"><span  style="color:#fff; font-size:16px; font-weight:bold"><? echo str_replace(".00",",-",$duit_dollar_beli);?></td>
					</tr>
			
				  </table>
					<div style="font-family:arial; color:#333333; font-size:11px; margin-left:0px; margin-top:6px;"><i>Sumber BCA</i></div
				></div>
			</div>
		</div>
		<div id="footer-kanan"></div>
		
		<div class="clear"></div>
		<br />
		<center>
		<!-- <a href="#" class="link-ndukur">Home</a> &nbsp;&nbsp;<span class="pembatas">|</span>&nbsp;
			<a href="#" class="link-ndukur">Tentang kami</a>&nbsp;&nbsp;<span class="pembatas">|</span>&nbsp;&nbsp;
			<a href="#" class="link-ndukur">Layanan</a>&nbsp;&nbsp;<span class="pembatas">|</span>&nbsp;&nbsp;
			<a href="#" class="link-ndukur">Help</a>&nbsp;&nbsp;<span class="pembatas">|</span>&nbsp;&nbsp;
			<a href="#" class="link-ndukur">Kontak kami</a><br />-->
		<div style="font-family:arial; color:#1F82C2; font-size:13px;">&copy; 2011 Pulsawae all right reserved.<br />Best viewed in 1024 x 768 monitor resolution with Chrome and Firefox </div></center><br /><br /><br />
		
	</div>
	
</div>

<br />
</body>
</html>
