  <div class="col-md-10">
  		 <div class="row">
  		 	<div class="col-md-12">
  		 	</div>
  		 	<div class="col-md-12 line1" style="margin-top: 5px; height: 30px; border: 1px solid"> 
  		 		<div class="col-md-1 line1" style="float: left;margin-top: 5px;">ID</div>
				<div class="col-md-4 line1" style="float: left;margin-top: 5px;">Tiêu Đề</div>	
  		 		<div class="col-md-2 line1" style="float: left;margin-top: 5px;">Loại</div>
  		 		<div class="col-md-2 line1" style="float: left;margin-top: 5px;">Người Đăng</div>
				<div class="col-md-1 line1" style="float: left;margin-top: 5px;">Duyệt</div>
  		 		<div class="col-md-2 line1" style="float: left;margin-top: 5px;">Xóa</div>
  		 	</div>
        <?php 
        include("../backend/connectDB.php");

        $query = mysqli_query($connect, "SELECT * FROM post ORDER BY id_post DESC");
        while ($row = $query->fetch_assoc()) {
        ?>
          <div class="col-md-12 line2" style="margin-top: 5px;">
            <div class="col-md-1 line1" style="float: left;margin-top: 5px;"><?php echo $row['id_post']; ?></div>
            <div class="col-md-4 line1" style="float: left;margin-top: 5px;">
				<a href="http://localhost/page/post_detail.php?id_post=<?php echo $row['id_post'] ?>">
					<?php echo $row['title']; ?>
				</a>
			</div>
            <div class="col-md-2 line1" style="float: left;margin-top: 5px;">
              <?php 
              if ($row['typepost'] == 1) echo "Công Nghệ";
              else if ($row['typepost'] == 2) echo "Xe";
			  else if ($row['typepost'] == 3) echo "Game";
			  else if ($row['typepost'] == 4) echo "Tin Tức";
              ?>  
            </div>
            <div class="col-md-2 line1" style="float: left;margin-top: 5px;"><?php echo $row['poster']; ?></div>
			<div class="col-md-1 line1" style="float: left;margin-top: 5px;">
			<?php if ($row['status'] == 1){ ?> 
			  <form action="../backend/cancel.php" method="POST">
				<input type="text" name="id_post" hidden="hidden" value="<?php echo $row['id_post']; ?>">
				<input class="button" type="submit" value="Hủy Đăng">
			  </form>
			<?php  }else{  ?>
			  <form action="../backend/accept.php" method="POST">
				<input type="text" name="id_post" hidden="hidden" value="<?php echo $row['id_post']; ?>">
				<input class="button" type="submit" value="Duyệt Đăng">
			  </form>
			<?php  } ?>  
			</div>
            <div class="col-md-2 line1" style="float: left;margin-top: 5px;">
                <div class="col-md-12">
                    <a href="../backend/deletePost.php?id=<?php echo $row['id_post']; ?>">Xóa</a>
                </div>
            </div>
          </div>
        <?php
        }
        include("../backend/closeDB.php");
         ?>
  	</div>	
  </div>
</div> 
</div>