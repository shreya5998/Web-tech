<html>

<body>

<script>
	
function check() 
{
    var x = document.getElementById("name").value;
	
    if (x == "") {
        alert("Name must be filled out");
        return false;
    }
	else
	{
		var list=x.split("");
		for(var i=0;i<list.length;i++)
		{
			
			if(((list[i]>=65 && list[i]<=90) || (list[i]>=97 && list[i]<=122) || list[i]==" "))
			{
				alert("Re-enter your name");
				return false;
			}
		}
	}

	var x = document.getElementById("mail").value;
	
    if (x == "") {
        alert("Email-id must be filled out");
        return false;
    }
		
	var x = document.getElementById("phone").value;
	
    if (x == "") {
        alert("Contact-number must be filled out");
        return false;
    }
	else
	{
		var list=x.split("");
		if(list.length!='10')
		{
			alert("Re-enter valid phone number legth fail");
			return false;
		}
		for(var i=0;i<list.length;i++)
		{
			if(!(list[i]<10 && list[i]>=0 && list[i]!=" "))
			{
				alert("Re-enter valid phone number");
				return false;
			}
			
		}
	}
	
	

		form.action="bookticket.php";

}
</script>
<center>
	<form id="form"  method="post">
    <label>
        Name<br>
        <input id="name" name="name" type="textarea"  " />
    </label>
    <label>
        Phone number<br>
        <input id="phone" name="phone" type="textarea"  />
    </label>
	<label>
		Number of tickets
		<input id="num" name="num" type="textarea" value="1" />
	</label>
	<label>
		Email-id
		<input id="mail" name="mail" type="email" />
	</label>
	<br>
        <br>
	<label>
		<input id="details" name="details" type="button" value="Details" onclick="concert()"></input>
	</label>
        <label>
		<input id="book" name="book" type="submit" value="Book now" onclick="check()"></input>
	</label>
</form>



</center>	
<style>

	
body {
    background-image:url('images/one.gif');
    background-repeat: repeat-y;
    height:100%;
    width:100%;
	background-size:100%;
	background-attachment: fixed;
}

label, input {
	color:white;
	font-size:20px;
	font-style: italic;
    display: block;
	
}

#book{
	height:40px;
	width:100px;
}

input{background-color:	#191970;
		width:300px;}
label {
	margin-top:30px;
    margin-bottom: 20px;
}

textarea {
    width: 500px;
    height: 500px;
    -webkit-shape-inside: circle(50%,50%,50%);
    border-radius: 500px;
}
</style>
<script>
	
	function concert()
	{
			window.location.href = "concert/concert.php";
	}
	var l=document.getElementsByTagName("input");
	for(var i=0;i<l.length;i++)
	{
		l[i].addEventListener("mouseover",changedown_color);
		l[i].addEventListener("mouseout",changeup_color);
		l[i].addEventListener("mouseup",changeup_color);
	}
	
	function changedown_color()
	{
		this.style.background="#4682B4";
		this.style.opacity="0.5px";
	}
	function changeup_color()
	{
		this.style.background="#191970";
		this.style.opacity="0.5px";
	}
	
</script>
</body>
</html>
