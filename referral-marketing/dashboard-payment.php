<?php
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');
//include('../incs-marketing/cookie-session.php');


if(!isset($_SESSION['non_ref_users_id'])) {
    header('Location:'.GEN_WEBSITE.'/dashboard.php');
       exit();
}


?>
<?php

?>
<?php



include('../incs-marketing/buy-header.php');
?>  


<div class="col-lg-6 col-md-12 col-sm-12 login_form_wrapper">
                        <form action="" method="POST">
                        <div class="sv_heading_wraper heading_wrapper_dark dark_heading hwd">

                            <h3> Confirm payment</h3>

                        </div>
                        <div class="form-group icon_form comments_form">
                        <?php if (array_key_exists('wrong_detail', $signup_errors)) {
	                    echo '<p class="text-danger">'.$signup_errors['wrong_detail'].'</p>';
	                    }
                    ?>
                    
                            <input type="text" class="form-control require" name="email" value="<?php echo $email;?>" placeholder="Email address">

                        </div>
                        <div class="form-group icon_form comments_form">
                       
                        <input type="text" class="form-control require" name="price" value="<?php echo $price;?>" placeholder="Price">

                        </div>
                        <div class="form-group icon_form comments_form">
                       
                       <input type="text" class="form-control require" name="reference_num" value="<?php echo $reference_num;?>" placeholder="Reference number">

                       </div>
                     
                        <div class="about_btn login_btn float_left">

                            <button type="submit" name="complete"><a>Complete</a></button>
                        </div>
                      
                        </form>
                    </div>