<?php 
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');


if(!isset($_SESSION['non_ref_users_id'])){  
	header("Location:".GEN_WEBSITE);
	exit();
}


mysqli_query($connect,"UPDATE non_ref_users SET non_ref_users_cookie = '' WHERE non_ref_users_id  = '".$_SESSION['non_ref_users_id']."'") or die(db_conn_error);	
session_destroy();
setcookie("m_cookie_session", "", time() - 999931104000);		
	
header("Location:".GEN_WEBSITE);
exit();


