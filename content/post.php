<div class="col-md-10">
	<div class="row">
		<div>
			<h1>Đăng bài viết <?php 
              if ($_SESSION["topic"] == 1) echo "Công Nghệ";
              else if ($_SESSION["topic"] == 2) echo "Xe";
			  else if ($_SESSION["topic"] == 3) echo "Game";
			  else if ($_SESSION["topic"] == 4) echo "Tin Tức";
              ?>  </h1>
		</div>
		<div class="col-md-12">
			<form class="form-horizontal" action="../backend/post.php" method="POST">
				<div class="form-group">
					<input type="hidden" class="form-control" name="author" value="<?php echo $_SESSION['id_user']; ?>">	
				</div>
				<div class="form-group">
					<input type="hidden"  class="form-control" name="typepost" id="typepost" value="<?php echo $_SESSION['topic']; ?>">
				</div>
				<div class="form-group">
					<input type="hidden"  class="form-control" name="status" id="status" value="0">
				</div>
				<div class="form-group">
					<label>Tiêu đề:</label>
					<input type="text" class="form-control" name="titlepost">
				</div>
				<div class="form-group">
					<label>Decription:</label>
					<input type="text" class="form-control" name="decription">
				</div>
				<div class="form-group">
					<label>Hình:</label>
					<input type='text' class='form-control' placeholder='Hình ảnh' name='img_lnk'>
				</div>
				<div class="form-group">
					<label>Nội Dung:</label><br>
					<textarea class="content" name="contentpost" rows="20" cols="110"></textarea>
				</div>
				<div class="form-group">
					<input type="submit" name="submit" value="Đăng" class="btn btn-primary btn-lg">
					<a href='javascript: history.go(-1)' class="btn btn-danger btn-lg">Trở lại</a>
				</div>
			</form>
		</div>
	</div>
</div>
</div>
</div> 
</div>
