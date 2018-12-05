<div class="container">
<div class="row">
	<div class="col-sm-12">
		<h1>Đăng nhập trang quản trị</h1>
	</div>
</div>
<div class="row">
	<div class="col-sm-12">
	<div id="login">
		<form id="contact-form" action="../backend/login.php" method="POST" class="form-horizontal">
			<div class="form-group">
				<label class="control-label col-sm-2">Username: </label>
				<div class="col-sm-4">
					<input class="form-control" type="text" name="username" placeholder="Nhập tên đăng nhập">
				</div>
			</div>
			<div class="form-group">
				<label class="control-label col-sm-2">Password</label>
				<div class="col-sm-4">
					<input class="form-control" type="password" name="password" placeholder="Nhập password">
				</div>
			</div>
			<div class="form-group">
				<div class="control-label col-sm-2"></div>
				<div class="col-sm-4">
					<input class="form-control btn btn-primary" type="submit" name="login">
				</div>
			</div>
		</form>
	</div>
	</div>
</div>
</div>