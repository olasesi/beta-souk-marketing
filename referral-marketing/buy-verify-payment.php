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





$result = array();
//The parameter after verify/ is the transaction reference to be verified
$url = 'https://api.paystack.co/transaction/verify/'.$_GET['reference'];

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt(
$ch, CURLOPT_HTTPHEADER, [
'Authorization: '.API_KEY]
);
$request = curl_exec($ch);
curl_close($ch);

if ($request) {
$result = json_decode($request, true);
}

if (array_key_exists('data', $result) && array_key_exists('status', $result['data']) && ($result['data']['status'] === 'success')) {

    mysqli_query($connect, "UPDATE non_ref_users SET non_ref_users_order='1' WHERE non_ref_users_reference = '".$_GET['reference']."'") or die(db_conn_error);
if(isset($_SESSION['non_ref_users_id'])){
    header('Location:'.GEN_WEBSITE.'/dashboard.php?confirm=1');
    exit(); 

}
  
}else{
    header('Location:'.GEN_WEBSITE);
    exit();
}


include('../incs-marketing/header2.php');


echo '
          
<div class="container">
    <div class="row align-items-center">
        <div class="col-lg-6">
            <div class="aplpg-slide-left">
                <div class="aplpg-headline">
                    <h1 style="font-size:30px; color:#ca4e28;">Congratulations for the Successful Payment</h1>
                </div>
                <div class="aplpg-pera-txt" style="margin:10px 0 20px;">
                    <p>You can now login to your dashboard..</p>
                </div>
                <div class="aplpg-slider-form">
                    <a href="" class="aplpg-primary-btn">Log in here</a>
                    <i class="fas fa-whatsapp"></i>
                </div>
            </div>
        </div>
        <div class="col-lg-6">
            <div class="">
                <img class="img-thumbnail" src="img/app-landing/congratulations-stamp.png" alt="">
            </div>
        </div>
    </div>
</div>         
';

?>
<?php
//$query_users = mysqli_query($connect, "SELECT user_id_marketer FROM users WHERE u_reference  = '".mysqli_real_escape_string ($connect, $_GET['reference'])."' AND u_order='1'") or die(db_conn_error);


?>







<?php include('../incs-marketing/footer.php');?>