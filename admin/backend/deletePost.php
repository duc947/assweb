<?php 

if ($_GET['id']) {
	include('connectDB.php');
	$id = $_GET['id'];
	if (mysqli_query($connect, "DELETE FROM post WHERE id_post='$id'")) {
		header("Location: ../page/post.php");
	} else {
		echo "Có lỗi xảy ra, vui lòng thử lại. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	}

	include('closeDB.php');
} else {
	echo "Có lỗi xảy ra, vui lòng thử lại. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	exit;
}

 ?>