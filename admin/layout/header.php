<?php session_start(); ?>
<div class="container-fluid" style="padding-right: 0px; padding-left: 0px;">
        <div class="menu">
            <div class="row">
                <div class="left-menu col-md-6 col-sm-12">
                    <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                        <a class="navbar-brand" href="../page/post.php">
                        	<img src="../images/logobk3.png" alt="logo" style="width:45px;">
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </nav>
                </div>
                <div class="form-group col-md-5 col-sm-12"  style="padding: 0px; text-align: right;">
                    <li><h3>Xin chào, <?php echo $_SESSION['adminName'];?></h3></li>
                </div>
            </div>
        </div>
    </div>
</div>
		