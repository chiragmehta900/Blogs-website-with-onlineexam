<?php


include('master/Examination.php');

require_once('class/class.phpmailer.php');

$exam = new Examination;

$current_datetime = date("Y-m-d") . ' ' . date("H:i:s", STRTOTIME(date('h:i:sa')));

if(isset($_POST['page']))
{
	if($_POST['page'] == 'register')
	{
		if($_POST['action'] == 'check_email')
		{
			$exam->query = "
			SELECT * FROM user_table 
			WHERE user_email_address = '".trim($_POST["email"])."'
			";

			$total_row = $exam->total_row();

			if($total_row == 0)
			{
				$output = array(
					'success'		=>	true
				);
				echo json_encode($output);
			}
		}

		if($_POST['action'] == 'register')
		{
			$user_verfication_code = md5(rand());

			$receiver_email = $_POST['user_email_address'];

			$exam->filedata = $_FILES['user_image'];

			$user_image = $exam->Upload_file();

			$exam->data = array(
				':user_email_address'	=>	$receiver_email,
				':user_password'		=>	password_hash($_POST['user_password'], PASSWORD_DEFAULT),
				':user_verfication_code'=>	$user_verfication_code,
				':user_name'			=>	$_POST['user_name'],
				':user_gender'			=>	$_POST['user_gender'],
				':user_address'			=>	$_POST['user_address'],
				':user_mobile_no'		=>	$_POST['user_mobile_no'],
				':user_image'			=>	$user_image,
				':user_created_on'		=>	$current_datetime
			);

			$exam->query = "
			INSERT INTO user_table 
			(user_email_address, user_password, user_verfication_code, user_name, user_gender, user_address, user_mobile_no, user_image, user_created_on)
			VALUES 
			(:user_email_address, :user_password, :user_verfication_code, :user_name, :user_gender, :user_address, :user_mobile_no, :user_image, :user_created_on)
			";

			$exam->execute_query();

			$subject= 'Online Examination Registration Verification';

			$body = '
			
<head>
<title>Somnium Nostri e-mail Verify</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width">
<style type="text/css">
    body{margin:0; padding:0;}
    img{border:0; height:auto; line-height:100%; outline:none; text-decoration:none;}
    table{border-collapse:collapse !important;}
    body{height:100% !important; margin:0; padding:0; width:100% !important;}

    /* iOS BLUE LINKS */
    .appleBody a {color:#68440a; text-decoration: none;}
    .appleFooter a {color:#999999; text-decoration: none;}

    /* MOBILE STYLES */
    @media screen and (max-width: 525px) {

        /* ALLOWS FOR FLUID TABLES */
        table[class="wrapper"]{
          width:100% !important;
        }

        /* ADJUSTS LAYOUT OF LOGO IMAGE */
        td[class="logo"]{
          text-align: left;
          padding: 20px 0 20px 0 !important;
        }

        td[class="logo"] img{
          margin:0 auto!important;
        }

        /* USE THESE CLASSES TO HIDE CONTENT ON MOBILE */
        td[class="mobile-hide"]{
          display:none;}

        img[class="mobile-hide"]{
          display: none !important;
        }

        img[class="img-max"]{
          max-width: 100% !important;
          height:auto !important;
        }

        /* FULL-WIDTH TABLES */
        table[class="responsive-table"]{
          width:100%!important;
        }

        /* UTILITY CLASSES FOR ADJUSTING PADDING ON MOBILE */
        td[class="padding"]{
          padding: 10px 5% 15px 5% !important;
        }

        td[class="padding-copy"]{
          padding: 10px 5% 10px 5% !important;
          text-align: center;
        }

        td[class="padding-meta"]{
          padding: 30px 5% 0px 5% !important;
          text-align: center;
        }

        td[class="no-pad"]{
          padding: 0 0 20px 0 !important;
        }

        td[class="no-padding"]{
          padding: 0 !important;
        }

        td[class="section-padding"]{
          padding: 50px 15px 50px 15px !important;
        }

        td[class="section-padding-bottom-image"]{
          padding: 50px 15px 0 15px !important;
        }

        /* ADJUST BUTTONS ON MOBILE */
        td[class="mobile-wrapper"]{
            padding: 10px 5% 15px 5% !important;
        }

        table[class="mobile-button-container"]{
            margin:0 auto;
            width:100% !important;
        }

        a[class="mobile-button"]{
            width:80% !important;
            padding: 15px !important;
            border: 0 !important;
            font-size: 16px !important;
        }

    }
</style>
</head>
<body style="margin: 0; padding: 0;">

<!-- HEADER -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
    <tr>
        <td bgcolor="#ffffff">
            <div align="center" style="padding: 0px 15px 0px 15px;">
                <table border="0" cellpadding="0" cellspacing="0" width="500" class="wrapper">
                    <!-- LOGO/PREHEADER TEXT -->
                    <tr>
                        <td style="padding: 20px 0px 0px 0px;" class="logo">
                            <table border="0" cellpadding="0" cellspacing="0" width="100%">
                                <tr>
                                    <td bgcolor="#ffffff" width="100" align="left"><a href="https://snproweb.com/" target="_blank"><img alt="Logo" src="https://snproweb.com/assets/images/logo/logo-black.png" width="100" height="100" style="display: block; font-family: Helvetica, Arial, sans-serif; color: #666666; font-size: 16px;" border="0"></a></td>
                                    <td bgcolor="#ffffff" width="400" align="right" class="mobile-hide">
                                        <table border="0" cellpadding="0" cellspacing="0">
                                            <tr>
                                                <td align="right" style="padding: 0 0 5px 0; font-size: 14px; font-family: Arial, sans-serif; color: #666666; text-decoration: none;"><span style="color: #666666; text-decoration: none;">Somnium Nostri Programming for<br>Websites</span></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </div>
        </td>
    </tr>
</table>

<!-- ONE COLUMN SECTION -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
    <tr>
        <td bgcolor="#ffffff" align="center" style="padding: 70px 15px 70px 15px;" class="section-padding">
            <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
                <tr>
                    <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <!-- HERO IMAGE -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tbody>
                                             <tr>
                                                  <td class="padding-copy">
                                                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                                          <tr>
                                                              <td>
                                                                  <a><img src="https://s3-us-west-2.amazonaws.com/s.cdpn.io/48935/responsive-email.jpg" width="500" height="200" border="0" alt="Can an email really be responsive?" style="display: block; padding: 0; color: #666666; text-decoration: none; font-family: Helvetica, arial, sans-serif; font-size: 16px; width: 500px; height: 200px;" class="img-max"></a>
                                                              </td>
                                                            </tr>
                                                        </table>
                                                  </td>
                                              </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- COPY -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td align="center" style="font-size: 25px; font-family: Helvetica, Arial, sans-serif; color: #333333; padding-top: 30px;" class="padding-copy">Verify your e-mail to finish signing up for online examination.</td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">Thank you for choosing Somnium Nostri Online examination Services. <br> Please confirm your e-mail address by clicking on the button below.</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- BULLETPROOF BUTTON -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">
                                        <tr>
                                            <td align="center" style="padding: 25px 0 0 0;" class="padding-copy">
                                                <table border="0" cellspacing="0" cellpadding="0" class="responsive-table">
                                                    <tr>
                                                        <td align="center"><a href="'.$exam->home_page.'verify_email.php?type=user&code='.$user_verfication_code.'" target="_blank" style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #ffffff; text-decoration: none; background-color: #5D9CEC; border-top: 15px solid #5D9CEC; border-bottom: 15px solid #5D9CEC; border-left: 25px solid #5D9CEC; border-right: 25px solid #5D9CEC; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; display: inline-block;" class="mobile-button">VERIFY &rarr;</a></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<!-- ONE COLUMN W/ BOTTOM IMAGE SECTION -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
    <tr>
        <td bgcolor="#f8f8f8" align="center" style="padding: 70px 15px 0 15px;" class="section-padding-bottom-image">
            <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
                <tr>
                    <td>
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td>
                                    <!-- COPY -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td align="center" style="font-size: 25px; font-family: Helvetica, Arial, sans-serif; color: #333333;" class="padding-copy">Somnium Nostri</td>
                                        </tr>
                                        <tr>
                                            <td align="center" style="padding: 20px 0 0 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">Visit our website for more details about what we do.</td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!-- BULLETPROOF BUTTON -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">
                                        <tr>
                                            <td align="center" style="padding: 25px 0 0 0;" class="padding-copy">
                                                <table border="0" cellspacing="0" cellpadding="0" class="responsive-table">
                                                    <tr>
                                                        <td align="center"><a href="https://snproweb.com/" target="_blank" style="font-size: 16px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #ffffff; text-decoration: none; background-color: #48CFAD; border-top: 15px solid #48CFAD; border-bottom: 15px solid #48CFAD; border-left: 25px solid #48CFAD; border-right: 25px solid #48CFAD; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; display: inline-block;" class="mobile-button">VISIT &rarr;</a></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <tr>
                                <td>
                                    <!--  BOTTOM IMAGE -->
                                    <table width="100%" border="0" cellspacing="0" cellpadding="0">
                                        <tr>
                                            <td style="padding: 50px 0 0 0;" align="center">
                                                <a href="https://snproweb.com/" target="_blank"><img src="https://snproweb.com/assets/images/backgrounds/android_2_1.PNG" width="500" height="280" border="0" alt="Mobile opens are on the rise" class="img-max" style="display: block; padding: 0; font-family: Helvetica, Arial, sans-serif; color: #666666; width: 500px; height: 280px;"></a>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<!-- TWO COLUMN SECTION -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
    <tr>
        <td bgcolor="#ffffff" align="center" style="padding: 70px 15px 70px 15px;" class="section-padding">
            <table border="0" cellpadding="0" cellspacing="0" width="500" class="responsive-table">
                <tr>
                    <td>
                        <!-- TITLE SECTION AND COPY -->
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td align="center" style="font-size: 25px; font-family: Helvetica, Arial, sans-serif; color: #333333;" class="padding-copy">About Us</td>
                            </tr>
                            <tr>
                                <td align="center" style="padding: 20px 0 20px 0; font-size: 16px; line-height: 25px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">We provide services like website designing, website development & other IT solution to our customer. we on providing the best quality of software to our customer and great IT solution for their business to fulfil their client requirement and objectives. we communicate regularly to our clients.</td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td>
                        <!--  BOTTOM IMAGE -->
                        <table width="100%" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                                <td style="padding: 30px 0 0 0;" align="center">
                                    <a href="https://snproweb.com/" target="_blank"><img src="https://snproweb.com/assets/images/projects/seo_home.PNG" width="500" height="280" border="0" alt="Mobile opens are on the rise" class="img-max" style="display: block; padding: 0; font-family: Helvetica, Arial, sans-serif; color: #666666; width: 500px; height: 280px;"></a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>


<!-- COMPACT ARTICLE SECTION -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
    <tr>
        <td bgcolor="#f8f8f8" align="center" style="padding: 70px 15px 70px 15px;" class="section-padding">
            <table border="0" cellpadding="0" cellspacing="0" width="500" style="padding:0 0 20px 0;" class="responsive-table">
                <!-- TITLE -->
                <tr>
                    <td align="left" style="padding: 0 0 10px 130px; font-size: 25px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #333333;" class="padding-copy" colspan="2">What we do?</td>
                </tr>
                <tr>
                    <td valign="top" style="padding: 40px 0 0 0;" class="mobile-hide"><a href="https://snproweb.com/Website_Designing.html" target="_blank"><img src="https://snproweb.com/assets/server/hiclipart.com.png" alt="Litmus" width="105" height="105" border="0" style="display: block; font-family: Arial; color: #666666; font-size: 14px; width: 105px; height: 105px;"></a></td>
                    <td style="padding: 40px 0 0 0;" class="no-padding">
                        <!-- ARTICLE -->
                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td align="left" style="padding: 0 0 5px 25px; font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #aaaaaa;" class="padding-meta">Website Designing</td>
                            </tr>
                            <tr>
                                <td align="left" style="padding: 0 0 5px 25px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #333333;" class="padding-copy">Design your website with creative CSS and JS.</td>
                            </tr>
                            <tr>
                                 <td align="left" style="padding: 10px 0 15px 25px; font-size: 16px; line-height: 24px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">We provide website development here we develop home pages and several connected pages for the navigation in the websites for the various activities.</td>
                            </tr>
                            <tr>
                                <td style="padding:0 0 45px 25px;" align="left" class="padding">
                                    <table border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">
                                        <tr>
                                            <td align="center">
                                                <!-- BULLETPROOF BUTTON -->
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">
                                                    <tr>
                                                        <td align="center" style="padding: 0;" class="padding-copy">
                                                            <table border="0" cellspacing="0" cellpadding="0" class="responsive-table">
                                                                <tr>
                                                                    <td align="center"><a href="https://snproweb.com/Website_Designing.html" target="_blank" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #ffffff; text-decoration: none; background-color: #F6BB42; border-top: 10px solid #F6BB42; border-bottom: 10px solid #F6BB42; border-left: 20px solid #F6BB42; border-right: 20px solid #F6BB42; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; display: inline-block;" class="mobile-button">Learn More &rarr;</a></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign="top" style="padding: 40px 0 0 0;" class="mobile-hide"><a href="https://snproweb.com/ui_ux_design.html" target="_blank"><img src="https://snproweb.com/assets/server/kissclipart-ui-ux-design-logo-clipart-user-interface-design-lo-c66c57f3e06e2f6e.png" alt="Freddie!" width="105" height="105" border="0" style="display: block; font-family: Arial; color: #666666; font-size: 14px; width: 145px; height: 105px;"></a></td>
                    <td style="padding: 40px 0 0 0;" class="no-padding">
                        <!-- ARTICLE -->
                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td align="left" style="padding: 0 0 5px 25px; font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #aaaaaa;" class="padding-meta">Website & UI/UX Design</td>
                            </tr>
                            <tr>
                                <td align="left" style="padding: 0 0 5px 25px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #333333;" class="padding-copy">With this technique make your product user friendly & attractive.</td>
                            </tr>
                            <tr>
                                 <td align="left" style="padding: 10px 0 15px 25px; font-size: 16px; line-height: 24px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">UI/UX Designing means designing or the graphical view of your application on the mobile,desktops as well as we can develop attractive and animated graphics for your app and webapp that will enhance your user experience and attracts user towards your webapp or application.</td>
                            </tr>
                            <tr>
                                <td style="padding:0 0 45px 25px;" align="left" class="padding">
                                    <table border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">
                                        <tr>
                                            <td align="center">
                                                <!-- BULLETPROOF BUTTON -->
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">
                                                    <tr>
                                                        <td align="center" style="padding: 0;" class="padding-copy">
                                                            <table border="0" cellspacing="0" cellpadding="0" class="responsive-table">
                                                                <tr>
                                                                    <td align="center"><a href="https://snproweb.com/ui_ux_design.html" target="_blank" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #ffffff; text-decoration: none; background-color: #5D9CEC; border-top: 10px solid #5D9CEC; border-bottom: 10px solid #5D9CEC; border-left: 20px solid #5D9CEC; border-right: 20px solid #5D9CEC; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; display: inline-block;" class="mobile-button">Learn More &rarr;</a></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <tr>
                    <td valign="top" style="padding: 40px 0 0 0;" class="mobile-hide"><a href="https://snproweb.com/Android_development.html" target="_blank"><img src="https://snproweb.com/assets/server/pngwing.com.png" alt="Campaign Monitor" width="105" height="105" border="0" style="display: block; font-family: Arial; color: #666666; font-size: 14px; width: 105px; height: 105px;"></a></td>
                    <td style="padding: 40px 0 0 0;" class="no-padding">
                        <!-- ARTICLE -->
                        <table border="0" cellspacing="0" cellpadding="0" width="100%">
                            <tr>
                                <td align="left" style="padding: 0 0 5px 25px; font-size: 13px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #aaaaaa;" class="padding-meta">Android Development</td>
                            </tr>
                            <tr>
                                <td align="left" style="padding: 0 0 5px 25px; font-size: 22px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #333333;" class="padding-copy">Grow your business with mobile application.</td>
                            </tr>
                            <tr>
                                 <td align="left" style="padding: 10px 0 15px 25px; font-size: 16px; line-height: 24px; font-family: Helvetica, Arial, sans-serif; color: #666666;" class="padding-copy">In modern world, Mobile is most preferred device of all. Almost 75% of the market is shared by android means an android app which can be a key of success for your business. </td>
                            </tr>
                            <tr>
                                <td style="padding:0 0 45px 25px;" align="left" class="padding">
                                    <table border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">
                                        <tr>
                                            <td align="center">
                                                <!-- BULLETPROOF BUTTON -->
                                                <table width="100%" border="0" cellspacing="0" cellpadding="0" class="mobile-button-container">
                                                    <tr>
                                                        <td align="center" style="padding: 0;" class="padding-copy">
                                                            <table border="0" cellspacing="0" cellpadding="0" class="responsive-table">
                                                                <tr>
                                                                    <td align="center"><a href="https://snproweb.com/Android_development.html" target="_blank" style="font-size: 15px; font-family: Helvetica, Arial, sans-serif; font-weight: normal; color: #ffffff; text-decoration: none; background-color: #4FC1E9; border-top: 10px solid #4FC1E9; border-bottom: 10px solid #4FC1E9; border-left: 20px solid #4FC1E9; border-right: 20px solid #4FC1E9; border-radius: 3px; -webkit-border-radius: 3px; -moz-border-radius: 3px; display: inline-block;" class="mobile-button">Learn More &rarr;</a></td>
                                                                </tr>
                                                            </table>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<!-- FOOTER -->
<table border="0" cellpadding="0" cellspacing="0" width="100%" style="table-layout: fixed;">
    <tr>
        <td bgcolor="#ffffff" align="center">
            <table width="100%" border="0" cellspacing="0" cellpadding="0" align="center">
                <tr>
                    <td style="padding: 20px 0px 20px 0px;">
                        <!-- UNSUBSCRIBE COPY -->
                        <table width="500" border="0" cellspacing="0" cellpadding="0" align="center" class="responsive-table">
                            <tr>
                                <td align="center" valign="middle" style="font-size: 12px; line-height: 18px; font-family: Helvetica, Arial, sans-serif; color:#666666;">
                                    <span class="appleFooter" style="color:#666666;">C-803 SKYVIEW HEIGHTS NEAR MIDAS SQUARE PARVAT GAM SURAT, INDIA</span><br><a class="original-only" style="color: #666666; text-decoration: none;">Contact Us</a><span class="original-only" style="font-family: Arial, sans-serif; font-size: 12px; color: #444444;">&nbsp;&nbsp;&nbsp;|&nbsp;&nbsp;&nbsp;</span><a style="color: #666666; text-decoration: none;">7874032593</a>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

</body>

			';

			$exam->send_email($receiver_email, $subject, $body);

			$output = array(
				'success'		=>	true
			);

			echo json_encode($output);
		}
	}

	if($_POST['page'] == 'login')
	{
		if($_POST['action'] == 'login')
		{
			$exam->data = array(
				':user_email_address'	=>	$_POST['user_email_address']
			);

			$exam->query = "
			SELECT * FROM user_table 
			WHERE user_email_address = :user_email_address
			";

			$total_row = $exam->total_row();

			if($total_row > 0)
			{
				$result = $exam->query_result();

				foreach($result as $row)
				{
					if($row['user_email_verified'] == 'yes')
					{
						if(password_verify($_POST['user_password'], $row['user_password']))
						{
							$_SESSION['user_id'] = $row['user_id'];

							$output = array(
								'success'	=>	true
							);
						}
						else
						{
							$output = array(
								'error'		=>	'Wrong Password'
							);
						}
					}
					else
					{
						$output = array(
							'error'		=>	'Your Email is not verify'
						);
					}
				}
			}
			else
			{
				$output = array(
					'error'		=>	'Wrong Email Address'
				);
			}

			echo json_encode($output);
		}
	}

	if($_POST['page'] == "profile")
	{
		if($_POST['action'] == "profile")
		{
			$user_image = $_POST['hidden_user_image'];

			if($_FILES['user_image']['name'] != '')
			{
				$exam->filedata = $_FILES['user_image'];

				$user_image = $exam->Upload_file();
			}

			$exam->data = array(
				':user_name'				=>	$exam->clean_data($_POST['user_name']), 
				':user_gender'				=>	$_POST['user_gender'],
				':user_address'				=>	$exam->clean_data($_POST['user_address']),
				':user_mobile_no'			=>	$_POST['user_mobile_no'],
				':user_image'				=>	$user_image,
				':user_id'					=>	$_SESSION['user_id']		
			);

			$exam->query = "
			UPDATE user_table 
			SET user_name = :user_name, user_gender = :user_gender, user_address = :user_address, user_mobile_no = :user_mobile_no, user_image = :user_image 
			WHERE user_id = :user_id
			";
			$exam->execute_query();

			$output = array(
				'success'		=>	true
			);

			echo json_encode($output);

		}
	}

	if($_POST['page'] == 'change_password')
	{
		if($_POST['action'] == 'change_password')
		{
			$exam->data = array(
				':user_password'	=>	password_hash($_POST['user_password'], PASSWORD_DEFAULT),
				':user_id'			=>	$_SESSION['user_id']
			);

			$exam->query = "
			UPDATE user_table 
			SET user_password = :user_password 
			WHERE user_id = :user_id
			";

			$exam->execute_query();

			session_destroy();

			$output = array(
				'success'		=>	'Password has been change'
			);

			echo json_encode($output);
		}
	}

	if($_POST['page'] == 'index')
	{
		if($_POST['action'] == "fetch_exam")
		{
			$exam->query = "
			SELECT * FROM online_exam_table 
			WHERE online_exam_id = '".$_POST['exam_id']."'
			";

			$result = $exam->query_result();

			$output = '
			<div class="card">
				<div class="card-header">Exam Details</div>
				<div class="card-body">
					<table class="table table-striped table-hover table-bordered">
			';
			foreach($result as $row)
			{
				$output .= '
				<tr>
					<td><b>Exam Title</b></td>
					<td>'.$row["online_exam_title"].'</td>
				</tr>
				<tr>
					<td><b>Exam Date & Time</b></td>
					<td>'.$row["online_exam_datetime"].'</td>
				</tr>
				<tr>
					<td><b>Exam Duration</b></td>
					<td>'.$row["online_exam_duration"].' Minute</td>
				</tr>
				<tr>
					<td><b>Exam Total Question</b></td>
					<td>'.$row["total_question"].' </td>
				</tr>
				<tr>
					<td><b>Marks Per Right Answer</b></td>
					<td>'.$row["marks_per_right_answer"].' Mark</td>
				</tr>
				<tr>
					<td><b>Marks Per Wrong Answer</b></td>
					<td>-'.$row["marks_per_wrong_answer"].' Mark</td>
				</tr>
				';
				if($exam->If_user_already_enroll_exam($_POST['exam_id'], $_SESSION['user_id']))
				{
					$enroll_button = '
					<tr>
						<td colspan="2" align="center">
							<button style="font-size: 10px;" type="button" name="enroll_button" class="btn btn-info">You Already Enter In Exam</button>
						</td>
					</tr>
					';
				}
				else
				{
					$enroll_button = '
					<tr>
						<td colspan="2" align="center">
							<button type="button" name="enroll_button" id="enroll_button" class="btn btn-warning" data-exam_id="'.$row['online_exam_id'].'">Start Exam</button>
						</td>
					</tr>
					';
				}
				$output .= $enroll_button;
			}
			$output .= '</table>';
			echo $output;
		}

		if($_POST['action'] == 'enroll_exam')
		{
			$exam->data = array(
				':user_id'		=>	$_SESSION['user_id'],
				':exam_id'		=>	$_POST['exam_id']
			);

			$exam->query = "
			INSERT INTO user_exam_enroll_table 
			(user_id, exam_id) 
			VALUES (:user_id, :exam_id)
			";

			$exam->execute_query();

			$exam->query = "
			SELECT question_id FROM question_table 
			WHERE online_exam_id = '".$_POST['exam_id']."'
			";
			$result = $exam->query_result();
			foreach($result as $row)
			{
				$exam->data = array(
					':user_id'				=>	$_SESSION['user_id'],
					':exam_id'				=>	$_POST['exam_id'],
					':question_id'			=>	$row['question_id'],
					':user_answer_option'	=>	'0',
					':marks'				=>	'0'	
				);

				$exam->query = "
				INSERT INTO user_exam_question_answer 
				(user_id, exam_id, question_id, user_answer_option, marks) 
				VALUES (:user_id, :exam_id, :question_id, :user_answer_option, :marks)
				";
				$exam->execute_query();
			}
		}

	}

	if($_POST["page"] == 'enroll_exam')
	{
		if($_POST['action'] == 'fetch')
		{
			$output = array();
			

			$exam->query = "
			SELECT * FROM user_exam_enroll_table 
			INNER JOIN online_exam_table 
			ON online_exam_table.online_exam_id = user_exam_enroll_table.exam_id 
			WHERE user_exam_enroll_table.user_id = '".$_SESSION['user_id']."' 
			AND (";

			if(isset($_POST["search"]["value"]))
			{
			 	$exam->query .= 'online_exam_table.online_exam_title LIKE "%'.$_POST["search"]["value"].'%" ';
			 	$exam->query .= 'OR online_exam_table.online_exam_datetime LIKE "%'.$_POST["search"]["value"].'%" ';
			 	$exam->query .= 'OR online_exam_table.online_exam_duration LIKE "%'.$_POST["search"]["value"].'%" ';
			 	$exam->query .= 'OR online_exam_table.total_question LIKE "%'.$_POST["search"]["value"].'%" ';
			 	$exam->query .= 'OR online_exam_table.marks_per_right_answer LIKE "%'.$_POST["search"]["value"].'%" ';
			 	$exam->query .= 'OR online_exam_table.marks_per_wrong_answer LIKE "%'.$_POST["search"]["value"].'%" ';
			 	$exam->query .= 'OR online_exam_table.online_exam_status LIKE "%'.$_POST["search"]["value"].'%" ';
			}

			$exam->query .= ')';

			if(isset($_POST["order"]))
			{
				$exam->query .= 'ORDER BY '.$_POST['order']['0']['column'].' '.$_POST['order']['0']['dir'].' ';
			}
			else
			{
				$exam->query .= 'ORDER BY online_exam_table.online_exam_id DESC ';
			}

			$extra_query = '';

			if($_POST["length"] != -1)
			{
			 	$extra_query .= 'LIMIT ' . $_POST['start'] . ', ' . $_POST['length'];
			}

			$filterd_rows = $exam->total_row();

			$exam->query .= $extra_query;

			$result = $exam->query_result();

			$exam->query = "
			SELECT * FROM user_exam_enroll_table 
			INNER JOIN online_exam_table 
			ON online_exam_table.online_exam_id = user_exam_enroll_table.exam_id 
			WHERE user_exam_enroll_table.user_id = '".$_SESSION['user_id']."'";

			$total_rows = $exam->total_row();

			$data = array();

			foreach($result as $row)
			{
				$sub_array = array();
				$sub_array[] = html_entity_decode($row["online_exam_title"]);
				$sub_array[] = $row["online_exam_datetime"];
				$sub_array[] = $row["online_exam_duration"] . ' Minute';
				$sub_array[] = $row["total_question"] . ' Question';
				$sub_array[] = $row["marks_per_right_answer"] . ' Mark';
				$sub_array[] = '-' . $row["marks_per_wrong_answer"] . ' Mark';
				$status = '';
				$view_exam = ''; //Added
				if($row['online_exam_status'] == 'Created')
				{
					$status = '<span class="badge badge-success">Created</span>';
				}

				if($row['online_exam_status'] == 'Started')
				{
					$status = '<span class="badge badge-primary">Started</span>';
				}

				if($row['online_exam_status'] == 'Completed')
				{
					$status = '<span class="badge badge-dark">Completed</span>';
				}

				$sub_array[] = $status;				

				if($row["online_exam_status"] == 'Started')
				{
					$view_exam = '<a href="view_exam.php?code='.$row["online_exam_code"].'" class="btn btn-info btn-sm">View Exam</a>';
				}
				if($row["online_exam_status"] == 'Completed')
				{
					$view_exam = '<a href="view_exam.php?code='.$row["online_exam_code"].'" class="btn btn-info btn-sm">View Exam</a>';
				}

				
				$sub_array[] = $view_exam;

				$data[] = $sub_array;
			}

			$output = array(
			 	"draw"    			=> 	intval($_POST["draw"]),
			 	"recordsTotal"  	=>  $total_rows,
			 	"recordsFiltered" 	=> 	$filterd_rows,
			 	"data"    			=> 	$data
			);
			echo json_encode($output);
		}
	}

	if($_POST['page'] == 'view_exam')
	{
		if($_POST['action'] == 'load_question')
		{
			if($_POST['question_id'] == '')
			{
				$exam->query = "
				SELECT * FROM question_table 
				WHERE online_exam_id = '".$_POST["exam_id"]."' 
				ORDER BY question_id ASC 
				LIMIT 1
				";
			}
			else
			{
				$exam->query = "
				SELECT * FROM question_table 
				WHERE question_id = '".$_POST["question_id"]."' 
				";
			}


			$result = $exam->query_result();

			$output = '';
			$question_id = '';
			$user_id = '';


			foreach($result as $row)
			{
				$output .= '
				<h1>'.$row["question_title"].'</h1>
				<hr />
				<br />
				<div class="row">
				';



				$exam->query = "
				SELECT * FROM option_table 
				WHERE question_id = '".$row['question_id']."'
				";
				$sub_result = $exam->query_result();

				$count = 1;

				foreach($sub_result as $sub_row)
				{
					$exam->query = "select user_answer_option from user_exam_question_answer where user_id='".$_SESSION["user_id"]."'and question_id='".$row['question_id']."'";
					$result = $exam->fetchsinglerow();
					

					$user_answer_option = $result['user_answer_option'];

					if($user_answer_option==$sub_row["option_number"] ) { $user_answer_option="checked"; }

							$output .= '
							<div class="col-md-6" style="margin-bottom:32px;">
								<div class="radio">
									<label><h4><input type="radio" name="option_1" class="answer_option" data-question_id="'.$row["question_id"].'" data-id="'.$count.'" '.$user_answer_option.'/>&nbsp;'.$sub_row["option_title"].'</h4></label>
								</div>
							</div>
							';

					$count = $count + 1;
				}
				$output .= '
				</div>
				';
				$exam->query = "
				SELECT question_id FROM question_table 
				WHERE question_id < '".$row['question_id']."' 
				AND online_exam_id = '".$_POST["exam_id"]."' 
				ORDER BY question_id DESC 
				LIMIT 1";

				$previous_result = $exam->query_result();

				$previous_id = '';
				$next_id = '';

				foreach($previous_result as $previous_row)
				{
					$previous_id = $previous_row['question_id'];
				}

				$exam->query = "
				SELECT question_id FROM question_table 
				WHERE question_id > '".$row['question_id']."' 
				AND online_exam_id = '".$_POST["exam_id"]."' 
				ORDER BY question_id ASC 
				LIMIT 1";
  				
  				$next_result = $exam->query_result();

  				foreach($next_result as $next_row)
				{
					$next_id = $next_row['question_id'];
				}

				$if_previous_disable = '';
				$if_next_disable = '';

				if($previous_id == "")
				{
					$if_previous_disable = 'disabled';
				}
				
				if($next_id == "")
				{
					$if_next_disable = 'disabled';
				}

				$output .= '
					<br /><br />
				  	<div align="center" style="display: flex; justify-content: center;">
				   		<button style="margin-right: 20px;" type="button" name="previous" class="btn btn-info btn-lg previous" id="'.$previous_id.'" '.$if_previous_disable.'>Previous</button>
				   		<button type="button" name="next" class="btn btn-info btn-warning btn-lg next" id="'.$next_id.'" '.$if_next_disable.'>Next</button>
				  	</div>
				  	<br /><br />';
			}

			echo $output;
		}
		if($_POST['action'] == 'question_navigation')
		{
			$exam->query = "
				SELECT question_id FROM question_table 
				WHERE online_exam_id = '".$_POST["exam_id"]."' 
				ORDER BY question_id ASC 
				";
			$result = $exam->query_result();
			$output = '
			<div class="card">
				<div class="card-header" style="display: flex; justify-content: space-between;">Question Navigation 
				</div>
				<div class="card-body">
					<div class="row" style="display: contents;">
			';
			$count = 1;
			foreach($result as $row)	
			{
				$output .= '
				<div class="col-md-2" style="margin-bottom:24px;">
					<button type="button" class="btn btn-primary btn-lg question_navigation" data-question_id="'.$row["question_id"].'">'.$count.'</button>
				</div>
				';
				$count++;
			}
			$output .= '
				</div>
			</div></div>
			';
			echo $output;
		}

		if($_POST['action'] == 'user_detail')
		{
			$exam->query = "
			SELECT * FROM user_table 
			WHERE user_id = '".$_SESSION["user_id"]."'
			";

			$result = $exam->query_result();

			$output = '
			<div class="card">
				<div class="card-header">User Details</div>
				<div class="card-body">
					<div class="row">
			';

			foreach($result as $row)
			{
				$output .= '
				<div class="col-md-3">
					<img src="upload/'.$row["user_image"].'" class="img-fluid" />
				</div>
				<div class="col-md-9">
					<table class="table table-bordered">
						<tr>
							<th>Name</th>
							<td>'.$row["user_name"].'</td>
						</tr>
						<tr>
							<th>Email ID</th>
							<td>'.$row["user_email_address"].'</td>
						</tr>
						<tr>
							<th>Gendar</th>
							<td>'.$row["user_gender"].'</td>
						</tr>
					</table>
				</div>
				';
			}
			$output .= '</div></div></div>';
			echo $output;
		}
		if($_POST['action'] == 'answer')
		{
			$exam_right_answer_mark = $exam->Get_question_right_answer_mark($_POST['exam_id']);

			$exam_wrong_answer_mark = $exam->Get_question_wrong_answer_mark($_POST['exam_id']);
			
			$orignal_answer = $exam->Get_question_answer_option($_POST['question_id']);

			$marks = 0;

			if($orignal_answer == $_POST['answer_option'])
			{
				$marks = '+' . $exam_right_answer_mark;
			}
			else
			{
				$marks = '-' . $exam_wrong_answer_mark;
			}

			$exam->data = array(
				':user_answer_option'	=>	$_POST['answer_option'],
				':marks'				=>	$marks
			);

			$exam->query = "
			UPDATE user_exam_question_answer 
			SET user_answer_option = :user_answer_option, marks = :marks 
			WHERE user_id = '".$_SESSION["user_id"]."' 
			AND exam_id = '".$_POST['exam_id']."' 
			AND question_id = '".$_POST["question_id"]."'
			";
			$exam->execute_query();
		}
	}
	
}

?>