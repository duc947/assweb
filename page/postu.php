<!DOCTYPE html>
<html>
<head>
	<title>Thông tin người dùng</title>

	<!-- Load library -->
	<?php include("../layout/head.php"); ?>

</head>
<body>

<!-- Load header -->
<?php include("../layout/header.php"); 
$_SESSION['idu'] = $_GET['idu'];
?>

<!-- Load content -->
<?php include("../content/postu.php"); ?>

<!-- Load footer -->
<?php include("../layout/footer.php"); ?>

</body>
</html>