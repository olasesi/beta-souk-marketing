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
 
       
        $query = mysqli_query($connect, "SELECT * FROM non_ref_users WHERE non_ref_users_username='".$username."'") or die(db_conn_error);
     
       if(mysqli_num_rows($query) == 1){
           
      while($row = mysqli_fetch_array($query)){
      

      
       
        if(password_verify($password,$row[6])){
          
          $value = md5(uniqid(rand(), true));
          $query_confirm_sessions = mysqli_query ($connect, "SELECT non_ref_users_cookie FROM non_ref_users WHERE non_ref_users_username='".$username."'") or die(db_conn_error);
          $cookie_value_if_empty = mysqli_fetch_array($query_confirm_sessions);
          
          if(empty($cookie_value_if_empty[0])){
          mysqli_query($connect,"UPDATE non_ref_users SET non_ref_users_cookie = '".$value."' WHERE non_ref_users_username='".$username."'") or die(db_conn_error);		
          setcookie("buy_cookie_session", $value, time() + 7*24*3600);	//7 days for cookie to expire
          
          }else if(!empty($cookie_value_if_empty[0])){
          
          setcookie("buy_cookie_session", $cookie_value_if_empty[0], time() + 7*24*3600);	//7 days for cookie to expire
          }
      
      
      $_SESSION['non_ref_users_id'] = $row[0];
      $_SESSION['non_ref_users_firstname'] = $row[2];
      $_SESSION['non_ref_users_surname'] = $row[3];
      $_SESSION['non_ref_users_username'] = $row[4];
      $_SESSION['non_ref_users_email'] = $row[5];
      $_SESSION['non_ref_users_address'] = $row[7];
      $_SESSION['non_ref_users_package'] = $row[8];
      $_SESSION['non_ref_users_price'] = $row[9];
      $_SESSION['non_ref_users_order'] = $row[10];
      $_SESSION['non_ref_users_reference'] = $row[11];
      $_SESSION['non_ref_users_timestamp'] = $row[13];
      
      header('Location:'.GEN_WEBSITE.'/dashboard.php');
       exit;
      } else{
      
      
      
          $signup_errors['username'] = 'You entered an incorrect login details.';
         
      
        }
    }
     
}else{
      
      
      
    $signup_errors['wrong_detail'] = 'You entered an incorrect login details.';
   

  }



    }














}


include('../incs-marketing/header2.php');
?>




<!-- login wrapper start -->
<div class="login_wrapper fixed_portion float_left">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row login_top_box float_left">
                    <div class="col-lg-6 col-md-12 col-sm-12 login_banner_wrapper align-items-center">
                        <!-- <img src="img/app-landing/logo5.png" alt="logo"> -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 login_form_wrapper">
                        <form action="" method="POST">
                        <div class="sv_heading_wraper heading_wrapper_dark dark_heading hwd">

                            <h3> login to enter</h3>

                        </div>
                        <div class="form-group icon_form comments_form">
                        <?php if (array_key_exists('wrong_detail', $signup_errors)) {
	                    echo '<p class="text-danger">'.$signup_errors['wrong_detail'].'</p>';
	                    }
                    ?>
                     <?php if (array_key_exists('username', $signup_errors)) {
	                    echo '<p class="text-danger">'.$signup_errors['username'].'</p>';
	                    }
                    ?>
                            <input type="text" class="form-control require" name="username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>" placeholder="Username">

                        </div>
                        <div class="form-group icon_form comments_form">
                        <?php if (array_key_exists('password', $signup_errors)) {
	                    echo '<p class="text-danger">'.$signup_errors['password'].'</p>';
	                    }
                    ?>
                            <input type="password" class="form-control require" name="password" value="" placeholder="Password">

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

                            <button type="submit" name="login"><a>login</a></button>
                        </div>
                        <div class="dont_have_account float_left">
                            <p>You want to buy ecommerce <a href="buy.php">Sign up to buy?</a></p>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- login wrapper end -->
<?php

include('../incs-marketing/footer.php');

?>