<?php
	session_start();
	error_reporting(0);
	include('includes/config.php');
	if(strlen($_SESSION['alogin'])==0)
		{	
	header('location:../index.php');
	}
	
	else{
	// Code for change password	
	
	
	if(isset($_POST['submit']))
	{
	$eemail=$_SESSION['alogin'];
	$name=$_POST['name'];
	
	$email=$_POST['email'];	
	
	$mobile=$_POST['mobile'];
	$location=$_POST['location'];
	$password=$_POST['password'];
	
	$sql="update tblblooddonars  set FullName=:name,Address=:location,EmailId=:email,MobileNo=:mobile,password=:password where EmailId=:eemail";
	$query = $dbh->prepare($sql);
	$query->bindParam(':name',$name,PDO::PARAM_STR);
	$query->bindParam(':location',$location,PDO::PARAM_STR);
	$query->bindParam(':email',$email,PDO::PARAM_STR);
	$query->bindParam(':eemail',$eemail,PDO::PARAM_STR);
	$query->bindParam(':mobile',$mobile,PDO::PARAM_STR);
	$query->bindParam(':password',$password,PDO::PARAM_STR);
	$query->execute();
	if($query->rowCount() > 0)
	  $msg="Successfully updated ";
	else
	   $msg="Successfully not updated ";
	}
	?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>

    <!-- Bootstrap core CSS -->
    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="../vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="../css/modern-business.css" rel="stylesheet">
	
	
	

    <!-- Temporary navbar container fix -->


</head>

<body>


<?php include('includes/header.php');?>
    <!-- Page Content -->
    <div class="container" style="margin-top: 15px ; width: 100%" >
        
        <div class="row" style="background-color: #F7F8F7">
		  <br><br>
					<div style="margin-left: 30%; width: 70%">
					
					<div class="col-sm-12 " >
					
						<h2 class="page-title" style="margin-bottom: 15px; margin-top : 15px; margin-left : 115px">Update Profile Info</h2>

						<div class="row">
							<div class="col-md-10">
								<div class="panel panel-default">
								
									<div class="panel-body">
										<form method="post" name="chngpwd" class="form-horizontal" onSubmit="">
										
											
  	        	  <?php if($error){?><div class="errorWrap"><strong>ERROR</strong>:<?php echo htmlentities($error); ?> </div><?php } 
				else if($msg){?><div class="succWrap"><strong>SUCCESS</strong>:<?php echo htmlentities($msg); ?> </div><?php }?>
				<?php
$email=$_SESSION['alogin'];
//$bloodgroup=$_POST['bloodgroup'];
//$location=$_POST['location'];
$sql = "SELECT * from tblblooddonars where EmailId=:email";
$query = $dbh -> prepare($sql);
$query->bindParam(':email',$email,PDO::PARAM_STR);
//$query->bindParam(':bloodgroup',$bloodgroup,PDO::PARAM_STR);
//$query->bindParam(':location',$location,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
$cnt=1;

if($query->rowCount() > 0)
{

foreach($results as $result)
{				?>	

				<div class="form-group">
												<label class="col-lg-4 control-label"> Full Name</label>
												<div class="col-sm-8">
													<input type="text" value ="<?php echo htmlentities($result->FullName);?>" class="form-control" name="name" id="name" required></input>
												</div>
											</div>
			   <div class="form-group">
												<label class="col-sm-4 control-label"> Email Id</label>
												<div class="col-sm-8">
													<input type="email" class="form-control" name="email" id="email" value="<?php echo htmlentities($result->EmailId);?>" required>
												</div>
											</div>
              <div class="form-group">
												<label class="col-sm-8 control-label">Contact Number</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" value="<?php echo htmlentities($result->MobileNumber);?>" name="mobile" id="mobile" required>
												</div>
											</div>
									<div class="form-group">
												
											<label class="col-sm-8 control-label">Location</label>
											<div class="col-sm-8">
											<div><select name="location" class="form-control" required>
											<!--	<option value="">Select</option> -->
											<?php $sql = "SELECT * from  tbllocation ";
											$query = $dbh -> prepare($sql);
											$query->execute();
											$results=$query->fetchAll(PDO::FETCH_OBJ);
											$cnt=1;
											if($query->rowCount() > 0)
											{
											foreach($results as $result)
											{               ?>  
											<option value="<?php echo htmlentities($result->location);?>"><?php echo htmlentities($result->location);?></option>
											<?php }} ?>
											</select>
											</div>
											</div>
																					</div>
											
							<div class="form-group">
												<label class="col-sm-8 control-label">Last Donation date</label>
												<div class="col-sm-8">
													<input type="text" class="form-control" value="<?php echo htmlentities($result->lastdonate);?>" name="lastdonate" id="lastdonate" required>
												</div>
											</div>
											
											
											
<?php }} ?>
											
											<div class="hr-dashed"></div>
											
										
								
											
											<div class="form-group" style="margin-left: 170px;">
												<div class="col-sm-12 col-sm-offset-4">
								
													<button class="btn btn-primary" name="submit" type="submit">Update</button>
												</div>
											</div>

										</form>

									</div>
								</div>
							</div>
							
						</div>
						
					</div>

					</div>
				</div>
				
	  

   </div>
    <!-- /.container -->


    <!-- Footer -->
   <?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="../vendor/jquery/jquery.min.js"></script>
    <script src="../vendor/tether/tether.min.js"></script>
    <script src="../vendor/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
<?php } ?>
