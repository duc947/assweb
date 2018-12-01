<?php 

$nameInput 		= 	addslashes($_POST['nameInput']);
$emailInput		= 	addslashes($_POST['emailInput']);
$passInput 		= 	addslashes($_POST['passInput']);
$pass2Input 	= 	addslashes($_POST['pass2Input']);

// Kiểm tra input
if (!$nameInput || !$emailInput || !$pass2Input || !$pass2Input) {
	echo "Vui lòng điền đầy đủ thông tin đăng ký. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	exit;
} 

if (strlen($nameInput) < 2 || strlen($nameInput) > 30) {
	echo "Tên đăng nhập phải dài từ 2 đến 30 kí tự. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	exit;
} 
if (!filter_var($emailInput, FILTER_VALIDATE_EMAIL)) {
	echo "Định dạng email không phù hợp. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	exit;
} 
if (strlen($passInput) < 4 || strlen($passInput) > 16) {
	echo "Mật khẩu phải từ 4 đến 16 kí tự. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	exit;
} 
if (substr_compare($passInput, $pass2Input, 0) != 0) {
	echo "Mật khẩu phải giống nhau. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	exit;
}

$passInput = md5($passInput);

include('connectDB.php');

// Kiểm tra username đã có người dùng chưa
if (mysqli_num_rows(mysqli_query($connect, "SELECT email FROM user WHERE email='$emailInput	'")) > 0) {
	echo "Email đã có người sử dụng, vui lòng chọn tên khác. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	exit;
}

$addmember = mysqli_query($connect, "
	INSERT INTO user(
		name,
		email,
		password
	) VALUE (
		'$nameInput',
		'$emailInput',
		'$passInput'
	)");

// Thực hiện thêm user
if ($addmember) {
	header('Location: ../');
}
else {
	echo "Có lỗi xảy ra, vui lòng thử lại. <a href='javascript: history.go(-1)'' class='btn btn-default'>Trở lại</a>";
	exit;
}

include("closeDB.php");

?>

