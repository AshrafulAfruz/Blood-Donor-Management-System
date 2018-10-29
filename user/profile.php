<?php
	session_start();
	error_reporting(0);
	include('includes/config.php');
	if(strlen($_SESSION['alogin'])==0)
		{	
	header('location:../index.php');
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
    <div class="container">
 
        <h1 class="mt-4 mb-3" style="margin-left: 450px ;margin-top: 60px">My Profile</h1>
        <br>
		
	  

        <div class="row">
		<div class="col-lg-4 col-sm-6 portfolio-item" >
		</div>
		
                   <?php 

//$status=1;
$email=$_SESSION['alogin'];
//$bloodgroup=$_POST['bloodgroup'];
//$location=$_POST['location'];
$sql = "SELECT * from tblblooddonars where Emailid=:email";
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
{ ?>

            <div class="col-lg-4 col-sm-6 portfolio-item" >
                <div class="card h-100" style="background-color: #F7F8F7">
                   <!-- <a href="#"><img class="card-img-top img-fluid" src="images/blood-donor.jpg" alt="" ></a> -->
                    <div class="card-block">
                        <h4 class="card-title"><a href="#"><p>  </p>  <?php echo htmlentities($result->FullName);?></a></h4>
                        <p class="card-text"><b>Email Id :</b> <?php echo htmlentities($result->EmailId);?></p>
                       
                             </p>
		<p class="card-text"><b>Mobile No. :</b> <?php echo htmlentities($result->MobileNumber);?></p>					 
<p class="card-text"><b>  Gender :</b> <?php echo htmlentities($result->Gender);?></p>
<p class="card-text"><b> Age:</b> <?php echo htmlentities($result->Age);?></p>
<p class="card-text"><b>Blood Group :</b> <?php echo htmlentities($result->BloodGroup);?></p>
<p class="card-text"><b>Location :</b>  <?php echo htmlentities($result->Address);?></p>
<p class="card-text"><b>Last Donation Date :</b> <?php echo htmlentities($result->lastdonate);?></p>                

    

                    </div>
					<!--
					 <div class="col-sm-8 col-sm-offset-4" style="margin-bottom: 5px">
								
													<button class="btn btn-primary" name="submit" type="submit">Update</button>
												</div>
												-->
					
                </div>
				
			 
            </div>

            <?php }}
			
else
{
echo htmlentities("No Records Found");

}


             ?>
          
 

                                  

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
