<html>
<head>
<link href="css/style.css" rel="stylesheet" media="all" />
<style>
body{font:Arial, Helvetica, sans-serif; color:#FF0000;}
</style>
<script language="javascript" src="js/jquery-latest.js"></script>
<script language="javascript" src="js/jquery.validate.js"></script>
<script language="javascript">
$(document).ready(function(){


	$("#test").validate({
		rules:{
			name :{required:true},
		    pass :{required:true, minlength:6},
			cnfpass:{required:true, equalTo:'#pass'},
			textarea:{required:true},
		    gender:{required:true},
		    transport:{required:true},
			country:{required:true},
			city:{required:true}	
			
		},
		messages:{
			name:{required : "Please Enter Your Name"},
		    pass :{required: "please Enter correct Password"},
	        cnfpass:{required:"Re-Enter Password"},
		    textarea:{required:"Enter Your Address"},
		   city:{required:"Enter City Name"},
		   gender:{required:"Enter gender plz"}
		
		}
	
	});
	
	//$(document.body).css( "background", "red" );
	
});

</script>
</head>
<body>

<form id="test" name="test" method="post" action="action.php" onSubmit="return validate();" >

<table width="50%" border="1" cellspacing="10" cellpadding="10" >
  <tr>
    <td align="left" valign="top">Enter name</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><input name="name" type="text" /></td>
  </tr>
  <tr>
    <td align="left" valign="top">Enter passwd</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><input name="pass" id="pass" type="password"  /></td>
  </tr>
    <tr>
    <td align="left" valign="top">Enter cnf passwd</td>
    <td align="left" valign="top">:</td>
    <td align="left" valign="top"><input name="cnfpass"  id="cnfpass" type="password"  /></td>
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
      <input type="radio" name="gender" value="f"/>female
	  
	  <label for="gender" generated="true" class="error"></label></td>
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
    <td align="left" valign="top">
	<select name="country">
	<option value="">Please Selct Country</option>
	<option value="India">India</option>
	<option value="USA">Usa</option>
	</select></td>
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