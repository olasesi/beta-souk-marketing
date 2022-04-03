<?php 
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');
?>
<?php

if(!isset($_SESSION['non_ref_users_id'])) {
    header('Location:'.GEN_WEBSITE);
       exit();
}

if(isset($_POST['complete_order']) AND $_SERVER['REQUEST_METHOD'] == "POST"){

    $result = array();

    //Set other parameters as keys in the $postdata array
    $postdata = [
        'email' => $_SESSION['non_ref_users_email'],
        'amount' => $_SESSION['non_ref_users_price']*100,
        'reference' => $_SESSION['non_ref_users_reference'],
        'callback_url' => GEN_WEBSITE.'/buy-verify-payment.php'
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

}

include('../incs-marketing/buy-header.php');
?>

        <!-- Main section Start -->
         <div class="l-main">         
          <!--  my account wrapper start -->
            <div class="account_top_information">
                <div class="account_overlay"></div>
                <div class="useriimg"><img src="images/user.png" alt="users"></div>
                <div class="userdet uderid">
                <?php 

                ?>   
                
                <h3><?= $_SESSION['non_ref_users_firstname'].' '. $_SESSION['non_ref_users_surname'];  ?></h3>

                    <dl class="userdescc">
                        <dt>Order Date</dt>
                        <dd>: &nbsp; <?=$_SESSION['non_ref_users_timestamp'];?></dd>
                        <dt>Website Package</dt>
                        <dd>: &nbsp; <?=$_SESSION['non_ref_users_package'];?></dd>
                        <dt>Price</dt>
                        <dd>: &nbsp; <?php echo '&#8358;'.number_format($_SESSION['non_ref_users_price']);?></dd>
                        <dt>Order status</dt>
                        <dd>: &nbsp; <?php if ($_SESSION['non_ref_users_order'] == 0){echo 'Payment was not successful';}elseif($_SESSION['non_ref_users_order'] == 1){echo 'Payment was successful';}?></dd>
                        <dt>Payment reference</dt>
                        <dd>: &nbsp; <?=$_SESSION['non_ref_users_reference'];?> </dd>

                    </dl>

                </div>



<?php

if($_SESSION['non_ref_users_order'] == 0){
              echo  '<div class="userdet user_transcation">
                    <h3>Order</h3>
                    <dl class="userdescc">
                      <form method="POST" action="">
                      <div class="about_btn login_btn float_left">
                    
                    <button type="button" name="complete_order">Pay now<button>
                    </div>
                      </form>

                    </dl>
                </div>';

}else{

    echo '<button>Whatsapp chat</button>';
}
?>

             

            </div>
           
            <div class="last_transaction_wrapper float_left">

              
            </div>
            <!--  transactions wrapper end -->
           <?php
           include ('../incs-marketing/buy-footer.php');
           ?>