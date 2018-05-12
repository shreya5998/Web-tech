<html>
<body>
<style>
	body,html{
		height: 100%;
		background: url("images/new6.jpg") no-repeat center center fixed; 
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;}
		
	#month{
		margin-left:500px;
		width:700px;
		height:100px;
		color:black;
		font-family: "Comic Sans MS";
		font-size: 50px;
		background: black; 
		background: -webkit-linear-gradient(#FF00FF,black ); 
		border-top-right-radius: 0.8em;
		border-top-left-radius: 0.8em;}
	#cont{
		margin-left:500px;
		width:700px;
		height:370px;
		background: #FF00FF; 
		background: -webkit-linear-gradient(black,#FF00FF); 
		border-bottom-right-radius: 2em;
		border-bottom-left-radius: 2em;
	}

	#headings th{color:#FF00FF;width:100;height:70px;}
	.numbers td{color:white;width:100px;font-size: 30px;text-align:center;height:55px;}
	
	
	.invisible,.visible{width:300px;height:100px;background: #FF00FF; 
		border-top-right-radius: 2.8em;
		border-top-left-radius: 2.8em;
		border-bottom-right-radius: 2.8em;
		border-bottom-left-radius: 2.8em;
		margin-left:600px;
		text-align:center;}
		
	.visible{visibility: visible;color:white;width:300px;height:100px;background: #FF00FF;font-size:30px;}
	.invisible{visibility:hidden;}
	
</style>


	
	
		<div id="month"><center>MARCH</center>
		</div>	
		<div id="cont">
			<table>
			<tr id="headings" >
				<th>MON</th>
				<th>TUE</th>
				<th>WED</th>
				<th>THU</th>
				<th>FRI</th>
				<th>SAT</th>
				<th>SUN</th>
			</tr>
			
			<tr class="numbers">
				<td>1</td>
				<td>2</td>
				<td>3</td>
				<td>4</td>
				<td>5</td>
				<td>6</td>
				<td>7</td>
			</tr>
			
			<tr class="numbers">
				<td>8</td>
				<td>9</td>
				<td>10</td>
				<td>11</td>
				<td>12</td>
				<td>13</td>
				<td>14</td>
			</tr>
			
			<tr class="numbers">
				<td>15</td>
				<td>16</td>
				<td>17</td>
				<td>18</td>
				<td>19</td>
				<td>20</td>
				<td>21</td>
			</tr>
			
			<tr class="numbers">
				<td>22</td>
				<td>23</td>
				<td>24</td>
				<td>25</td>
				<td>26</td>
				<td>27</td>
				<td>28</td>
			</tr>
			
			
			
			<tr class="numbers">
				<td>29</td>
				<td>30</td>
				<td>31</td>			
			
			
			</table>
		</div>
		<br><br>
		</div>
	
	<div  id="info" class="invisible">
		
	</div>

<script>
	
	var x=document.querySelectorAll("td");
	for(var i=0;i<x.length;i++)
		x[i].addEventListener("click",func);
	function func()
	{	
			var x1=document.getElementById("info");
			x1.setAttribute("class","visible");
			
			if(this.innerHTML==2)
				x1.innerHTML=this.innerHTML+"<br>Formals Day";
			else if(this.innerHTML==3)
				x1.innerHTML=this.innerHTML+"<br>Flash Mob";
			else if(this.innerHTML==1)
				x1.innerHTML=this.innerHTML+"<br>AT Launch";
			else if(this.innerHTML==4)
				x1.innerHTML=this.innerHTML+"<br>Black and White Day";
			else if(this.innerHTML==5)
				x1.innerHTML=this.innerHTML+"<br>Jaatre";
			else if(this.innerHTML==6)
				x1.innerHTML=this.innerHTML+"<br>AT First Day";
			else if(this.innerHTML==7)
				x1.innerHTML=this.innerHTML+"<br>Concert!!!";
			else
				x1.innerHTML="<br>"+this.innerHTML;
			
	}
	
	
</script>
</body>
</html>