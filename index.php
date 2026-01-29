<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>


<?php 

$username = $_POST['username'];
$password = $_POST['password'];

if(isset($_POST['login']))
{
	if($username == 'Robin' && $password == '1234')
	{
		session_start();
		$_SESSION['activeUser'] = $username;
		header('Location:dashboard.php');
	}
	else
	{
		echo "<script>alert('Wrong')</script>";
		header('Location:index.php');
	}
}
 
?>
    
    <div class="container mt-4">
    	<form method="POST">
		  <div class="mb-3">
		    <label class="form-label">Username:</label>
		    <input type="text" name="username" id="username" class="form-control">
		   
		  </div>
		  <div class="mb-3">
		    <label for="exampleInputPassword1" class="form-label">Password:</label>
		    <input type="password" name="password" id="password" class="form-control">
		  </div>

		  <div class="mb-4 float-end">Don't have an account?<a href="registration.php">Register Here</a></div>
	
		  <button type="submit" name="login" class="btn btn-primary mt-4">Submit</button>
		</form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  
  </body>
</html>

