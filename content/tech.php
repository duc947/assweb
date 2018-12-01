<div class="container-fluid">
    <div class="main-contain">
        <div class="row ad-title">
            <h3 class="col-md-7 col-sm-6 col-6"> CÔNG NGHỆ </h3>
            <?php if (isset($_SESSION['id_user']) && $_SESSION['id_user']) { ?>
                <button class="col-md-2 col-sm-4 col-4" onclick="window.location.href='../page/post.php'">
                    <span>Đăng bài</span>
                </button>
            <?php } ?>
        </div>
    </div>
    <?php 
        $_SESSION["topic"] = 1;
        include("../backend/connectDB.php");
        $query = mysqli_query($connect, "SELECT * FROM post where typepost = 1 ORDER BY id_post DESC");
        while ($row = $query->fetch_assoc()) { 
    ?>
    <?php if ($row['status'] == 1) { ?>
    <div class="main-contain">
        <div class="row">
            <div class="main-content col-md-9">
                <div class="post-list">
                    <div class="post">
                        <div class="row">
                            <div class="title-image col-md-4">
                                <a href="../page/post_detail.php?id_post=<?php echo $row['id_post'] ?>">
                                    <img src="../images/<?php echo $row['img_lnk']; ?>" alt="">
                                </a>
                            </div>
                            <div class="content col-md-8">
                                <div class="content-title">
                                    <a href="../page/post_detail.php?id_post=<?php echo $row['id_post'] ?>">
                                        <?php echo $row['title']; ?>
                                    </a>
                                </div>
                                <?php if ($row['typepost'] == 1) { ?>
                                    <div class="topic"><h5 style="color:rgb(29, 19, 179); ">CÔNG NGHỆ</h5></div>
                                <?php } ?>
                                <?php if ($row['typepost'] == 2) { ?>
                                    <div class="topic"><h5 style="color:rgb(29, 19, 179); ">XE</h5></div>
                                <?php } ?>
                                <?php if ($row['typepost'] == 3) { ?>
                                    <div class="topic"><h5 style="color:rgb(29, 19, 179); ">GAME</h5></div>
                                <?php } ?>
                                <?php if ($row['typepost'] == 4) { ?>
                                    <div class="topic"><h5 style="color:rgb(29, 19, 179); ">TIN TỨC</h5></div>
                                <?php } ?>
                                <div class="short-content">
                                    <span><?php echo $row['decription']; ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="back-to-top" class="hidden">
        <i class="fas fa-arrow-up"></i>
    </div>
</div>
</div>
    <?php } ?>
    <?php
        }
        include("../backend/closeDB.php");
    ?>

   