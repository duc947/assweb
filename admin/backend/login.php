<?php 

if ($_POST['username'] && $_POST['password']) {
	$adminName = addslashes($_POST['username']);
	$adminPass = addslashes($_POST['password']);

	include('connectDB.php');

	$sql = mysqli_query($connect, "SELECT username, password FROM admin WHERE username='$adminName'");

	if (!$sql) {
		echo "Username hoặc Passwod không chính xác. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
		exit;
	}

	$row = mysqli_fetch_array($sql);

	if (md5($adminPass) != $row['password']) {
		echo "Vui lòng nhập đầy đủ Username & Password. <a href='javascript: history.go(-1)'' class='btn btn-default'>";
		exit;
	}

	session_start();

	$_SESSION['adminName'] = $adminName;

	header('Location: ../');

	include('closeDB.php');

} else {
	echo "Vui lòng nhập đầy đủ Username & Password. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	exit;
}

 ?>