<div class="container-fluid">
    <div class="main-contain">
        <div class="row">
            <div class="main-content col-md-8" style="padding: 5px 30px;">
			    <?php $id = $_SESSION["id_post"];
                    include("../backend/connectDB.php");
                    $query = mysqli_query($connect, "SELECT * FROM post where id_post = $id");
                    while ($row = $query->fetch_assoc()) { 
                ?>
                <div class="post-title"><h2><?php echo $row['title']; ?></h2></div>
                    <p class="text-muted">Đăng bởi <?php echo $row['poster'] ?> | <?php echo $row['date_time'] ?></p>
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
                    <div class="post-image col-md-9" style="margin: 10px auto;">
                        <img src="../images/<?php echo $row['img_lnk']; ?>" class="img-fluid" alt="Responsive image" >
                    </div>
                    <div class="post-description col-md-12" style="padding: 15px;">
                        <h5><?php echo $row['decription']; ?></h5>
                    </div>
                    <div class="post-main col-md-12" style="padding: 15px;">
                        <p><?php echo $row['contentpost']; ?></p>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <?php
            $view = ++$row['view'];
            mysqli_query($connect, "UPDATE post SET view='$view' WHERE id_post='$id'");
            //echo $view;
            }
            include("../backend/closeDB.php");
       ?>
    </div>
</div>