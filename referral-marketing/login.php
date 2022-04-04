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
		$signup_errors['username'] = 'Please enter valid username.';
	} 


    if (preg_match ('/^.{6,255}$/i', trim($_POST['password']))) {		//only 20 characters are allowed to be inputted
		$password = mysqli_real_escape_string ($connect, trim($_POST['password']));
	} else {
		$signup_errors['password'] = 'Please enter valid password.';
	} 


  



    if(empty($signup_errors)){
 
  
        $query = mysqli_query($connect, "SELECT * FROM marketer WHERE m_username='".$username."' AND m_confirm_email='1'") or die(db_conn_error);
        
      
     if(mysqli_num_rows($query) == 1){
      

      while($row = mysqli_fetch_array($query)){
       
        if(password_verify($password,$row[7])){
          
          $value = md5(uniqid(rand(), true));
          $query_confirm_sessions = mysqli_query ($connect, "SELECT m_cookie_session FROM marketer WHERE m_username='".$username."'") or die(db_conn_error);
          $cookie_value_if_empty = mysqli_fetch_array($query_confirm_sessions);
          
          if (empty($cookie_value_if_empty[0])){
          mysqli_query($connect,"UPDATE marketer SET m_cookie_session = '".$value."' WHERE m_username='".$username."'") or die(db_conn_error);		
          setcookie("m_cookie_session", $value, time() + 7*24*3600);	//7 days for cookie to expire
          
          }else if(!empty($cookie_value_if_empty[0])){
          
          setcookie("m_cookie_session", $cookie_value_if_empty[0], time() + 7*24*3600);	//7 days for cookie to expire
          }
      
      
      $_SESSION['user_id_marketer'] = $row[0];
      $_SESSION['m_firstname'] = $row[3];
      $_SESSION['m_surname'] = $row[4];
      $_SESSION['m_username'] = $row[5];
      $_SESSION['m_email'] = $row[6];
      $_SESSION['m_timestamp'] = $row[13];
       
      
      header('Location:'.GEN_WEBSITE.'/my_account.php');
       exit();
      
      
      
      
      
      
      
      
      
      
      
        }else{

            $signup_errors['login_details'] = 'Your login details are invalid';

        }
    
     }
    
    
    }else{

        $signup_errors['login_details'] = 'Your login details are invalid';

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
                        <?php if (array_key_exists('login_details', $signup_errors)) {
	                    echo '<p class="text-danger">'.$signup_errors['login_details'].'</p>';
	                    }
                    ?>
                            <input type="text" class="form-control require" name="username" value="<?php if(isset($_POST['username'])){echo $_POST['username'];} ?>" placeholder="Username">
                            <?php if (array_key_exists('username', $signup_errors)) {
	                    echo '<p class="text-danger">'.$signup_errors['username'].'</p>';
	                    }
                    ?>
                        </div>
                        <div class="form-group icon_form comments_form">

                            <input type="password" class="form-control require" name="password" value="" placeholder="Password">
                            <?php if (array_key_exists('password', $signup_errors)) {
	                    echo '<p class="text-danger">'.$signup_errors['password'].'</p>';
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

                            <button type="submit" name="login"><a>login</a></button>
                        </div>
                        <div class="dont_have_account float_left">
                            <p>Don’t have an acount ? <a href="register.php">Sign up</a></p>
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