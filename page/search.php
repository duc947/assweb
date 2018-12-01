<!DOCTYPE html>
<html>
<head>
	<title>BK Forum</title>

	<!-- Load library -->
	<?php include("../layout/head.php"); ?>

</head>
<body>


<!-- Load header -->
<?php include("../layout/header.php"); ?>

<?php 
	$_SESSION["s_txt"] = $_POST['name'];
?>

<!-- Load content -->

<?php include("../content/search.php"); ?> 

<!-- Load footer -->
<?php include("../layout/footer.php"); ?>

</body>
</html>