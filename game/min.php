</!DOCTYPE html>
<html>
	<head>
		<style>
			.id{
				background-color : blue;
				height: 100%;
				background-position: center;
				background-repeat: no-repeat;
				background-size: cover;
			}
			#span_format1{
				color : red;
				font-size: 20px;

			}
			#span_format{
				color : red;
				
			}
		
			.col1{
				float: left;
				  width: 45%;
				  height: 500px;	
				  text-align: right;	
				  font-size: 17px;
				  color :white;	
				  -moz-box-sizing:content-box;

				}
			.col2{
					float: right;
				  width: 55%;
				  height: 500px;	
				  text-align: left;		
				}
			#script1
			{
				color:red;
				font-size: 20px;
				background-color: yellow;

				}
			}
			

		</style>
		<title></title>
	</head>
	<body  class = "id">
		<div style="text-align;width:85%;height:50px; ">

			<h1 style="text-align:center;color:brown; ">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MINI PROJECT
			</h1>

		</div>
	<form method ="post" >
		 <div class="col1">
			USER NAME&nbsp;&nbsp;&nbsp;
			<br><br>
			PASSWORD &nbsp;&nbsp;&nbsp;
			<br><br>
			MOBILE NUMBER  &nbsp;&nbsp;&nbsp;
			<br><br>
			ADDRESS &nbsp;&nbsp;&nbsp;
			<br><br>
			E-MAIL ID  &nbsp;&nbsp;&nbsp;
			<br><br>
			GENDER &nbsp;&nbsp;&nbsp;
			<br> <br>
			
			 

		</div>
			
		<div id = "col2">

		 	<input name = "name" placeholder = "AJAY MALIK"  required >
		 	<br><br>
		 	<input type = "password" name = "pass" placeholder = "xyz"  required >
		 	<br><br>
		 	<input type = "number" name = "num" placeholder = "8181231232" required>
		  	
			<br><br>
			<input type = "textarea" name="address2" rows="7" cols="60" placeholder="kirti bihar muzaffarnagar" required >
			<br><br>
			<input type = "email" name = "email" placeholder = "ajaymalik@gmail.com" required>
			<br><br>
			MALE
			<input type = "radio" name = "gender" value = "male">
			FEMALE
			<input type = "radio" name = "gender" value = "female" >
			OTHER
			<input type = "radio" name = "gender" value = "other" checked>
			

		</div>
			<br><br><br><br>
			<input name = "submit" type ="submit" value ="SIGN UP">
 			
 		
			
				

		</form>
	


	</body>
</html>


<?php
// database connectivity 
require("connection.php");

if($check && isset($_POST['submit']))
{
	$names1 = $_POST['name'];
	$e_mail1 = $_POST['email'];
	$mobile1 = $_POST['num'];
	$address1 = $_POST['address2'];
	$password1 = $_POST['pass'];
	$gender1 = $_POST['gender'];


	
	$data1 = "SELECT * FROM mini"; 
	$query1 = mysqli_query($check, $data1);
	$ff = 1;
	$e_mail11 = $e_mail1;

		while($_POST['submit'] && $query1 && $ch = mysqli_fetch_assoc($query1))
		{
			if($ch['email'] == $e_mail11 )
			{

				echo "<script id = 'script1'> alert('sorry, this email-id is already taken!')</script>";
				$ff = 0;
				break;

			}
			
		}

	if($ff == 0)
	{
		exit();
	}


	$query = "INSERT INTO mini(name,passw,mobile,address,email,gender) VALUES ('$names1','$password1','$mobile1', '$address1', '$e_mail1','$gender1')";
	$data = mysqli_query($check, $query);
	// if(!$data )
	// {
	// 	echo "unsuccessfull";
	// }
	// else
	// {
	// 	echo "successfull sign up";
	// }
	
	if($data)
		header('location:login.php');
	mysqli_close($check);
}
	

else if(!$check )
{
	echo "not connected";
}


// $da = "SELECT * FROM mini";
// $query = mysqli_query($check, $da);
// while($query1 = mysqli_fetch_assoc($query))
// 	{
// 		print_r($query1 );
// 		echo "<br>";
// 	}



/*
username  primary key
password
mobile number
address
email
gender

after successfull submission forward to login page
login username and password

after successfull submission it should goes to welcome username page


*/

?>


