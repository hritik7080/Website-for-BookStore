<?php require 'includes/common.php'?>
<?php if(isset($_SESSION['email'])){
	header('location:products.php');}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>LogIn | Treetop Bookshop</title>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/logo.png">
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!--Bootstrap Javascript-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<link rel="stylesheet" type="text/css" href="stylesheets/footer.css">
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
	<style type="text/css" media="screen">
        
		.form{
			margin-top: 12%;
		}
        @media only screen and(max-width:570px){
            .form{
                margin-top: 18%;
            }
        }
		#first{
			margin-top: 15px;
		}
        body{
            background-image: url(images/login.jpg);
            background-size: cover;
        }
	</style>
</head>
<body>
	<?php include("includes/header.php") ?>
	<div class="container form">
		<div class="col-xs-6 col-xs-offset-3">
		<div class="jumbotron">
		<div class="row">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h2 style="font-family: 'Ubuntu', sans-serif; font-size">LogIn</h2>
				</div>
				<div class="container">
					<div class="panel body">
						<form action="login_submit.php" method="post">
							<input type="email" id="first" name="email" placeholder="Email" class="form-control form-group" required="true">
							<input type="password" name="password" placeholder="Password" class="form-control form-group" required="true">
							
							<input type="submit" name="submit" value="LogIn" class="btn btn-primary form-control">
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
    <script>
        confirm("Enter your correct email id and password to login.");
    </script>
	
</body>
</html>