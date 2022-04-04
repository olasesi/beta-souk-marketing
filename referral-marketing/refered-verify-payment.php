<?php 
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');
//include('../incs-marketing/cookie-session.php');


if(!isset($_GET['reference'])){
    header('Location:'.GEN_WEBSITE);
    exit(); 
}

$query_select = mysqli_query($connect, "SELECT u_reference FROM users WHERE u_reference  = '".mysqli_real_escape_string ($connect, $_GET['reference'])."'") or die(db_conn_error);

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

    // $query_term_start_end = mysqli_query($connect, "SELECT choose_term, school_session FROM term_start_end ORDER BY term_start_end_id DESC LIMIT 1") or die(db_conn_error);
  
    // while($whiling_term_start_end = mysqli_fetch_array($query_term_start_end)){

    //   $term = $whiling_term_start_end['choose_term'];
    //   $session = $whiling_term_start_end['school_session'];
    // }


    mysqli_query($connect, "UPDATE users SET u_order='1' WHERE u_reference = '".$_GET['reference']."'") or die(db_conn_error);

    // if(mysqli_affected_rows($connect) == 1){
    
    
    // }

    

    
    // header('Location:'.GEN_WEBSITE.'/school-payment.php?ref='.$_GET['reference'].'&status='.$result['data']['status']);
    // exit();
   
//Perform necessary action
}else{
    header('Location:'.GEN_WEBSITE);
    exit();
}

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


include('../incs-marketing/footer.php');