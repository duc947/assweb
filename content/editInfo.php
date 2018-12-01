<div class="container" style="margin-top: 50px; margin-bottom: 50px;" id="user">
	<h1 style="color:red"> Thông Tin Tài Khoản</h1>
 <div class="row">
 <div class="col-md-12">	
 	<div class="col-md-3"><h2>Menu</h2></div>
 	<div class="col-md-9">
 		<h2>
 			<?php if ($_GET['typeEdit'] == 1) echo "Thay đổi thông tin"; else echo "Thay đổi mật khẩu"; ?>
		</h2>
	</div>
 </div>
 <div class="col-md-12">
 	<form action="../backend/editInfo.php" method="POST">
 		<div class="form-group">
 			<input type="hidden" name="user" value="<?php echo $_GET['id']; ?>">
 			<input type="hidden" name="typeEdit" value="<?php echo $_GET['typeEdit']; ?>">
 		</div>
 	<?php if ($_GET['typeEdit'] == 1) { ?>
 		<div class="form-group">
		    <label class="control-label col-sm-2"">Tên mới</label>
		    <div class="col-sm-10">
		    	<input type="text" class="form-control" placeholder="Nhập tên mới" name="nameInput">
		    </div>
		</div>
		<div class="form-group">
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
		    	<input type="submit" name="submit" value="Đổi tên" class="btn btn-primary">
		    	<a href='javascript: history.go(-1)' class='btn btn-danger'>Trở lại</a>
		    </div>
		</div>	
 	<?php } else { ?>
 		<div class="form-group">
		    <label class="control-label col-sm-2"">Mật khẩu cũ:</label>
		    <div class="col-sm-10">
		    	<input type="password" class="form-control" placeholder="Mật khẩu cũ" name="oldPass">
		    </div>
		</div>
		<div class="form-group">
		    <label class="control-label col-sm-2"">Mật khẩu mới:</label>
		    <div class="col-sm-10">
		    	<input type="password" class="form-control" placeholder="Mật khẩu mới" name="newPass">
		    </div>
		</div>
		<div class="form-group">
		    <label class="control-label col-sm-2"">Xác nhận mật khẩu mới:</label>
		    <div class="col-sm-10">
		    	<input type="password" class="form-control" placeholder="Xác nhận mật khẩu mới" name="newPass2">
		    </div>
		</div>
		<div class="form-group">
			<div class="col-sm-2"></div>
			<div class="col-sm-10">
		    	<input type="submit" name="submit" value="Đổi mật khẩu" class="btn btn-primary">
		    	<a href='javascript: history.go(-1)' class='btn btn-danger'>Trở lại</a>
		    </div>
		</div>
 	</form>
 	<?php } ?>
 </div>
</div>
</div>