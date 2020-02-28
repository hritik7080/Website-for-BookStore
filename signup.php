<?php require 'includes/common.php'?>
<?php if(isset($_SESSION['email'])){
	header('location:products.php');}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Sign Up | Treetop Bookshop</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="icon" type="image/png" href="images/logo.png">
	 <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<!--Bootstrap Javascript-->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu" rel="stylesheet">
	<style type="text/css" media="screen">
		.form{
			margin-top: 7%;
		}
		#first{
			margin-top: 15px;
		}
		#error{
			color:red;
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
		<div class="col-xs-3"></div>
		<div class="col-xs-6">
		<div class="jumbotron">
		<div class="row">
			<div class="panel panel-info">
				<div class="panel-heading">
					<h2 style="font-family: 'Ubuntu', sans-serif;">Sign Up</h2>
				</div>
				<div class="container">
					<div class="panel body">
						<form  action="signup_script.php" method="POST">
                            <div class="form-group">
                                <input class="form-control" placeholder="Name" name="name" id="first" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control"  placeholder="Email" name="e-mail" required = "true">   
                            </div>
                            <div class="form-group">
                                <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                            </div>
                            <div class="form-group">
                                <input type="text" class="form-control"  placeholder="Contact" maxlength="10" size="10" name="contact" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="City" name="city" required = "true">
                            </div>
                            <div class="form-group">
                                <input  type="text" class="form-control"  placeholder="Address" name="address" required = "true">
                            </div>
                            <button type="submit" name="submit" onclick="hurray()" class="btn btn-primary form-control">Submit</button>
                        </form>
                        <script>
                    confirm("Please enter your unique email to signup.");
                        </script>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
</body>
</html>