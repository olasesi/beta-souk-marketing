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







<?php include('../incs-marketing/footer.php');?>