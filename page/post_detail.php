<!DOCTYPE html>
<html>
<head>
	<title>BK Forum</title>

	<!-- Load library -->
	<?php include("../layout/head.php"); ?>

</head>
<body>
<!-- Load header -->
<?php 
include("../layout/header.php"); 
$_SESSION["id_post"] = $_GET["id_post"];
?>

<!-- FB cmt -->
<div id="fb-root"></div>
    <script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = 'https://connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v3.1&appId=125854311631267&autoLogAppEvents=1';
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

<!-- Load content -->
<?php include("../content/post_detail.php"); ?>

<!-- FB cmt -->
<div class="comment col-md-8">
    <div class="fb-comments" data-href="https://www.facebook.com/fdzTeam/" data-width="500px" data-numposts="5"></div>
</div>

<!-- Load footer -->
<?php include("../layout/footer.php"); ?>

</body>
</html>