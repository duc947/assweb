<?php 

if (isset($_POST['id_post'])) {
	include('connectDB.php');
	$id = $_POST['id_post'];
	if (mysqli_query($connect, "UPDATE post SET status=1 WHERE id_post='$id'")) {
		header("Location: ../page/post.php");
	} else {
		echo "Có lỗi xảy sdfghjk, vui lòng thử lại. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	}

	include('closeDB.php');
} else {
	echo "Có lỗi xảy ra, vui lòng thử lại. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	exit;
}
 ?>