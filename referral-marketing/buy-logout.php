<?php 
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');


if(!isset($_SESSION['user_id_marketer'])){  
	header("Location:".GEN_WEBSITE);
	exit();
}


mysqli_query($connect,"UPDATE marketer SET m_cookie_session = '' WHERE user_id_marketer  = '".$_SESSION['user_id_marketer']."'") or die(db_conn_error);	
session_destroy();
setcookie("buy_cookie_session", "", time() - 999931104000);		
	
header("Location:".GEN_WEBSITE);
exit();


