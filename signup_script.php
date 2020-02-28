<?php
require("includes/common.php");
  $name = $_POST['name'];
  $name = mysqli_real_escape_string($con, $name);

  $email = $_POST['e-mail'];
  $email = mysqli_real_escape_string($con, $email);

  $password = $_POST['password'];
  $password = mysqli_real_escape_string($con, $password);
  $password = MD5($password);

  $contact = $_POST['contact'];
  $contact = mysqli_real_escape_string($con, $contact);

  $city = $_POST['city'];
  $city = mysqli_real_escape_string($con, $city);

  $address = $_POST['address'];
  $address = mysqli_real_escape_string($con, $address);

  $query = "SELECT * FROM users WHERE email='$email'";
  $result = mysqli_query($con, $query)or die($mysqli_error($con));
  $num = mysqli_num_rows($result);
if($num!=0){?>
<script>
    if(confirm("Email Aready exist.")==true){
        <?php header('location: signup.php');?>
    }
    else{
        <?php header('location: signup.php');?>
    }
</script>
<?php    
}
else {
    
    $querya="insert into users(name, email, password, contact, city, address) values ('$name','$email','$password','$contact','$city','$address')";
    mysqli_query($con,$querya) or die(mysqli_error($con));
    $user_id = mysqli_insert_id($con);
    $_SESSION['email'] = $email;
    $_SESSION['user_id'] = $user_id;
    header('location: products.php');
  }
?>