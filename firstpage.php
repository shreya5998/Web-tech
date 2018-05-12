<!DOCTYPE html>
<html  lang="en">
<head>
<title>Aatmatrisha</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style >


body {
    background-image:url("images/new1.gif") ;
	background-repeat: no-repeat;
	height:auto;
    width:100%;
	background-size:100%;
	background-attachment: fixed;
 }
 
#page-wrap {
    display:table;
	width:90%;
    margin:auto;
	
	
	border-bottom-right-radius: 2.5em;
	border-bottom-left-radius: 2.5em;
	border-top-right-radius: 2.5em;
	border-top-left-radius: 2.5em;
   
   
 }
#page-wrap div {
	
    display:table-cell;
	height:200px;
    font-size:1.5vw;
    word-wrap:break-word;
    
 }
 
 
  #left{background: url("images/pesu.jpg") no-repeat ;
	background-size: cover;
	
	
	border-bottom-right-radius: 1.5em;
	border-bottom-left-radius: 1.5em;
	border-top-right-radius: 1.5em;
	border-top-left-radius: 1.5em;
	box-shadow: 30px 10px 50px 	#696969;
	-moz-box-shadow: 30px 10px 50px 	#696969;
	-webkit-box-shadow: 30px 10px 50px 	#696969;
	-khtml-box-shadow: 30px 10px 50px 	#696969;}
	
 #mid{background: url("images/event3.jpg") no-repeat ;
	background-size: cover;
	background-size: 420px 225px ;
	border-bottom-right-radius: 1.5em;
	border-bottom-left-radius: 1.5em;
	border-top-right-radius: 1.5em;
	border-top-left-radius: 1.5em;
	box-shadow: 30px 10px 50px 	#696969;
	-moz-box-shadow: 30px 10px 50px 	#696969;
	-webkit-box-shadow: 30px 10px 50px 	#696969;
	-khtml-box-shadow: 30px 10px 50px 	#696969;}
	
 #right{background: url("images/concert.jpg") no-repeat ;
	background-size: cover;
	background-size: 420px 200px ;
	border-bottom-right-radius: 1.5em;
	border-bottom-left-radius: 1.5em;
	border-top-right-radius: 1.5em;
	border-top-left-radius: 1.5em;
	box-shadow: 30px 10px 50px 	#696969;
	-moz-box-shadow: 30px 10px 50px 	#696969;
	-webkit-box-shadow: 30px 10px 50px 	#696969;
	-khtml-box-shadow: 30px 10px 50px 	#696969;}
	
@media screen and (min-width: 480px) {
  form {
    max-width: 480px;
  }
}
 
 
#at{margin-left:490px;
	display:inline-block;
	width:500px;
	height:200px;
	}
#share,#mc{display:inline-block;
margin-left:100px;}	

#share img{ max-width: 50px;
	max-height: 50px;
	border-bottom-right-radius: 0.8em;
	border-bottom-left-radius: 0.8em;
	border-top-right-radius: 0.8em;
	border-top-left-radius: 0.8em;}
	
#share :hover img{
		-moz-transform: scale(1.1);
		-webkit-transform: scale(1.1);
		transform: scale(1.1);}

#left:hover, #right:hover, #mid:hover, #btn:hover, #btn2:hover{

		-moz-transform: scale(1.1);
		-webkit-transform: scale(1.1);
		transform: scale(1.1);}
		

#txtleft{opacity:0;}

#mc{margin-left:1200px;
	background-color:black;
	}

#btn{
	
	width:50px;
	height:50px;
	background-size: cover;
	background-image:url("images/map.jpg")}
	
#btn2{
	width:50px;
	height:50px;
	background-size: cover;
	background-image:url("images/calender.png")}
	
#gap{
	
	font-size: 50px;
	width:1250px;
	height:100px;

	background-color:black;
	border-bottom-right-radius: 0.8em;
	border-bottom-left-radius: 0.8em;
	border-top-right-radius: 0.8em;
	border-top-left-radius: 0.8em;
	border: solid 1px 	#0000CD;
	color:blue;
}



</style>
</head>
<body >
	
	<div id="at">
		<marquee direction="down"  style="height:100px;">
		<img src="images/at.jpg" style="height:100px;width:400px;">
		</img>
		</marquee>
	</div>
	
	<div id="share">
		<a href="https://www.facebook.com/"><img src="images/fb.jpg" style="height:100px;" ></img></a>
		<a href="https://twitter.com/login"><img src="images/twitter.jpg"></img></a>
		<a href="https://plus.google.com/"><img src="images/googleplus.jpg" ></img></a>
		<a href="https://www.instagram.com/accounts/login/"><img src="images/insta.jpg" style="height:100px;"></img></a>
	</div>
	


<center><div id="gap">WELCOME!!!</div></center>
<br><br>
<div id="page-wrap">

 <div id="left" onmouseover="left()" onmouseout="welcome()"></div>
 <div id="mid" onmouseover="mid()" onmouseout="welcome()"></div>
 <div id="right" onmouseover="right()" onmouseout="welcome()"></div>
</div>
<br><br>
<div id="mc">
<a href="maps/map.html"><input type="button" id="btn" onmouseover="map()" onmouseout="welcome()"></input></a>
<a href="calender.php"><input type="button" id="btn2" onmouseover="calender()" onmouseout="welcome()"></input></a>
</div>
<script>
		function welcome()
      {
          if(document.getElementById("gap").innerHTML != "")
             {
                    document.getElementById("gap").innerHTML = "";
             }
            document.getElementById("gap").innerHTML = "WELCOME!!!";
			   
      }
	   function calender()
      {
          if(document.getElementById("gap").innerHTML != "")
             {
                    document.getElementById("gap").innerHTML = "";
             }
            document.getElementById("gap").innerHTML = "Click here to see calender";
			   
      }
	  	function map()
      {
          if(document.getElementById("gap").innerHTML != "")
             {
                    document.getElementById("gap").innerHTML = "";
             }
            document.getElementById("gap").innerHTML = "Click here to see PESU map";
			   
      }
	  function left()
      {
          if(document.getElementById("gap").innerHTML != "")
             {
                    document.getElementById("gap").innerHTML = "";
             }
            document.getElementById("gap").innerHTML = "Click here to know more about PESU";
			   
      }
	  
	   function mid()
      {
          if(document.getElementById("gap").innerHTML != "")
             {
                    document.getElementById("gap").innerHTML = "";
             }
            document.getElementById("gap").innerHTML = "Click here to know more about fest events";
      }
	  
	   function right()
      {
          if(document.getElementById("gap").innerHTML != "")
             {
                    document.getElementById("gap").innerHTML = "";
             }
            document.getElementById("gap").innerHTML = "Click here to know more about concert";
			   
      }
	document.getElementById("left").addEventListener("click",change1);
	function change1()
	{
		window.location.href = "http://pes.edu/";
	}
	
	document.getElementById("mid").addEventListener("click",change2);
	function change2()
	{
		window.location.href = "events.php";
	}
	
	document.getElementById("right").addEventListener("click",change3);
	function change3()
	{
		window.location.href = "ticket.php";
	}
</script>
</body>
</html>