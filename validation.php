<html>

<body>
<style>
	#home{color:white;font-size:20px;
			background-color:black;
			height:70px;width:200px;
			text-align:center;
			 border: solid 1px 	#0000CD;
			border-bottom-right-radius: 20em;
		border-bottom-left-radius: 20em;
		border-top-right-radius: 20em;
		border-top-left-radius: 20em;
		box-shadow: 30px 10px 100px #0000CD	;
		-moz-box-shadow: 30px 10px 100px 	#0000CD;
		-webkit-box-shadow: 30px 10px 100px #0000CD	;
		-khtml-box-shadow: 30px 10px 100px 	#0000CD;}
		
		

 body{
	height: 100%;
	background: url("images/eventinfo.jpg") no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	 font-size:40px; color:white;
	}
	
	
   .form{
	   color:white;
	   font-size:20px;
	   margin-top:350px;
	   height:100px;
	   background-color:black;
	   width:500px;
	   border: solid 1px 	#0000CD;
	  
	    border-bottom-right-radius: 1.5em;
		border-bottom-left-radius: 30em;
		border-top-right-radius: 30em;
		border-top-left-radius: 1.5em;
		box-shadow: 30px 10px 100px #0000CD	;
		-moz-box-shadow: 30px 10px 100px 	#0000CD;
		-webkit-box-shadow: 30px 10px 100px #0000CD	;
		-khtml-box-shadow: 30px 10px 100px 	#0000CD;
		 }
   }
  
  

</style>

<script>
	function home()
	{
		window.location.href="firstpage.php";
	}
</script>
<div id="home" onclick="home()">
<br>HOME
</div>
<?php
	require('dbsignup.php');
	session_start();
if (isset($_REQUEST['username']))
{ 
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($con,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($con,$password);
		
        $query = "SELECT * FROM `signup` WHERE user_name='$username' and user_password='".md5($password)."'";
		$result = mysqli_query($con,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){

			$_SESSION['username'] = $username;
                        echo "<center>Welcome</center><br>";
  
                      while ($row=mysqli_fetch_row($result))
                      {
							echo "<center>";
							printf("\n%s!!",$row[1]);
							echo("<br></center><center>");
							printf("\n You have registered for %s event\n",$row[4]);
							
							
							echo "</center><center><div class='form' ><h3 >Click here to logout <a  href='events.php'>Logout</a></div><center";
                       
                       }
  
                      mysqli_free_result($result);
                    }

else
{
				echo "<center><div class='form'><h3>Username/password is incorrect.</h3>Click here to <a href='events.php'>Login</a></div></center>";
				}
}

?>


</body>