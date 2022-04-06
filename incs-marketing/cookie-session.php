<?php
if(!isset($_SESSION['non_ref_users_id'])){	

if(isset($_COOKIE['buy_cookie_session'])){ 
	
	$cookiesessions = $_COOKIE['buy_cookie_session'];

	$decode_cookie = mysqli_query ($connect,"SELECT * FROM non_ref_users WHERE non_ref_users_cookie = '".$cookiesessions."' AND active = '1'") or die(db_conn_error);
    if (mysqli_num_rows($decode_cookie) == 1) {
	
	$rows_cookie = mysqli_fetch_array($decode_cookie, MYSQLI_NUM);
	$_SESSION['non_ref_users_id'] = $row[0];
	$_SESSION['non_ref_users_firstname'] = $row[2];
	$_SESSION['non_ref_users_surname'] = $row[3];
	$_SESSION['non_ref_users_username'] = $row[4];
	$_SESSION['non_ref_users_email'] = $row[5];
	$_SESSION['non_ref_users_address'] = $row[7];
	$_SESSION['non_ref_users_package'] = $row[8];
	$_SESSION['non_ref_users_price'] = $row[9];
	$_SESSION['non_ref_users_order'] = $row[10];
	$_SESSION['non_ref_users_reference'] = $row[11];
	$_SESSION['non_ref_users_timestamp'] = $row[13];
	 
}

}
}

?>