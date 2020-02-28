<?php require 'includes/common.php';
if(!isset($_SESSION['email'])){
	header('location: login.php');
}
else{
	session_unset();
	session_destroy();
	header('location: book_store.php');
}
?>