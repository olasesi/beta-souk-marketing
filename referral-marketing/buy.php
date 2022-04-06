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

  if (preg_match ('/^[a-zA-Z]{3,20}$/i', trim($_POST['firstname']))) {		//only 20 characters are allowed to be inputted
		$firstname = mysqli_real_escape_string ($connect, trim($_POST['firstname']));
	} else {
		$errors['firstname'] = 'Please enter valid firstname';
	} 

  if (preg_match ('/^[a-zA-Z]{3,20}$/i', trim($_POST['surname']))) {		//only 20 characters are allowed to be inputted
		$surname = mysqli_real_escape_string ($connect, trim($_POST['surname']));
	} else {
		$errors['surname'] = 'Please enter valid surname';
	} 

    if (preg_match ('/^[a-zA-Z-_]{3,20}$/i', trim($_POST['username']))) {		//only 20 characters are allowed to be inputted
		$username = mysqli_real_escape_string ($connect, trim($_POST['username']));
	} else {
		$errors['username'] = 'Please enter valid username. Alpha-numeric letters, underscore or dash.';
	} 

    if(filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
        $email = mysqli_real_escape_string($connect,$_POST['email']);
    }else{
        $errors['email'] = "Enter a valid email address";
    }


    if($_POST['password'] == $_POST['confirm_password']){
        if(preg_match('/^.{6,255}$/i',$_POST['password'])){
        $password =  mysqli_real_escape_string($connect,$_POST['password']);
    }else{
        $errors['password'] = "Minimum of 6 characters";
    }
    }else{
        $errors['password_match'] = "Password did not match";
    }


    if ($_POST['package'] == "Choose package") {
        $errors['package'] = 'Please select package';
    } else{
    $package = $_POST['package'];
    }



    if (preg_match ('/^.{3,255}+$/i', trim($_POST['address']))) {		
        $address = mysqli_real_escape_string ($connect, trim($_POST['address']));
        } else {
        $errors['address'] = 'Please enter a valid location';
        }
        

    $queries = mysqli_query($connect, "SELECT * FROM non_ref_users WHERE non_ref_users_username='".mysqli_real_escape_string ($connect, trim($_POST['username']))."'") or die(db_conn_error); 

    if(mysqli_num_rows($queries) == 1 ){
        $errors['username_taken'] = 'Username has been taken. Please choose another username';

    }



 if(empty($errors)){
            if($package=='Basic'){
                $price = BASIC;
            }elseif($package=='Essential'){
                $price = ESSENTIAL;
            }else{
                $price = PREMIUM; 
            }

            $reference_num = genReference(10);
            
            $encrypted = password_hash($password, PASSWORD_DEFAULT);

$q = mysqli_query($connect,"INSERT INTO non_ref_users (non_ref_users_firstname, non_ref_users_surname, non_ref_users_username, non_ref_users_email, non_ref_users_password, non_ref_users_address, non_ref_users_package, non_ref_users_price, non_ref_users_reference) VALUES ('".$firstname."','".$surname."', '".$username."', '".$email."', '".$encrypted."', '".$address."', '".$package."', '".$price."', '".$reference_num."')") or die(mysqli_error($connect));

            if(mysqli_affected_rows($connect) == 1){


            include('../incs-marketing/pay.php');  
                      


  }else{
  trigger_error('You could not be registered due to a system error. We apologize for any inconvenience.');

  }












}











}

//}

include('../incs-marketing/header2.php');
?>

<!-- login wrapper start -->
<div class="login_wrapper fixed_portion float_left">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row login_top_box float_left align-items-center">
                    <div class="col-lg-6 col-md-12 col-sm-12 login_banner_wrapper align-items-center ">
                        <!-- <img src="img/app-landing/logo5.png" alt="logo"> -->
                    </div>
                    <div class="col-lg-6 col-md-12 col-sm-12 login_form_wrapper">
                        <form action="" method="POST">
                        <div class="sv_heading_wraper heading_wrapper_dark dark_heading hwd">

                            <h3>Buy-Ecommerce</h3>

                        </div>
                        <div class="form-group icon_form comments_form">

                                        <input type="text" class="form-control require" value="<?php if(isset($_POST['firstname'])){echo $_POST['firstname'];}?>" name="firstname" placeholder="Firstname">
                            <?php 
                            if (array_key_exists('firstname', $errors)) {
                                echo '<p class="text-danger" >'.$errors['firstname'].'</p>';
                                }
                            ?>
                                    </div>

                                    <div class="form-group icon_form comments_form">

                                                <input type="text" class="form-control require" value="<?php if(isset($_POST['surname'])){echo $_POST['surname'];}?>" name="surname" placeholder="Surname">
                                    <?php 
                                    if (array_key_exists('surname', $errors)) {
                                        echo '<p class="text-danger" >'.$errors['surname'].'</p>';
                                        }
                                    ?>
                                    </div>


                                    <div class="form-group icon_form comments_form">

                                        <input type="text" class="form-control require" value="<?php if(isset($_POST['username'])){echo $_POST['username'];}?>" name="username" placeholder="username">
                                        <?php 
                                        if (array_key_exists('username', $errors)) {
                                        echo '<p class="text-danger" >'.$errors['username'].'</p>';
                                        }
                                        ?>
                                        <?php 
                                        if (array_key_exists('username_taken', $errors)) {
                                        echo '<p class="text-danger" >'.$errors['username_taken'].'</p>';
                                        }
                                        ?>
                                        </div>

                                        <div class="form-group icon_form comments_form">

                                        <input type="text" class="form-control require" value="<?php if(isset($_POST['email'])){echo $_POST['email'];}?>" name="email" placeholder="email">
                                        <?php 
                                        if (array_key_exists('email', $errors)) {
                                        echo '<p class="text-danger" >'.$errors['email'].'</p>';
                                        }
                                        ?>
                                        </div>



                                    <div class="form-group icon_form comments_form">                 
                                        <select name="package">
                                            <?php        
                                                $array = array('Basic', 'Essential', 'Premium');                   
                                                    echo '<option>Choose package</option>';
                                                    
                                                    if(isset($_POST['package'])){
                                                    
                                                        foreach ($array as $one_package){
                                                        $sel = ($one_package==$_POST['package'])?'selected="selected"':'';
                                                        echo "<option $sel>$one_package</option>";}
                                                    }else{
                                                        
                                                    foreach ($array as $one_package){
                                                    echo "<option> $one_package </option>";
                                                    }
                                                }
                                            ?>

                                        </select>
                                        <?php   if (array_key_exists('package', $errors)){
                                        echo '<p class="text-danger">'.$errors['package'].'</p>';
                                        } ?>
                                    </div>
                                                                       
                                    
                                    <div class="form-group icon_form comments_form">

                                    <input type="password" class="form-control require" name="password" placeholder="password">
                                   
                                    </div>

                                    <div class="form-group icon_form comments_form">

                                    <input type="password" class="form-control require" name="confirm_password" placeholder="confirm password">
                                    <?php 
                                    if (array_key_exists('password', $errors)) {
                                    echo '<p class="text-danger">'.$errors['password'].'</p>';
                                    }

                                    if (array_key_exists('password_match', $errors)) {
                                        echo '<p class="text-danger" >'.$errors['password_match'].'</p>';
                                        }


                                    ?>
                                    </div>
                                                <div class="form-group icon_form comments_form">

                                                <input type="text" class="form-control require" value="<?php if(isset($_POST['address'])){echo $_POST['address'];}?>" name="address" placeholder="location">
                                                <?php 
                            if (array_key_exists('address', $errors)) {
                                echo '<p class="text-danger" >'.$errors['address'].'</p>';
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

                                        <button type="submit" name="order"><a>Continue</a></button>
                                    </div> 
                                    
                                    <div class="dont_have_account float_left">
                                        <p>Already have an account ? <a href="buy-login.php">Login</a></p>
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