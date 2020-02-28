<?php
require("includes/common.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>
<?php
$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);
$query="select id, email, password from users where email='$email' and password='$password'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if ($num == 0) {?>
 <script>
         <?php header('location: login.php')?>
</script>-
<?php
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: products.php');}
?>
</body>
</html>

<?php
$email = $_POST['email'];
$email = mysqli_real_escape_string($con, $email);
$password = $_POST['password'];
$password = mysqli_real_escape_string($con, $password);
$password = MD5($password);
$query="select id, email, password from users where email='$email' and password='$password'";
$result = mysqli_query($con, $query)or die($mysqli_error($con));
$num = mysqli_num_rows($result);
if ($num == 0) {?>
 <script>
     if(confirm("Email ID or password does'nt match.")==true){
         <?php header('location: login.php');?>
     }
     else{
         <?php header('location: login.php');?>
     }
</script>
<?php
} else {  
  $row = mysqli_fetch_array($result);
  $_SESSION['email'] = $row['email'];
  $_SESSION['user_id'] = $row['id'];
  header('location: products.php');}
?>