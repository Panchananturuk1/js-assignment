

<script src="validation.js">

  if( document.myForm.Name.value == "" )
         {
            alert( "Please provide your First Name!" );
            document.myForm.Name.focus() ;
            return false;
         }
		 
		 
		 
		 
		 var re = /^[\w ]+$/;

    // validation fails if the input doesn't match our regular expression
    if(!re.test(myForm.Name.value)) {
      alert("Error: Input contains invalid characters!");
      document.myForm.Name.focus();
      return false;
    }
	
	var letters = /^[A-Za-z]+$/;
	
	  if(!letters.test(myForm.Name.value)) {
      alert("Enter a valid name ");
      document.myForm.Name.focus();
      return false;
    }
	
	
	if( document.myForm.Lname.value == "" )
         {
            alert( "Please provide your Last Name!" );
            document.myForm.Lname.focus() ;
            return false;
         }
	
	
	  if(!re.test(myForm.Lname.value)) {
      alert("Error: Input contains invalid characters!");
      document.myForm.Lname.focus();
      return false;
    }
	  
	   if(!letters.test(myForm.Lname.value)) {
      alert("Enter a valid name ");
      document.myForm.Lname.focus();
      return false;
    
	
	
			      if( document.myForm.Emailid.value == "" ) 
         {
            alert( "Please provide your Emailid!" );
            document.myForm.Emailid.focus() ;
            return false;
         }
	
	

	var filter = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
	
	 if(!filter.test(myForm.Emailid.value)) {
      alert("Enter a valid email");
      document.myForm.Emailid.focus();
      return false;
    }
	
	

	     if( document.myForm.Password.value == "" )
         {
            alert( "Please provide your Password!" );
            document.myForm.Password.focus() ;
            return false;
         }
		 
 
    if(!re.test(myForm.Password.value)) {
      alert("Error: Input contains invalid characters!");
      document.myForm.Password.focus();
      return false;
    }
	  
</script>


<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8" />
	<meta name="viewport"
		content="width=device-width, initial-scale=1" />
		
	<link rel="stylesheet" type="text/css" href="design2.css" />
	
	<style>
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
	</style
</head>

<title> view event</title>
<body  class="bg"  style="margin-left: 0px; margin-right: 0px; margin-top: 0px">


		
    

	 <form action="index.php" method="post" name="myForm" onsubmit="return(validate());" enctype="multipart/form-data">
	 

				<div style="width:420px; float:left; margin-top:10%;margin-left:10%">
			<p style="font-size:60px; color:white"> Learn to code by<br />
				watching others</p>
			<p style="color:white">see how wxperienced developers solve problems in real-time.<br />
				watching scripted tutorials is great, but understanding how<br />
				developers think is invaluable</p>
	
			</div>
			
			<div style="width:500px;float:right;text-align:left">
			
				<button type="button" class="but2" name="button" >
					<b> Try it free 7 says</b> then $20/mo. thereafter </button>
					
					
					
			<div class="box" >	
			<table style="margin-left:20%; margin-top:0px;">
		
		
		<tr>
			<td> <input type="text" id="Emailid" name="Name" placeholder="First Name" style="font-size:large" /> </td> 
		</tr>
		
		<tr>
			<td>
			 <input type="text" id="Emailid" name="Lname" placeholder="Last Name" style="font-size:large" /> </td>
		</tr>
		
		<tr>
			<td>
			 <input type="text" id="Emailid" name="Emailid" placeholder="Email Address" style="font-size:large" /></td>
		</tr>
		
			<tr>
				<td>
			 <input type="password" id="Password" name="Password" placeholder="Password"style="font-size:large" />
			 </td>
			</tr><br /><br />
			
			<table style="margin-left:100px; top:20px" >
				<tr style="margin-top:100px">
					<button type="submit" class="but1" name="button" placeholder="Password"  style="font-size:x-large"> CLAIM YOUR FREE TRIAL </button>  
				</tr>
					
					<tr>
					 <center>
						<p style="color:CABEBE;  font-size:12px"> By Clicking the button you are agreeing to our
						<a href="" style="text-decoration:none; color:red">Terms and Condition </a></p>
					</center>
					</tr>
			</table>
		</table>
		
		</div>
			</div>
		
			
	
  
  </form>
 
  
</body>
	</html>