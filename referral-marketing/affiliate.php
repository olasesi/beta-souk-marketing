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



// if(isset($_SESSION['user_id_marketer'])) {
//     header('Location:'.GEN_WEBSITE.'/affiliate.php');
//        exit();
// }

 
if(!isset($_GET['link'])){
    $_GET['link'] = '';

}

$query = mysqli_query($connect, "SELECT m_username FROM marketer WHERE m_username= '".mysqli_real_escape_string ($connect, $_GET['link'])."' AND m_confirm_email = '1'") or die(db_conn_error);

if(mysqli_num_rows($query) == 0){
    header('Location:'.GEN_WEBSITE);
    exit();
}



?>

<?php
$signup_errors = array();
if(isset($_POST['pay']) AND $_SERVER['REQUEST_METHOD'] == "POST"){

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


if ($_POST['package'] == "Choose package") {
    $signup_errors['package'] = 'Please select package';
} else{
$package = $_POST['package'];
}

if (preg_match ('/^.{3,255}+$/i', trim($_POST['address']))) {		
    $address = mysqli_real_escape_string ($connect, trim($_POST['address']));
    } else {
    $signup_errors['address'] = 'Please enter a valid location';
    }
  
    
    
    $queries = mysqli_query($connect, "SELECT u_username FROM users WHERE u_username='".$username."'") or die(db_conn_error); 

    if(mysqli_num_rows($queries) == 1 ){
        $errors['username_taken'] = 'Username has been taken. Please choose another username';

    }



if(empty($signup_errors)){
    if($package=='Basic'){
        $price = BASIC;
    }elseif($package=='Essential'){
        $price = ESSENTIAL;
    }else{
        $price = PREMIUM; 
    }
    
    $reference_num = genReference(10);
    $encrypted = password_hash($password, PASSWORD_DEFAULT);


    $q = mysqli_query($connect,"INSERT INTO users (user_id_marketer, u_firstname, u_surname, u_email, u_username, u_address, u_package, u_price, u_reference, u_password) VALUES ('".mysqli_real_escape_string ($connect, $_GET['link'])."', '".$firstname."','".$surname."', '".$email."','".$username."' ,'".$address."', '".$package."', '".$price."', '".$reference_num."', '".$encrypted."')") or die(db_conn_error);

    if(mysqli_affected_rows($connect) == 1){

     $result = array();

     //Set other parameters as keys in the $postdata array
     $postdata = [
         'email' => $email,
         'amount' => $price*10,
         'reference' => $reference_num,
         'callback_url' => GEN_WEBSITE.'/refered-verify-payment.php'
     ];
    
     $url = "https://api.paystack.co/transaction/initialize";
    
     $ch = curl_init();
     curl_setopt($ch, CURLOPT_URL, $url);
     curl_setopt($ch, CURLOPT_POST, 1);
     curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postdata));  //Post Fields
     curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

     $headers = [
         'Authorization: '.API_KEY,
         'Content-Type: application/json',
    
     ];
     curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    
     $request = curl_exec($ch);
    
     curl_close($ch);
    
     if ($request) {
    
         $result = json_decode($request, true);
    
         header('Location: ' . $result['data']['authorization_url']);
    
     }

        exit();          


}else{
trigger_error('You could not be registered due to a system error. We apologize for any inconvenience.');

}










}











}

include('../incs-marketing/header.php');




?>


<!-- inner header wrapper start -->
<div class="page_title_section">

    <div class="page_header">
        <div class="container">
            <div class="row">

                <div class="col-lg-9 col-md-9 col-12 col-sm-8">

                    <h1>Register to pay</h1>
                </div>
                <div class="col-lg-3 col-md-3 col-12 col-sm-4">
                    <div class="sub_title_section">
                        <ul class="sub_title">
                            <li> <a href="#"> Home </a>&nbsp; / &nbsp; </li>
                            <li>Register to pay</li>
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
                  
                        <form action="affiliate.php?link=<?php if(isset($_GET['link'])){echo $_GET['link']; }?>" method="POST">
                        <div class="sv_heading_wraper heading_wrapper_dark dark_heading hwd">

                            <h3>Register</h3>

                        </div>
                        <div class="form-group icon_form comments_form">

                            <input type="text" class="form-control require" value="<?php if(isset($_POST['firstname'])){echo $_POST['firstname'];}?>" name="firstname" placeholder="Firstname">
                <?php 
                   if (array_key_exists('firstname', $signup_errors)) {
                       echo '<p class="text-danger">'.$signup_errors['firstname'].'</p>';
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

<input type="text" class="form-control require" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>" name="username" placeholder="username">
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


<select name="package">

<?php        
    $array = array('Basic', 'Essential', 'Premium');                   
                        echo "<option>Choose package</option>";
            
                        if(isset($_POST['package'])){
                            foreach ($array as $one_package){
                            $sel = ($one_package==$_POST['package'])?"Selected='selected'":"";
                            echo "<option $sel>$one_package</option>";}
                        }else{
                        foreach ($array as $one_package){
                        echo "<option>$one_package</option>";
                        }
                        }
                        ?>     
<?php 
                if (array_key_exists('package', $signup_errors)) {
                    echo '<p class="text-danger" >'.$signup_errors['package'].'</p>';
                    }
                ?>

</select>

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


                                    <div class="form-group icon_form comments_form">

<input type="text" class="form-control require" value="<?php if(isset($_POST['address'])){echo $_POST['address'];}?>" name="address" placeholder="location">
<?php 
if (array_key_exists('address', $signup_errors)) {
echo '<p class="text-danger" >'.$signup_errors['address'].'</p>';
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
                              
                               <button type="submit" name="pay" class="button"> <a>Continue</a></button>
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

include('../incs-marketing/footer.php');

?>