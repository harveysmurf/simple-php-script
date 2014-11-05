<?php 
session_start();
require('connection.php');
if (isset($_SESSION['user'])) {
	header('location: index.php');
}else{
	if (isset($_POST['username']) && isset($_POST['password'])) {
		# code...
	}
	$username = mysqli_real_escape_string($dbConnect,$_POST['username']);
	$password = mysqli_real_escape_string($dbConnect,$_POST['password']);

	$sql = 'INSERT INTO users (username, password) values("'.$username.'","'.$password.'")';
	mysqli_query($dbConnect,$sql) or die(mysqli_error($dbConnect));
	echo 'Успешна регистрация';
	echo '<a href="login.php">Назад</a>';
}

 ?>
 <html>
	<header>
		<meta charset="utf-8">
	</header>
	<body>
	
	</body>
</html>