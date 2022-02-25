<?php
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');
//include('../incs-marketing/cookie-session.php');

if(isset($_SESSION['user_id_marketer'])) {
    header('Location:'.GEN_WEBSITE.'/my_account.php');
       exit;
}
if(isset($_SESSION['non_ref_users_id'])) {
    header('Location:'.GEN_WEBSITE.'/dashboard.php');
       exit();
}

if(isset($_SESSION['user_id'])) {
    header('Location:'.GEN_WEBSITE.'/referred-to-buy.php');
       exit();
}






include('../incs-marketing/header-admin.php');

?>
<?php
$signup_errors = array();
if(isset($_POST['register']) AND $_SERVER['REQUEST_METHOD']== "POST" ){

  if (preg_match ('/^[a-zA-Z]{3,20}$/i', trim($_POST['firstname']))) {		//only 20 characters are allowed to be inputted
		$firstname = mysqli_real_escape_string ($connect, trim($_POST['firstname']));
	} else {
		$signup_errors['firstname'] = 'Please enter valid firstname';
	} 

  if (preg_match ('/^[a-zA-Z]{3,20}$/i', trim($_POST['surname']))) {		//only 20 characters are allowed to be inputted
		$surname = mysqli_real_escape_string ($connect, trim($_POST['surname']));
	} else {
		$signup_errors['surname'] = 'Please enter valid surname';
	} 

    if (preg_match ('/^[a-zA-Z-_]{3,20}$/i', trim($_POST['username']))) {		//only 20 characters are allowed to be inputted
		$username = mysqli_real_escape_string ($connect, trim($_POST['username']));
	} else {
		$signup_errors['username'] = 'Please enter valid username. Alpha-numeric letters, underscore or dash.';
	} 

if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
	$email = mysqli_real_escape_string($connect,$_POST['email']);
}else{
	$signup_errors['email'] = "Enter a valid email address";
}


if($_POST['password'] == $_POST['confirm_password']){
	if(preg_match('/^.{6,255}$/i',$_POST['password'])){
    $password =  mysqli_real_escape_string($connect,$_POST['password']);
  }else{
    $signup_errors['password'] = "Minimum of 6 characters";
  }
}else{
	$signup_errors['password_match'] = "Password did not match";
}





if(empty($signup_errors)){


    $query = mysqli_query($connect, "SELECT m_username, m_email FROM marketer WHERE m_username='".$username."' OR m_email = '".$email."'") or die(db_conn_error); 
    
    if(mysqli_num_rows($query)== 1){
        $signup_errors['username'] = 'This username or email has already been registered. Please try another one.';
    }else{
      $hash=md5(rand(0,1000));
      $encrypted = password_hash($password, PASSWORD_DEFAULT);
    

    $q = mysqli_query($connect,"INSERT INTO  marketer (m_firstname, m_surname, m_username, m_email, m_password, m_cookie_session, m_remember_pass) VALUES ('".$firstname."','".$surname."','".$username."', '".$email."', '".$encrypted."', '', '".$hash."')") or die(db_conn_error);

            if(mysqli_affected_rows($connect) == 1){


      $body = '
      <div style="max-width:1000px; margin-left:auto; margin-right:auto;">
        <div style="font-size:14px; margin-top:50px;">
        <center>
        <h1 style="color:#f5f5f5; background-color:#161616; text-shadow:1px 1px 1px #a2a2a2; padding-top:10px; padding-bottom:10px; text-transform:uppercase;">
        
       Registration was successful</h1>
        </center>


        <p>Thank you for registering. Please click this link to confirm your email.
        <center><a href="'.GEN_WEBSITE.'/verify-email.php?confirm='.$hash.'">'.GEN_WEBSITE.'/verify-email.php?confirm='.$hash.'</a></center>
        </p>
        
        
        </div>
      </div>

      ';
          
          $headers = 'MIME-Version: 1.0' . "\r\n";
          $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
          $headers .= 'From: noreply@'.DOMAIN_NAME . "\r\n";
          $headers .= 'Reply-To: noreply@'.DOMAIN_NAME . "\r\n";
          $headers .= 'Return-Path: noreply@'.DOMAIN_NAME . "\r\n";
          $headers .= 'BCC: noreply@'.DOMAIN_NAME . "\r\n";
          $headers .= 'X-Priority: 3' . "\r\n";
          $headers .= 'X-Mailer: PHP/'. phpversion() . "\r\n";
          
          mail($email, 'Beta Souk Registration', $body, $headers);	
          
          //edit 1
          echo '
          
          <div class="global_community_wrapper newsletter_wrapper index2_newsletter index3_newsletter float_left">
          <div class="container">
              <div class="row">
                  <div class="global_comm_wraper news_cntnt">
                      <h1> Congratulations for the Successful Registration</h1>
                      <p>  A link has been sent to your email to continue the process. If you do not find the mail in your inbox, please check the spam mails.</p>
                    
                  </div>
             
              </div>
          </div>
      </div>            
   ';

    
   include('../incs-marketing/footer-admin.php');
    exit();


}else{
trigger_error('You could not be registered due to a system error. We apologize for any inconvenience.');

}


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

                    <h1>Register</h1>
                </div>
                <div class="col-lg-3 col-md-3 col-12 col-sm-4">
                    <div class="sub_title_section">
                        <ul class="sub_title">
                            <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                            <li>Register</li>
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

                            <a href="#">Register with facebook <i class="fab fa-facebook-f"></i></a>

                        </div>
                        <div class="about_btn google_wrap float_left">

                            <a href="#">Register with pinterest <i class="fab fa-pinterest-p"></i></a>

                        </div>
                        <div class="jp_regis_center_tag_wrapper jb_register_red_or">
                            <h1>OR</h1>
                        </div>
                    </div>
                    <div class="login_form_wrapper">
                        <form action="" method="POST">
                        <div class="sv_heading_wraper heading_wrapper_dark dark_heading hwd">

                            <h3> Register</h3>

                        </div>
                        <div class="form-group icon_form comments_form">

                            <input type="text" class="form-control require" value="<?php if(isset($_POST['firstname'])){echo $_POST['firstname'];}?>" name="firstname" placeholder="Firstname">
                <?php 
                   if (array_key_exists('firstname', $signup_errors)) {
                       echo '<p class="text-danger" >'.$signup_errors['firstname'].'</p>';
                       }
                   ?>
                        </div>

                        <div class="form-group icon_form comments_form">

                                    <input type="text" class="form-control require" value="<?php if(isset($_POST['surname'])){echo $_POST['surname'];}?>" name="surname" placeholder="Surname">
                                    <?php 
                   if (array_key_exists('surname', $signup_errors)) {
                       echo '<p class="text-danger" >'.$signup_errors['surname'].'</p>';
                       }
                   ?>
                                    </div>

                                    <div class="form-group icon_form comments_form">

<input type="text" class="form-control require" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>" name="username" placeholder="Username">
<?php 
if (array_key_exists('username', $signup_errors)) {
echo '<p class="text-danger" >'.$signup_errors['username'].'</p>';
}
?>
</div>


                                    <div class="form-group icon_form comments_form">

                                    <input type="text" class="form-control require" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" name="email" placeholder="Email Address">
                                    <?php 
                   if (array_key_exists('email', $signup_errors)) {
                       echo '<p class="text-danger" >'.$signup_errors['email'].'</p>';
                       }
                   ?>

                                    </div>

                                                            <div class="form-group icon_form comments_form">

                                                                <input type="password" class="form-control require" placeholder="Password" name="password">
                                                                <?php 
                   if (array_key_exists('password', $signup_errors)) {
                       echo '<p class="text-danger" >'.$signup_errors['password'].'</p>';
                       }
                   ?>
                                                            </div>


                                                            <div class="form-group icon_form comments_form">

                                    <input type="password" class="form-control require" placeholder="Confirm password" name="confirm_password">
                                    <?php 
                   if (array_key_exists('password_match', $signup_errors)) {
                       echo '<p class="text-danger" >'.$signup_errors['password_match'].'</p>';
                       }
                   ?>
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
                              
                               <button type="submit" name="register" class="button"> <a>Register</a></button>
                        </div>
                        <!-- <div class="dont_have_account float_left">
                            <p>Don’t have an acount ? <a href="register.html">Sign up</a></p>
                        </div> -->
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