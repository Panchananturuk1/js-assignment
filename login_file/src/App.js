import React from 'react';
import './mydesign.css'
function App() {
  return (
    
    <div className="App" class="bg">
     <header className="App-header">
     
     <div class="mycontent">
			<p  class="paraleft1"> Learn to code by<br />
				watching others</p>
				
			<p class="paraleft2">see how wxperienced developers solve problems in real-time.<br />
				watching scripted tutorials is great, but understanding how<br />
				developers think is invaluable</p>
	
			</div> 
      

<div class="mybox">
      <div>
			
      <button type="button" class="but2" name="button" >
        <b> Try it free 7 says</b> then $20/mo. thereafter </button>
    </div>


        <div class="box" >
     <input type="text" id="MyName" name="Name" placeholder="First Name"  /> 
		
			<input type="text" id="My Last Name" name="Lname" placeholder="Last Name"  /> 
	
			 <input type="text" id="Emailid" name="Emailid" placeholder="Email Address"  />

			 <input type="password" id="Password" name="Password" placeholder="Password"  />

       <button type="submit" class="but1" name="button" placeholder="Password" > CLAIM YOUR FREE TRIAL </button>  	
				
        <center>
         <p class="para"> By Clicking the button you are agreeing to our
         <a href="" class="term">Terms and Condition </a></p>
       </center>

    </div>
    </div>
  

      </header>
      </div>

     
   
    
    
  );
}

export default App;
