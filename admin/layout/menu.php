<div class="container" style=" margin: 10px 50px;">
 <div class="row">
 <div class="col-md-2">
 		<div style="padding-top:20px;width: 100%;">
 			<?php session_start(); ?>
			<ul>
				<li>Xin chào, <?php echo $_SESSION['adminName'];?></li>
				<br>
				<li><a href="../page/post.php">BÀI ĐĂNG</a></li>
				<li><a href="../page/user.php">NGƯỜI DÙNG</a></li>
				<li><a href="../backend/logout.php">Thoát</a></li>
			</ul>
 		</div>
</div>