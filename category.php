<?php require("libs/fetch_data.php");?>
<?php //code to get the item using its id
include("database/conn.php");//database config file
$id=$_REQUEST['id']; $query="SELECT * from blog_categories where id='".$id."'"; $result=mysqli_query($GLOBALS["___mysqli_ston"],$query) or die ( ((is_object($GLOBALS["___mysqli_ston"]))? mysqli_error($GLOBALS["___mysqli_ston"]) : (($___mysqli_res = mysqli_connect_error()) ?$___mysqli_res : true))); 
$row = mysqli_fetch_assoc($result);?>
<!DOCTYPE html>
<html lang="zxx">
<head>
<title>Category-<?php echo $row['name']; ?>|<?php getwebname("titles");?></title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<link id="browser_favicon" rel="shortcut icon" href="blogadmin/images/<?php geticon("titles"); ?>">
<meta charset="utf-8" name="description" content="<?php getshortdescription("titles");?>">
<meta name="keywords" content="<?php getkeywords("titles");?>" />
<script>
	addEventListener("load", function () {
		setTimeout(hideURLbar, 0);
	}, false);

	function hideURLbar() {
		window.scrollTo(0, 1);
	}
</script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/single.css">
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/fontawesome-all.css" rel="stylesheet">



<meta name="description" content="">
	<!-- responsive tag -->
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- favicon -->
	<link rel="apple-touch-icon" href="apple-touch-icon.html">
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/fav.png">
	<!-- Bootstrap v4.4.1 css -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
	<!-- font-awesome css -->
	<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
	<!-- animate css -->
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<!-- owl.carousel css -->
	<link rel="stylesheet" type="text/css" href="assets/css/owl.carousel.css">
	<!-- slick css -->
	<link rel="stylesheet" type="text/css" href="assets/css/slick.css">
	<!-- off canvas css -->
	<link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
	<!-- linea-font css -->
	<link rel="stylesheet" type="text/css" href="assets/fonts/linea-fonts.css">
	<!-- flaticon css  -->
	<link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
	<!-- magnific popup css -->
	<link rel="stylesheet" type="text/css" href="assets/css/magnific-popup.css">
	<!-- Main Menu css -->
	<link rel="stylesheet" href="assets/css/rsmenu-main.css">
	<!-- spacing css -->
	<link rel="stylesheet" type="text/css" href="assets/css/rs-spacing.css">
	<!-- style css -->
	<link rel="stylesheet" type="text/css" href="style.css"> <!-- This stylesheet dynamically changed from style.less -->
	<!-- responsive css -->
	<link rel="stylesheet" type="text/css" href="assets/css/responsive.css">
	<!--[if lt IE 9]>
		<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
		<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
</head>
<body>
<!--Header-->
<?php include("header.php");?>
<!--//header-->
<!--/banner-->
<!-- <div class="banner-inner">
</div> -->
<ol class="breadcrumb">
	<li class="breadcrumb-item">
		<a href="index.php">Home</a>
	</li>
	<li class="breadcrumb-item active"><?php echo $row['name']; ?></li>
</ol>
<!--//banner-->
<!--/main-->
<section class="main-content-w3layouts-agileits">
	<div class="container">
		<h3 class="tittle">Online Classes</h3>
		<div class="row inner-sec">
			<!--left-->
			<div class="col-lg-8 left-blog-info-w3layouts-agileits text-left">
				<div class="row mb-4">
					<?php  
						$categoryid=$row['id'];
						getcategoryblogs("blogs",$categoryid);
					?>
				</div>
			</div>
			<!--//left-->
			<!--right-->
			<aside class="col-lg-4 agileits-w3ls-right-blog-con text-right">
				<div class="right-blog-info text-left">
					<h4><strong>Categories</strong></h4>
					<ul class="list-group single">
						<?php countcategories();?>
					</ul>
					
									<div class="tech-btm" style="  padding-top: 30px;">
										<h4>Older Posts</h4>
										<?php getolderposts("blogs");?>
										<!--olderpostsendhere-->
									</div>
								</div>
							</aside>
			<!--//right-->
			</div>
		</div>
</section>
<!--//main-->

<!--footer-->
<?php include("footer.php");?>
<!---->

<!-- js -->
<script src="js/jquery-2.2.3.min.js"></script>
<!-- //js -->
<!--/ start-smoth-scrolling -->
<script src="js/move-top.js"></script>
<script src="js/easing.js"></script>
<script>
	jQuery(document).ready(function ($) {
		$(".scroll").click(function (event) {
			event.preventDefault();
			$('html,body').animate({
				scrollTop: $(this.hash).offset().top
			}, 900);
		});
	});
</script>
<!--// end-smoth-scrolling -->

<script>
	$(document).ready(function () {
		/*
								var defaults = {
									containerID: 'toTop', // fading element id
									containerHoverID: 'toTopHover', // fading element hover id
									scrollSpeed: 1200,
									easingType: 'linear' 
								};
								*/

		$().UItoTop({
			easingType: 'easeOutQuart'
		});

	});




	<!-- modernizr js -->
		<script src="assets/js/modernizr-2.8.3.min.js"></script>
        <!-- jquery latest version -->
        <script src="assets/js/jquery.min.js"></script>
        <!-- Bootstrap v4.4.1 js -->
        <script src="assets/js/bootstrap.min.js"></script>
        <!-- Menu js -->
        <script src="assets/js/rsmenu-main.js"></script> 
        <!-- op nav js -->
        <script src="assets/js/jquery.nav.js"></script>
        <!-- owl.carousel js -->
        <script src="assets/js/owl.carousel.min.js"></script>
        <!-- Slick js -->
        <script src="assets/js/slick.min.js"></script>
        <!-- isotope.pkgd.min js -->
        <script src="assets/js/isotope.pkgd.min.js"></script>
        <!-- imagesloaded.pkgd.min js -->
        <script src="assets/js/imagesloaded.pkgd.min.js"></script>
        <!-- wow js -->
        <script src="assets/js/wow.min.js"></script>
        <!-- Skill bar js -->
        <script src="assets/js/skill.bars.jquery.js"></script>
        <script src="assets/js/jquery.counterup.min.js"></script>        
         <!-- counter top js -->
        <script src="assets/js/waypoints.min.js"></script>
        <!-- video js -->
        <script src="assets/js/jquery.mb.YTPlayer.min.js"></script>
        <!-- magnific popup js -->
        <script src="assets/js/jquery.magnific-popup.min.js"></script>      
        <!-- plugins js -->
        <script src="assets/js/plugins.js"></script>
        <!-- contact form js -->
        <script src="assets/js/contact.form.js"></script>
        <!-- main js -->
        <script src="assets/js/main.js"></script>
</script>
<a href="#home" class="scroll" id="toTop" style="display: block;">
	<span id="toTopHover" style="opacity: 1;"> </span>
</a>

<!-- //Custom-JavaScript-File-Links -->
<script src="js/bootstrap.js"></script>


</body>

</html>