

<html>
<head>
	<title>
		WELCOME 
	</title>
</head>
<body style = "text-align:center; text-align:middle;">
	<h2>
		<?php 
			session_start();
		    echo $_SESSION['user'];
		    unset($_SESSION['user']);
		?>

		 , You are welcome here.
	</h2>
</body>
</html>