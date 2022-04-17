<?php
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');
//include('../incs-marketing/cookie-session.php');

?>

<?php 
 if(!isset($_POST['package']) OR !isset($_POST['price'])){
    header('Location:'.GEN_WEBSITE.'/signup.php');
    exit();

 }

 if(!isset($_SESSION['non_ref_users_email']) || !isset($_SESSION['non_ref_users_reference'])) {
    header('Location:'.GEN_WEBSITE.'/login.php');
       exit();
}


/*if(isset($_POST['package']) AND $_SERVER['REQUEST_METHOD'] == "POST" ){

    if (trim($_POST['package'])) {		//only 30 characters are allowed to be inputted
      $package = mysqli_real_escape_string ($connect, trim($_POST['package']));
  }

  if(trim($_POST['price'])){
      $price = mysqli_real_escape_string($connect, trim($_POST['price']));
  }

  mysqli_query($connect, "UPDATE non_ref_users SET non_ref_users_package = '".$package."', non_ref_users_price = '".$price."'  WHERE non_ref_users_id = '".$SESSION['non_ref_users_id']."'") or die(db_conn_error);	



}*/


$email = $_SESSION['non_ref_users_email'];
$_SESSION['package'] = mysqli_real_escape_string ($connect, $_POST['package']);
$price = $_SESSION['price'] = mysqli_real_escape_string($connect, trim($_POST['price']));
$reference_num = $_SESSION['non_ref_users_reference'];


if(!isset($_SESSION['non_ref_users_email']) || !isset($_SESSION['price']) || !isset($_SESSION['non_ref_users_reference'])) {
    header('Location:'.GEN_WEBSITE.'/signup.php');
       exit();
}

require_once('../incs-marketing/pay.php');

?>