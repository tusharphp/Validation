<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link media="all" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script language="javascript" type="text/javascript">
function validate(){
	if (document.test.name.value=="" )
	{
		alert("Enter Your Name");
		document.test.name.focus();
		return false;
	}
	if (document.test.name.value=="Number()")
	{
		alert ("Enter name only");
		document.test.name.focus();
		return false;
	}
	
	if (document.test.mname.value=="")
	{
		alert("Enter your Middele Name");
		document.test.mname.focus();
		return false;
	}
	if (document.test.lname.value=="")
	{
		alert("Enter your Last Name");
		document.test.lname.focus();
		return false;
	}
	
	var pass1=document.test.pass;
		if (pass1.value=="")
		{
			alert("Please Enter Password");
			pass1.focus();
			return false;
			
		}
		if (pass1.value.length<6)
		{
			alert ("Password is too short");
			pass1.focus();
			return false;
		}
		var pass2=document.test.cnfpass;
		if (pass2.value=="")
		{
			alert ("Please Confirm Password");
			pass2.focus();
			return false;
		}
		if (pass2.value !=pass1.value)
		{
			alert ("Match not match");
			pass2.focus();
			return false;
		}
		
	
	
	var mobile=document.getElementById('mobile').value;
	var patten=/^\d{10}$/;
	if (!patten.test(mobile))
	{
		alert ("Mobile Number Should have 10 digits");
		return false;
	}
	var name=document.getElementById('name').value;
	var num=/^[a-zA-Z]*$/;
	if (!num.test(num1))
	{
		alert ("Enter Only name");
		return false;
	}
	
	
	function echeck(str) 
		{
        var at="@"
		var dot="."
		var lat=str.indexOf(at)
		var lstr=str.length
		var ldot=str.indexOf(dot)
		if (str.indexOf(at)==-1)
		{
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(at)==-1 || str.indexOf(at)==0 || str.indexOf(at)==lstr)
		{
		   alert("Invalid E-mail ID")
		   return false
		}

		if (str.indexOf(dot)==-1 || str.indexOf(dot)==0 || str.indexOf(dot)==lstr)
		{
		    alert("Invalid E-mail ID")
		    return false
		}

		 if (str.indexOf(at,(lat+1))!=-1)
		 {
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.substring(lat-1,lat)==dot || str.substring(lat+1,lat+2)==dot)
		 {
		    alert("Invalid E-mail ID")
		    return false
		 }

		 if (str.indexOf(dot,(lat+2))==-1)
		 {
		    alert("Invalid E-mail ID")
		    return false
		 }
		
		 if (str.indexOf(" ")!=-1)
		 {
		    alert("Invalid E-mail ID")
		    return false
		 }

 		 return true					
	    }
		
		
		var email=document.test.email;	
	         if ((email.value==null)||(email.value==""))
			 {
		          alert("Please Enter your Email ID")
		          emailID.focus();
		          return false;
	         }
	         if (echeck(email.value)==false)
			 {
		         email.value=""
		         email.focus()
		         return false
	          }	
		
		
			  


}

function onlyAlphabets(e, t) {
            try {
                if (window.event) {
                    var charCode = window.event.keyCode;
                }
                else if (e) {
                    var charCode = e.which;
                }
                else { return true; }
                if ((charCode > 64 && charCode < 91) || (charCode > 96 && charCode < 123))
                    return true;
                else
                    return false;
            }
            catch (err) {
                alert(err.Description);
            }
        }
</script>
</head>

<body>
<form   name="test" id="test"  onSubmit="return validate();" >
<label for="name" ger class="error" generated="true"></label>
<table width="100%">
<tr>
<td><label> Name </label> </td>
<td><input type="text" name="name" id="name"  onkeypress="return onlyAlphabets(event,this);"  autofocus="autofocus"  /> </td>
</tr>
<tr>
<td><label> Mname </label></td>
<td> <input type="text" name="mname" id="mname"  pattern='[A-Za-z\\s]*' /></td>
</tr>
<tr>
<td><label>Last Name </label></td>
<td> <input type="text" name="lname" id="lname"/></td>
</tr>
<tr> 
<td> <label> Password </label></td>
<td> <input type="password" name="pass" id="pass"  /></td>

</tr>
<tr>
<td> <label> Confirm Password</label></td>
<td> <input type="password" name="cnfpass" id="cnf"  /></td>
</tr>
<td><label> Mobile No. </label></td>
<td> <input type="number" name="mobile" id="mobile" /></td>
</tr>
<tr>
<td><label> Email </label></td>
<td> <input type="text" name="email" id="email" /></td>
</tr>
<tr>
<td> <label> Confirm email </label></td>
<td> <input type="text" name="cnfemail" id="cnfemail" /></td>
</tr>


<td><input type="submit" name="ok" value="Ok" /></td>
</tr>

</table> 
</form>
</body>
</html>