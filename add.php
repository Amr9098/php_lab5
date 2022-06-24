<html>
<head>
	<title>Add User</title>
</head>
<body style='background: #212529;'>
<?php
include_once("classes/Crud.php");

$crud = new Crud();

if(isset($_POST['Submit'])) {
	$username = $crud->escape_string($_POST['username']);
	$password = $crud->escape_string($_POST['password']);
	$email = $crud->escape_string($_POST['email']);
	$Ext = $crud->escape_string($_POST['Ext']);
	$room = $crud->escape_string($_POST['room']);

		$result = $crud->execute("INSERT INTO users(username,password,email,ext,room) VALUES('$username','$password','$email','$Ext','$room')");

		echo "<h1 style='color:blue'>Data Add successfully. </h1>";
		header('Refresh: 2; URL=index.php');

}
?>
</body>
</html>
