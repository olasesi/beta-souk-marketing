<?php
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');
//include('../incs-marketing/cookie-session.php');
?>
<?php

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

?>
<?php
$signup_errors = array();
if(isset($_POST['login']) AND $_SERVER['REQUEST_METHOD']== "POST" ){
    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){		//only 20 characters are allowed to be inputted
		$email = mysqli_real_escape_string($connect,$_POST['email']);
	} else {
		$signup_errors['email'] = "Enter a valid email address";
	}


    if (preg_match ('/^.{6,255}$/i', trim($_POST['password']))) {		//only 20 characters are allowed to be inputted
		$password = mysqli_real_escape_string ($connect, trim($_POST['password']));
	} else {
		$signup_errors['password'] = 'Please enter valid password.';
	} 


    if(empty($signup_errors)){
 
       
        $query = mysqli_query($connect, "SELECT * FROM non_ref_users WHERE non_ref_users_email='".$email."'") or die(db_conn_error);
     
       if(mysqli_num_rows($query) == 1){
           
      while($row = mysqli_fetch_array($query)){
      
       
        if(password_verify($password,$row[6])){
          
          $value = md5(uniqid(rand(), true));
          $query_confirm_sessions = mysqli_query ($connect, "SELECT non_ref_users_cookie FROM non_ref_users WHERE non_ref_users_email='".$email."'") or die(db_conn_error);
          $cookie_value_if_empty = mysqli_fetch_array($query_confirm_sessions);
          
          if(empty($cookie_value_if_empty[0])){
          mysqli_query($connect,"UPDATE non_ref_users SET non_ref_users_cookie = '".$value."' WHERE non_ref_users_email='".$email."'") or die(db_conn_error);		
          setcookie("buy_cookie_session", $value, time() + 7*24*3600);	//7 days for cookie to expire
          
          }else if(!empty($cookie_value_if_empty[0])){
          
          setcookie("buy_cookie_session", $cookie_value_if_empty[0], time() + 7*24*3600);	//7 days for cookie to expire
          }
      
      
    //   $_SESSION['non_ref_users_id'] = $row[0];
    //   $_SESSION['non_ref_users_fullname'] = $row[2];
    //   $_SESSION['non_ref_users_email'] = $row[4];
    //   $_SESSION['non_ref_users_address'] = $row[7];
    //   $_SESSION['non_ref_users_phone'] = $row[7];
    //   $_SESSION['non_ref_users_package'] = $row[8];
    //   $_SESSION['non_ref_users_price'] = $row[9];
    //   $_SESSION['non_ref_users_order'] = $row[10];
    //   $_SESSION['non_ref_users_reference'] = $row[11];
    //   $_SESSION['non_ref_users_timestamp'] = $row[13];
      
      header('Location:'.GEN_WEBSITE.'/dashboard.php');
       exit;
      } else{
      
      
      
          $signup_errors['email'] = 'You entered an incorrect login details.';
         
      
        }
    }
     
}else{
      
      
      
    $signup_errors['wrong_detail'] = 'You entered an incorrect login details.';
   

  }


    }


}


include('../incs-marketing/header-auth.php');
?>


    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
                    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html" style="width:208px"><img src="img/app-landing/logo5.png" alt="logo"></a></div>
					<h2 class="auth-heading text-center mb-5">Log in to Portal</h2>
			        <div class="auth-form-container text-start">
						<form action="" method="POST" class="auth-form login-form">    
							<?php if (array_key_exists('wrong_detail', $signup_errors)) {
							echo '<p class="text-danger">'.$signup_errors['wrong_detail'].'</p>';
							}
							?>     
							<div class="email mb-3">
								<label class="sr-only" for="email">Your Email</label>
								<input id="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" name="email" type="text" class="form-control email" placeholder="Email">
								<?php 
								if (array_key_exists('email', $signup_errors)) {
									echo '<p class="text-danger" >'.$signup_errors['email'].'</p>';
									}
								?>
							</div><!--//form-group-->
							<div class="password mb-3">
								<label class="sr-only" for="password">Password</label>
								<input id="password" name="password" type="password" class="form-control password" placeholder="Create a password">
								<?php 
								if (array_key_exists('password', $signup_errors)) {
									echo '<p class="text-danger" >'.$signup_errors['password'].'</p>';
									}
								?>
								<div class="extra mt-3 row justify-content-between">
									<div class="col-6">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
											<label class="form-check-label" for="RememberPassword">
											Remember me
											</label>
										</div>
									</div><!--//col-6-->
									<div class="col-6">
										<div class="forgot-password text-end">
											<a href="reset-password.html">Forgot password?</a>
										</div>
									</div><!--//col-6-->
								</div><!--//extra-->
							</div><!--//form-group-->
							<div class="text-center">
								<button type="submit" name="login" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>
							</div>
						</form>
						
						<div class="auth-option text-center pt-5">No Account? Sign up <a class="text-link" href="/beta-souk-marketing/referral-marketing/signup.php" >here</a>.</div>
					</div><!--//auth-form-container-->	

			    </div><!--//auth-body-->
		    
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
						 <small class="copyright">Designed with <i class="fas fa-heart" style="color: #c43a10;"></i> by <a class="app-link" href="https://duromedia.com.ng" target="_blank">Duromedia</a> for business</small>
				       
				    </div>
			    </footer><!--//app-auth-footer-->	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder-login">
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    <div class="overlay-content p-3 p-lg-4 rounded">
					<h5 class="mb-3 overlay-title">Explore Betasouk</h5>
					    <div>a ready made e-commerce website for business owners to expand their market base and make more sales.</div>
				    </div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
</html> 

