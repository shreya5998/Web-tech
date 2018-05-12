<html>
  <head>
   <title>Sign Up Form</title>
 
<style>
	
	#su:hover{background-color:aqua};
	
	*, *:before, *:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

html{ background-image:url("images/baloons.jpg") ;}

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
  background-color: #4bc970;
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
body{
	background:url("baloons.jpg");
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

	</style>
	  </head>
    <body>



      <form action="up4.php" method="post">
      
        <h1>Sign Up</h1>
        
        <fieldset>
          <legend><span class="number">1</span>Your basic info</legend>
          <label for="name">Name:</label>
          <input type="text" id="name" name="user_name">
          
		 
          <label for="mail">Email:</label>
          <input type="email" id="mail" name="user_email">
          
          <label for="password">Password:</label>
          <input type="password" id="password" name="user_password">
		  
          
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
         
            <option value="Hackathon">Hackathon</option>
            <option value="CodeWars">CodeWars</option>
            <option value="Robotics">Robotics</option>
         
        
            <option value="Selfie">Selfie</option>
            <option value="Painting">Painting</option>
            <option value="Takeshi's Castle">Takeshi's Castle</option>
	    <option value="Roadies">Roadies</option>
         
          
            <option value="Singing">Singing</option>
            <option value="Western Acoustics">Western Acoustics</option>
	    <option value="Battle of Bands">Battle Of Bands</option>
         
            <option value="Street Dance">Street Dance</option>
            <option value="Classical Dance">Classical Dance</option>
          
		  
            <option value="Essay Writing">Essay Writing</option>
            <option value="Poetry">Poetry</option>
          
        </select>
        
          <label>Interests:</label>
          <input type="radio" id="development" value="Organising" name="user_interest"><label class="light" for="development">Organising</label><br>
            <input type="radio" id="design" value="Volunteering" name="user_interest"><label class="light" for="design">Volunteering</label><br>
          <input type="radio" id="business" value="Participating" name="user_interest"><label class="light" for="business">Participating</label>
        
        </fieldset>
        <button id="su" type="submit">Sign Up</button>
      </form>
    
    </body>
</html>
