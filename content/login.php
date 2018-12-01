<div class="container-fluid" style="margin-top: 50px;">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
				<!-- begin phần của you nội dung như đã bàn: đăng kí...-->
			<form class="form-signin" action="../backend/login.php" method="POST">
			    <h3 class="form-signin-heading" style="color: #573131">Đăng nhập tài khoản</h3>
			    <input type="email" id="inputEmail" class="form-control" placeholder="Địa chỉ email" name="email" required autofocus>
			    <input type="password" id="inputPassword" class="form-control" placeholder="Password" name="password" required autofocus>
			    <div class="checkbox">
					<label>
					    <input type="checkbox" value="remember-me"> Nhớ mật khẩu
					</label>
				</div>
				<button class="btn btn-lg btn-info btn-block" type="submit">Đăng nhập</button>
			</form>
				<!-- the end nội dung của you-->
		</div>
		<div class="col-md-2"></div>
	</div>
</div>