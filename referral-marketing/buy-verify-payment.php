<?php 
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');
//include('../incs-marketing/cookie-session.php');


if(!isset($_GET['reference'])){
    header('Location:'.GEN_WEBSITE);
    exit(); 
}

$query_select = mysqli_query($connect, "SELECT non_ref_users_reference FROM non_ref_users WHERE non_ref_users_reference  = '".mysqli_real_escape_string ($connect, $_GET['reference'])."'") or die(db_conn_error);

if(mysqli_num_rows($query_select) == 0){
    header('Location:'.GEN_WEBSITE);
    exit(); 
}




if (!isset($errors)){$errors = array();}
    if ($_SERVER['REQUEST_METHOD'] == 'POST' AND isset($_POST['upload'])){
       
        

        if (preg_match ('/^[a-zA-Z0-9]{3,255}$/i', trim($_POST['webname']))) {		
            $webname = mysqli_real_escape_string ($connect, trim($_POST['webname']));
        } else {
            $errors['webname'] = 'Please enter proposed website name.';
        } 
         
     
        if (preg_match ('/^(0)[0-9]{10}$/i', trim($_POST['phone1']))) {		
            $phone1 = mysqli_real_escape_string ($connect, trim($_POST['phone1']));
        } else {
            $errors['phone1'] = 'Please enter phone number 1.';
        } 
    
        if (preg_match ('/^(0)[0-9]{10}$/i', trim($_POST['phone2']) OR empty($_POST['phone2']))) {		
            $phone2 = mysqli_real_escape_string ($connect, trim($_POST['phone2']));
        } else {
            $errors['phone2'] = 'Please enter phone number 2.';
        } 


        if(filter_var($_POST['email1'],FILTER_VALIDATE_EMAIL)){
            $email1 = mysqli_real_escape_string($connect,$_POST['email1']);
        }else{
            $errors['email1'] = "Enter a valid email address";
        }
        

        if(filter_var($_POST['email2'],FILTER_VALIDATE_EMAIL) OR empty($_POST['email2'])){
            $email2 = mysqli_real_escape_string($connect,$_POST['email2']);
        }else{
            $errors['email2'] = "Enter a valid email address";
        }

        if(filter_var($_POST['url'],FILTER_VALIDATE_URL) OR empty($_POST['url'])){
            $url = mysqli_real_escape_string($connect, $_POST['url']);
        }else{
            $errors['url'] = "Enter a valid facebook link";
        }
      
        if(filter_var($_POST['url_twitter'],FILTER_VALIDATE_URL) OR empty($_POST['url_twitter'])){
            $url = mysqli_real_escape_string($connect, $_POST['url_twitter']);
        }else{
            $errors['url_twitter'] = "Enter a valid twitter link";
        }
      
        if(filter_var($_POST['url_instagram'],FILTER_VALIDATE_URL) OR empty($_POST['url_instagram'])){
            $url = mysqli_real_escape_string($connect, $_POST['url_instagram']);
        }else{
            $errors['url_instagram'] = "Enter a valid instagram link";
        }

        if(filter_var($_POST['url_whatsapp'],FILTER_VALIDATE_URL) OR empty($_POST['url_whatsapp'])){
            $url = mysqli_real_escape_string($connect, $_POST['url_whatsapp']);
        }else{
            $errors['url_whatsapp'] = "Enter a valid whatsapp link";
        }

     
        if (preg_match ('/^[a-zA-Z]{3,20}$/i', trim($_POST['color1'] OR empty($_POST['color1'])))) {		
            $color1 = mysqli_real_escape_string ($connect, trim($_POST['color1']));
        } else {
            $errors['color1'] = 'Please colors in your logo.';
        } 
         
     
        if (preg_match ('/^[a-zA-Z]{3,20}$/i', trim($_POST['color2']))) {		
            $color2 = mysqli_real_escape_string ($connect, trim($_POST['color2']));
        } else {
            $errors['color2'] = 'Please colors in your logo.';
        } 
         
     
        if (preg_match ('/^[a-zA-Z]{3,20}$/i', trim($_POST['color3']))) {		
            $color3 = mysqli_real_escape_string ($connect, trim($_POST['color3']));
        } else {
            $errors['color3'] = 'Please colors in your logo.';
        } 
         
        if (preg_match ('/^.{3,255}$/i', trim($_POST['address1']))) {		
            $address1 = mysqli_real_escape_string ($connect, trim($_POST['address1']));
        } else {
            $errors['address1'] = 'Please enter address of your business.';
        } 
         
        if (preg_match ('/^.{3,255}$/i', trim($_POST['address2']))) {		
            $address2 = mysqli_real_escape_string ($connect, trim($_POST['address2']));
        } else {
            $errors['address2'] = 'Please enter address of your business.';
        } 
     
      if (preg_match ('/^.{3,1000}+$/i', trim($_POST['about']) OR empty($_POST['about']))) {		
            $about = mysqli_real_escape_string ($connect, trim($_POST['about']));
            } else {
            $errors['about'] = 'Please enter a long information about your business';
            }
            
          
        
       
        if (is_uploaded_file($_FILES['img']['tmp_name']) AND $_FILES['img']['error'] == UPLOAD_ERR_OK){ 
            
                if($_FILES['img']['size'] > 2097152){ 		//conditions for the file size 2MB
                    $errors['editfile_size']="File size is too big. Max file size 2MB";
                }
            
                $editallowed_extensions = array('jpeg', '.png', '.jpg', '.JPG', 'JPEG', '.PNG');		
                $editallowed_mime = array('image/jpeg', 'image/png', 'image/pjpeg', 'image/JPG', 'image/X-PNG', 'image/PNG', 'image/x-png');
                $editimage_info = getimagesize($_FILES['img']['tmp_name']);
                $ext = substr($_FILES['img']['name'], -4);
                
                
                
                
                if (!in_array($_FILES['img']['type'], $editallowed_mime) || !in_array($editimage_info['mime'], $editallowed_mime) || !in_array($ext, $editallowed_extensions)){
                    $errors['wrong_upload'] = "Please choose correct file type. JPG or PNG";
                    
                }
                
            }else{
            $errors['upload_image'] = 'Please upload photo';	
            
            }
       
    
    
        //now to edit the product	
        if (empty($errors)){
    
          
            $new_name= (string) sha1($_FILES['img']['name'] . uniqid('',true));
                $new_name .= ((substr($ext, 0, 1) != '.') ? ".{$ext}" : $ext);
                $dest = "../storage/websites logos/".$new_name;
                
                if (move_uploaded_file($_FILES['img']['tmp_name'], $dest)) {
                
                $_SESSION['images']['new_name'] = $new_name;
                $_SESSION['images']['file_name'] = $_FILES['img']['name'];
                
    //       $query_term_session = mysqli_query($connect, "SELECT choose_term, school_session FROM term_start_end ORDER BY term_start_end_id DESC LIMIT 1") or die(db_conn_error);
    // while($loop_term_session=mysqli_fetch_array($query_term_session)){
    //   $current_term = $loop_term_session['choose_term'];
    //   $current_session_term = $loop_term_session['school_session'];
     
    // }
    
    // $query_term_start_end = mysqli_query($connect, "SELECT choose_term, school_session FROM term_start_end ORDER BY term_start_end_id DESC LIMIT 1") or die(db_conn_error);
      
        // while($whiling_term_start_end = mysqli_fetch_array($query_term_start_end)){
    
        //   $term = $whiling_term_start_end['choose_term'];
        //   $session = $whiling_term_start_end['school_session'];
        // }
    
    
    
    mysqli_query($connect, "UPDATE primary_school_students SET pri_active='1', pri_admit = '1', pri_school_term = '".$current_term."' , pri_year = '".$current_session_term."', pri_firstname = '".$firstname."', pri_surname = '".$surname."', pri_age = '".$age."', pri_sex = '".$gender."', pri_class_id = '".$pri_class."', pri_photo = '".$new_name."', pri_address= '".$address."' WHERE primary_id = '".mysqli_real_escape_string ($connect, $_GET['id'])."' AND pri_admit = '0' AND pri_active_email = '1' AND pri_paid = '1'") or die(db_conn_error);
                if (mysqli_affected_rows($connect) == 1) {
                
                $_POST = array();		
                $_FILES = array();
                    
                unset($_FILES['img'], $_SESSION['images']);
                header('Location:'.GEN_WEBSITE.'/admin/search-paid.php?confirm='.$firstname);
                exit();
               
                
      }
    
    } else {
                trigger_error('The file could not be moved.');
                $errors['not_moved'] = "The file could not be moved.";
                unlink ($_FILES['img']['tmp_name']);
                }	
    
    } 
    
    
     }
     
           




//if(!isset($_POST['upload'])){

// $result = array();
// //The parameter after verify/ is the transaction reference to be verified
// $url = 'https://api.paystack.co/transaction/verify/'.$_GET['reference'];

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $url);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// curl_setopt(
// $ch, CURLOPT_HTTPHEADER, [
// 'Authorization: '.API_KEY]
// );
// $request = curl_exec($ch);
// curl_close($ch);

// if ($request) {
// $result = json_decode($request, true);
// }

// if (array_key_exists('data', $result) && array_key_exists('status', $result['data']) && ($result['data']['status'] === 'success')) {

//     // $query_term_start_end = mysqli_query($connect, "SELECT choose_term, school_session FROM term_start_end ORDER BY term_start_end_id DESC LIMIT 1") or die(db_conn_error);
  
//     // while($whiling_term_start_end = mysqli_fetch_array($query_term_start_end)){

//     //   $term = $whiling_term_start_end['choose_term'];
//     //   $session = $whiling_term_start_end['school_session'];
//     // }


//     mysqli_query($connect, "UPDATE non_ref_users SET non_ref_users_order='1' WHERE non_ref_users_reference = '".$_GET['reference']."'") or die(db_conn_error);

//     // if(mysqli_affected_rows($connect) == 1){
    
    
//     // }

    

    
//     // header('Location:'.GEN_WEBSITE.'/school-payment.php?ref='.$_GET['reference'].'&status='.$result['data']['status']);
//     // exit();
   
// //Perform necessary action
// }else{
//     header('Location:'.GEN_WEBSITE);
//     exit();
// }
//}


include('../incs-marketing/header2.php');


echo '
          
<div class="global_community_wrapper newsletter_wrapper index2_newsletter index3_newsletter float_left">
<div class="container">
    <div class="row">
        <div class="global_comm_wraper news_cntnt">
            <h1> Congratulations for the Successful Payment</h1>
            <p> You can now login to your dashboard.</p>
          
        </div>
   
    </div>
</div>
</div>            
';

?>
<?php
$query_users = mysqli_query($connect, "SELECT user_id_marketer FROM users WHERE u_reference  = '".mysqli_real_escape_string ($connect, $_GET['reference'])."' AND u_order='1'") or die(db_conn_error);


?>

<div class="login_wrapper fixed_portion float_left">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="row login_top_box float_left">
                    <div class="login_banner_wrapper align-items-center">
                        <!-- <img src="img/app-landing/logo5.png" alt="logo"> -->
                       
                       
                    </div>
                    <div class="login_form_wrapper">
                        <form action="" method="POST" enctype="multipart/form-data">
                        <div class="sv_heading_wraper heading_wrapper_dark dark_heading hwd">

                            <h3> Website information</h3>

                        </div>
                        <div class="form-group icon_form comments_form">

                            <input type="url" class="form-control require" value="<?php if(isset($_POST['webname'])){echo $_POST['webname'];}?>" name="webname" placeholder="Proposed website name">
                <?php 
                   if (array_key_exists('webname', $errors)) {
                       echo '<p class="text-danger" >'.$errors['webname'].'</p>';
                       }
                   ?>
                        </div>

                        <div class="form-group icon_form comments_form">

                                    <input type="tel" class="form-control require" value="<?php if(isset($_POST['phone1'])){echo $_POST['phone1'];}?>" name="phone1" placeholder="Website phone number" pattern="[0]{1}[0-9]{10}">
                                    <?php 
                   if (array_key_exists('phone1', $errors)) {
                       echo '<p class="text-danger" >'.$errors['pnone1'].'</p>';
                       }
                   ?>
                                    </div>

                                    <div class="form-group icon_form comments_form">

                    <input type="tel" class="form-control require" value="<?php if(isset($_POST['phone2'])){echo $_POST['phone2'];}?>" name="phone2" placeholder="Website phone number 2" pattern="[0]{1}[0-9]{10}">
                    <?php 
                    if (array_key_exists('phone2', $errors)) {
                    echo '<p class="text-danger" >'.$errors['phone2'].'</p>';
                    }
                    ?>
                    </div>


                                    <div class="form-group icon_form comments_form">

                                    <input type="email" class="form-control require" value="<?php if(isset($_POST['email1'])){echo $_POST['email1'];}?>" name="email1" placeholder="Website email address">
                                    <?php 
                   if (array_key_exists('email1', $errors)) {
                       echo '<p class="text-danger" >'.$errors['email1'].'</p>';
                       }
                   ?>

                                    </div>

                                    <div class="form-group icon_form comments_form">

<input type="email" class="form-control require" value="<?php if(isset($_POST['email2'])){echo $_POST['email2'];}?>" name="email2" placeholder="Website email Address 2">
<?php 
if (array_key_exists('email2', $errors)) {
echo '<p class="text-danger" >'.$errors['email2'].'</p>';
}
?>

</div>
                                                           
<div class="form-group icon_form comments_form">

<input type="url" class="form-control require" value="<?php if(isset($_POST['url'])){echo $_POST['url'];}?>" name="url" placeholder="Website facebook link">
<?php 
if (array_key_exists('url', $errors)) {
echo '<p class="text-danger" >'.$errors['url'].'</p>';
}
?>

</div>


<div class="form-group icon_form comments_form">

<input type="url" class="form-control require" value="<?php if(isset($_POST['url_twitter'])){echo $_POST['url_twitter'];}?>" name="url_twitter" placeholder="Website twitter link">
<?php 
if (array_key_exists('url_twitter', $errors)) {
echo '<p class="text-danger" >'.$errors['url_twitter'].'</p>';
}
?>

</div>
         

<div class="form-group icon_form comments_form">

<input type="url" class="form-control require" value="<?php if(isset($_POST['url_instagram'])){echo $_POST['url_instagram'];}?>" name="url_instagram" placeholder="Website instagram link">
<?php 
if (array_key_exists('url_instagram', $errors)) {
echo '<p class="text-danger" >'.$errors['url_instagram'].'</p>';
}
?>

</div>

<div class="form-group icon_form comments_form">

<input type="url" class="form-control require" value="<?php if(isset($_POST['url_whatsapp'])){echo $_POST['url_whatsapp'];}?>" name="url_whatsapp" placeholder="Website whatsapp chat">
<?php 
if (array_key_exists('url_whatsapp', $errors)) {
echo '<p class="text-danger" >'.$errors['url_whatsapp'].'</p>';
}
?>

</div>


<div class="form-group icon_form comments_form">

<input type="text" class="form-control require" value="<?php if(isset($_POST['color1'])){echo $_POST['color1'];}?>" name="color1" placeholder="Website Brand color 1">
<?php 
if (array_key_exists('color1', $errors)) {
echo '<p class="text-danger" >'.$errors['color1'].'</p>';
}
?>

</div>

<div class="form-group icon_form comments_form">

<input type="type" class="form-control require" value="<?php if(isset($_POST['color2'])){echo $_POST['color2'];}?>" name="color2" placeholder="Website brand color 2">
<?php 
if (array_key_exists('color2', $errors)) {
echo '<p class="text-danger" >'.$errors['color2'].'</p>';
}
?>

</div>


<div class="form-group icon_form comments_form">

<input type="type" class="form-control require" value="<?php if(isset($_POST['color3'])){echo $_POST['color3'];}?>" name="color3" placeholder="Website brand color 3">
<?php 
if (array_key_exists('color3', $errors)) {
echo '<p class="text-danger" >'.$errors['color3'].'</p>';
}
?>

</div>


<div class="form-group icon_form comments_form">

<input type="text" class="form-control require" value="<?php if(isset($_POST['address1'])){echo $_POST['address1'];}?>" name="address1" placeholder="Business address">
<?php 
if (array_key_exists('address1', $errors)) {
echo '<p class="text-danger" >'.$errors['address1'].'</p>';
}
?>

</div>


<div class="form-group icon_form comments_form">

<input type="text" class="form-control require" value="<?php if(isset($_POST['address2'])){echo $_POST['address2'];}?>" name="address2" placeholder="Business address 2">
<?php 
if (array_key_exists('address2', $errors)) {
echo '<p class="text-danger" >'.$errors['address2'].'</p>';
}
?>

</div>

<div class="form-group icon_form comments_form">

<textarea class="form-control require" value="" name="about" placeholder="Long information about business"><?php if(isset($_POST['about'])){echo $_POST['about'];}?></textarea>
<?php 
if (array_key_exists('about', $errors)) {
echo '<p class="text-danger" >'.$errors['about'].'</p>';
}
?>

</div>


<div class="form-group icon_form comments_form">

<input type="file" class="form-control require" name="img" placeholder="Logo image">


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
                              
                               <button type="submit" name="upload" class="button"> <a>Upload info</a></button>
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






<?php include('../incs-marketing/footer.php');?>