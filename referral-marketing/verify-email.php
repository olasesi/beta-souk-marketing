<?php
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');
//include('../incs-marketing/cookie-session.php');
if(!isset($_GET['confirm'])){
    header("Location:".GEN_WEBSITE);
exit();

}

// $query = mysqli_query($connect, "SELECT m_confirm_email FROM marketer WHERE m_remember_pass='".mysqli_real_escape_string($connect,$_GET['confirm'])."' AND m_confirm_email = '0'") or die(db_conn_error);


if(mysqli_num_rows($query) == 1){
    mysqli_query($connect, "UPDATE marketer SET m_confirm_email='1' WHERE m_remember_pass = '".mysqli_real_escape_string($connect,$_GET['confirm'])."'") or die(db_conn_error);

    include('../incs-marketing/header.php');

    echo '
    <div style="max-width:1000px; margin-left:auto; margin-right:auto;">
      <div style="font-size:14px; margin-top:50px;">
      <center>
      <h1 style="color:#f5f5f5; background-color:#161616; text-shadow:1px 1px 1px #a2a2a2; padding-top:10px; padding-bottom:10px; text-transform:uppercase;">
      
     Registration was successful</h1>
      </center>


      <p>Thank you for confirming your email.
      <centerYou can now login now.</center>
      </p>
      
      
      </div>
    </div>

    ';


    include('../incs-marketing/footer.php');





}else{

    header("Location:".GEN_WEBSITE);
    exit();
}


?>



