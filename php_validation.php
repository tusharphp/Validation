<html>
<head>
<title>Mobile number validation using regex</title>

</head>
<body>
<h2>Validating mobile number..</h2>
<form method="post" action="#">
Enter Y0ur Name :
<input type="text" name="name" id="name" /><br/><br/>

<input type="text" name="name" id="name" required />

<input type="submit" value="Check" name="ok" />
</form>
</body>
</html>

<?php
if(isset($_POST['ok']))
{
	$name=$_POST['name'];
	
	if($name==null)
	{
	
	 echo "<script>alert('Please Enter Your name')</script>";	
	}
}
?>















