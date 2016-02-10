<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="/Tushar/style.css" rel="stylesheet" media="all" />
<script language="javascript" src="/Tushar/Validation/jquery-latest.js"></script>
<script language="javascript" src="/Tushar/Validation/jquery.validate.js"></script>
<script language="javascript">
$(document).ready(function()
{
	$("#signup").validate({
		rules:
		{
			fname:{required:true},
			lname:{required:true},
			cont:{reqired:true}
		},
		messages:
		{
			fname:{required:"Enter Name Please"},
			lname:{required:"Enter surnaem Please"},
			cont:{required:"field required"}
		}
	});
});

</script>
</head>

<body>
<div id="container">
<div id="header">

<div id="loginsec">
<!--<form>

<table>
<tr>
<th align="left"> Email or Phone</th>
<th align="left"> Password</th>
</tr>
<tr>
<td><input type="text" /></td>
<td><input type="text" /></td>
<td><input type="submit" name="sub" value="Log In"  style="background-color:#00C";/></td>
</tr>
<tr>
<td> <input type="checkbox" /> Keep me logged in </td>
<td> <label> Forgotten Your Password</label></td>
</tr>
</table>
</form>
<form name="loginsecc" >
<label> Email or Phone</label>
<label > Password </label><br />
<input type="text"  name="login" id="login"/><br />
<input type="checkbox" name="logg"  />Keep me logged in 

<input type="password" name="pass"  /> <br />

<input type="submit" value="Log In" name="log" />
</form>-->
</div>
</div>
<div id="singup">
<h1>Create an account</h1>
<h4>It's free and always will be.</h4>
<form name="signup" method="post" action="#" onsubmit="return validate();">
<input type="text" name="fname"  placeholder="First name"  style="width:250px"/> <br />
<input type="text" name="lname" placeholder="Surname" style="width:250px" /><br /><br />
<input type="text" name="cont" placeholder="Email or Mobile number" /><br /><br />
<input type="text" name="cnfcont" placeholder="Confirm Email or Mobile number" /><br /><br />
<input type="password" name="pass" placeholder="New Password" /><br /><br />
<label> Birthday</label> <br />
<select>
<option >Day</option>
</select>
<select>
<option> Month</option>
</select>
<select>
<option> Year</option>
</select>

<input type="submit" name="sign"  value="Submit" />
</form>
</div>
</div>
</body>
</html>