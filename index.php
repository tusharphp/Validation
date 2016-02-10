<html>
<head>
<link href="css/style.css" rel="stylesheet" media="all" />
<style>
body{font:Arial, Helvetica, sans-serif; color:#FF0000;}
</style>
<script language="javascript">
function validate(){

	if(document.test.name.value =="")
	{
	alert("Please Enter Your Name");
	document.test.name.focus();
	return false;
	}
	
	var pass1 = document.test.pass;
	if(pass1.value =="")
	{
		alert("Please Enter your password");
		pass1.focus();
		return false;
	}
	if(pass1.value.length < 6)
	{
		alert("Password length is too sort");
		pass1.focus();
		return false;
	}
	
	var pass2 = document.test.cnfpass;
	
	if(pass2.value =="")
	{
		alert("Please Enter your cnf password");
		pass2.focus();
		return false;
	}
	
	if(pass2.value != pass1.value)
	{
		alert("confirm pass is not matced");
		pass2.focus();
		return false;
	}
	
	if(document.test.gender[0].checked == false && document.test.gender[1].checked == false)
	{
		alert("Please Select Gender");
		document.test.gender[0].focus();
		return false;
	}
	
	var transport =false;
	for(var i=0; i < document.test.transport.length; i++)
	{
		if(document.test.transport[i].checked == true)
		{
			transport = true;
			break;
		}
	}
	
	if(transport==false)
	{
		alert("Please select transport");
		document.test.transport[0].focus();
		return false;
	}
	
	return true;
}
</script>
</head>
<body>
<form name="test" method="post" action="action.php" onSubmit="return validate();" >
<table width="50%" border="1" cellspacing="10" cellpadding="10"  id="main">
  <tr>
    <td align="left" valign="top">Enter name</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><input name="name" type="text" /></td>
  </tr>
  <tr>
    <td align="left" valign="top">Enter passwd</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><input name="pass" type="password"  /></td>
  </tr>
    <tr>
    <td align="left" valign="top">Enter cnf passwd</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><input name="cnfpass" type="password"  /></td>
  </tr>
  <tr>
    <td align="left" valign="top">Enter address</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><textarea name="textarea" cols="20" rows="10"></textarea></td>
  </tr>
  <tr>
    <td align="left" valign="top">gender</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><br />
      <input type="radio" name="gender" value="m" />male
      <input type="radio" name="gender" value="f"/>female</td>
  </tr>
  <tr>
    <td align="left" valign="top">Transport</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><br />
      <input name="transport" type="checkbox" value="car" />
      Car
      <input name="transport" type="checkbox" value="bike" />
    Bike</td>
  </tr>
  
  <tr>
    <td align="left" valign="top">Country</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><select name="country"><option value="India">India</option><option value="USA">Usa</option></select></td>
  </tr>
  
   <tr>
    <td align="left" valign="top">City</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><select name="city" multiple="multiple" size="5">
	<option value="Hajipur">Hajipur</option>
	<option value="delhi">Delhi</option>
	<option value="patna">Patna</option>
	</select></td>
  </tr>
  
  <tr>
    <td colspan="3" align="left" valign="top"><input name="button" type="submit" value="Submit"  /></td>
  </tr>
</table>
</form>
</body>
</html>