<?php session_start(); ?>
<div class="container-fluid">
    <div class="menu">
        <div class="row">
            <div class="left-menu col-md-6 col-sm-12">
                <nav class="navbar navbar-expand-md bg-dark navbar-dark">
                    <a class="navbar-brand" href="../page/home.php">
                        <img src="../images/logobk3.png" alt="logo" style="width:45px;">
                    </a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="../page/tech.php">Công nghệ</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../page/car.php">Xe</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../page/game.php">Game</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../page/news.php">Tin tức</a>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="form-group d-flex align-items-center col-md-5 col-sm-12">
            <?php if (isset($_SESSION['id_user']) && $_SESSION['id_user']) { 
            include('../backend/connectDB.php');
            $id = $_SESSION['id_user'];
            $query = mysqli_query($connect, "SELECT id_user, name FROM user WHERE id_user='$id'");
            $row = mysqli_fetch_array($query);
            $name = $row['name'];
            include('../backend/closeDB.php');
            ?>
            <div class="row col-12">
                <form class="search-form col-md-8 col-sm-8" action="../page/search.php" method="POST">
                    <input type="text" name="name" size="100" placeholder="Tìm kiếm">
                    <i class="fas fa-search"></i>
                </form>
                <button class="col-md-2 col-sm-2" onclick="window.location.href='../page/user.php?user=<?php echo $_SESSION['id_user']; ?>'"><?php echo $name; ?></button>
                <button class="col-md-2 col-sm-2" onclick="window.location.href='../backend/logout.php ?>'">Thoát</button>
            </div>
            
            <?php } else { ?>
            <div class="row col-12">
            <form class="search-form col-md-8 col-sm-8" action="">
                <input type="search" placeholder="Tìm kiếm">
                <i class="fas fa-search"></i>
            </form>
            <button class="col-md-2 col-sm-2" onclick="window.location.href='../page/reg.php'">Đăng ký</button>
            <button class="col-md-2 col-sm-2" onclick="window.location.href='../page/login.php'">Đăng nhập</button>
            </div>
            <?php } ?>
            </div>
        </div>
    </div>
</div>
		