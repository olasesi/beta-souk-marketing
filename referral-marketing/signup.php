<?php
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');
//include('../incs-marketing/cookie-session.php');


// if(isset($_SESSION['user_id_marketer'])) {
//     header('Location:'.GEN_WEBSITE.'/my_account.php');
//        exit;
// }
 if(isset($_SESSION['non_ref_users_id'])) {
     header('Location:'.GEN_WEBSITE.'/dashboard.php');
        exit();
 }

// if(isset($_SESSION['user_id'])) {
//     header('Location:'.GEN_WEBSITE.'/referred-to-buy.php');
//        exit();
// }
?>
<?php
//  if(isset($_SESSION['non_ref_users_id'])){
//     $query_select = mysqli_query ($connect, "SELECT * FROM non_ref_users WHERE non_ref_users_id='".$_SESSION['non_ref_users_id']."'") or die(db_conn_error);
//     if(mysqli_num_rows($query_select) == 1){
//       while($rows = mysqli_fetch_array($query_select)){
        
//        $firstname = $_SESSION['non_ref_users_firstname'];
//        $surename = $_SESSION['non_ref_users_surname'];
//        $username = $_SESSION['non_ref_users_username'];
//        $email = $_SESSION['non_ref_users_email'];
//        $address = $_SESSION['non_ref_users_address'];
//        $package = $_SESSION['non_ref_users_package'];
//        $price = $_SESSION['non_ref_users_price'];
//        $order = $_SESSION['non_ref_users_order'];
//        $ref = $_SESSION['non_ref_users_reference'];
//       }
    
//     }      
//      }
?>
<?php
//if(!isset($_SESSION['non_ref_users_id'])){

$errors = array();
if(isset($_POST['order']) AND $_SERVER['REQUEST_METHOD'] == "POST" ){

  	if (preg_match ('/^[a-zA-Z" "]{3,60}$/i', trim($_POST['fullname']))) {		//only 30 characters are allowed to be inputted
		$fullname = mysqli_real_escape_string ($connect, trim($_POST['fullname']));
	} else {
		$errors['fullname'] = 'Please enter valid Name';
	} 

    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $email = mysqli_real_escape_string($connect,$_POST['email']);
    }else{
        $errors['email'] = "Enter a valid email address";
    }

	if (preg_match ('/^[0-9]{11}$/i', trim($_POST['phonenumber']))) {		//only 11 characters are allowed to be inputted
		$phonenumber = mysqli_real_escape_string ($connect, trim($_POST['phonenumber']));
	} else {
		$errors['phonenumber'] = 'Please enter valid number';
	} 


    if(preg_match('/^.{6,255}$/i',$_POST['password'])){
		$password =  mysqli_real_escape_string($connect,$_POST['password']);
	}else{
		$errors['password'] = "Minimum of 6 characters";
	}
        

    $queries = mysqli_query($connect, "SELECT * FROM non_ref_users WHERE non_ref_users_email='".mysqli_real_escape_string ($connect, filter_var($_POST['email']))."'") or die(db_conn_error); 

    if(mysqli_num_rows($queries) == 1 ){
        $errors['email_taken'] = 'Email already exist';

    }



	if(empty($errors)){

		$reference_num = genReference(10);
		
		$encrypted = password_hash($password, PASSWORD_DEFAULT);

		$q = mysqli_query($connect,"INSERT INTO non_ref_users (non_ref_users_fullname, non_ref_users_email, non_ref_users_password, non_ref_users_phone, non_ref_users_reference) VALUES ('".$fullname."', '".$email."', '".$encrypted."', '".$phonenumber."', '".$reference_num."')") or die(mysqli_error($connect));

		if(mysqli_affected_rows($connect) == 1){


			$value = md5(uniqid(rand(), true));
			$query_confirm_sessions = mysqli_query ($connect, "SELECT non_ref_users_cookie FROM non_ref_users WHERE non_ref_users_email='".$email."'") or die(db_conn_error);
			$cookie_value_if_empty = mysqli_fetch_array($query_confirm_sessions);
			
			if (empty($cookie_value_if_empty[0])){
			mysqli_query($connect,"UPDATE non_ref_users SET non_ref_users_cookie = '".$value."' WHERE non_ref_users_email='".$email."'") or die(db_conn_error);		
			setcookie("remember_me", $value, time() + 4*24*3600);	//4 days for cookie to expire
			
			}else if(!empty($cookie_value_if_empty[0])){
			
			setcookie("remember_me", $cookie_value_if_empty[0], time() + 4*24*3600);	//4 days for cookie to expire
			}
    


			$_SESSION['non_ref_users_email'] = $email;
			$_SESSION['non_ref_users_reference'] = $reference_num;
      
			header('Location:'.GEN_WEBSITE.'/package.php');
			exit();
		} else{
		trigger_error('You could not be registered due to a system error. We apologize for any inconvenience.');

		}
	}


}

//}

include('../incs-marketing/header-auth.php');
?>


    <div class="row g-0 app-auth-wrapper">
	    <div class="col-12 col-md-7 col-lg-6 auth-main-col text-center p-5">
		    <div class="d-flex flex-column align-content-end">
			    <div class="app-auth-body mx-auto">	
				    <div class="app-auth-branding mb-4"><a class="app-logo" href="index.html" style="width:208px"><img src="img/app-landing/logo5.png" alt="logo"></a></div>
					<!-- <h2 class="auth-heading text-center mb-4">Sign up to Portal</h2>					 -->
	
					<div class="auth-form-container text-start mx-auto">
						<form class="auth-form auth-signup-form" action="" method="POST">         
							<div class="email mb-3">
								<label class="sr-only" for="fullname">Your Name</label>
								<input id="fullname" value="<?php if(isset($_POST['fullname'])){echo $_POST['fullname'];}?>" name="fullname" type="text" class="form-control fullname" placeholder="Full name">
								<?php 
								if (array_key_exists('fullname', $errors)) {
									echo '<p class="text-danger" >'.$errors['fullname'].'</p>';
									}
								?>
							</div>
							<div class="email mb-3">
								<label class="sr-only" for="email">Your Email</label>
								<input id="email" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" name="email" type="text" class="form-control email" placeholder="Email">
								<?php 
								if (array_key_exists('email', $errors)) {
									echo '<p class="text-danger" >'.$errors['email'].'</p>';
									}
								?>
								<?php 
									if (array_key_exists('email_taken', $errors)) {
									echo '<p class="text-danger" >'.$errors['email_taken'].'</p>';
									}
								?>
							</div>
							<div class="email mb-3">
								<label class="sr-only" for="phonenumber">Phone Number</label>
								<input id="phonenumber" value="<?php if(isset($_POST['phonenumber'])){echo $_POST['phonenumber'];}?>" name="phonenumber" type="text" class="form-control phonenumber" placeholder="Phone number">
								<?php 
								if (array_key_exists('phonenumber', $errors)) {
									echo '<p class="text-danger">'.$errors['phonenumber'].'</p>';
									}
								?>
							</div>
							
							<div class="password mb-3">
								<label class="sr-only" for="password">Password</label>
								<input id="password" name="password" type="password" class="form-control password" placeholder="Create a password">
								<?php 
								if (array_key_exists('password', $errors)) {
									echo '<p class="text-danger" >'.$errors['password'].'</p>';
									}
								?>
							</div>
							<div class="extra mb-3">
								<div class="form-check">
									<input class="form-check-input" type="checkbox" value="" id="RememberPassword">
									<label class="form-check-label" for="RememberPassword">
									I agree to Portal's <a href="#" class="app-link">Terms of Service</a> and <a href="#" class="app-link">Privacy Policy</a>.
									</label>
								</div>
							</div><!--//extra-->
							
							<div class="text-center">
								<button type="submit" name="order" class="btn app-btn-primary w-100 theme-btn mx-auto">Sign Up</button>
							</div>
						</form><!--//auth-form-->
						
						<div class="auth-option text-center pt-5">Already have an account? <a class="text-link" href="login.html" >Log in</a></div>
					</div><!--//auth-form-container-->	
					
					
				    
			    </div><!--//auth-body-->
		    
			    <footer class="app-auth-footer">
				    <div class="container text-center py-3">
				         <!--/* This template is free as long as you keep the footer attribution link. If you'd like to use the template without the attribution link, you can buy the commercial license via our website: themes.3rdwavemedia.com Thank you for your support. :) */-->
			        <small class="copyright">Designed with <i class="fas fa-heart" style="color: #fb866a;"></i> by <a class="app-link" href="http://themes.3rdwavemedia.com" target="_blank">Xiaoying Riley</a> for developers</small>
				       
				    </div>
			    </footer><!--//app-auth-footer-->	
		    </div><!--//flex-column-->   
	    </div><!--//auth-main-col-->
	    <div class="col-12 col-md-5 col-lg-6 h-100 auth-background-col">
		    <div class="auth-background-holder-signup">			    
		    </div>
		    <div class="auth-background-mask"></div>
		    <div class="auth-background-overlay p-3 p-lg-5">
			    <div class="d-flex flex-column align-content-end h-100">
				    <div class="h-100"></div>
				    <div class="overlay-content p-3 p-lg-4 rounded">
					    <h5 class="mb-3 overlay-title">Explore Portal Admin Template</h5>
					    <div>Portal is a free Bootstrap 5 admin dashboard template. You can download and view the template license <a href="https://themes.3rdwavemedia.com/bootstrap-templates/admin-dashboard/portal-free-bootstrap-admin-dashboard-template-for-developers/">here</a>.</div>
				    </div>
				</div>
		    </div><!--//auth-background-overlay-->
	    </div><!--//auth-background-col-->
    
    </div><!--//row-->


</body>
</html> 