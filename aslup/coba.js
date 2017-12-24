<script language="javascript">
var dolar=8500;
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
function valdasi()
	{
		if(formobj.vocer.tujuan.value=="")
			{
				alert('tujuan harus diisi');
				document.vocer.tujuan.focus();
				return false;
			}	
				
	}
}
</script>