<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
<script type="text/javascript">
function setShipping (objDropDown)
{
    var objHidden = document.getElementById("shipping");
    var type = objDropDown.options[objDropDown.selectedIndex].text.substring(objDropDown.options[objDropDown.selectedIndex].text.indexOf('-')+2, objDropDown.options[objDropDown.selectedIndex].text.length);
    objHidden.value = type; 
}


function setShippingtype (objDropDown)
{
    var objHidden = document.getElementById("shippingtype");
    var type = objDropDown.options[objDropDown.selectedIndex].text.substring(0, objDropDown.options[objDropDown.selectedIndex].text.indexOf('-')-1);
    objHidden.value = type; 
}

function showEntry(obj,optionValue)
{
    //hide all entry selections onchange
    document.getElementById("pickup").style.display="none";
	    document.getElementById("naga").style.display="none";
    if(obj.value=="pickup")
    {
        document.getElementById(optionValue).style.display="inline"; 
    }  else if(obj.value=="naga")
	{
	   document.getElementById(optionValue).style.display="inline"; 
	}
}

</script>
</head>

<body>
<form id="myform">
<select onchange="setShippingtype(this);setShipping(this);showEntry(this,this.value);" name="shippingselectbox">
  <option value="">Pilih Provider</option>
  <option value="xl">xl</option>
   <option value="im3">im3</option>
  
</select>
 
<span id="pickup" style="display:none;">
<select name="pickup" onchange="setShippinglocation(this)">
  <option selected="selected">Pilih naganya</option>
  <option value="Billings">1</option>
  <option value="Livingston">2</option>
  <option value="Miles City">3</option>
  <option value="Cody">4</option>
  <option value="Sheridan">5</option>
</select>
</span>
<span id="naga" style="display:none;">

<select name="naga" onchange="setShippinglocation(this)">
  <option selected="selected">Pilih naganya</option>
  <option value="Billings">a</option>
  <option value="Livingston">b</option>
  <option value="Miles City">c</option>
  <option value="Cody">d</option>
  <option value="Sheridan">e</option>
</select>
</span>
<br />
<br />
<br />
shipping (set hidden form tag - shipping amount for paypal)<br />
<input name="shipping" id="shipping" type="text" value=""/>
<br />
<br />
<br />
shippingtype (set hidden form tag - variable for paypal to send to Chris)<br />
<input name="shippingtype" id="shippingtype" type="text" value=""/>

</form>
</body>
</html>