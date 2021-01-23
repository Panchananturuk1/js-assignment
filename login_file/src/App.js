import React, { Component } from 'react';
import ReactDOM from 'react-dom';
import './mydesign.css';



class Test extends React.Component {
  constructor(props){
    super(props);

    this.state = {
      fields: {},
      errors: {}
    }
  }

  handleValidation(){
    let fields = this.state.fields;
    let errors = {};
    let formIsValid = true;

    //Name
    if(!fields["name"]){
      formIsValid = false;
      errors["name"] = "First Name Cannot be empty";
    }

    if(typeof fields["name"] !== "undefined"){
      if(!fields["name"].match(/^[a-zA-Z]+$/)){
        formIsValid = false;
        errors["name"] = "Only letters";
      }      	
    }

    if(!fields["Lname"]){
      formIsValid = false;
      errors["Lname"] = "Last Name Cannot be empty";
    }

    if(typeof fields["Lname"] !== "undefined"){
      if(!fields["Lname"].match(/^[a-zA-Z]+$/)){
        formIsValid = false;
        errors["Lname"] = "Only letters";
      }      	
    }

    //Email
    if(!fields["email"]){
      formIsValid = false;
      errors["email"] = "Email Cannot be empty";
    }

    if(typeof fields["email"] !== "undefined"){
      let lastAtPos = fields["email"].lastIndexOf('@');
      let lastDotPos = fields["email"].lastIndexOf('.');

      if (!(lastAtPos < lastDotPos && lastAtPos > 0 && fields["email"].indexOf('@@') == -1 && lastDotPos > 2 && (fields["email"].length - lastDotPos) > 2)) {
        formIsValid = false;
        errors["email"] = "Looks like this is not an email";
      }
    }


    if (!fields["password"]) {
      formIsValid = false;
      errors["password"] = "Password Can not be empty.";
    }



    this.setState({errors: errors});
    return formIsValid;
  }

  contactSubmit(e){
    e.preventDefault();
    if(this.handleValidation()){
      alert("Form submitted");
    }else{
      alert("Form has errors.")
    }

  }

  handleChange(field, e){    		
    let fields = this.state.fields;
    fields[field] = e.target.value;        
    this.setState({fields});
  }



render(){
  return (
    <div class="right"> 

      <form name="contactform" className="contactform" onSubmit= {this.contactSubmit.bind(this)}>
          <div className="col-md-6">

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
          <input ref="name" type="text" id="MyName" name="name" placeholder="First Name" onChange={this.handleChange.bind(this, "name")} value={this.state.fields["name"]}  /> 
          <div class="right1">
              <span className="error">{this.state.errors["name"]}</span> </div>

          <input ref="Lname" type="text" id="My Last Name" name="Lname" placeholder="Last Name" onChange={this.handleChange.bind(this, "Lname")} value={this.state.fields["Lname"]} /> 
          <div class="right1">
              <span className="error">{this.state.errors["Lname"]}</span></div>   

            <input refs="email" type="text" id="Emailid" name="email" placeholder="Email Address" onChange={this.handleChange.bind(this, "email")} value={this.state.fields["email"]} />
            <div class="right1">
              <span className="error">{this.state.errors["email"]}</span></div>

            <input refs="password" type="password" id="Password" name="Password" placeholder="Password" onChange={this.handleChange.bind(this, "password")} value={this.state.fields["password"]} />
            <div class="right1">
              <span className="error">{this.state.errors["password"]}</span></div>

            <button type="submit" class="but1" name="button" placeholder="Password" id="submit" value="Submit" > CLAIM YOUR FREE TRIAL </button>  	
              
              <center>
              <p class="para"> By Clicking the button you are agreeing to our
              <a href="" class="term">Terms and Condition </a></p>
            </center>

    </div>
    </div>
    </div>
    </form>
    </div>
    )
    }
  }
  
  
  ReactDOM.render(<Test />, document.querySelector("#app"))
function App() {
  return (
    
    <div className="App" class="bg">
     <header className="App-header">
     
     
  

      </header>
      </div>
 
    
  );
}

export default App;
