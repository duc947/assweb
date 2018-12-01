<?php 

if ($_POST['submit'] && $_POST['typeEdit'] == 1) { // Change name

	if ($_POST['nameInput'] == '') {
		echo "Vui lòng nhập tên mới. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
		exit;
	}

	include("connectDB.php");

	$nameInput = addslashes($_POST['nameInput']);
	$id_user = $_POST['user'];

	if (mysqli_query($connect, "UPDATE user SET name='$nameInput' WHERE id_user='$id_user'")) {
		header("Location: ../page/user.php?user=$id_user");
	} else {
		echo "Có lỗi xảy ra. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	}

	include("closeDB.php");

	exit;

} else if ($_POST['submit'] && $_POST['typeEdit'] != 1) { // Change pass

	if ($_POST['oldPass'] == '' || $_POST['newPass'] == '' || $_POST['newPass2'] == '') {
		echo "Vui lòng nhập đầy đủ các miền. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
		exit;
	}

	include("connectDB.php");

	$id_user = $_POST['user'];

	$query = mysqli_query($connect, "SELECT password FROM user WHERE id_user='$id_user'");

	$row = mysqli_fetch_assoc($query);

	$oldPass = $_POST['oldPass'];

	if (md5($oldPass) != $row['password']) {
		echo "Mật khẩu không chính xác. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
		exit;
	}

	$newPass = md5($_POST['newPass']);
	$newPass2 = md5($_POST['newPass2']);

	if ($newPass != $newPass2) {
		echo "Mật khẩu xác nhận không trùng khớp. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
		exit;
	}

	if (mysqli_query($connect, "UPDATE user SET password='$newPass' WHERE id_user='$id_user'")) {
		header("Location: ../page/user.php?user=$id_user");
	} else {
		echo "Có lỗi xảy ra. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	}

	include("closeDB.php");

	exit;

} else {
	echo "Có lỗi xảy ra. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	exit;
}
















 ?>