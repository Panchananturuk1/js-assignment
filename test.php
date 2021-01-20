





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




<html>
<title>Add Student </title>
<head>
<link rel="stylesheet" type="text/css" href="admin_page3.css" />

 
      

</head>

<style>

		
</style>

<body style="margin-left: 0px; margin-right: 0px; margin-top: 0px">

 

	

<form action="test.php" method="post"  name="myForm" onsubmit="return(validate());"  enctype="multipart/form-data">
	<div class="box"  >
      <h1 style="text-align:center; font-size:40px;" >Registration</h1><br />
	  
	  
	  
		
	
		


  


	   			<table style="margin-left:25%; margin-top:0px;">
		
		
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
			</tr> <br /> <br />
			<table style="margin-left:100px; top:20px" >
			<tr style="margin-top:100px">
				<input class="submit" name="submit" type="submit" value="Submit">  
				
			</tr> </table>
		</table> 
  
   
  </form>
  
     </div>

</html>