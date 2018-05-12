<!DOCTYPE html>
<html>
<head>
	<title> Registration </title>
</head>
<body>
<div class="myDiv">
    <div id="header">
	<h1> FEST EVENTS </h1>
	</div>
	
	<div id="imgdiv">
		<div class="pic">
			<img class="eve" src="images/technical.jpg" onclick="technical()"></img><br>
		</div>
		
		<div class="pic">
			<img class="eve"  id="secimg" src="images/cultural.jpg" onclick="cultural()"></img><br>
		</div>
		
		<div class="pic">
			<img class="eve"  id="thirdimg" src="images/creative.jpg" onclick="creative()"></img><br>
		</div>
		
	</div>
	
	<div id="buttonid">
		<p class="login" type="button" onclick="myFunction()"> User Login</p>
	</div>
	
	<div id="class1">
	
		<form action="validation.php" name="myForm" onsubmit="return validateForm()" method="post">
			<b><br> 
			User Name
			<br></b>
			<input class="write" type="text" id="username" onkeyup="this.value=this.value.replace(/[^a-zA-Z ]/g,'');" name="username">

			<b><br>
			<label for="pword">
			Password
			</label><br></b>
			<input class="write" type="password" id="password"  name="password">
			<b><br>  <br></b>
	 
	
			<input type="submit" value="Submit">
			<br> 	 	
			<a href="up3.php" style="color:white;margin-left:103px">
				<b> 
				Sign up as new user
				</b>
			</a>
		</form>
	</div>
		
</div>

<style>
.myDiv ,#imgdiv{
    position: relative;
    z-index: 1;
}

.myDiv:before {
    content: "";
    position: absolute;
    z-index: -1;
   
	font-size:12px;
	margin:5px;
	font-family: Verdana;
	background-image:url("images/giphy.gif");
    opacity: .8;
	width:1345px;
	height:635px;
}

#header 
	{
	
		background-color:black;
		height:80px;
		//margin-top:15px;
		border: solid 1px 	#0000CD;
		margin-left:5px;}
	
	
	h1{
		color:white;
		text-align:center;
		padding:10px;  }
	
	
	#buttonid{font-size: 16px;
			width: 15%;
			text-align: center;
			background-color:black;
			color: white;
			border: solid 1px 	#0000CD;
			padding:10px;
			margin-top: 120px;
			margin-left: 230px;}
	

	p.login{
		display:inline;
		}
	
	#buttonid1{
		font-size: 16px;
		width: 15%;
		text-align: center;
		background-color: #4CAF50;
		color: white;
	
		border: solid 5px #000;
		display:block-inline;
		margin-top:5px;
		margin-left:145px;}
	
	
	input,select {
			color:white;
			width: 30%;
			padding: 12px 20px;
			margin: 8px 0;
			display: inline-block;
			border: 1px solid #0000CD;
			background-color:black;
			border-radius: 4px;
			box-sizing: border-box;}

	input[type=submit] {
			width: 30%;
			background-color:black;
			color:white ;
			padding: 14px 20px;
			margin: 8px 0;
			border: none;
			font-size:20px;
			border-radius: 10px ;
			border: solid 1px 	#0000CD;
			cursor: pointer;}

	input[type=submit]:hover {
			background-color:	#6da7ed;
			color:blue;
			}

	div#class1{
		border-radius: 5px;
		margin-left:145px;
		padding: 12px;
		color:white;}
	
#imgdiv{
	
		position:relative;
		height:450px;
		width:700px;
		background-color:#021026;
		margin-right:60px;
		margin-top:75px;
		float:right;
		border-bottom-right-radius: 1.5em;
		border-bottom-left-radius: 30em;
		border-top-right-radius: 30em;
		border-top-left-radius: 1.5em;
		box-shadow: 30px 10px 100px #0000CD	;
		-moz-box-shadow: 30px 10px 100px 	#0000CD;
		-webkit-box-shadow: 30px 10px 100px #0000CD	;
		-khtml-box-shadow: 30px 10px 100px 	#0000CD;
		 }
	#imgdiv img{background-size: cover;
		height:150px;
		width:200px;
		border-bottom-right-radius: 1.5em;
		border-bottom-left-radius: 4em;
		border-top-right-radius: 4em;
		border-top-left-radius: 1.5em;
		box-shadow: 30px 10px 100px #0000CD	;
		-moz-box-shadow: 30px 10px 100px 	#0000CD;
		-webkit-box-shadow: 30px 10px 100px #0000CD	;
		-khtml-box-shadow: 30px 10px 100px 	#0000CD;}
		
	
	
	#imgdiv img:hover{
		-moz-transform: scale(1.3);
		-webkit-transform: scale(1.3);
		transform: scale(1.3);}
		
	#secimg{
		position:relative;
		margin-left:240px;}
		
	#thirdimg{
		position:relative;
		margin-left:495px;}
		
			.theText{
		opacity:0;
	}
	
</style>

	
<script>
	
	
	
	function myFunction() {
		document.getElementById("class1").style.display = "block";}
		
	function technical()
	{
		window.location.href = "events/technical/tech.php";
	}
	function cultural()
	{
		window.location.href = "events/cultural/cultural.php";
	}
	function creative()
	{
		window.location.href = "events/creative_events/creative_events.php";
	}
</script>

</body>
</html>