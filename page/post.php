<!DOCTYPE html>
<html>
<head>
  <title>Upload Post</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
  <script src="../js/jquery.richtext.min.js"></script>
  <script >
  
  
  $(document).ready( function() {
    $('.content').richText();                 
});
    function dangbai(){
        alert("Topic will be uploaded after checking");
    }
    </script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/richtext.min.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<!-- Load header -->
<?php include("../layout/header.php"); ?>

<!-- Load content -->
<?php include("../content/DangBai.php"); ?>
<!-- Load footer -->
<?php include("../layout/footer.php"); ?>
<script src="../js/jquery.richtext.min.js"></script>
</body>
</html>