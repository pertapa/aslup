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
			<div id="board-kiri"></div>
			<div id="board-tengah">
				<form name="FORM1" action="design2.php" method="post" onchange="cekharga()">
				
				<table width="100%" border="0" cellspacing="3" cellpadding="2">
  
  <tr>
    <td width="4%">&nbsp;</td>
    <td width="19%">Jenis Pulsa </td>
    <td width="35%"><label>
      <!-- <select name="select" style="width:140px; color:#fff; font-weight:bold">
	   <option >Pilih Operator</option>
	  <option style="color:#4698CA;">Simpati</option>
	  	  <option style="color:#4698CA;">AS</option>
		  	  <option style="color:#4698CA;">Mentari</option>
			  <option style="color:#4698CA;">XL</option>
      </select> --><SCRIPT ID="example1">
var RegoOperator = new DynamicOptionList();
RegoOperator.addDependentFields("operator","rego");
RegoOperator.forValue("Pilih Operator").addOptions("Pilih Harga");
RegoOperator.forValue("simpati").addOptions("Pilih Harga","5000","10000","20000","50000","100000");
RegoOperator.forValue("AS").addOptions("Pilih Harga","5000","10000","20000","50000","100000");
RegoOperator.forValue("mentari").addOptions("Pilih Harga","5000","10000","20000","25000","50000","100000");
RegoOperator.forValue("im").addOptions("Pilih Harga","5000","10000","25000","50000","100000");
RegoOperator.forValue("xl").addOptions("Pilih Harga","5000","10000","25000","50000","100000");
RegoOperator.forValue("xlx").addOptions("Pilih Harga","10000","50000","100000");
RegoOperator.forValue("axis").addOptions("Pilih Harga","5000","10000","25000","50000","100000");
RegoOperator.forValue("three").addOptions("Pilih Harga","5000","10000","20000","30000","50000","100000");
RegoOperator.forValue("esia").addOptions("Pilih Harga","1000","5000","10000","20000","25000","50000");
RegoOperator.forValue("flexi").addOptions("Pilih Harga","5000","10000","20000","50000","100000","150000");
RegoOperator.forValue("smart").addOptions("Pilih Harga","5000","10000","20000","50000","100000");
RegoOperator.forValue("starone").addOptions("Pilih Harga","10000","25000","50000","100000");
RegoOperator.forValue("fren").addOptions("Pilih Harga","10000","25000","50000","100000");
RegoOperator.forValue("hepi").addOptions("Pilih Harga","5000","10000","25000","50000","100000");
RegoOperator.forValue("ceria").addOptions("Pilih Harga","5000","10000","20000","50000","100000");

RegoOperator.forValue("Pilih Operator").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("simpati").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("AS").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("mentari").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("im").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("xl").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("xlx").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("axis").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("three").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("esia").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("flexi").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("smart").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("starone").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("fren").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("hepi").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("ceria").setDefaultOptions("Pilih Harga");


RegoOperator.selectFirstOption = false;
</SCRIPT><select name="operator" style="width:140px; color:#1F82C3; font-weight:bold" >
<option value="Pilih Operator">Pilih Operator</option>
<option value="simpati">Simpati</option>
<option value="AS">AS</option>
<option value="mentari">Mentari</option>
<option value="im">IM3</option>
<option value="xl">XL</option>
<option value="xlx">XL extra</option>
<option value="axis">Axis</option>
<option value="three">Three</option>
<option value="esia">Esia</option>
<option value="flexi">Flexi</option>
<option value="smart">Smart</option>
<option value="starone">Starone</option>
<option value="fren">Fren</option>
<option value="hepi">Hepi</option>
<option value="ceria">Ceria</option>

</select>
    </label></td>
    <td width="42%" rowspan="8" align="center" valign="middle"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td><span style="font-weight:normal; font-size:14px;">&nbsp;&nbsp;Pembayaran menggunakan</span> </td>
      </tr>
      <tr>
        <td><img src="images/lr.jpg" /></td>
      </tr>
      <tr>
        <td><a href="http://www.libertyreserve.com/"></a></td>
      </tr>
      <tr>
        <td><img src="images/help.jpg" width="181" height="78" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><select name="rego" onchange="cekharga()">
<script>regionState.printOptions("STATE1")</script>
</select ></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Kode</td>
    <td><label>
        <input name="kode" type="text" id="kode">
    </label></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>Harga</td>
    <td> 
      <input type="text" name="harga" id="harga" readonly> 
    <span class="style2">IDR</span></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td>   <input type="text" name="lr_amnt" id="dolar" readonly />
   <span class="style2"> USD</span></td>
    </tr>
  <tr>
    <td>&nbsp;</td>
    <td>No.HP tujuan </td>
    <td><input name="tujuan" type="text" id="tujuan" />
	<input type="hidden" name="akun" value="<?=rand(100,999)?>" />
	<input type="hidden" name="lr_acc" value="U3068418" /> 
          <input type="hidden" name="lr_currency" value="LRUSD" /> <input type="hidden" name="lr_comments" value="Pulsa Online" /> 
          <input type="hidden" name="lr_merchant_ref" value="OID_000001" /> 
		  
          <!-- urls -->          </td>
    </tr>

  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td><label>
      <input type="submit" name="Submit" onsubmit="validasi()" value="Beli Pulsa" style="background:#1F82C3; color:#fff; font-weight:bold; font-size:16px; width:100px; " />
    </label></td>
    </tr>
</table>
				</form>
<? include "bca.php"; ?>

<script language="javascript">

var kurs=<?=$duit_dollar?>;
var kurs2=kurs.toFixed(0);
var dolar=kurs2-600;
function validasi()
{
 if (document.vocer.operator.value=="")
 {
 	alert("data harus lengkap");
 	return false;
 }
}
function cekharga()
{
	formobj=document.FORM1;
	//simpati
	if((formobj.operator.value=="Pilih Operator")&&(formobj.rego.value=="Pilih Harga"))
        {
                var nilai="";
                var nilai_lr=0;
                document.FORM1.kode.value="";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }
 
	else if((formobj.operator.value=="simpati")&&(formobj.rego.value=="Pilih Harga"))
        {
                var nilai="";
                var nilai_lr=0;
                document.FORM1.kode.value="";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	else if ((formobj.operator.value=="simpati")&&(formobj.rego.value=="5000"))
	{
		var nilai=5500;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="NS5";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	} 
	else if((formobj.operator.value=="simpati")&&(formobj.rego.value=="10000"))
	{
		var nilai=10000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="NS10";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="simpati")&&(formobj.rego.value=="20000"))
	{
		var nilai=20000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="NS20";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="simpati")&&(formobj.rego.value=="50000"))
	{
		var nilai=50000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="NS50";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if ((formobj.operator.value=="simpati")&&(formobj.rego.value=="100000"))
        {
                var nilai=99000;
                var nilai_lr=nilai/dolar;
                document.FORM1.kode.value="NS100";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	
	//AS
	 else if((formobj.operator.value=="AS")&&(formobj.rego.value=="Pilih Harga"))
        {
                var nilai="";
                var nilai_lr=0;
                document.FORM1.kode.value="";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	else if ((formobj.operator.value=="AS")&&(formobj.rego.value=="5000"))
	{
		var nilai=5500;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="NA5";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai/dolar;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	} else if	((formobj.operator.value=="AS")&&(formobj.rego.value=="10000"))
	{
		var nilai=10000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="NA10";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai/dolar;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="AS")&&(formobj.rego.value=="20000"))
	{
		var nilai=20000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="NA20";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="AS")&&(formobj.rego.value=="50000"))
	{
		var nilai=50000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="NA50";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if ((formobj.operator.value=="AS")&&(formobj.rego.value=="100000"))
        {
                var nilai=99000;
                var nilai_lr=nilai/dolar;
                document.FORM1.kode.value="NA100";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	
	//Mentari
	 else if((formobj.operator.value=="mentari")&&(formobj.rego.value=="Pilih Harga"))
        {
                var nilai="";
                var nilai_lr=0;
                document.FORM1.kode.value="";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }
	else if ((formobj.operator.value=="mentari")&&(formobj.rego.value=="5000"))
        {
                var nilai=5500;
                var nilai_lr=nilai/dolar;
                document.FORM1.kode.value="M5";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	else if	((formobj.operator.value=="mentari")&&(formobj.rego.value=="10000"))
	{
		var nilai=10000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="M10";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="mentari")&&(formobj.rego.value=="20000"))
	{
		var nilai=20000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="M20";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="mentari")&&(formobj.rego.value=="25000"))
	{
		var nilai=25000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="M25";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="mentari")&&(formobj.rego.value=="50000"))
	{
		var nilai=50000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="M50";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="mentari")&&(formobj.rego.value=="100000"))
	{
		var nilai=99000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="M100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//IM3
	else if((formobj.operator.value=="im")&&(formobj.rego.value=="Pilih Harga"))
        {
                var nilai="";
                var nilai_lr=0;
                document.FORM1.kode.value="";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	else if	((formobj.operator.value=="im")&&(formobj.rego.value=="5000"))
	{
		var nilai=5500;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="IR5";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="im")&&(formobj.rego.value=="10000"))
	{
		var nilai=10000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="I10";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="im")&&(formobj.rego.value=="20000"))
	{
		var nilai=20000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="I20";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="im")&&(formobj.rego.value=="25000"))
	{
		var nilai=25000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="I25";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="im")&&(formobj.rego.value=="50000"))
	{
		var nilai=50000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="I50";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="im")&&(formobj.rego.value=="100000"))
	{
		var nilai=99000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="I100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//XL
	else if((formobj.operator.value=="xl")&&(formobj.rego.value=="Pilih Harga"))
        {
                var nilai="";
                var nilai_lr=0;
                document.FORM1.kode.value="";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	else if	((formobj.operator.value=="xl")&&(formobj.rego.value=="5000"))
	{
		var nilai=5500;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="B5";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="xl")&&(formobj.rego.value=="10000"))
	{
		var nilai=10000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="B10";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="xl")&&(formobj.rego.value=="25000"))
	{
		var nilai=25000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="B25";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="xl")&&(formobj.rego.value=="50000"))
	{
		var nilai=50000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="B50";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="xl")&&(formobj.rego.value=="100000"))
	{
		var nilai=99000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="B100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	//xl extra
	else if((formobj.operator.value=="xlx")&&(formobj.rego.value=="Pilih Harga"))
        {
                var nilai="";
                var nilai_lr=0;
                document.FORM1.kode.value="";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	else if ((formobj.operator.value=="xlx")&&(formobj.rego.value=="10000"))
        {
                var nilai=10000;
                var nilai_lr=nilai/dolar;
                document.FORM1.kode.value="BX10";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }
	 else if ((formobj.operator.value=="xlx")&&(formobj.rego.value=="50000"))
        {
                var nilai=50000;
                var nilai_lr=nilai/dolar;
                document.FORM1.kode.value="BX50";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }
	 else if ((formobj.operator.value=="xlx")&&(formobj.rego.value=="100000"))
        {
                var nilai=99000;
                var nilai_lr=nilai/dolar;
                document.FORM1.kode.value="BX100";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }



	//AXIS
	else if((formobj.operator.value=="axis")&&(formobj.rego.value=="Pilih Harga"))
        {
                var nilai="";
                var nilai_lr=0;
                document.FORM1.kode.value="";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	else if	((formobj.operator.value=="axis")&&(formobj.rego.value=="5000"))
	{
		var nilai=5500;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="AX5";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="axis")&&(formobj.rego.value=="10000"))
	{
		var nilai=10000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="AX10";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="axis")&&(formobj.rego.value=="25000"))
	{
		var nilai=25000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="AX25";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="axis")&&(formobj.rego.value=="50000"))
	{
		var nilai=50000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="AX50";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="axis")&&(formobj.rego.value=="100000"))
	{
		var nilai=99000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="AX100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//Three
	else if((formobj.operator.value=="three")&&(formobj.rego.value=="Pilih Harga"))
        {
                var nilai="";
                var nilai_lr=0;
                document.FORM1.kode.value="";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	else if	((formobj.operator.value=="three")&&(formobj.rego.value=="5000"))
	{
		var nilai=5500;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="T5";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="three")&&(formobj.rego.value=="10000"))
	{
		var nilai=10000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="T10";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="three")&&(formobj.rego.value=="20000"))
	{
		var nilai=20000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="T20";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	 else if ((formobj.operator.value=="three")&&(formobj.rego.value=="30000"))
        {
                var nilai=30000;
                var nilai_lr=nilai/dolar;
                document.FORM1.kode.value="T30";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	else if	((formobj.operator.value=="three")&&(formobj.rego.value=="50000"))
	{
		var nilai=50000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="T50";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="three")&&(formobj.rego.value=="100000"))
	{
		var nilai=99000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="T100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//Esia
	else if((formobj.operator.value=="esia")&&(formobj.rego.value=="Pilih Harga"))
        {
                var nilai="";
                var nilai_lr=0;
                document.FORM1.kode.value="";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	else if	((formobj.operator.value=="esia")&&(formobj.rego.value=="1000"))
	{
		var nilai=1000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="E1";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="esia")&&(formobj.rego.value=="5000"))
	{
		var nilai=5500;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="E5";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="esia")&&(formobj.rego.value=="10000"))
	{
		var nilai=10000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="E10";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="esia")&&(formobj.rego.value=="20000"))
	{
		var nilai=20000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="E20";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="esia")&&(formobj.rego.value=="25000"))
	{
		var nilai=25000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="E25";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="esia")&&(formobj.rego.value=="50000"))
	{
		var nilai=50000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="E50";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="esia")&&(formobj.rego.value=="100000"))
	{
		var nilai=99000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="E100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//Flexi
	else if((formobj.operator.value=="flexi")&&(formobj.rego.value=="Pilih Harga"))
        {
                var nilai="";
                var nilai_lr=0;
                document.FORM1.kode.value="";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	else if	((formobj.operator.value=="flexi")&&(formobj.rego.value=="5000"))
	{
		var nilai=5500;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="F5";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="flexi")&&(formobj.rego.value=="10000"))
	{
		var nilai=10000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="F10";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="flexi")&&(formobj.rego.value=="20000"))
	{
		var nilai=20000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="F20";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="flexi")&&(formobj.rego.value=="50000"))
	{
		var nilai=50000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="F50";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="flexi")&&(formobj.rego.value=="100000"))
	{
		var nilai=99000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="F100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="flexi")&&(formobj.rego.value=="150000"))
	{
		var nilai=145000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="F150";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//smart
	else if((formobj.operator.value=="smart")&&(formobj.rego.value=="Pilih Harga"))
        {
                var nilai="";
                var nilai_lr=0;
                document.FORM1.kode.value="";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	else if	((formobj.operator.value=="smart")&&(formobj.rego.value=="5000"))
	{
		var nilai=5500;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="SM5";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="smart")&&(formobj.rego.value=="10000"))
	{
		var nilai=10000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="SM10";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="smart")&&(formobj.rego.value=="20000"))
	{
		var nilai=20000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="SM20";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="smart")&&(formobj.rego.value=="50000"))
	{
		var nilai=50000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="SM50";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="smart")&&(formobj.rego.value=="100000"))
	{
		var nilai=99000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="SM100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//starone
	else if((formobj.operator.value=="starone")&&(formobj.rego.value=="Pilih Harga"))
        {
                var nilai="";
                var nilai_lr=0;
                document.FORM1.kode.value="";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	else if	((formobj.operator.value=="starone")&&(formobj.rego.value=="10000"))
	{
		var nilai=10000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="O10";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if ((formobj.operator.value=="starone")&&(formobj.rego.value=="25000"))
        {
                var nilai=25000;
                var nilai_lr=nilai/dolar;
                document.FORM1.kode.value="O25";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	else if	((formobj.operator.value=="starone")&&(formobj.rego.value=="50000"))
	{
		var nilai=50000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="O50";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="starone")&&(formobj.rego.value=="100000"))
	{
		var nilai=99000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="O100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//FREN
	else if((formobj.operator.value=="fren")&&(formobj.rego.value=="Pilih Harga"))
        {
                var nilai="";
                var nilai_lr=0;
                document.FORM1.kode.value="";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	else if	((formobj.operator.value=="fren")&&(formobj.rego.value=="10000"))
	{
		var nilai=10000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="FR10";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="fren")&&(formobj.rego.value=="25000"))
	{
		var nilai=25000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="FR25";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="fren")&&(formobj.rego.value=="50000"))
	{
		var nilai=50000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="FR50";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="fren")&&(formobj.rego.value=="100000"))
	{
		var nilai=99000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="FR100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//hepi
	else if((formobj.operator.value=="hepi")&&(formobj.rego.value=="Pilih Harga"))
        {
                var nilai="";
                var nilai_lr=0;
                document.FORM1.kode.value="";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	else if	((formobj.operator.value=="hepi")&&(formobj.rego.value=="5000"))
	{
		var nilai=5500;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="H5";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="hepi")&&(formobj.rego.value=="10000"))
	{
		var nilai=10000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="H10";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="hepi")&&(formobj.rego.value=="25000"))
	{
		var nilai=25000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="H25";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="hepi")&&(formobj.rego.value=="50000"))
	{
		var nilai=50000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="H50";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="hepi")&&(formobj.rego.value=="100000"))
	{
		var nilai=99000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="H100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	//ceria 
	else if((formobj.operator.value=="ceria")&&(formobj.rego.value=="Pilih Harga"))
        {
                var nilai="";
                var nilai_lr=0;
                document.FORM1.kode.value="";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }

	else if ((formobj.operator.value=="ceria")&&(formobj.rego.value=="5000"))
        {
                var nilai=5500;
                var nilai_lr=nilai/dolar;
                document.FORM1.kode.value="C5";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }
 	else if ((formobj.operator.value=="ceria")&&(formobj.rego.value=="10000"))
        {
                var nilai=10000;
                var nilai_lr=nilai/dolar;
                document.FORM1.kode.value="C10";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }
	else if ((formobj.operator.value=="ceria")&&(formobj.rego.value=="20000"))
        {
                var nilai=20000;
                var nilai_lr=nilai/dolar;
                document.FORM1.kode.value="C20";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }
	else if ((formobj.operator.value=="ceria")&&(formobj.rego.value=="50000"))
        {
                var nilai=50000;
                var nilai_lr=nilai/dolar;
                document.FORM1.kode.value="C50";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }
	else if ((formobj.operator.value=="ceria")&&(formobj.rego.value=="100000"))
        {
                var nilai=99000;
                var nilai_lr=nilai/dolar;
                document.FORM1.kode.value="C100";
                document.FORM1.harga.value=nilai;
                document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
                return false;
        }
}

</script>
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
