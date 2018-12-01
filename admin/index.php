<?php 
session_start();
if (isset($_SESSION['adminName'])) {
	header('Location: ./page/post.php');
} else {
	header('Location: ./page/login.php');
}

?>