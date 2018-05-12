<html>
<head>
	<style>
	body{background-image:url("images/5.jpg") ;}
		
	.form{
		margin-top:200px;
		font-size:40px;
		color:white;
		text-align:center;
		//background-color:#f9a940;
		width:1000px;
		margin-left:200px;
		border-bottom-right-radius: 1.5em;
		border-bottom-left-radius: 30em;
		border-top-right-radius: 30em;
		border-top-left-radius: 1.5em;
		box-shadow: 30px 10px 100px orange	;
		-moz-box-shadow: 30px 10px 100px 	orange;
		-webkit-box-shadow: 30px 10px 100px orange	;
		-khtml-box-shadow: 30px 10px 100px 	orange;
	}
	
	
	</style>
</head>
<body>
	
<?php
require('dbsignup.php');
// If form submitted, insert values into the database.
if (isset($_REQUEST['user_name']))
{

        // removes backslashes
	$user_name = stripslashes($_REQUEST['user_name']);
        //escapes special characters in a string
	$user_name = mysqli_real_escape_string($con,$user_name); 
	$user_email = stripslashes($_REQUEST['user_email']);
	$user_email = mysqli_real_escape_string($con,$user_email);
    $user_password = stripslashes($_REQUEST['user_password']);
	$user_password = mysqli_real_escape_string($con,$user_password);
    $user_ch=$_POST['user_ch'];
    $user_age=$_POST['user_age'];
    $user_interest=$_POST['user_interest'];
	$trn_date = date("Y-m-d H:i:s");
    $message="Sorry,this email is already registered";
    $check_email_for_duplicates = mysqli_query($con, "select * from `signup` where `user_email` = '".mysqli_real_escape_string($con,$user_email)."'");

    if(mysqli_num_rows($check_email_for_duplicates) > 0) //Email address is unique within this system and must not be more than one
    {
        echo "<script type='text/javascript'>alert('$message');</script>";
       
        //echo 'Sorry, the  email <b>'.$user_email.'</b> is already in use. Please enter a different email.';
        echo "<div class='form'><h3>This email is already registered.</h3>Click here to register again <a href='up3.php'>Sign Up</a></div>";
    }
    else{
	
        $query = "INSERT into `signup` (user_name, user_email,user_password,user_ch,user_age,user_interest, trn_date)
VALUES ('$user_name', '$user_email','".md5($user_password)."','$user_ch','$user_age','$user_interest','$trn_date')";
       $result = mysqli_query($con,$query);
        if($result)
          {
            echo "<div class='form'>
<h3>You are registered successfully.</h3>
<br/>Click here to Logout <a href='logoutf.php'>Logout</a></div>";
          }
        }
}
           
?>
       
</body>
</html>