<html>
<head>
<title>Mobile number validation using regex</title>
<script type="text/javascript">
    function validate() {
        var mobile = document.getElementById("mobile").value;
        var pattern = /^\d{10}$/;
        if (!pattern.test(mobile)) {
            alert("It is not valid mobile number.input 10 digits number!");
            return false;
        } 
           
    }
</script>

</head>
<body>
<h2>Validating mobile number..</h2>
Enter Mobile No. :
<input type="text" name="mobile" id="mobile" />
<input type="submit" value="Check" onClick="validate();" />
</body>
</html>