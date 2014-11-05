<?php
session_start();
 if (isset($_SESSION['user'])) {
	print_r($_SESSION['user']);
	$logout = '<form action="logout.php">
			<button type="submit">Logout</button>
		</form>';
	$changepassword = '<form action="changepass.php" method="post"><input type="text" id="passwordchange" name="passwordchange"><button type="submit">Смени парола</button>';

} else{
$logout = '';	
$changepassword = '';
} 


 ?>
<html>
	<header>
		<meta charset="utf-8">
	</header>
	<body>
	<h1>INDEX</h1>
	<?php echo $logout.$changepassword; ?>
	</body>
</html>