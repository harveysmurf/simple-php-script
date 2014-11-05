<?php 
require('connection.php');
session_start();
if (isset($_SESSION['user'])) {
	header('location: index.php');
}
else{
	if(isset($_POST['username']) && isset($_POST['password'])){
		$username='';
		$password = '';
		$username = mysqli_real_escape_string($dbConnect,$_POST['username']);
		$password = mysqli_real_escape_string($dbConnect,$_POST['password']);
		
			$sql = 'SELECT * FROM users where username = "'.$username.'" and password = "'.$password.'" ';
			$result = mysqli_query($dbConnect,$sql) or die(mysqli_error($dbConnect));

			if (mysqli_num_rows($result)==1) {
				
				$_SESSION['user'] = array('username'=>$username,'password'=>$password);
				header('location:index.php');
			}else echo 'Грешно потребителско име или парола'.$username.$password;
	}
}


 ?>
<html>
	<header>
		<meta charset="utf-8">

	</header>
	<body>
		<h1>Вход</h1>
		<div>
			<form action="login.php" method="POST">
				<label>Username:</label>
				<input type="text" id="username" name="username">
				<label>Password:</label>
				<input type="password" id="password" name="password">
				<button type="submit">Login</button>
			</form>
		</div>
		<a href="registration.php">Регистрирай се</a>
	</body>
</html>