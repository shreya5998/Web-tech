
<html>
<body>
<?php
require('dbticket.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['name']))
{

        // removes backslashes
	$name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
	$name = mysqli_real_escape_string($con,$name); 
        
    $phone=$_POST['phone'];
    $num=$_POST['num'];
	$mail = stripslashes($_REQUEST['mail']);
	$mail = mysqli_real_escape_string($con,$mail);
   
	$trn_date = date("Y-m-d H:i:s");
	
        $query = "INSERT into `ticket` (name,phone,num,mail,trn_date)
VALUES ('$name', '$phone','$num','$mail','$trn_date')";
       $result = mysqli_query($con,$query);
        if($result)
          {
            echo "<div class='form'>
				<h3>Tickets Booked successfully.</h3>
				Click here to Logout <a href='ticket.php'>Logout</a></div>";
          }
 }

            
?>
<style>
body{
	height: 100%;
	background: url("images/b2.jpg") no-repeat center center fixed; 
	-webkit-background-size: cover;
	-moz-background-size: cover;
	-o-background-size: cover;
	background-size: cover;
	color:white;}
	
	.form{
		text-align:center;
		background-color:pink;
		margin-top:150px;
		margin-left:300px;
		color:#d626c7;
		font-size:30px;
		border-bottom-right-radius: 20em;
		border-bottom-left-radius: 20em;
		border-top-right-radius: 20em;
		border-top-left-radius: 20em;
		box-shadow: 30px 10px 100px 	#f93e92;
		-moz-box-shadow: 30px 10px 100px 	#f93e92;
		-webkit-box-shadow: 30px 10px 100px #f93e92	;
		-khtml-box-shadow: 30px 10px 100px #f93e92;}
		
	#home{text-align:center;
		background-color:pink;
		margin-top:200px;
		margin-left:700px;
		color:#d626c7;
		font-size:50px;
		border-bottom-right-radius: 20em;
		border-bottom-left-radius: 20em;
		border-top-right-radius: 20em;
		border-top-left-radius: 20em;
		box-shadow: 30px 10px 100px 	#f93e92;
		-moz-box-shadow: 30px 10px 100px 	#f93e92;
		-webkit-box-shadow: 30px 10px 100px #f93e92	;
		-khtml-box-shadow: 30px 10px 100px #f93e92;
		width:200px;}
</style>
	<div id="home" onclick="home()">
		Home
	</div>

<script>
	function home()
	{
		window.location.href="firstpage.php";
	}
</script>
</body>
</head>