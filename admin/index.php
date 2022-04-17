<?php
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');

if(isset($_SESSION['admin_id'])){
	header('Location:http://localhost/beta-souk-marketing/admin/dashboard.php');
	exit();
}

$signup_errors = array();
if(isset($_POST['login']) AND $_SERVER['REQUEST_METHOD']== "POST" ){

if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
	$em = mysqli_real_escape_string($connect,$_POST['email']);
}else{
	$signup_errors['email'] = "Please enter a valid email address";
}

if(preg_match('/^.{6,255}$/i',$_POST['password'])){
	$pw =  mysqli_real_escape_string($connect,$_POST['password']);
}else{
	$signup_errors['password'] = "Please enter a password that is 6 characters and above";
}

if(empty($signup_errors)){
    $vl =  mysqli_query($connect, "SELECT * FROM admin WHERE admin_email='".$em."' AND admin_password='".$pw."' AND admin_active='1' ") or die(db_conn_error);
    if(mysqli_num_rows($vl)== 1){
     $row = mysqli_fetch_array($vl,MYSQLI_NUM);
     
     $value = md5(uniqid(rand(), true));
     $query_confirm_sessions = mysqli_query ($connect, "SELECT admin_cookie FROM admin WHERE admin_email='".$em."' AND admin_active = '1'") or die(db_conn_error);
$cookie_value_if_empty = mysqli_fetch_array($query_confirm_sessions);

if (empty($cookie_value_if_empty[0])){
mysqli_query($connect,"UPDATE admin SET admin_cookie = '".$value."' WHERE admin_email='".$em."' AND admin_active = '1'") or die(db_conn_error);		
setcookie("remember_me", $value, time() + 432000);	//session time out is 5 days

}else if(!empty($cookie_value_if_empty[0])){

setcookie("remember_me", $cookie_value_if_empty[0], time() + 432000);	
}

     
    $_SESSION['admin_id'] = $row[0];
    $_SESSION['email'] = $row[3];
     
    header("Location:http://localhost/beta-souk-marketing/admin/dashboard.php"); 
    exit;
    }else{ 
     $signup_errors['password_mismatch']= "Email and password do not match";}
}
}
?>



<?php
include('../incs-marketing/header-auth.php');
?>


    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
                    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html" style="width:208px"><img src="../referral-marketing/img/app-landing/logo5.png" alt="logo"></a></div>
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
								<!-- <div class="extra mt-3 row justify-content-between">
									<div class="col-6">
										<div class="form-check">
											<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
											<label class="form-check-label" for="RememberPassword">
											Remember me
											</label>
										</div>
									</div>
									<div class="col-6">
										<div class="forgot-password text-end">
											<a href="reset-password.html">Forgot password?</a>
										</div>
									</div>
								</div>//extra -->
							</div><!--//form-group-->
							<div class="text-center">
								<button type="submit" name="login" class="btn app-btn-primary w-100 theme-btn mx-auto">Log In</button>
							</div>
						</form>
						
						<!-- <div class="auth-option text-center pt-5">No Account? Sign up <a class="text-link" href="/beta-souk-marketing/referral-marketing/signup.php" >here</a>.</div> -->
					</div><!--//auth-form-container-->	

			    </div><!--//auth-body-->
		    
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
						 <small class="copyright">Designed with <span  style="color: #c43a10;">&#10084;</span> by <a class="app-link" href="https://duromedia.com.ng" target="_blank">Duromedia</a> for business</small>
				       
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

