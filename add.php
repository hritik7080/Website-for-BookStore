<?php
require ('includes/common.php');
//print_r($_FILES['image']);
$name = $_POST['naam'];
$price = $_POST['price'];
$cate= $_POST['category'];
$filename = $_FILES["image"]['name'];
$tempname = $_FILES["image"]['tmp_name'];
$folder = "books/".$filename;
move_uploaded_file($tempname,$folder);
if($cate=="physics"){
$query="Insert into books( name, price, image ) values ('$name','$price','$folder')";}
elseif($cate=="chemistry"){
    $query="Insert into books_ch( name, price, image ) values ('$name','$price','$folder')";
}
else{
    $query="Insert into books_mt( name, price, image ) values ('$name','$price','$folder')";
}
mysqli_query($con,$query) or die(mysql_error($con));
header('location:add_book.php');
?>