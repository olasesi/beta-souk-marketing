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
        'amount' => $_SESSION['non_ref_users_price']*10,
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

}
?>

                <!-- <div class="userdet user_transcation">
                    <h3 class="none_headung"> &nbsp;</h3>
                    <dl class="userdescc">
                        <dt>EGOpay</dt>
                        <dd>:&nbsp;&nbsp;$ 0</dd>
                        <dt>OKpay</dt>
                        <dd>:&nbsp;&nbsp;$ 0</dd>
                        <dt>Solidtrustpay </dt>
                        <dd>:&nbsp;&nbsp;$ 0</dd>
                        <dt>Webmoney</dt>
                        <dd>:&nbsp;&nbsp;$ 450</dd>
                        <dt>Bankwire</dt>
                        <dd>:&nbsp;&nbsp;$ 799</dd>
                        <dt>Bitcoin</dt>
                        <dd>:&nbsp;&nbsp;$ 33584</dd>

                    </dl>

                </div> -->

            </div>
            <!--  my account wrapper end -->    
            <!--  account wrapper start -->
            <!-- <div class="account_wrapper float_left">

                <div class="row">

                    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                        <div class="sv_heading_wraper">

                            <h3>my account</h3>

                        </div>
                        <div class="payment_gateway_wrapper">
                            <select>
                                <option selected>choose payment gateway</option>
                                <option value="1">paypal</option>
                                <option value="2">pexpay</option>
                                <option value="3">perfectMoney</option>
                                <option value="4">perfectMoney</option>
                                <option value="5">payza</option>
                                <option value="6">HDMoney</option>
                                <option value="7">EGOpay</option>
                                <option value="8">OKpay</option>
                                <option value="9">solid trust pay</option>
                                <option value="10">webmoney</option>
                                <option value="11">bankwire</option>
                                <option value="12">bitcoin</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12">
                        <div class="investment_box_wrapper color_1 float_left">
                            <a href="#">
                                <div class="investment_icon_wrapper float_left">
                                    <i class="far fa-money-bill-alt"></i>
                                    <h1>deposits</h1>
                                </div>

                                <div class="invest_details float_left">
                                    <table class="invest_table">
                                        <tbody>
                                            <tr>
                                                <td class="invest_td1">Active Deposit</td>
                                                <td class="invest_td1"> : $0.00 USD</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">New Deposit</td>
                                                <td class="invest_td1">: $0.00 USD</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">Matured Deposit</td>
                                                <td class="invest_td1">: $0.00 USD</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">Released Deposit</td>
                                                <td class="invest_td1">: $0.00 USD</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12">
                        <div class="investment_box_wrapper color_2 float_left">
                            <a href="#">
                                <div class="investment_icon_wrapper float_left">
                                    <i class="far fa-money-bill-alt"></i>
                                    <h1>payouts</h1>
                                </div>

                                <div class="invest_details float_left">
                                    <table class="invest_table">
                                        <tbody>
                                            <tr>
                                                <td class="invest_td1">total payouts</td>
                                                <td class="invest_td1"> : $0.00 USD</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">pending payouts</td>
                                                <td class="invest_td1">: $0.00 USD</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12">
                        <div class="investment_box_wrapper color_3 float_left">
                            <a href="#">
                                <div class="investment_icon_wrapper float_left">
                                    <i class="far fa-money-bill-alt"></i>
                                    <h1>interest earn</h1>
                                </div>

                                <div class="invest_details float_left">
                                    <table class="invest_table">
                                        <tbody>
                                            <tr>
                                                <td class="invest_td1">interest today</td>
                                                <td class="invest_td1"> : $0.00 USD</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">interest this week</td>
                                                <td class="invest_td1">: $0.00 USD</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">interest this month</td>
                                                <td class="invest_td1">: $0.00 USD</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">interest earnings</td>
                                                <td class="invest_td1">: $0.00 USD</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12">
                        <div class="investment_box_wrapper color_4 float_left">
                            <a href="#">
                                <div class="investment_icon_wrapper float_left">
                                    <i class="far fa-money-bill-alt"></i>
                                    <h1>earnings</h1>
                                </div>

                                <div class="invest_details float_left">
                                    <table class="invest_table">
                                        <tbody>
                                            <tr>
                                                <td class="invest_td1">interest today</td>
                                                <td class="invest_td1"> : $0.00 USD</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">interest this week</td>
                                                <td class="invest_td1">: $0.00 USD</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">interest this month</td>
                                                <td class="invest_td1">: $0.00 USD</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">total earnings</td>
                                                <td class="invest_td1">: $192.00 USD</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12">
                        <div class="investment_box_wrapper color_5 float_left">
                            <a href="#">
                                <div class="investment_icon_wrapper float_left">
                                    <i class="far fa-money-bill-alt"></i>
                                    <h1>referral</h1>
                                </div>

                                <div class="invest_details float_left">
                                    <table class="invest_table">
                                        <tbody>
                                            <tr>
                                                <td class="invest_td1">interest today</td>
                                                <td class="invest_td1"> : 11 nos</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">interest this week</td>
                                                <td class="invest_td1">: nos</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-lg-4 col-xl-3 col-sm-6 col-12">
                        <div class="investment_box_wrapper color_6 float_left">
                            <a href="#">
                                <div class="investment_icon_wrapper float_left">
                                    <i class="far fa-money-bill-alt"></i>
                                    <h1>sampal</h1>
                                </div>

                                <div class="invest_details float_left">
                                    <table class="invest_table">
                                        <tbody>
                                            <tr>
                                                <td class="invest_td1">interest today</td>
                                                <td class="invest_td1"> : 11 nos</td>
                                            </tr>
                                            <tr>
                                                <td class="invest_td1">interest this week</td>
                                                <td class="invest_td1">: nos</td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div> -->
            <!--  account wrapper end -->
            <!--  transactions wrapper start -->
            <div class="last_transaction_wrapper float_left">

                <!-- <div class="row">

                    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                        <div class="sv_heading_wraper">

                            <h3>LAST 5 TRANSACTIONS</h3>

                        </div>
                    </div>
                    <div class="crm_customer_table_main_wrapper float_left">
                        <div class="crm_ct_search_wrapper">
                            <div class="crm_ct_search_bottom_cont_Wrapper">
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="myTable table datatables cs-table crm_customer_table_inner_Wrapper">
                                <thead>
                                    <tr>
                                        <th class="width_table1">transaction ID</th>
                                        <th class="width_table1">amount ($)</th>
                                        <th class="width_table1">description</th>
                                        <th class="width_table1">payment mode</th>
                                        <th class="width_table1">date</th>
                                        <th class="width_table1">options</th>

                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>COMM1004411</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">1000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Deposit made</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Bitcoin</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">03/07/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                    
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>MMNT1570066</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">22000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Interest Earning for investment</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Bitcoin</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">20/07/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                   
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>UXINT1570066</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">22000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Deposit made</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Bitcoin</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">20/07/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                  
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>DINT1570066</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">22000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Interest Earning for investment</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Bitcoin</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">20/07/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                  
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>DINT1570066</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">22000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Interest Earning for investment</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Bitcoin</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">20/07/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                   
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>DINT1570066</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">22000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Interest Earning for investment</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Bitcoin</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">20/07/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                   
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>DINT1570066</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">22000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Interest Earning for investment</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Bitcoin</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">20/07/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                   
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>AWNT1570066</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">22000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Deposit made</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Bitcoin</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">20/07/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                   
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>OWNT1570066</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">22000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Deposit made</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Bitcoin</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">20/07/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                  
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>DINT1570066</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">22000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Interest Earning for investment</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Bitcoin</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">20/07/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                  
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>DINT1570066</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">22000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Deposit made</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Bitcoin</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">20/07/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                  
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>UINT1570066</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">22000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Fund Received to Paypal</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Bitcoin</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">20/07/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                    
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>YYNT1570066</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">22000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Fund Received to Paypal</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">payza</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">20/07/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                   
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>DINT1570066</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">22000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Interest Earning for investment</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Bitcoin</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">20/07/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                   
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>DINT1570066</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">22000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Interest Earning for investment</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Bitcoin</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">20/07/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                  
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>TQNT1570066</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">22000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Fund Received to Paypal</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Bitcoin</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">20/07/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                   
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>DINT2676563</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">1000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Fund Received to Paypal</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">payza</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">20/08/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                  
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>EXCR1004425</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">4000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Interest Earning for investment</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">PerfectMoney</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">28/08/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                  
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>EXCS1004424</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">19000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Fund Received to Paypal</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">payza</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">2/09/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                   
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>EQCS1004424</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">3000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Fund Received to Paypal</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">OKpay</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">2/09/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                   
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>COMM1004411</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">5000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Deposit made</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">OKpay</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">04/09/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                  
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                    <tr class="background_white">

                                        <td>
                                            <div class="media cs-media">

                                                <div class="media-body">
                                                    <h5>KQM1004411</h5>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">5000.00</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">Deposit made</div>
                                        </td>
                                        <td>
                                            <div class="pretty p-svg p-curve">paypal</div>
                                        </td>

                                        <td class="flag">
                                            <div class="pretty p-svg p-curve">04/09/2019</div>
                                        </td>
                                        <td>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav">
                                                  
                                                    <li class="nav-item dropdown">
                                                        <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown"> <i class="fa fa-ellipsis-v"></i>
                                                        </a>
                                                        <div class="dropdown-menu"> <a class="dropdown-item" href="#">Edit</a>
                                                            <a class="dropdown-item" href="#">Delete</a>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </nav>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div> -->
            </div>
            <!--  transactions wrapper end -->
           <?php
           include ('../incs-marketing/buy-footer.php');
           ?>