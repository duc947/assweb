<?php 
if ($_POST['submit']) {
	include("connectDB.php");

	$img_get = mysqli_query($connect, "SELECT * FROM post ORDER BY id_post DESC LIMIT 1");
	$row = mysqli_fetch_array($img_get);
	$img = $row['id_post'] + 1;
	$img = "$img";
	//var_dump($row['id_post']);
	$target_dir = "../images/";
	$target_file = $target_dir . $img .".jpg";
	$uploadOk = 1;
	$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
	move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file);
	//user
	$id = $_POST['author'];
	$query = mysqli_query($connect, "SELECT id_user, name FROM user WHERE id_user='$id'");
	$row = mysqli_fetch_array($query);
	//post
	$author = $row['name'];
	$curr_timestamp = date('Y-m-d H:i:s');
	$title = addslashes($_POST['titlepost']);
	$decription = addslashes($_POST['decription']);
	$typepost = $_POST['typepost'];
	$img_lnk = addslashes($img .".jpg");
	$contentpost = addslashes($_POST['contentpost']);
	$status = 0;

	if (mysqli_query($connect, "INSERT INTO post
		(poster, date_time, title, 	decription, typepost, img_lnk, contentpost, status, view) VALUE 
		('$author', '$curr_timestamp', '$title', '$decription', '$typepost', '$img_lnk', '$contentpost', $status, $status)")) {
		header("Location: ../page/post.php");
	} else {
		echo "Có lỗi kết nối xảy ra vui lòng thử lại. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
		exit;
	}
	include("closeDB.php");
} else {
	echo "Có lỗi submit xảy ra vui lòng thử lại. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	exit;
}
?>