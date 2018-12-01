<?php 
    include("../backend/connectDB.php");
    $query = mysqli_query($connect, "SELECT * FROM post ORDER BY view DESC limit 4 ");
    while ($row = $query->fetch_assoc()) { 
    if ($row['status'] == 1) { 
?>
<div class="item">
    <a href=".././page/post_detail.php?id_post=<?php echo $row['id_post'] ?>">
        <img src="../images/<?php echo $row['img_lnk']; ?>" alt="">
    </a>
    <h1>
        <a href=".././page/post_detail.php?id_post=<?php echo $row['id_post'] ?>">
            <?php echo $row['title']; ?>
        </a>
    </h1>
</div>
<?php } 
    }
    include("../backend/closeDB.php");
?>          