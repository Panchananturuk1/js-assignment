

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
		
	<link rel="stylesheet" type="text/css" href="newstyle.css" />
	
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
<body  class="bg">

	 <form action="index.php" method="post" name="myForm" onsubmit="return(validate());" enctype="multipart/form-data">
	 

				<div class="mycontent">
			<p  class="paraleft1"> Learn to code by<br />
				watching others</p>
				
			<p class="paraleft2">see how wxperienced developers solve problems in real-time.<br />
				watching scripted tutorials is great, but understanding how<br />
				developers think is invaluable</p>
	
			</div>
			
			<div class="mybox">
			<div>
			
				<button type="button" class="but3" name="button" >
					<b> Try it free 7 says</b> then $20/mo. thereafter </button>
			</div>
					
			<div class="box" >	
			
			<input type="text" id="MyName" name="Name" placeholder="First Name"  /> 
		
			<input type="text" id="My Last Name" name="Lname" placeholder="Last Name"  /> 
	
			 <input type="text" id="Emailid" name="Emailid" placeholder="Email Address"  />

			 <input type="password" id="Password" name="Password" placeholder="Password"  />
		
			<br /><br />
				<button type="submit" class="but1" name="button" placeholder="Password" > CLAIM YOUR FREE TRIAL </button>  	
				
					 <center>
						<p class="para"> By Clicking the button you are agreeing to our
						<a href="" class="term">Terms and Condition </a></p>
					</center>

				</div>
			</div>
		
			
	
  
  </form>
 
  
</body>
	</html>