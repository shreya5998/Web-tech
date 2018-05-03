
<html>
  <head>
   <title>Sign Up Form</title>
	<script src="signup.js"></script>
<style>
	
	#su:hover{background-color:green;
	opacity:0.8;};
	
	*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  font-family: 'Nunito', sans-serif;
  color: #384047;
}

form {
  max-width: 300px;
  margin: 10px auto;
  padding: 10px 20px;
  background: #f4f7f8;
  border-radius: 8px;
}

h1 {
  margin: 0 0 30px 0;
  text-align: center;
}

input[type="text"],
input[type="password"],
input[type="date"],
input[type="datetime"],
input[type="email"],
input[type="number"],
input[type="search"],
input[type="tel"],
input[type="time"],
input[type="url"],
textarea,
select {
  background: rgba(255,255,255,0.1);
  border: none;
  font-size: 16px;
  height: auto;
  margin: 0;
  outline: 0;
  padding: 15px;
  width: 100%;
  background-color: #e8eeef;
  color: #8a97a0;
  box-shadow: 0 1px 0 rgba(0,0,0,0.03) inset;
  margin-bottom: 30px;
}
	
input[type="radio"],
input[type="checkbox"] {
  margin: 0 4px 8px 0;
}

select {
  padding: 6px;
  height: 32px;
  border-radius: 2px;
}

button {
  padding: 19px 39px 18px 39px;
  color: #FFF;
  background-color:  #4bc970;
  
  font-size: 18px;
  text-align: center;
  font-style: normal;
  border-radius: 5px;
  width: 100%;
  border: 1px solid #3ac162;
  border-width: 1px 1px 3px;
  box-shadow: 0 -1px 0 rgba(255,255,255,0.1) inset;
  margin-bottom: 10px;
}
body,html{
	  height: 100%;
	//background: url("images/three.gif") no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;				
}

fieldset {
  margin-bottom: 30px;
  border: none;
}

legend {
  font-size: 1.4em;
  margin-bottom: 10px;
}

label {
  display: block;
  margin-bottom: 8px;
}

label.light {
  font-weight: 300;
  display: inline;
}

.number {
  background-color: #5fcf80;
  color: #fff;
  height: 30px;
  width: 30px;
  display: inline-block;
  font-size: 0.8em;
  margin-right: 4px;
  line-height: 30px;
  text-align: center;
  text-shadow: 0 1px 0 rgba(255,255,255,0.2);
  border-radius: 100%;
}

@media screen and (min-width: 480px) {

  form {
    max-width: 480px;
  }

}

.star{color:red}

	</style>
	</head>
    <body>

      <form action="index.html" method="post">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:<span class="star">*</span></label>
          <input type="text" id="name" name="user_name">
          
		 
          <label for="mail">Email:<span class="star">*</span></label>
          <input type="email" id="mail" name="user_email">
          
          <label for="password">Password:<span class="star">*</span></label>
          <input type="password" id="password" name="user_password">
		  
		    <label for="conct_num">Contact no:<span class="star">*</span></label>
          <input type="text" id="num" name="contact_num">
		  
		  <label for="Col">College:<span class="star">*</span></label>
          <input type="text" id="col" name="col">
          
          <label>Year</label>
          <input type="radio" id="under_13" value="1st" name="user_age"><label  class="light">1st</label><br>
          <input type="radio" id="over_13" value="2nd" name="user_age"><label  class="light">2nd</label><br>
		   <input type="radio" id="under_13" value="3rd" name="user_age"><label  class="light">3rd</label><br>
          <input type="radio" id="over_13" value="4th" name="user_age"><label  class="light">4th</label>
		  
        </fieldset>
        
		 <legend><span class="number">2</span>Other info</legend>
        
        <fieldset>
        <label for="choice">Select your choice:</label>
        <select id="user_ch" name="user_ch">
          <optgroup label="Technical">
            <option value="Hackathon">Hackathon</option>
            <option value="CodeWars">CodeWars</option>
            <option value="Robotics">Robotics</option>
          </optgroup>
          <optgroup label="FunEvents">
            <option value="Selfie">Selfie</option>
            <option value="Painting">Painting</option>
            <option value="Takeshi's Castle">Takeshi's Castle</option>
			 <option value="Roadies">Roadies</option>
          </optgroup>
          <optgroup label="Music">
            <option value="Solo">Solo</option>
            <option value="acoustics">WesternAcoustics</option>
			<option value="BOB">Battle Of Bands</option>
          </optgroup>
		  <optgroup label="Dance">
            <option value="Street">StreetDance</option>
            <option value="Classical">Classical</option>
          </optgroup>
		  <optgroup label="Literary Events">
            <option value="EW">Essay Writing</option>
            <option value="Poetry">Poetry</option>
          </optgroup>
        </select>
        
          <label>Interests:</label>
          <input type="radio" id="development" value="interest_development" name="user_interest"><label class="light" for="development">Organising</label><br>
            <input type="radio" id="design" value="interest_design" name="user_interest"><label class="light" for="design">Volunteering</label><br>
          <input type="radio" id="business" value="interest_business" name="user_interest"><label class="light" for="business">Participating</label>
        
        </fieldset>
        <button id="su" type="submit" onclick="validatename()">Sign Up</button>
      </form>
      
    </body>
</html>
