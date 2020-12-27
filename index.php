<?php require("libs/fetch_data.php");?>
<!DOCTYPE html>
<html lang="zxx">
<head>
	<title><?php getwebname("titles"); echo"|"; gettagline("titles");?></title>
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
	<link rel="stylesheet" href="css/jquery.desoslide.css">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/fontawesome-all.css" rel="stylesheet">
	<link href="//fonts.googleapis.com/css?family=Poppins:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800"
	rel="stylesheet">
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
	<?php include("header.php");?>
	<?php include("banner.php");?>

	<!-- Main content Start -->
	<div class="main-content">

            <!-- About Section Start -->
            <div id="rs-about" class="rs-about style1 pb-100 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-8 pr-50 md-pr-15">
                            <div class="about-part">
                                <div class="sec-title mb-40">
                                    <div class="sub-title primary wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">About Us</div>
                                    <h2 class="title wow fadeInUp" data-wow-delay="400ms" data-wow-duration="2000ms">World Best Virtual Learning Network Educavo eLearning</h2>
                                    <div class="desc wow fadeInUp" data-wow-delay="500ms" data-wow-duration="2000ms">we can conduct all exams online and offline classes. and we provide online exams for entrance and competitive. we started  from small steps onwards. In future our team  will   add with advanced features. In Corona situations all are facing lot of problems. Mainly faculties we will approach faculties give online classes for your requriement  as per subject.</div>
                                </div>
                                <div class="sign-part wow fadeInUp" data-wow-delay="600ms" data-wow-duration="2000ms">
                                    <div class="img-part-one">
                                        <img src="assets/images/about/pngwave.png" alt="CEO Image">
                                    </div>
                                    <div class="author-part">
                                        <span class="sign mb-10"><img src="assets/images/about/sign.png" alt="Sign"></span>
                                        <span class="post">CEO & Founder of </span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About Section End -->

            <!-- Categories Section Start -->
            <div id="rs-categories" class="rs-categories gray-bg style1 pt-94 pb-70 md-pt-64 md-pb-40">
                <div class="container">
                    <div class="row y-middle mb-50 md-mb-30">
                        <div class="col-md-6 sm-mb-30">
                            <div class="sec-title">
                                <div class="sub-title primary">Subject Categorie</div>
                                <h2 class="title mb-0">Our Top Categories </h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- <div class="btn-part text-right sm-text-left">
                                <a href="#" class="readon">View All Categories</a>
                            </div> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 mb-30 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <div class="top-cou">
                            <?php countcategories();?>
                        </div>
                        <div class="down-cou">
                            <?php getcategoriesmenu("blog_categories"); ?>
                        </div>
                        
                        </div>
                        
                    </div>
                </div>
            </div>
            <!-- Categories Section End -->

            <!-- CTA Section Start -->
            <div class="rs-cta section-wrap gray-bg">
                <div class="row align-items-center">
                    <div class="col-lg-6">
                        <div class="img-part">
                              <img src="assets/images/cta/home1.jpg" alt="Image">
                        </div>
                    </div>  
                     <div class="col-lg-6 wow fadeInUp" data-wow-delay="300ms" data-wow-duration="2000ms">
                        <div class="content">
                            <div class="sec-title mb-40 ">
                                <h2 class="title">Admission Open for 2020</h2>
                                <div class="desc">Universities in India have built an amazing reputation for high academic prestige and for producing some of the smartest minds in the world. Specifically, the Engineering, Science, and Technology degree programmes have been known to produce some of the top tech geniuses of Silicon Valley.</div>
                            </div>
                            <div class="btn-part">
                                <a class="readon banner-style uppercase" href="#">Apply Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- CTA Section End --> 

            <!-- Faq Section Start -->
            <div class="rs-faq-part style1 pt-100 pb-100 md-pt-70 md-pb-70">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-6 padding-0">
                          <div class=" main-part">
                            <div class="title mb-40 md-mb-15">
                                <h2 class="text-part">Frequently Asked Questions</h2>
                            </div>
                              <div class="faq-content">
                                  <div id="accordion" class="accordion">
                                     <div class="card">
                                         <div class="card-header">
                                             <a class="card-link" data-toggle="collapse" href="#collapseOne">What are the requirements ?</a>
                                         </div>
                                         <div id="collapseOne" class="collapse show" data-parent="#accordion">
                                             <div class="card-body">
                                             In product development and process optimization, a requirement is a singular documented physical or functional need that a particular design, product or process aims to satisfy.
                                             </div>
                                         </div>
                                     </div>
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapseTwo" aria-expanded="false">Does Educavo offer free courses?</a>
                                          </div>
                                          <div id="collapseTwo" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                                All type of entrance exme course and online exam we will provide for students. 
                                              </div>
                                          </div>
                                      </div>
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapseThree" aria-expanded="false">What is the transfer application process?</a>
                                          </div>
                                          <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                              We are only able to provide transfer credit evaluations for admitted students. Prior to admission, you may be able to view a transfer equivalency chart from your community college to see what courses.
                                              </div>
                                          </div>
                                      </div>     
                                      <div class="card">
                                          <div class="card-header">
                                             
                                              <a class="card-link collapsed" data-toggle="collapse" href="#collapsefour" aria-expanded="false">What is distance education?</a>
                                          </div>
                                          <div id="collapsefour" class="collapse" data-parent="#accordion" style="">
                                              <div class="card-body">
                                              Distance education, also called distance learning, is the education of students who may not always be physically present at a school. Traditionally, this usually involved correspondence courses wherein the student corresponded with the school via post. Today, it involves online education.
                                              </div>
                                          </div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                        </div>
                        <div class="col-lg-6 padding-0">
                            <div class="img-part media-icon">
                                <a class="popup-videos" >
                                    
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- faq Section Start -->



            <!-- Popular Courses Section Start -->
            <div id="rs-popular-courses" class="rs-popular-courses bg6 style1 pt-94 pb-70 md-pt-64 md-pb-40">
                <div class="container">
                    <div class="row y-middle mb-50 md-mb-30">
                        <div class="col-md-6 sm-mb-30">
                            <div class="sec-title">
                                <div class="sub-title primary">Top Courses</div>
                                <h2 class="title mb-0">Popular Courses</h2>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <!-- <div class="btn-part text-right sm-text-left">
                                <a href="category.php" class="readon">View All Courses</a>
                            </div> -->
                        </div> 
                    </div>
                    <div class="row">
                       
                        
                                <!--grid blogs below-->
                            <?php getblogridposts("blogs");?>
                            
						      
                        

                    </div>
                </div>
            </div>
            <!-- Popular Courses Section End -->
        </div> 
        <!-- Main content End -->

        <?php include("footer.php");?>

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


						</body>

						</html>
