<?php
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');
//include('../incs-marketing/cookie-session.php');
include('../incs-marketing/header-admin.php');

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

include('../incs-marketing/footer-admin.php');

?>