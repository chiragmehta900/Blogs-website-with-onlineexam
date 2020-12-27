<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title><?php getwebname("titles"); echo"|"; gettagline("titles");?> | Contact</title>
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
	<link href="css/contact.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">



	
        <!-- meta tag -->
        <meta charset="utf-8">
        <title>Educavo - Education HTML Template</title>
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
        <!-- off canvas css -->
        <link rel="stylesheet" type="text/css" href="assets/css/off-canvas.css">
        <!-- linea-font css -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/linea-fonts.css">
        <!-- flaticon css  -->
        <link rel="stylesheet" type="text/css" href="assets/fonts/flaticon.css">
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


<body class="defult-home">
<?php include("header.php");?>
        <!--Preloader area start here-->
        <div id="loader" class="loader">
            <div class="loader-container">
                <div class='loader-icon'>
                    <img src="assets/images/pre-logo.png" alt="">
                </div>
            </div>
        </div>
        <!--Preloader area End here-->



		<!-- Main content Start -->
        <div class="main-content">
            <!-- Breadcrumbs Start -->
            <div class="rs-breadcrumbs breadcrumbs-overlay">
                <div class="breadcrumbs-img">
                    <img src="assets/images/breadcrumbs/1.jpg" alt="Breadcrumbs Image">
                </div>
                <div class="breadcrumbs-text">
                    <h1 class="page-title">Contact Us</h1>
                    <ul>
                        <li>
                            <a class="active" href="index.html">Home</a>
                        </li>
                        <li>Contact</li>
                    </ul>
                </div>
            </div>
            <!-- Breadcrumbs End -->            

    		<!-- Contact Section Start -->
    		<div class="contact-page-section pt-100 pb-100 md-pt-70 md-pb-70">
            	<div class="container">
            		<div class="row contact-address-section">
        				<div class="col-md-4 lg-pl-0 sm-mb-30">
        					<div class="contact-info contact-address">
        						<div class="icon-part">
        							<i class="fa fa-map-marker"></i>
        						</div>
        						<div class="content-part">
	        						<h5 class="info-subtitle">Address</h5>
	        						<h4 class="info-title">228-5 Main Street,<br>Georgia, USA </h4>
	        					</div>
        					</div>
        				</div>
        				<div class="col-md-4 sm-mb-30">
        					<div class="contact-info contact-mail">
        						<div class="icon-part">
        							<i class="fa fa-envelope-o"></i>
        						</div>
        						<div class="content-part">
	        						<h5 class="info-subtitle">Email Address</h5>
	        						<h4 class="info-title"><a href="mailto:info@rstheme.com">info@rstheme.com</a></h4>
	        					</div>
        					</div>
        				</div>
        				<div class="col-md-4 lg-pr-0">
        					<div class="contact-info contact-phone">
        						<div class="icon-part">
        							<i class="fa fa-user-o"></i>
        						</div>
        						<div class="content-part">
	        						<h5 class="info-subtitle">Phone Number</h5>
	        						<h4 class="info-title"><a href="tel%2b0885898745.html">(+088)589-8745</a></h4>
	        					</div>
        					</div>
            			</div>
            		</div>

            		<div class="row align-items-center">
            			<div class="col-lg-5 md-mb-30">
            				<div class="contact-image">
            					<img src="assets/images/contact/1.png" alt="Contact Images">
            				</div>
            			</div>
            			<div class="col-lg-7">
			        		<div class="contact-comment-section contact-bg1">
			        			<h3>Get In Touch</h3>
			        			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis at <br>dictum risus, non suscip it arcu.</p>
			                    <div id="form-messages"></div>
								<form id="contact-form" method="post" action="https://keenitsolutions.com/products/html/educavo/mailer.php">
									<fieldset>
										<div class="row">
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>Name*</label>
													<input name="name" id="name" class="form-control" type="text">
												</div>
											</div>
											<div class="col-md-6 col-sm-12">
												<div class="form-group">
													<label>Email*</label>
													<input name="email" id="email" class="form-control" type="email">
												</div>
											</div>
											<div class="col-md-12 col-sm-12">    
												<div class="form-group">
													<label>Message *</label>
													<textarea cols="40" rows="10" id="message" name="message" class="textarea form-control"></textarea>
												</div>
											</div>
										</div>
										<div class="form-group mb-0">
											<input class="btn-send" type="submit" value="Submit Now">
										</div>										   
									</fieldset>
								</form>
			        		</div>
            			</div>
            		</div>
            	</div>
            </div>
            <!-- Contact Section End -->  

            <!-- Newsletter section start -->
            <div class="rs-newsletter style1 mb--124 sm-mb-70">
                <div class="container">
                    <div class="newsletter-wrap">
                        <div class="row y-middle">
                            <div class="col-md-6 sm-mb-30">
                                <div class="sec-title">
                                    <div class="sub-title white-color">Newsletter</div>
                                    <h2 class="title mb-0 white-color">Subscribe Us to join <br> Our Community </h2>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <form class="newsletter-form">
                                    <input type="email" name="email" placeholder="Enter Your Email" required="">
                                    <button type="submit">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Newsletter section end -->
        </div> 
        <!-- Main content End --> 

		<?php include("footer.php");?>

        <!-- start scrollUp  -->
        <div id="scrollUp">
            <i class="fa fa-angle-up"></i>
        </div>
        <!-- End scrollUp  -->

        <!-- Search Modal Start -->
        <div aria-hidden="true" class="modal fade search-modal" role="dialog" tabindex="-1">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span class="flaticon-cross"></span>
            </button>
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="search-block clearfix">
                        <form>
                            <div class="form-group">
                                <input class="form-control" placeholder="Search Here..." type="text">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Modal End -->

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
        <!-- wow js -->
        <script src="assets/js/wow.min.js"></script>     
        <!-- plugins js -->
        <script src="assets/js/plugins.js"></script>
        <!-- contact form js -->
        <script src="assets/js/contact.form.js"></script>
        <!-- main js -->
        <script src="assets/js/main.js"></script>
    </body>
