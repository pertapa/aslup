<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="a.css" rel="stylesheet" type="text/css" />
<SCRIPT SRC="DynamicOptionList.js"></SCRIPT>
</head>

<body onLoad="initDynamicOptionLists();"><center>
<?


?>
<form name="FORM1" action="otentik.php" method="post" onchange="cekharga()">
    <table width="316" border="0">
      <tr> 
        <th width="46" align="left" scope="row"><label>Jenis</label></th>
        <th width="20" scope="row">&nbsp;</th>
        <td width="117" align="center"><SCRIPT ID="example1">
var RegoOperator = new DynamicOptionList();
RegoOperator.addDependentFields("operator","rego");
RegoOperator.forValue("Pilih Operator").addOptions("Pilih Harga");
RegoOperator.forValue("simpati").addOptions("Pilih Harga","5000","10000","20000","50000");
RegoOperator.forValue("AS").addOptions("Pilih Harga","5000","10000","20000","50000");
RegoOperator.forValue("mentari").addOptions("Pilih Harga","10000","20000","25000","30000","50000","100000");
RegoOperator.forValue("im").addOptions("Pilih Harga","5000","10000","20000","25000","50000","100000");
RegoOperator.forValue("xl").addOptions("Pilih Harga","5000","10000","25000","30000","50000","100000");
RegoOperator.forValue("axis").addOptions("Pilih Harga","5000","10000","25000","30000","50000","100000");
RegoOperator.forValue("three").addOptions("Pilih Harga","4000","5000","9000","10000","19000","20000","30000","50000","100000");
RegoOperator.forValue("esia").addOptions("Pilih Harga","1000","5000","10000","17000","19000","20000","25000","35000","50000","100000");
RegoOperator.forValue("flexi").addOptions("Pilih Harga","5000","10000","20000","50000","100000","150000");
RegoOperator.forValue("smart").addOptions("Pilih Harga","5000","10000","20000","50000","100000");
RegoOperator.forValue("starone").addOptions("Pilih Harga","10000","20000","50000","100000");
RegoOperator.forValue("fren").addOptions("Pilih Harga","10000","25000","50000","100000");
RegoOperator.forValue("hepi").addOptions("Pilih Harga","5000","10000","25000","30000","50000","100000");

RegoOperator.forValue("Pilih Operator").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("simpati").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("AS").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("mentari").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("im").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("xl").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("axis").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("three").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("esia").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("flexi").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("smart").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("starone").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("fren").setDefaultOptions("Pilih Harga");
RegoOperator.forValue("hepi").setDefaultOptions("Pilih Harga");

RegoOperator.selectFirstOption = false;
</SCRIPT>
<select name="operator"  >
<option value="Pilih Operator">Pilih Operator</option>
<option value="simpati">Simpati</option>
<option value="AS">AS</option>
<option value="mentari">Mentari</option>
<option value="im">IM3</option>
<option value="xl">XL</option>
<option value="axis">Axis</option>
<option value="three">Three</option>
<option value="esia">Esia</option>
<option value="flexi">Flexi</option>
<option value="smart">Smart</option>
<option value="starone">Starone</option>
<option value="fren">Fren</option>
<option value="hepi">Hepi</option>
</select>
</td>
        <td width="115" align="center"><select name="rego">
<script>regionState.printOptions("STATE1")</script>
</select></td>
      </tr>
      <tr> 
        <th scope="row">Kode</th>
        <th scope="row">&nbsp;</th>
        <td colspan="2"><label> <div align="center"> 
            <input name="kode" type="text" id="kode" readonly="">
          </div></label>
        </td>
      </tr>
      <tr> 
        <th rowspan="2" scope="row"><label>Harga</label></th>
        <th scope="row">Rp</th>
        <th colspan="2" scope="row"><label> 
          <input type="text" name="harga" id="harga" readonly>
          </label></th>
      </tr>
      <tr> 
        <th scope="row">$</th>
        <th colspan="2" scope="row"><label> 
          <input type="text" name="lr_amnt" id="dolar" readonly />
          </label></th>
      </tr>
      <tr> 
        <th scope="row">Tujuan</th>
        <th scope="row">&nbsp;</th>
        <th colspan="2" scope="row"><input name="tujuan" type="text" id="tujuan" /></th>
      </tr>
      <tr> 
        <th colspan="2" scope="row">&nbsp;</th>
        <th colspan="2" scope="row"> <input type="hidden" name="order_id" value="<?=rand(100,999)?>" /></th>
      </tr>
      <tr> 
        <th colspan="4" scope="row"><input type="hidden" name="lr_acc" value="U1521213" /> 
          <input type="hidden" name="lr_currency" value="LRUSD" /> <input type="hidden" name="lr_comments" value="Pulsa Online" /> 
          <input type="hidden" name="lr_merchant_ref" value="OID_000001" /> 
		  
          <!-- urls -->
          <input type="submit" name="Submit" value="Kirim" onsubmit="validasi()" /></th>
      </tr>
    </table>
</form>
<? include "bca.php";?>
<script language="javascript">
var kurs=<?=$duit_dollar?>;
var kurs2=kurs.toFixed(0);
var dolar=kurs2-700;
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
	if ((formobj.operator.value=="simpati")&&(formobj.rego.value=="5000"))
	{
		var nilai=5000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="S5";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	} else if	((formobj.operator.value=="simpati")&&(formobj.rego.value=="10000"))
	{
		var nilai=10000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="S10";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="simpati")&&(formobj.rego.value=="20000"))
	{
		var nilai=20000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="S20";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="simpati")&&(formobj.rego.value=="50000"))
	{
		var nilai=50000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="S50";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//AS
	else if ((formobj.operator.value=="AS")&&(formobj.rego.value=="5000"))
	{
		var nilai=5000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="AS5";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai/dolar;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	} else if	((formobj.operator.value=="AS")&&(formobj.rego.value=="10000"))
	{
		var nilai=10000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="AS10";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai/dolar;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="AS")&&(formobj.rego.value=="20000"))
	{
		var nilai=20000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="AS20";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="AS")&&(formobj.rego.value=="50000"))
	{
		var nilai=50000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="AS50";
		document.FORM1.harga.value=nilai;
	document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//Mentari
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
	else if	((formobj.operator.value=="mentari")&&(formobj.rego.value=="30000"))
	{
		var nilai=30000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="M30";
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
		var nilai=100000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="M100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//IM3
	else if	((formobj.operator.value=="im")&&(formobj.rego.value=="5000"))
	{
		var nilai=5000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="I5";
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
		var nilai=100000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="I100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//XL
	else if	((formobj.operator.value=="xl")&&(formobj.rego.value=="5000"))
	{
		var nilai=5000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="X5";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="xl")&&(formobj.rego.value=="10000"))
	{
		var nilai=10000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="X10";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="xl")&&(formobj.rego.value=="25000"))
	{
		var nilai=25000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="X25";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="xl")&&(formobj.rego.value=="30000"))
	{
		var nilai=30000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="X30";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="xl")&&(formobj.rego.value=="50000"))
	{
		var nilai=50000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="X50";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="xl")&&(formobj.rego.value=="100000"))
	{
		var nilai=100000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="X100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//Axis
	else if	((formobj.operator.value=="axis")&&(formobj.rego.value=="5000"))
	{
		var nilai=5000;
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
	else if	((formobj.operator.value=="axis")&&(formobj.rego.value=="30000"))
	{
		var nilai=30000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="AX30";
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
		var nilai=100000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="AX100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//Three
	else if	((formobj.operator.value=="three")&&(formobj.rego.value=="4000"))
	{
		var nilai=4000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="T4";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="three")&&(formobj.rego.value=="5000"))
	{
		var nilai=5000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="T5";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="three")&&(formobj.rego.value=="9000"))
	{
		var nilai=9000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="T9";
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
	else if	((formobj.operator.value=="three")&&(formobj.rego.value=="19000"))
	{
		var nilai=19000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="T19";
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
	else if	((formobj.operator.value=="three")&&(formobj.rego.value=="30000"))
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
		var nilai=100000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="T100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//Esia
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
		var nilai=5000;
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
	else if	((formobj.operator.value=="esia")&&(formobj.rego.value=="17000"))
	{
		var nilai=17000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="E17";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="esia")&&(formobj.rego.value=="19000"))
	{
		var nilai=19000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="E19";
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
	else if	((formobj.operator.value=="esia")&&(formobj.rego.value=="35000"))
	{
		var nilai=35000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="E35";
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
		var nilai=100000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="E100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//Flexi
	else if	((formobj.operator.value=="flexi")&&(formobj.rego.value=="5000"))
	{
		var nilai=5000;
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
		var nilai=100000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="F100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="flexi")&&(formobj.rego.value=="150000"))
	{
		var nilai=150000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="F150";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//smart
	else if	((formobj.operator.value=="smart")&&(formobj.rego.value=="5000"))
	{
		var nilai=5000;
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
		var nilai=100000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="SM100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//starone
	else if	((formobj.operator.value=="starone")&&(formobj.rego.value=="10000"))
	{
		var nilai=10000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="ST10";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="starone")&&(formobj.rego.value=="20000"))
	{
		var nilai=20000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="ST20";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="starone")&&(formobj.rego.value=="50000"))
	{
		var nilai=50000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="ST50";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	else if	((formobj.operator.value=="starone")&&(formobj.rego.value=="100000"))
	{
		var nilai=100000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="ST100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//FREN
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
		var nilai=100000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="FR100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
	
	//hepi
	else if	((formobj.operator.value=="hepi")&&(formobj.rego.value=="5000"))
	{
		var nilai=5000;
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
	else if	((formobj.operator.value=="hepi")&&(formobj.rego.value=="30000"))
	{
		var nilai=30000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="H30";
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
		var nilai=100000;
		var nilai_lr=nilai/dolar;
		document.FORM1.kode.value="H100";
		document.FORM1.harga.value=nilai;
		document.FORM1.lr_amnt.value=nilai_lr.toFixed(2);
		return false;
	}
}

</script>

<i> * xl, fren dan hepi voucher 20.000 tidak tersedia yang tersedia voucer seharga 25.000</i>
</center></body>
</html>
