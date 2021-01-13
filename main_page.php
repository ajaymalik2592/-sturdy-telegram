<!DOCTYPE>
<html>
<head>
	<link href = "style_sheet.css" rel = "stylesheet" type = "text/css" /> 
	
</head>
<body >
	<script src = "app.js" > </script>
	<header>
		<p name = "header" style = "text-align:center; font-size:40px;margin : 25px auto;">ONLINE GAMING PLATFORM
		 </p>
	</header>

	<div name = "top_list" style = "border-collapse: collapse;">
		<a href = "link1.html" >
		<div id = "div_style" name = "game1" >TRY TO CATCH
		</div> </a>
		<a href = "link2.html" >
		<div id = "div_style" name = "game2" >KILL OR DIE
		</div> </a>
		<a href = "link3.html" >
		<div id = "div_style" name = "game3" >GAME3
		</div> </a>
	<a href = "link4.html">
		<div id = "div_style" name = "game4" >GAME4
		</div></a>
		<a href = "link5.html"> 
		<div id = "div_style" name = "game5" >GAME5
		</div></a>
	</div>
	<br><br><br><br><br><br><b>
	<div id = "fullwidth">
	<div id = "half-left">
		<p style= "text-align:center;font-size:25px;color:#FF0000">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;SIGN UP
		</p>

	
	
	<form method ="post" >
		 <div class="col1">
			USER NAME&nbsp;&nbsp;&nbsp;
			<br><br>
			PASSWORD &nbsp;&nbsp;&nbsp;
			<br><br>
			E-MAIL ID  &nbsp;&nbsp;&nbsp;
			<br><br>
		</div>
		<div id = "col2">
		 	<input name = "user_name" placeholder = "AJAY MALIK"  required >
		 	<br><br>
		 	<input type = "password" name = "pass" placeholder = "xyz"  required >
		 	<br><br>
			<input type = "email" name = "email" placeholder = "ajaymalik@gmail.com" required>
			</div>
			<br><br>
			<input name = "submit" type ="submit" value ="SIGN UP">
		</form> 

		
	</div>
	<?php

			require("connection.php");

			if(isset($_POST['submit']) )
			{
				$na = $_POST['user_name'];
				$pa = $_POST['pass'];
				$em = $_POST['email'];
				$data1 = "INSERT INTO game (username, pass, email) values ('$na', '$pa', '$em')"; 
				$query = mysqli_query($check, $data1);
				
			}

		?>

	<div id = "half-right"> 
		<br>
		<iframe name = "i_frame" src="login.php" heigth = 600 width = 600 scrolling = "no" frameborder="0"  onload="this.style.height=this.contentDocument.body.scrollHeight +'px';" >
		
		
		</iframe>
		
		<!-- <a name = "link-for-iframe" href = "login.php" id = "login-style" target = "i_frame" > Log In 
		</a> -->
	</div>
</div>
</body>

</html>
