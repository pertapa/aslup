<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<link href="a.css" rel="stylesheet" type="text/css" />
</head>

<body><center>
<?


?>
<form name="vocer" action="otentik.php" method="post" >
    <table width="273" border="0">
      <tr> 
        <th width="46" align="left" scope="row"><label>Jenis</label></th>
        <th width="6" scope="row">&nbsp;</th>
        <td width="87" align="center"><label> 
          <select name="operator" size="1"  onchange="cekharga()">
            <option selected="selected">operator</option>
            <option value="simpati">Simpati</option>
            <option value="as">As</option>
            <option value="mentari">Mentari</option>
            <option value="im">Im3</option>
            <option value="xl">XL</option>
            <option value="axis">Axis</option>
            <option value="three">Three</option>
            <option value="esia">Esia</option>
            <option value="flexi">Flexi</option>
            <option value="smart">Smart</option>
            <option value="starone">Starone</option>
            <option value="fren">Fren</option>
            <option value="hepi">Hepi</option>
            <option value="smart">Smart</option>
          </select>
          </label></td>
        <td width="116" align="center"><select name="rego"  onchange="cekharga()">
            <option>harga</option>
            <option value="sepuluh">10000</option>
            <option value="duapuluh">20000</option>
            <option value="limapuluh">50000</option>
            <option value="seratus">100000</option>
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
        <th scope="row">Akun LR</th>
        <th scope="row">&nbsp;</th>
        <th colspan="2" scope="row"><input type="text" name="akun" /></th>
      </tr>
      <tr> 
        <th colspan="4" scope="row"> <input type="hidden" name="lr_acc" value="U1521213" /> 
          <input type="hidden" name="lr_currency" value="LRUSD" /> <input type="hidden" name="lr_comments" value="Pulsa Online" /> 
          <input type="hidden" name="lr_merchant_ref" value="OID_000001" /> 
          <!-- urls -->
          <input type="submit" name="Submit" value="Kirim" onsubmit="validasi()" /></th>
      </tr>
    </table>
</form>

<script language="JavaScript">
var dolar=12000;
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
	formobj=document.vocer;
	if ((formobj.operator.value=="simpati")&&(formobj.rego.value=="sepuluh"))
	{
		document.vocer.kode.value="S10";
		document.vocer.harga.value=10500;
		document.vocer.lr_amnt.value=10500/dolar;
		return false;
	}
	else if	((formobj.operator.value=="simpati")&&(formobj.rego.value=="duapuluh"))
	{
		document.vocer.kode.value="S20";
		document.vocer.harga.value=20500;
		document.vocer.lr_amnt.value=20500/dolar;
		return false;
	}
	else if	((formobj.operator.value=="simpati")&&(formobj.rego.value=="limapuluh"))
	{
		document.vocer.kode.value="S50";
		document.vocer.harga.value=50000;
		document.vocer.lr_amnt.value=50000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="simpati")&&(formobj.rego.value=="seratus"))
	{
		document.vocer.kode.value="S100";
		document.vocer.harga.value=100000;
		document.vocer.lr_amnt.value=100000/dolar;
		return false;
	}
	else if ((formobj.operator.value=="as")&&(formobj.rego.value=="sepuluh"))
	{
		document.vocer.kode.value="AS10";
		document.vocer.harga.value=10500;
		document.vocer.lr_amnt.value=10500/dolar;
		return false;
	}
	else if	((formobj.operator.value=="as")&&(formobj.rego.value=="duapuluh"))
	{
		document.vocer.kode.value="AS20";
		document.vocer.harga.value=20500;
		document.vocer.lr_amnt.value=20500/dolar;
		return false;
	}
	else if	((formobj.operator.value=="as")&&(formobj.rego.value=="limapuluh"))
	{
		document.vocer.kode.value="AS50";
		document.vocer.harga.value=50000;
		document.vocer.lr_amnt.value=50000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="as")&&(formobj.rego.value=="seratus"))
	{
		document.vocer.kode.value="AS100";
		document.vocer.harga.value=100000;
		document.vocer.lr_amnt.value=100000/dolar;
		return false;
	}
	if ((formobj.operator.value=="mentari")&&(formobj.rego.value=="sepuluh"))
	{
		document.vocer.kode.value="M10";
		document.vocer.harga.value=11000;
		document.vocer.lr_amnt.value=11000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="mentari")&&(formobj.rego.value=="duapuluh"))
	{
		document.vocer.kode.value="M20";
		document.vocer.harga.value=21000;
		document.vocer.lr_amnt.value=21000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="mentari")&&(formobj.rego.value=="limapuluh"))
	{
		document.vocer.kode.value="MS50";
		document.vocer.harga.value=50000;
		document.vocer.lr_amnt.value=50000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="mentari")&&(formobj.rego.value=="seratus"))
	{
		document.vocer.kode.value="M100";
		document.vocer.harga.value=100000;
		document.vocer.lr_amnt.value=10000/dolar;
		return false;
	}
	else if((formobj.operator.value=="im")&&(formobj.rego.value=="sepuluh"))
	{
		document.vocer.kode.value="I10";
		document.vocer.harga.value=11000;
		document.vocer.lr_amnt.value=11000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="im")&&(formobj.rego.value=="duapuluh"))
	{
		document.vocer.kode.value="I20";
		document.vocer.harga.value=21000;
		document.vocer.lr_amnt.value=21000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="im")&&(formobj.rego.value=="limapuluh"))
	{
		document.vocer.kode.value="I50";
		document.vocer.harga.value=50000;
		document.vocer.lr_amnt.value=50000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="im")&&(formobj.rego.value=="seratus"))
	{
		document.vocer.kode.value="I100";
		document.vocer.harga.value=100000;
		document.vocer.lr_amnt.value=100000/dolar;
		return false;
	}
	else if ((formobj.operator.value=="xl")&&(formobj.rego.value=="sepuluh"))
	{
		document.vocer.kode.value="X10";
		document.vocer.harga.value=11000;
		document.vocer.lr_amnt.value=11000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="xl")&&(formobj.rego.value=="duapuluh"))
	{
		document.vocer.kode.value="X25";
		document.vocer.harga.value=25000;
		document.vocer.lr_amnt.value=25000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="xl")&&(formobj.rego.value=="limapuluh"))
	{
		document.vocer.kode.value="XS50";
		document.vocer.harga.value=50000;
		document.vocer.lr_amnt.value=50000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="xl")&&(formobj.rego.value=="seratus"))
	{
		document.vocer.kode.value="X100";
		document.vocer.harga.value=100000;
		document.vocer.lr_amnt.value=100000/dolar;
		return false;
	}
	else if ((formobj.operator.value=="axis")&&(formobj.rego.value=="sepuluh"))
	{
		document.vocer.kode.value="AX10";
		document.vocer.harga.value=11000;
		document.vocer.lr_amnt.value=11000/dolar
		return false;
	}
	else if	((formobj.operator.value=="axis")&&(formobj.rego.value=="duapuluh"))
	{
		document.vocer.kode.value="AX20";
		document.vocer.harga.value=21000;
		document.vocer.lr_amnt.value=21000/dolar
		return false;
	}
	else if	((formobj.operator.value=="axis")&&(formobj.rego.value=="limapuluh"))
	{
		document.vocer.kode.value="AX50";
		document.vocer.harga.value=50000;
		document.vocer.lr_amnt.value=50000/dolar
		return false;
	}
	else if	((formobj.operator.value=="axis")&&(formobj.rego.value=="seratus"))
	{
		document.vocer.kode.value="AX100";
		document.vocer.harga.value=100000;
		document.vocer.lr_amnt.value=100000/dolar
		return false;
	}
	else if ((formobj.operator.value=="three")&&(formobj.rego.value=="sepuluh"))
	{
		document.vocer.kode.value="T10";
		document.vocer.harga.value=11000;
		document.vocer.lr_amnt.value=11000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="three")&&(formobj.rego.value=="duapuluh"))
	{
		document.vocer.kode.value="T20";
		document.vocer.harga.value=21000;
		document.vocer.lr_amnt.value=21000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="three")&&(formobj.rego.value=="limapuluh"))
	{
		document.vocer.kode.value="T50";
		document.vocer.harga.value=50000;
		document.vocer.lr_amnt.value=50000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="three")&&(formobj.rego.value=="seratus"))
	{
		document.vocer.kode.value="T100";
		document.vocer.harga.value=100000;
		document.vocer.lr_amnt.value=100000/dolar;
		return false;
	}
	else if ((formobj.operator.value=="esia")&&(formobj.rego.value=="sepuluh"))
	{
		document.vocer.kode.value="E10";
		document.vocer.harga.value=11000;
		document.vocer.lr_amnt.value=11000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="esia")&&(formobj.rego.value=="duapuluh"))
	{
		document.vocer.kode.value="E20";
		document.vocer.harga.value=21000;
		document.vocer.lr_amnt.value=21000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="esia")&&(formobj.rego.value=="limapuluh"))
	{
		document.vocer.kode.value="E50";
		document.vocer.harga.value=50000;
		document.vocer.lr_amnt.value=50000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="esia")&&(formobj.rego.value=="seratus"))
	{
		document.vocer.kode.value="E100";
		document.vocer.harga.value=100000;
		document.vocer.lr_amnt.value=100000/dolar;
		return false;
	}
	else if ((formobj.operator.value=="flexi")&&(formobj.rego.value=="sepuluh"))
	{
		document.vocer.kode.value="F10";
		document.vocer.harga.value=11000;
		document.vocer.lr_amnt.value=11000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="flexi")&&(formobj.rego.value=="duapuluh"))
	{
		document.vocer.kode.value="F20";
		document.vocer.harga.value=21000;
		document.vocer.lr_amnt.value=21000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="flexi")&&(formobj.rego.value=="limapuluh"))
	{
		document.vocer.kode.value="F50";
		document.vocer.harga.value=50000;
		document.vocer.lr_amnt.value=50000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="flexi")&&(formobj.rego.value=="seratus"))
	{
		document.vocer.kode.value="F100";
		document.vocer.harga.value=100000;
		document.vocer.lr_amnt.value=100000/dolar;
		return false;
	}
	if ((formobj.operator.value=="fren")&&(formobj.rego.value=="sepuluh"))
	{
		document.vocer.kode.value="FR10";
		document.vocer.harga.value=11000;
		document.vocer.lr_amnt.value=11000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="fren")&&(formobj.rego.value=="duapuluh"))
	{
		document.vocer.kode.value="FR25";
		document.vocer.harga.value=25000;
		document.vocer.lr_amnt.value=25000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="fren")&&(formobj.rego.value=="limapuluh"))
	{
		document.vocer.kode.value="FR50";
		document.vocer.harga.value=50000;
		document.vocer.lr_amnt.value=50000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="fren")&&(formobj.rego.value=="seratus"))
	{
		document.vocer.kode.value="FR100";
		document.vocer.harga.value=100000;
		document.vocer.lr_amnt.value=100000/dolar;
		return false;
	}
	if ((formobj.operator.value=="smart")&&(formobj.rego.value=="sepuluh"))
	{
		document.vocer.kode.value="SM10";
		document.vocer.harga.value=11000;
		document.vocer.lr_amnt.value=11000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="smart")&&(formobj.rego.value=="duapuluh"))
	{
		document.vocer.kode.value="SM20";
		document.vocer.harga.value=21000;
		document.vocer.lr_amnt.value=21000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="smart")&&(formobj.rego.value=="limapuluh"))
	{
		document.vocer.kode.value="SM50";
		document.vocer.harga.value=50000;
		document.vocer.lr_amnt.value=50000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="smart")&&(formobj.rego.value=="seratus"))
	{
		document.vocer.kode.value="SM100";
		document.vocer.harga.value=100000;
		document.vocer.lr_amnt.value=100000/dolar;
		return false;
	}
	if ((formobj.operator.value=="starone")&&(formobj.rego.value=="sepuluh"))
	{
		document.vocer.kode.value="ST10";
		document.vocer.harga.value=11000;
		document.vocer.lr_amnt.value=11000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="starone")&&(formobj.rego.value=="duapuluh"))
	{
		document.vocer.kode.value="ST20";
		document.vocer.harga.value=21000;
		document.vocer.lr_amnt.value=21000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="starone")&&(formobj.rego.value=="limapuluh"))
	{
		document.vocer.kode.value="ST50";
		document.vocer.harga.value=50000;
		document.vocer.lr_amnt.value=50000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="starone")&&(formobj.rego.value=="seratus"))
	{
		document.vocer.kode.value="ST100";
		document.vocer.harga.value=100000;
		document.vocer.lr_amnt.value=100000/dolar;
		return false;
	}
	if ((formobj.operator.value=="hepi")&&(formobj.rego.value=="sepuluh"))
	{
		document.vocer.kode.value="H10";
		document.vocer.harga.value=11000;
		document.vocer.lr_amnt.value=11000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="hepi")&&(formobj.rego.value=="duapuluh"))
	{
		document.vocer.kode.value="H25";
		document.vocer.harga.value=25000;
		document.vocer.lr_amnt.value=25000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="hepi")&&(formobj.rego.value=="limapuluh"))
	{
		document.vocer.kode.value="H50";
		document.vocer.harga.value=50000;
		document.vocer.lr_amnt.value=50000/dolar;
		return false;
	}
	else if	((formobj.operator.value=="hepi")&&(formobj.rego.value=="seratus"))
	{
		document.vocer.kode.value="H100";
		document.vocer.harga.value=100000;
		document.vocer.lr_amnt.value=100000/dolar;
		return false;

	}

}

</script>

<i> * xl, fren dan hepi voucher 20.000 tidak tersedia yang tersedia voucer seharga 25.000</i>
</center></body>
</html>
