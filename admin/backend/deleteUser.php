<?php 


if(isset($_POST['idUser'])) {
	// Kết nối database
	include('connectDB.php');

	$inputID = $_POST['idUser'];

	//$sql = mysqli_query($connect, "DELETE FROM user WHERE id_user='$inputID'");
	//$sql1 = mysqli_query($connect, "DELETE FROM comment WHERE id_user='$inputID'");


	if (mysqli_query($connect, "DELETE FROM user WHERE id_user='$inputID'") && mysqli_query($connect, "DELETE FROM comment WHERE id_user='$inputID'")) {
		header("Location: ../page/user.php");
	} else {
		echo "Có lỗi xảy ra, vui lòng thử lại. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
		exit;
	}

	// Ngắt kết nối database
	include('closeDB.php');
} else {
	echo "Có lỗi xảy ra, vui lòng thử lại. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	exit;
}


?>