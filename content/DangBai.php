<div class="container-fluid allbody">
	<div class="container-fluid body1" >   
		<div >
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="../page/home.php"><span class="icon is-small">
						<i class="fas fa-home" aria-hidden="true"></i>
					</span>
					<span>Home</span></a></li>
				<li class="breadcrumb-item">
                    <?php 
                        if ($_SESSION["topic"] == 1) {?>
                        <a href="../page/tech.php">
                            <span class="icon is-small">
                            <i class="fas fa-book" aria-hidden="true"></i>
                            </span>
                            <span>
                                Công Nghệ
                            </span>
                        </a>
                        <?php }else if ($_SESSION["topic"] == 2) { ?>
                            <a href="../page/car.php">
                                <span class="icon is-small">
                                <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <span>
                                    Xe
                                </span>
                            </a>
                            <?php } 
                        else if ($_SESSION["topic"] == 3) { ?>
                            <a href="../page/game.php">
                                <span class="icon is-small">
                                <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <span>
                                    Game
                                </span>
                            </a>
                            <?php }  
                        else if ($_SESSION["topic"] == 4) { ?>
                            <a href="../page/news.php">
                                <span class="icon is-small">
                                <i class="fas fa-book" aria-hidden="true"></i>
                                </span>
                                <span>
                                    Tin Tức
                                </span>
                            </a>
                            <?php }
                        ?></li>
				<li class="breadcrumb-item active" aria-current="page"> <span class="icon is-small">
						<i class="fas fa-puzzle-piece" aria-hidden="true"></i>
					</span>
					<span>New post</span></li>
				</ol>
			</nav>
			
			<h2 style="text-align:center;" >Create a Topic</h2><br>
            <form class="form-horizontal" action="../backend/post.php" method="POST" enctype="multipart/form-data" style="margin:10px;">
                <div class="form-group">
					<input type="hidden" class="form-control" name="author" value="<?php echo $_SESSION['id_user']; ?>">	
				</div>
				<div class="form-group">
					<input type="hidden"  class="form-control" name="typepost" id="typepost" value="<?php echo $_SESSION['topic']; ?>">
				</div>
				<div class="form-group">
					<input type="hidden"  class="form-control" name="status" id="status" value="0">
                </div>
                <label>Tiêu đề:</label>
				<div class="input-group mb-3" >
					<div class="input-group-prepend">
					    <span class="input-group-text" id="basic-addon1">#</span>
                    </div>
                    <input type="text" class="form-control" name="titlepost" placeholder="Tittle of topic" aria-label="Username" aria-describedby="basic-addon1">
                </div>
				<div class="form-group">
					<label>Decription:</label>
					<input type="text" class="form-control" name="decription">
                </div>
                <div class="form-group">
					<label>Hình:</label>
					<!-- <input type='text' class='form-control' placeholder='Hình ảnh' name='img_lnk'> -->
                    <input type="file" name="fileToUpload" id="fileToUpload">
                </div>
                <div class="form-group">
                    <label>Nội Dung:</label><br>
                    <textarea class="content" name="contentpost"></textarea>
                </div>
                
                <div style="text-align:right;margin:10px;" >
					<input class="btn btn-primary" type="submit" name="submit" onclick="dangbai()" value="Submit">
					<input class="btn btn-primary" type="reset" value="Reset">
			    </div>
			</form>
			<br>
			
		</div>
	</div>
</div>