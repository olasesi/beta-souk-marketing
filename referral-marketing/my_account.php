<?php 
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');
?>
<?php
if(!isset($_SESSION['user_id_marketer'])) {
    header('Location:'.GEN_WEBSITE);
       exit;
}


include('../incs-marketing/header-my-account.php');
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
                
                <h3><?=$_SESSION['m_username'];?></h3>

                    <dl class="userdescc">
                        <dt>Registration Date</dt>
                        <dd>: &nbsp; <?=$_SESSION['m_timestamp'];?></dd>
                        <dt>First Name</dt>
                        <dd>: &nbsp; <?=$_SESSION['m_firstname'];?></dd>
                        <dt>Last Name</dt>
                        <dd>: &nbsp; <?=$_SESSION['m_surname'];?></dd>
                        <dt>Email Address</dt>
                        <dd>: &nbsp; <?=$_SESSION['m_email'];?></dd>
                        <dt>Referral Link</dt>
                        <dd>: &nbsp; <?=GEN_WEBSITE.'/affiliate.php?link='.$_SESSION['m_username']?> </dd>

                    </dl>

                </div>

                <div class="userdet user_transcation">
                    <h3>Available Balance</h3>
                    <dl class="userdescc">
                     <?php
                        // $price_amount = mysqli_query($connect, "SELECT products_categories_id, products_categories_name FROM products_categories") or die(db_conn_error);
                     ?>   
                    <dt>Amount</dt>
                        <dd>:&nbsp;&nbsp;$ 392.79</dd>
                       

                    </dl>
                </div>
                <div class="userdet user_transcation">
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

                </div>

            </div>
            <!--  my account wrapper end -->    
            <!--  account wrapper start -->
            <div class="account_wrapper float_left">

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
            </div>
            <!--  account wrapper end -->
            <!--  transactions wrapper start -->
            <div class="last_transaction_wrapper float_left">

                <div class="row">

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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                                                    <!-- Dropdown -->
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
                </div>
            </div>
            <!--  transactions wrapper end -->
           <?php
           include ('../incs-marketing/footer-dashboard.php');
           ?>