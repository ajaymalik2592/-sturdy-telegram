<!DOCTYPE>
<html>
<head>
	<title >
		LOGIN PAGE	
	</title>
	<style>
		body{
			background-color: #A9E7F6;
			color : red;
			text-align: center;
		}
	</style>
</head>
<body>
	<h1> 
		LOG IN
	</h1>
	
	<form method = "post" >
		E-MAIL ID &nbsp;&nbsp;
		<input name = "email" placeholder="ram singh">
		<br><br>
		PASSWORD &nbsp;
		<input name = "pass" type = "password" >
		<br><br>
		<input type="submit" name = "submit"  value = "Play">
	</form>

</body>
</html>

<?php
error_reporting(0);

include("connection.php");
if(isset($_POST['submit']))
{
	$a = $_POST['email'];
	$b = $_POST['pass'];
	$data= "SELECT * FROM game"; 
	$query = mysqli_query($check, $data);
	$f = 1;
	

		while($ch = mysqli_fetch_assoc($query))
		{
			if($ch['email'] == $a && $ch['pass'] == $b)
			{
				session_start();
    			$_SESSION['user'] = $ch['username'];
				header("location:link1.html");
				$f = 0;
				exit();

			}
		}
	}


/*
update ::
	require "connection.php";
	$uname = "ajaymalik";
	$password = "raja";
	$id = 1;	
	$query = "UPDATE MINI SET name = 'uname' , password = '$password' WHERE id = '$id'";
	$data = myswli_query($connect, $query);

DELETE :: # only deference in delete query
	$id = 1;
	$query = "DELETE FROM mini WHERE id = '$id'";

SESSION::
	session_start();
	$_SESSION['sid'] = "ajay";


	in other file 
	session_start();
	echo $_SESSION['sid'];
	



*/

?>


