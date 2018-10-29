<?php
session_start();
include('../includes/config.php');
if(isset($_POST['login']))
{
$email=$_POST['email'];
$name=$_POST['password'];
$sql ="SELECT EmailId,password FROM tblblooddonars WHERE EmailId=:email and password=:password";
$query= $dbh -> prepare($sql);
$query-> bindParam(':email', $email, PDO::PARAM_STR);
$query-> bindParam(':password', $name, PDO::PARAM_STR);
$query-> execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
if($query->rowCount() > 0)
{
$_SESSION['alogin']=$_POST['email'];
echo "<script type='text/javascript'> document.location = 'profile.php'; </script>";
} else{
  
  echo "<script>alert('Invalid Details');</script>";

}

}

?>
<!doctype html>
<html lang="en" class="no-js">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
	<meta name="description" content="">
	<meta name="author" content="">

	<title>Admin Login</title>
	<link rel="stylesheet" href="../admin/css/font-awesome.min.css">
	<link rel="stylesheet" href="../admin/css/bootstrap.min.css">
	<link rel="stylesheet" href="../admin/css/dataTables.bootstrap.min.css">
	<link rel="stylesheet" href="../admin/css/bootstrap-social.css">
	<link rel="stylesheet" href="../admin/css/bootstrap-select.css">
	<link rel="stylesheet" href="../admin/css/fileinput.min.css">
	<link rel="stylesheet" href="../admin/css/awesome-bootstrap-checkbox.css">
	<link rel="stylesheet" href="../admin/css/style.css">
</head>

<body>
	
	<div class="login-page bk-img" style="background-image: url(../admin/img/banner.png);">
		<div class="form-content">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<h1 class="text-center text-bold text-light mt-4x">Bloodforces User Sign in</h1>
						<div class="well row pt-2x pb-3x bk-light">
							<div class="col-md-8 col-md-offset-2">
								<form method="post">

									<label for="" class="text-uppercase text-sm">Email </label>
									<input type="email" placeholder="email" name="email" class="form-control mb">

									<label for="" class="text-uppercase text-sm">password</label>
									<input type="password" placeholder="password" name="password" class="form-control mb">

								

									<button class="btn btn-primary btn-block" name="login" type="submit">LOGIN</button>
									
									<p> <br>does not register Yet? &nbsp Please <a href="../become-donar.php">  Register</a> here</P> 

								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- Loading Scripts -->
	<script src="js/jquery.min.js"></script>
	<script src="js/bootstrap-select.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.dataTables.min.js"></script>
	<script src="js/dataTables.bootstrap.min.js"></script>
	<script src="js/Chart.min.js"></script>
	<script src="js/fileinput.js"></script>
	<script src="js/chartData.js"></script>
	<script src="js/main.js"></script>

</body>

</html>