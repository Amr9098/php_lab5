<?php
include_once("classes/Crud.php");
$crud = new Crud();
$id = $crud->escape_string($_GET['id']);

$result = $crud->getData("SELECT * FROM users WHERE id=$id");

foreach ($result as $res) {
	$field1 = $res["username"];
        $field2 = $res["email"];
        $field3 = $res["ext"];
        $field4 = $res["password"];
}
?>
<html>
<head>
<title>Update</title>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"></head>

<body class="container">
	<h1 class="page-header text-center my-1  text-warning bg-dark p-2">Update page ◉_◉</h1>
	<a class='btn btn-danger w-25 ' href="index.php">Back</a>

	<form name="form1" method="post" action="editaction.php" autocomplete="off" class="mt-1">
      <div class="mb-3">
        <label for="id  " class="form-label">ID</label>

        <input type="number" name="id" class="form-control" value="<?php echo $_GET['id'];?>"  readonly>

      </div>
      <div class="mb-3">
        <label for="usernamr" class="form-label">user name</label>
        <input type="text" name="username" class="form-control" value="<?php echo  $field1 ?>">

      </div>
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="text" class="form-control" name="email" value="<?php echo  $field2 ?>">

    </div>

<label for="exampleInputPassword1" class="form-label">Password</label>
  <div class="input-group mb-3">
  <input class="form-control"  name="password" placeholder="Password" value="<?php echo  $field4 ?>" type="text" >

  </div>

  <div>
    <label for="exampleInputPassword1" class="form-label">Room no</label>
      <select class="form-select form-select-lg mb-3"  name="room" >
      <option value="Application1">Application1</option>
      <option value="Application2">Application2</option>
      <option value="cloud">cloud</option>
      <select>
  </div>
  <div class="mb-3">
    <label for="Ext" class="form-label">Ext</label>
    <input type="text" name="Ext" class="form-control" value="<?php echo  $field3 ?>">

  </div>

  <div class="mt-4">
	<input class="btn btn-warning w-100 p-3" type="submit" name="update" value="Update"></  </div>
</form>
</body>
</html>
