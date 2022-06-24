
<body style='background: #212529;'>
	<?php
include_once("classes/Crud.php");

$crud = new Crud();
if(isset($_POST['update']))
{
	$ID_update = $crud->escape_string($_POST['id']);

	$username = $crud->escape_string($_POST['username']);
	$password = $crud->escape_string($_POST['password']);
	$email = $crud->escape_string($_POST['email']);
	$Ext = $crud->escape_string($_POST['Ext']);
	$room = $crud->escape_string($_POST['room']);

	$result = $crud->execute("UPDATE users SET  username = '$username' ,email = '$email' ,password = '$password' ,room = '$room' ,ext = '$Ext'
		WHERE id =  $ID_update");

echo "<h1 style='color:red'>Data update successfully. </h1>";
header('Refresh: 2; URL=index.php');
}

?>
</body>
