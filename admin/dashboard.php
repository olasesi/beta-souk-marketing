<?php
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');
//include('../incs-marketing/cookie-session.php');
include('../incs-marketing/buy-header.php');

?>

<?php
$signup_errors = array();
if(isset($_POST['login']) AND $_SERVER['REQUEST_METHOD']== "POST" ){
    if (preg_match ('/^[a-zA-Z-_]{3,20}$/i', trim($_POST['username']))) {		//only 20 characters are allowed to be inputted
		$username = mysqli_real_escape_string ($connect, trim($_POST['username']));
	} else {
		$signup_errors['username'] = 'Please enter valid username. Alpha-numeric letters, underscore or dash.';
	} 


    if (preg_match ('/^.{6,255}$/i', trim($_POST['password']))) {		//only 20 characters are allowed to be inputted
		$password = mysqli_real_escape_string ($connect, trim($_POST['password']));
	} else {
		$signup_errors['password'] = 'Please enter valid password.';
	} 


  



    if(empty($signup_errors)){
 
  
        $query = mysqli_query($connect, "SELECT * FROM marketer WHERE username='".$username."' AND m_email_comfirm='1'") or die(db_conn_error);
        
        $row = mysqli_fetch_array($query, MYSQLI_NUM);
      
       
        if(password_verify($password,$row[7])){
          
          $value = md5(uniqid(rand(), true));
          $query_confirm_sessions = mysqli_query ($connect, "SELECT m_cookie_session FROM marketer WHERE m_username='".$username."'") or die(db_conn_error);
          $cookie_value_if_empty = mysqli_fetch_array($query_confirm_sessions);
          
          if (empty($cookie_value_if_empty[0])){
          mysqli_query($connect,"UPDATE marketer SET m_cookie_session = '".$value."' WHERE m_username='".$username."'") or die(db_conn_error);		
          setcookie("remember_password", $value, time() + 7*24*3600);	//7 days for cookie to expire
          
          }else if(!empty($cookie_value_if_empty[0])){
          
          setcookie("remember_password", $cookie_value_if_empty[0], time() + 7*24*3600);	//4 days for cookie to expire
          }
      
      
      $_SESSION['user_id_marketer'] = $row[0];
      $_SESSION['m_firstname'] = $row[3];
      $_SESSION['m_surname'] = $row[4];
      $_SESSION['n_username'] = $row[5];
      $_SESSION['m_email'] = $row[6];
       
      
      header('Location:'.GEN_WEBSITE.'/students/home.php');
       exit;
      
      
      
      
      
      
      
      
      
      
      
        }else{
      
      
      
          $signup_errors['email'] = 'You entered an incorrect login details.';
         
      
        }
      
      
      }

}



?>


<div class="app-wrapper">
	    
	    <div class="app-content pt-3 p-md-3 p-lg-4">
		    <div class="container-xl">
			    
			    <div class="row g-3 mb-4 align-items-center justify-content-between">
				    <div class="col-auto">
			            <h1 class="app-page-title mb-0">Clients</h1>
				    </div>

			    </div><!--//row-->


				<div class="tab-content" id="orders-table-tab-content">
			        <div class="tab-pane fade show active" id="orders-all" role="tabpanel" aria-labelledby="orders-all-tab">
					    <div class="app-card app-card-orders-table shadow-sm mb-5">
						    <div class="app-card-body">
							    <div class="table-responsive">
							        <table class="table app-table-hover mb-0 text-left">
										<thead>
											<tr>
												<th class="cell">Name</th>
												<th class="cell">Email</th>
												<th class="cell">Phone</th>
												<th class="cell">Package</th>
												<th class="cell">Reference No</th>
												<th class="cell">Price</th>
												<th class="cell">Status</th>
												<th class="cell">Date</th>
											</tr>
										</thead>
										<tbody>
                                        <?php include('../incs-marketing/paginate.php');
                                            $statement = "non_ref_users ORDER BY non_ref_users_timestamp DESC"; 
                                            $page = (int)(!isset($_GET["page"]) ? 1 : $_GET["page"]);
                                            if ($page <= 0) $page = 1;

                                                $per_page = 10; 								// Set how many records do you want to display per page.

                                                $startpoint = ($page * $per_page) - $per_page;

                                                $select_all_invited = mysqli_query($connect,"SELECT * FROM ".$statement." LIMIT $startpoint, $per_page") or die(db_conn_error);

                                                if (mysqli_num_rows($select_all_invited)> 0){
                                                    while($users_array = mysqli_fetch_array($select_all_invited)){
                                                        if($users_array['non_ref_users_order'] == 0){
                                                            $pay_status = '<span class="badge bg-danger">Not Paid</span>';
                                                        } else{$pay_status = '<span class="badge bg-success">Paid</span>';}
                                                        echo  '<tr>
                                                                <td class="cell">'.$users_array['non_ref_users_fullname'].'</td>
                                                                <td class="cell">'.$users_array['non_ref_users_email'].'</td>
                                                                <td class="cell">'.$users_array['non_ref_users_phone'].'</td>
                                                                <td class="cell">'.$users_array['non_ref_users_package'].'</td>
                                                                <td class="cell">'.$users_array['non_ref_users_reference'].'</td>
                                                                <td class="cell">&#8358;'.number_format($users_array['non_ref_users_price']).'</td>
                                                                <td class="cell">'.$pay_status.'</td>
                                                                <td class="cell">'.$users_array['non_ref_users_timestamp'].'</td>
                                                                </tr>';

                                                    }
                                                } else{
                                                    echo 'No referred person yet';

                                            }


                                        ?>
											
										</tbody>
									</table>
						        </div><!--//table-responsive-->
						       
						    </div><!--//app-card-body-->		
						</div><!--//app-card-->
						<nav class="app-pagination">
                            <ul class="pagination justify-content-center">
                                <?php echo pagination($statement,$per_page,$page,$url='http://localhost/beta-souk-marketing/admin?');?>
							</ul>
						</nav><!--//app-pagination-->
						
			        </div><!--//tab-pane-->
				</div><!--//tab-content-->
				
				
			    
		    </div><!--//container-fluid-->
	    </div><!--//app-content-->

<?php

include('../incs-marketing/buy-footer.php');

?>