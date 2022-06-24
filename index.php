<?php
include_once("classes/Crud.php");

$crud = new Crud();
$query = "SELECT * FROM users ORDER BY id ";
$result = $crud->getData($query);
?>

<html>

<head>
	<title>show</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous" />
</head>

<body class="bg-dark">
	<a type="button" class="btn btn-primary m-3 " href="add.html">Add user</a>
	<table class="table table-dark
">

		<tr>
			<th scope="col">ID</th>
			<th scope="col">User Name</th>
			<th scope="col">Email</th>
			<th scope="col">Room</th>
			<th scope="col">Ext</th>
			<th scope="col">Password</th>
			<th scope="col">action </th>
		</tr>
		<?php
		foreach ($result as $key => $res) {
			echo "<tr>";
			echo "<td>" . $res['id'] . "</td>";
			echo "<td>" . $res['username'] . "</td>";
			echo "<td>" . $res['email'] . "</td>";
			echo "<td>" . $res['room'] . "</td>";
			echo "<td>" . $res['ext'] . "</td>";
			echo "<td>" . $res['password'] . "</td>";
			echo "<td><a  href=\"edit.php?id=$res[id]\">Edit</a> |
		 <a href=\"delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
		}
		?>
	</table>
</body>

</html>