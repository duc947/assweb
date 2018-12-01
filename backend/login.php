<?php 

$inputEmail = addslashes($_POST['email']);
$inputPassword = addslashes($_POST['password']);

if (!$inputEmail || !$inputPassword) {
	echo "Vui lòng nhập đầy đủ Email & Password. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	exit;
}

$inputPassword = md5($inputPassword);

include('connectDB.php');
$query = mysqli_query($connect, "SELECT id_user, email, password FROM user WHERE email='$inputEmail'");

if (mysqli_num_rows($query) == 0) {
	echo "Sai tên đăng nhập. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	exit;
} else {
	$row = mysqli_fetch_array($query);
	if ($inputPassword != $row['password']) {
		echo "Sai mật khẩu. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
		exit;
	}
}

session_start();

$_SESSION['id_user'] = $row['id_user'];

header('Location: ../');

include('closeDB.php');

?>