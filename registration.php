<?php 
session_start();
if (isset($_SESSION['user'])) {
	header('location: index.php');
}
 ?>
 <html>
	<header>
		<meta charset="utf-8">
	</header>
	<body>
	<h1>REGISTRATION</h1>
	<form action="register.php" method="post">
		<label for="username">Потребителско име</label>
		<input type="text" id="username" name="username">
		<label for="password">Парола</label>
		<input type="password" id="password" name="password">
		<button type="submit">Регистрация</button>
	</form>
	</body>
</html>