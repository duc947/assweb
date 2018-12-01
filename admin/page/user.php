<!DOCTYPE html>
<html>
<head>
	<title>Danh sách người dùng</title>

	<?php include("../layout/head.php"); ?>
</head>
<body onload="fix_layout()">
	<?php include("../layout/header.php"); ?>
	<div class="container-fluid" style="padding-right: 0px; padding-left: 0px;">    
		<div class="main-contain" style="margin-top: 0px;">
			<div class="row">
				<div class="col-md-3" style="padding: 0px; background-color: #f1f1f1;">
					<?php include("../layout/menu.php"); ?>
				</div>
				<div class="col-md-9">
					<?php include("../content/user.php"); ?>
				</div>
				<div class="col-md-3" id="ad"></div>
			</div>
		</div>
	</div>
	<?php include("../layout/footer.php"); ?>
</body>
</html>