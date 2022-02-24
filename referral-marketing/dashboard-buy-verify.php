<?php 
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');
//include('../incs-marketing/cookie-session.php');

if(!isset($_SESSION['non_ref_users_id'])) {
    header('Location:'.GEN_WEBSITE);
       exit();
}



if(!isset($_GET['reference'])){
    header('Location:'.GEN_WEBSITE);
    exit(); 
}


$query_select = mysqli_query($connect, "SELECT non_ref_users_reference FROM non_ref_users WHERE non_ref_users_reference  = '".mysqli_real_escape_string ($connect, $_GET['reference'])."' AND non_ref_users_reference = '".$_SESSION['non_ref_users_reference']."'") or die(db_conn_error);

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
'Authorization: Bearer sk_test_*****************************']
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


    mysqli_query($connect, "UPDATE non_ref_users SET non_ref_users_order='1' WHERE non_ref_users_reference = '".$_GET['reference']."'") or die(db_conn_error);
   
    $query_select_status = mysqli_query($connect, "SELECT non_ref_users_order FROM non_ref_users WHERE non_ref_users_reference = '".$_GET['reference']."'") or die(db_conn_error);
   while($row=mysqli_fetch_array($query_select_status)){
    $_SESSION['non_ref_users_order'] = $row['non_ref_users_order'];

   }
   

    header('Location:'.GEN_WEBSITE.'/dashboard.php');
    exit();

    
   
//Perform necessary action
}else{
    header('Location:'.GEN_WEBSITE);
    exit();
}
