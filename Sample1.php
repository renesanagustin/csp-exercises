<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
	<div class = "container mt-2 mb-4 p-2 shadow bg-white">
		<form action  = "process.php" method="POST">
		<div class ="form-row justify-content-center">
			<div class = "col-auto">
				<input type = "text" name="username" class= "form-control" id="username"placeholder="User Name">
			</div>
			<div class = "col-auto">
				<input type = "text" name="password" class= "form-control" id="password"placeholder="Password">
			</div>
			<div class = "col-auto">
				<button type="submit" name="save"class="btn btn-info">Save</button>
			</div>
			</div>
			</form>
			</div>
			<?php require_once("process.php"); ?>
			<div class="container">
				<?php if(isset($_SESSION['msg'])): ?>
				<div class="<?=$_SESSION['alert']; ?>
				<?=$_SESSION['msg']; ?>
			</div>
		<?php endif; ?>
			</div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    </body>
</html>