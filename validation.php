<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript" src="/Tushar/js/jquery.validate.js"></script>
<script language="javascript" src="/Tushar/js/jquery-latest.js"> </script>
<script language="javascript">
$(document).ready(function()
{
			$("#val").validate({
		rules:{
			name:{required:true},
			mname:{required:true},
			lname:{required:true},
			mobile:{required:true},
			email:{required:true}
		},
		messages:{
			name:{required:"Please enter name"},
			mname:{required:"Please enter middle name"},
			lname:{required:"Pleae enter last name"},
			mobile:{required:"Mobile number is required"},
			email:{required:"Email required"}
		}
	});
});
</script>
</head>

<body>
<form id="val" name="val" method="post" action="#" onsubmit="return validate();" >

<table width="50%" border="1px">
<tr>
<td><label> Name </label> </td>
<td align="left"><input type="text" name="name" id="name"    /> </td>
</tr>
<tr>
<td><label> Mname </label></td>
<td> <input type="text" name="mname" id="mname"  /></td>
</tr>
<tr>
<td><label>Last Name </label></td>
<td> <input type="text" name="lname" id="lname"/></td>
</tr>
<tr>
<td><label> Mobile No. </label></td>
<td> <input type="number" name="mobile" id="mobile" /></td>
</tr>
<tr>
<td><label> Email </label></td>
<td> <input type="text" name="email" id="email" /></td>
</tr>


<td><input type="submit" name="submit" value="Submit"/></td>
</tr>

</table> 
</form>
</body>
</html>