<!DOCTYPE html>
<html>
<head>
	<title>BK Forum</title>

	<!-- Load library -->
	<?php include("../layout/head.php"); ?>

</head>
<body>
<!-- Load header -->
<?php 
include("../layout/header.php"); 
$_SESSION["id_post"] = $_GET["id_post"];
?>
<!-- Load content -->
<?php include("../content/post_detail.php"); ?>

<!-- Load footer -->
<?php include("../layout/footer.php"); ?>

</body>
</html>