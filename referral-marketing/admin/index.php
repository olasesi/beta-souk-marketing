<?php
require_once('../../incs-marketing/config.php');
require_once('../../incs-marketing/gen_serv_con.php');
//include('../incs-marketing/cookie-session.php');
//include('../incs-marketing/header-admin.php');

?>
<?php
$signup_errors = array();
if(isset($_POST['login']) AND $_SERVER['REQUEST_METHOD']== "POST" ){
    if (preg_match ('/^[a-zA-Z-_]{3,20}$/i', trim($_POST['username']))) {		//only 20 characters are allowed to be inputted
		$username = mysqli_real_escape_string ($connect, trim($_POST['username']));
	} else {
		$signup_errors['username'] = 'Please enter valid username. Alpha-numeric letters, underscore or dash.';
	} 


    if (preg_match ('/^.{6,255}$/i', trim($_POST['password']))) {		//only 20 characters are allowed to be inputted
		$password = mysqli_real_escape_string ($connect, trim($_POST['password']));
	} else {
		$signup_errors['password'] = 'Please enter valid password.';
	} 


  



    if(empty($signup_errors)){
 
  
        $query = mysqli_query($connect, "SELECT * FROM marketer WHERE username='".$username."' AND m_email_comfirm='1'") or die(db_conn_error);
        
        $row = mysqli_fetch_array($query, MYSQLI_NUM);
      
       
        if(password_verify($password,$row[7])){
          
          $value = md5(uniqid(rand(), true));
          $query_confirm_sessions = mysqli_query ($connect, "SELECT m_cookie_session FROM marketer WHERE m_username='".$username."'") or die(db_conn_error);
          $cookie_value_if_empty = mysqli_fetch_array($query_confirm_sessions);
          
          if (empty($cookie_value_if_empty[0])){
          mysqli_query($connect,"UPDATE marketer SET m_cookie_session = '".$value."' WHERE m_username='".$username."'") or die(db_conn_error);		
          setcookie("remember_password", $value, time() + 7*24*3600);	//7 days for cookie to expire
          
          }else if(!empty($cookie_value_if_empty[0])){
          
          setcookie("remember_password", $cookie_value_if_empty[0], time() + 7*24*3600);	//4 days for cookie to expire
          }
      
      
      $_SESSION['user_id_marketer'] = $row[0];
      $_SESSION['m_firstname'] = $row[3];
      $_SESSION['m_surname'] = $row[4];
      $_SESSION['n_username'] = $row[5];
      $_SESSION['m_email'] = $row[6];
       
      
      header('Location:'.GEN_WEBSITE.'/students/home.php');
       exit;
      
      
      
      
      
      
      
      
      
      
      
        }else{
      
      
      
          $signup_errors['email'] = 'You entered an incorrect login details.';
         
      
        }
      
      
      }














}



?>





<!DOCTYPE html>
<!-- 
Template Name: Savehyip
Version: 1.0.0
Author: Webstrot

-->
<!--[if IE 8]> <html lang="en" class="ie8 no-js"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9 no-js"> <![endif]-->
<!--[if !IE]><!-->
<html lang="zxx">
<!--[endif]-->


<!-- Mirrored from webstrot.com/html/savehyip/light_version/index3.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 22 Feb 2022 11:02:32 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=utf-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="utf-8" />
    <title>Savehyip Responsive HTML Template</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Savehyip" />
    <meta name="keywords" content="Savehyip" />
    <meta name="author" content="" />
    <meta name="MobileOptimized" content="320" />
    <!--Template style -->
    <link rel="stylesheet" type="text/css" href="../../referral-marketing/css/animate.css" />
    <link rel="stylesheet" type="text/css" href="../../referral-marketing/css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="../../referral-marketing/css/fonts.css" />
    <link rel="stylesheet" type="text/css" href="../../referral-marketing/css/flaticon.css" />
    <link rel="stylesheet" type="text/css" href="../../referral-marketing/css/font-awesome.css" />
    <link rel="stylesheet" type="text/css" href="../../../referral-marketing/css/owl.carousel.css">
    <link rel="stylesheet" type="text/css" href="../../referral-marketing/css/owl.theme.default.css">
    <link rel="stylesheet" type="text/css" href="../../referral-marketing/css/nice-select.css" />
    <link rel="stylesheet" type="text/css" href="../../referral-marketing/css/datatables.css" />
    <link rel="stylesheet" type="text/css" href="../../referral-marketing/css/dropify.min.css" />
    <link rel="stylesheet" type="text/css" href="../../referral-marketing/css/reset.css" />
    <link rel="stylesheet" type="text/css" href="../../referral-marketing/css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="../../referral-marketing/css/style.css" />
    <link rel="stylesheet" type="text/css" href="../../referral-marketing/css/responsive.css" />
    <!--favicon-->
    <link rel="shortcut icon" type="image/png" href="../referral-marketing/images/favicon.png" />
<script src='../../../google_analytics_auto.js'></script></head>

<body>
    <!-- preloader Start -->
    <!-- preloader Start -->
    <!-- <div id="preloader">
        <div id="status">
            <img src="images/loader.gif" id="preloader_image" alt="loader">
        </div>
    </div> -->
    <div class="cursor cursor3"></div>
    <!-- Top Scroll Start -->
    <a href="javascript:" id="return-to-top" class="index3_scroll"> <i class="fas fa-angle-double-up"></i></a>
    <!-- Top Scroll End -->
    <!-- cp navi wrapper Start -->
    <nav class="cd-dropdown index3_cd_dropdown d-block d-sm-block d-md-block d-lg-none d-xl-none">
        <h2><a href="index.html"> savehyip </a></h2>
        <a href="#0" class="cd-close">Close</a>
        <ul class="cd-dropdown-content">
            <li>
                <form class="cd-search">
                    <input type="search" placeholder="Search...">
                </form>
            </li>
             <li class="has-children">
                <a href="#">index</a>
                <ul class="cd-secondary-dropdown icon_menu is-hidden">
                    <li class="go-back"><a href="#0">Menu</a></li>
                    <li><a href="index.html">index I</a></li>
                   
                </ul>
            </li>
           
          
          
           
        </ul>
        <!-- .cd-dropdown-content -->
    </nav>
    <div class="cp_navi_main_wrapper index2_header_wrapper index3_header_wrapper float_left">
        <div class="container-fluid">
            <div class="cp_logo_wrapper">
                <a href="index.html">
                    <img src="images/logo5.png" alt="logo">
                </a>
            </div>
            <!-- mobile menu area start -->
            <header class="mobail_menu d-block d-sm-block d-md-block d-lg-none d-xl-none">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="cd-dropdown-wrapper">
                                <a class="house_toggle" href="#0">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Capa_1" x="0px" y="0px" viewBox="0 0 31.177 31.177" style="enable-background:new 0 0 31.177 31.177;" xml:space="preserve" width="25px" height="25px">
                                        <g>
                                            <g>
                                                <path class="menubar" d="M30.23,1.775H0.946c-0.489,0-0.887-0.398-0.887-0.888S0.457,0,0.946,0H30.23    c0.49,0,0.888,0.398,0.888,0.888S30.72,1.775,30.23,1.775z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,9.126H12.069c-0.49,0-0.888-0.398-0.888-0.888c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,8.729,30.72,9.126,30.23,9.126z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,16.477H0.946c-0.489,0-0.887-0.398-0.887-0.888c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,16.079,30.72,16.477,30.23,16.477z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,23.826H12.069c-0.49,0-0.888-0.396-0.888-0.887c0-0.49,0.398-0.888,0.888-0.888H30.23    c0.49,0,0.888,0.397,0.888,0.888C31.118,23.43,30.72,23.826,30.23,23.826z" fill="#004165" />
                                            </g>
                                            <g>
                                                <path class="menubar" d="M30.23,31.177H0.946c-0.489,0-0.887-0.396-0.887-0.887c0-0.49,0.398-0.888,0.887-0.888H30.23    c0.49,0,0.888,0.398,0.888,0.888C31.118,30.78,30.72,31.177,30.23,31.177z" fill="#004165" />
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <!-- .cd-dropdown -->

                            </div>
                        </div>
                    </div>
                </div>
                <!-- .cd-dropdown-wrapper -->
            </header>
            <div class="top_header_right_wrapper top_phonecalls">
                <p><i class="flaticon-phone-contact"></i> (+91) 123 123 4567</p>
                <div class="header_btn index3_header_btn">
                    <ul>
                       
                    </ul>

                </div>
            </div>

           
        </div>
    </div>




<!-- inner header wrapper start -->
<div class="page_title_section">

    <div class="page_header">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-9 col-12 col-sm-8">

                    <h1>login</h1>
                </div>
                <div class="col-lg-3 col-md-3 col-12 col-sm-4">
                    <div class="sub_title_section">
                        <ul class="sub_title">
                            <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                            <li>login</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- inner header wrapper end -->
<!-- login wrapper start -->
<div class="login_wrapper fixed_portion float_left">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="login_top_box float_left">
                    <div class="login_banner_wrapper">
                        <img src="images/logo2.png" alt="logo">
                        <div class="about_btn  facebook_wrap float_left">

                            <a href="#">login with facebook <i class="fab fa-facebook-f"></i></a>

                        </div>
                        <div class="about_btn google_wrap float_left">

                            <a href="#">login with pinterest <i class="fab fa-pinterest-p"></i></a>

                        </div>
                        <div class="jp_regis_center_tag_wrapper jb_register_red_or">
                            <h1>OR</h1>
                        </div>
                    </div>
                    <div class="login_form_wrapper">
                        <form action="" method="POST">
                        <div class="sv_heading_wraper heading_wrapper_dark dark_heading hwd">

                            <h3> login to enter</h3>

                        </div>
                        <div class="form-group icon_form comments_form">

                            <input type="text" class="form-control require" name="username" value="" placeholder="Username">

                        </div>
                        <div class="form-group icon_form comments_form">

                            <input type="password" class="form-control require" value="" placeholder="Password">

                        </div>
                        <!-- <div class="login_remember_box">
                            <label class="control control--checkbox">Remember me
                                    <input type="checkbox">
                                    <span class="control__indicator"></span>
                                </label>
                            <a href="#" class="forget_password">
									Forgot Password
								</a>
                        </div> -->
                        <div class="about_btn login_btn float_left">

                            <button type="submit" name="login"><a href="#">login</a></button>
                        </div>
                        <div class="dont_have_account float_left">
                            <p>Don’t have an acount ? <a href="../referral-marketing/register.php">Sign up</a></p>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login wrapper end -->
<!-- payments wrapper start -->
<div class="payments_wrapper float_left">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="sv_heading_wraper half_section_headign">
                    <h4>Payment Methods</h4>
                    <h3>Accepted Payment Method</h3>

                </div>
            </div>
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <div class="payment_slider_wrapper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">

                            <div class="partner_img_wrapper float_left">
                                <img src="images/partner1.png" class="img-responsive" alt="img">
                            </div>

                        </div>
                        <div class="item">

                            <div class="partner_img_wrapper float_left">
                                <img src="images/partner2.png" class="img-responsive" alt="img">
                            </div>

                        </div>
                        <div class="item">

                            <div class="partner_img_wrapper float_left">
                                <img src="images/partner3.png" class="img-responsive" alt="img">
                            </div>

                        </div>
                        <div class="item">

                            <div class="partner_img_wrapper float_left">
                                <img src="images/partner4.png" class="img-responsive" alt="img">
                            </div>

                        </div>
                        <div class="item">

                            <div class="partner_img_wrapper float_left">
                                <img src="images/partner2.png" class="img-responsive" alt="img">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- payments wrapper end -->
<?php

//include('../incs-marketing/footer-admin.php');

?>