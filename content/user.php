<div class="container" style="margin-top: 50px; margin-bottom: 50px; height: 537px;" id="user">
	<h1 style="color:red"> Thông Tin Tài Khoản</h1>
	<?php 
	include("../backend/connectDB.php");
	$id_user = $_GET['user'];
	$query = mysqli_query($connect, "SELECT id_user, name, email FROM user WHERE id_user='$id_user'");
	$row = mysqli_fetch_array($query);

	include("../backend/closeDB.php");
	 ?>
	<div class="row">
		<div class="col-md-12">	
			<div class="col-md-3" style="float: left;"><h2>Menu</h2></div>
			<div class="col-md-9"><h2>Xin Chào, <?php echo $row['name']; ?></h2></div>
		</div>
		<div class="col-md-3">
			<div  style="width: 100%">
				<ul>
				<li><a href="../page/editInfo.php?id=<?php echo $_GET['user']; ?>&typeEdit=1">Thay Đổi Thông Tin</a></li>
				<li><a href="../page/editInfo.php?id=<?php echo $_GET['user']; ?>&typeEdit=2">Thay Đổi Mật Khẩu</a></li>
				<li><a href="../page/postu.php?idu=<?php echo $row['id_user']; ?>">Xem Tất Cả Bài Viết Của Bạn</a></li>
				</ul>
			</div>
		</div>
		<div class="col-md-9">
			<p>Thông Tin Tài Khoản Của Bạn</p>
			<p><b>Tên :</b> <?php echo $row['name']; ?></p>
			<p> <b>Email:</b> <?php echo $row['email']; ?></p>
		</div>
	</div>
</div>