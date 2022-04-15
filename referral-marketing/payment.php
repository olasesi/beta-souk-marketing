<?php
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');
//include('../incs-marketing/cookie-session.php');

?>

<?php 
 
$email = $_SESSION['email'];
$_SESSION['package'] = $_POST['package'];
$price = $_SESSION['price'] = $_POST['price'];
$reference_num = $_SESSION['reference'];


if(!isset($_SESSION['email']) || !isset($_SESSION['price']) || !isset($_SESSION['reference'])) {
    header('Location:'.GEN_WEBSITE);
       exit();
}

require_once('../incs-marketing/pay.php');

?>