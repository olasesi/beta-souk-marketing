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
                        <dd>: &nbsp; <?=GEN_WEBSITE.'/affiliate.php?link='.$_SESSION['m_username'];?> </dd>

                    </dl>

                </div>

                <div class="userdet user_transcation">
                    <h3>Total cash to earn</h3>
                    <dl class="userdescc">
                     <?php
                        // $price_amount = mysqli_query($connect, "SELECT products_categories_id, products_categories_name FROM products_categories") or die(db_conn_error);
                     ?>   
                    <dt>Amount</dt>
<?php
                    $query_select = mysqli_query($connect, "SELECT user_id_marketer, u_price FROM users WHERE user_id_marketer  = '".$_SESSION['m_username']."' AND u_order = '1'") or die(db_conn_error);
                    $price_total = array();
while($price_row = mysqli_fetch_array($query_select)){
   $adding_all =$price_row['u_price'];
   $price_total[] =$adding_all;


}


?>
                        <dd>:&nbsp;&nbsp;&#8358;<?= number_format(array_sum($price_total));?></dd>
                       

                    </dl>
                </div>
              
            </div>
    
            <div class="last_transaction_wrapper float_left">

                <div class="row">

                    <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                        <div class="sv_heading_wraper">

                            <h3>Referred users</h3>

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
                                      
                                        <th class="width_table1">Name</th>
                                        <th class="width_table1">Commission to earn (%)</th>
                                        <th class="width_table1">Amount</th>
                                        
                                        <th class="width_table1">Package</th>
                                       
                                        <th class="width_table1">Status</th>
                                        <th class="width_table1">Date registered</th>

                                    </tr>
                                </thead>
                                <tbody>
                                  
                                   
                                
                               <?php include('../incs-marketing/paginate.php');

$statement = "users WHERE user_id_marketer  = '".$_SESSION['m_username']."' ORDER BY u_timestamp DESC"; 

$page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
if ($page <= 0) $page = 1;

$per_page = 12; 								// Set how many records do you want to display per page.

$startpoint = ($page * $per_page) - $per_page;

$select_all_invited = mysqli_query($connect,"SELECT * FROM ".$statement." LIMIT $startpoint, $per_page") or die(db_conn_error);


if (mysqli_num_rows($select_all_invited)> 0){
    while($users_array = mysqli_fetch_array($select_all_invited)){
if($users_array['u_order'] == 0){$pay_status = 'Not paid';}else{$pay_status = 'Payment was successful';}
      echo  '<tr class="background_white">

        <td>
            <div class="media cs-media">

                <div class="media-body">
                    <h5>'.$users_array['u_firstname'].' '.$users_array['u_surname'].'</h5>
                </div>
            </div>
        </td>
        <td>
            <div class="pretty p-svg p-curve">'.$users_array['u_commission'].'</div>
        </td>
        <td>
            <div class="pretty p-svg p-curve">&#8358;'.number_format($users_array['u_price']*$users_array['u_commission']/100).'</div>
        </td>
        <td>
            <div class="pretty p-svg p-curve">'.$users_array['u_package'].'</div>
        </td>

        <td class="flag">
            <div class="pretty p-svg p-curve">'.$pay_status.'</div>
        </td>
       

        <td class="flag">
            <div class="pretty p-svg p-curve">'.$users_array['u_timestamp'].'</div>
        </td>
       
       
     
    </tr>';




    }


}else{
 echo 'No referred person yet';

}


?>
                                
                                
                                
                              
                                 
                                  
                                   
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