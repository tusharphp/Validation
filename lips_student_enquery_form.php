  <!-- Ienquery Form Validation-->
<script type="text/javascript">
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


function validations(){

	
	var emailID=document.test2.con_email	
	         if ((emailID.value==null)||(emailID.value==""))
			 {
		          alert("Please Enter your Email ID")
		          emailID.focus()
		          return false
	         }
	         if (echeck(emailID.value)==false)
			 {
		         emailID.value=""
		         emailID.focus()
		         return false
	          }	
   		
	
return true;
}
</script>

<!-- End Of Ienquery Form Validation--> 
 <form name="test2" method="post" action="<?php echo $_SERVER['PHP_SELF'];?>" onSubmit="return validations();">                   
<table id="rounded-corner" summary="2007 Major IT Companies' Profit"  width="632px" height="527px"  align="center">

   <tr>
<td><strong>Email:</strong></td><td><input name="con_email" id="con_email" type="text" alt="" /></td>
    <td></td><td></td>
  </tr>
  
</table>
</form>
	
  </div><!-- end of right content-->
 </div>   <!--end of center content -->               
 
    <div class="clear"></div>
    </div> <!--end of main content-->

