<?php 
require('connection.php');
session_start();
if (isset($_SESSION['user']) && $_POST['passwordchange']) {
		
		$username = mysqli_real_escape_string($dbConnect,$_SESSION['user']['username']);
		$password = mysqli_real_escape_string($dbConnect,$_SESSION['user']['password']);
		$passowrdchange = mysqli_real_escape_string($dbConnect,$_POST['passwordchange']);
			$sql = 'SELECT * FROM users where username = "'.$username.'" and password = "'.$password.'" ';
			$result = mysqli_query($dbConnect,$sql) or die(mysqli_error($dbConnect));

			if (mysqli_num_rows($result)==1) {
				
				$sql = 'UPDATE users set password = "'.$passowrdchange.'"';
				mysqli_query($dbConnect,$sql) or die(mysqli_error($dbConnect));
				echo 'Успешно сменена парола';
				$_SESSION['user']['password']=$passowrdchange;
			}else echo 'Неуспешна смяна на паролата';
}
 ?>
 <html>
	<header>
		<meta charset="utf-8">
	</header>
	<body>
	<h1>ChangePass</h1>
	</body>
</html>
