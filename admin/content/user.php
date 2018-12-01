  <div class="col-md-10">
  <div class="row">
    <div class="col-md-12 line" style="margin-top: 5px; height: 30px; border: 1px solid">
      <div class="col-md-1 line1" style="float: left;margin-top: 5px;"><b>ID</b></div>
      <div class="col-md-4 line1" style="float: left;margin-top: 5px;"><b>Tên</b></div>	
      <div class="col-md-4 line1" style="float: left;margin-top: 5px;"><b>Email</b></div>
      <div class="col-md-3 line1" style="float: left;margin-top: 5px;"><b>Phương Thức</b></div>
    </div>

    <?php 
    include("../backend/connectDB.php");
    $query = mysqli_query($connect, "SELECT * FROM user");
    while ($row = $query->fetch_assoc()) { 
      ?>
      <div class="col-md-12 line2">
        <div class="col-md-1 line1" style="float: left;margin-top: 5px;"><?php echo $row['id_user']; ?></div>
        <div class="col-md-4 line1" style="float: left;margin-top: 5px;"><?php echo $row['name']; ?></div>
        <div class="col-md-4 line1" style="float: left;margin-top: 5px;"><?php echo $row['email']; ?></div>
        <div class="col-md-3 line1" style="float: left;margin-top: 5px;">
          <form action="../backend/deleteUser.php" method="POST">
            <input type="text" name="idUser" hidden="hidden" value="<?php echo $row['id_user']; ?>">
            <input class="button" type="submit" value="Xóa">
          </form>
        </div>
      </div>
    <?php
    }
    include("../backend/closeDB.php")
      ?>

  </div>	
  </div>
</div> 