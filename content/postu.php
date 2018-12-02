<div class="container" style="margin-top: 50px; margin-bottom: 50px; height: 537px;" id="user">
	<h1 style="color:red"> Thông Tin Tài Khoản</h1>
	<?php 
	include("../backend/connectDB.php");
	$id_user = $_SESSION['idu'];
	$query = mysqli_query($connect, "SELECT id_user, name, email FROM user WHERE id_user='$id_user'");
	$row = mysqli_fetch_array($query);
	$name = $row['name'];
	include("../backend/closeDB.php");
	 ?>
	<div class="row">
		<div class="col-md-12">	
			<div class="col-md-12" style="float: left;"><h2>Tất Cả Bài Viết Của <?php echo $row['name']; ?></h2></div>
		</div>
		<div class="col-md-2">
			<div  style="width: 100%">
				<ul>
				<br>
				<a href='javascript: history.go(-1)' class='btn btn-danger'>Trở lại</a>
				</ul>
			</div>
		</div>
		<div class="col-md-10" >
			<div class="row">
				<div class="col-md-12 line1" style="margin-top: 5px; height: 30px; border: 1px solid"> 
					<div class="col-md-1 line1" style="float: left; margin-top: 5px; text-align: center;">ID</div>
					<div class="col-md-4 line1" style="float: left; margin-top: 5px; text-align: center;">Tiêu Đề</div>	
					<div class="col-md-2 line1" style="float: left; margin-top: 5px; text-align: center;">Loại</div>
					<div class="col-md-2 line1" style="float: left; margin-top: 5px; text-align: center;">Ngày Đăng</div>
					<div class="col-md-2 line1" style="float: left; margin-top: 5px; text-align: center;">Trạng Thái</div>
					<div class="col-md-1 line1" style="float: left; margin-top: 5px; text-align: center;">View</div>
				</div>
				<?php 
				include("../backend/connectDB.php");

				$query = mysqli_query($connect, "SELECT * FROM post where poster = '$name' ORDER BY id_post DESC");
				while ($row = $query->fetch_assoc()) {
				?>
				<div class="col-md-12 line2" style="margin-top: 5px;">
					<div class="col-md-1 line1" style="float: left; margin-top: 5px; text-align: center;"><?php echo $row['id_post']; ?></div>
					<div class="col-md-4 line1" style="float: left; margin-top: 5px; text-align: center;">
						<a href="../page/post_detail.php?id_post=<?php echo $row['id_post'] ?>">
							<?php echo $row['title']; ?>
						</a>
					</div>
					<div class="col-md-2 line1" style="float: left; margin-top: 5px; text-align: center;">
						<?php 
						if ($row['typepost'] == 1) echo "Công Nghệ";
						else if ($row['typepost'] == 2) echo "Xe";
						else if ($row['typepost'] == 3) echo "Game";
						else if ($row['typepost'] == 4) echo "Tin Tức";
								?>  
					</div>
					<div class="col-md-2 line1" style="float: left; margin-top: 5px; text-align: center;"><?php echo $row['date_time']; ?></div>
					<div class="col-md-2 line1" style="float: left; margin-top: 5px; text-align: center;">
					<?php if ($row['status'] == 1){ ?> 
						<div style="text-align: center;">Đã duyệt</div>
					<?php  }else{  ?>
						<div style="text-align: center;">Chưa duyệt</div>
					<?php  } ?>  
					</div>
					<div class="col-md-1 line1" style="float: left; margin-top: 5px; text-align: center;">
						<div class="col-md-12"><?php echo $row['view']; ?></div>
					</div>
				</div>
				<?php
				}
				include("../backend/closeDB.php");
				?>
				<!-- <nav aria-label="Page navigation example" style="width: 100%; margin-top: 15px;">
					<ul class="pagination justify-content-end" style="background:none;">
						<li class="page-item disabled">
						<a class="page-link" href="#" tabindex="-1">Previous</a>
						</li>
						<li class="page-item"><a class="page-link" href="#">1</a></li>
						<li class="page-item"><a class="page-link" href="#">2</a></li>
						<li class="page-item"><a class="page-link" href="#">3</a></li>
						<li class="page-item">
						<a class="page-link" href="#">Next</a>
						</li>
					</ul>
				</nav> -->
			</div>	
		</div>
	</div>
</div>