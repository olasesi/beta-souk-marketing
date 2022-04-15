<?php
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');
//include('../incs-marketing/cookie-session.php');


// if(isset($_SESSION['user_id_marketer'])) {
//     header('Location:'.GEN_WEBSITE.'/my_account.php');
//        exit;
// }
 if(isset($_SESSION['non_ref_users_id'])) {
     header('Location:'.GEN_WEBSITE.'/dashboard.php');
        exit();
 }

// if(isset($_SESSION['user_id'])) {
//     header('Location:'.GEN_WEBSITE.'/referred-to-buy.php');
//        exit();
// }
?>
<?php

//  if(isset($_SESSION['non_ref_users_id'])){
//     $query_select = mysqli_query ($connect, "SELECT * FROM non_ref_users WHERE non_ref_users_id='".$_SESSION['non_ref_users_id']."'") or die(db_conn_error);
//     if(mysqli_num_rows($query_select) == 1){
//       while($rows = mysqli_fetch_array($query_select)){
        
//        $firstname = $_SESSION['non_ref_users_firstname'];
//        $surename = $_SESSION['non_ref_users_surname'];
//        $username = $_SESSION['non_ref_users_username'];
//        $email = $_SESSION['non_ref_users_email'];
//        $address = $_SESSION['non_ref_users_address'];
//        $package = $_SESSION['non_ref_users_package'];
//        $price = $_SESSION['non_ref_users_price'];
//        $order = $_SESSION['non_ref_users_order'];
//        $ref = $_SESSION['non_ref_users_reference'];
//       }
    
//     }      
//      }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link id="theme-style" rel="stylesheet" href="assets/css/portal.css"> -->
    <link id="theme-style" rel="stylesheet" href="assets/css/package.css">
	<link rel="stylesheet" href="css/font-awesome.css">


    <title>Document</title>
</head>
<body>
    
<div class="container mt-4 pb-5">
    <div class="mb-4 bg-transparent">
        <h1 class="text-uppercase text-center text-primary py-3 mb-1">Choose a package</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-lg-10">
            <div class="pricing card-group flex-column flex-md-row mb-3">
                <div class="card card-pricing border-0 text-center mb-4">
                    <div class="card-header bg-transparent">
                        <h4 class="text-uppercase ls-1 text-primary py-3 mb-0">Bravo pack</h4>
                    </div>
                    <div class="card-body px-lg-7">
                        <div class="display-2">$49</div>
                        <span class="text-muted">per application</span>
                        <ul class="list-unstyled my-4">
                            <li>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                                            <i class="fas fa-terminal"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="pl-2">Complete documentation</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                                            <i class="fas fa-pen-fancy"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="pl-2">Working materials in Sketch</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-xs icon-shape bg-gradient-primary shadow rounded-circle text-white">
                                        <i class="fas fa-hdd"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="pl-2">2GB cloud storage</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <form action="payment.php" method="post">
                        <input type="hidden" name="package" value="<?php echo PACKAGE1;?>">    
                            <input type="hidden" name="price" value="<?php echo BASIC;?>">
                            <button type="submit" class="btn btn-primary mb-3">Start free trial</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <a href="#!" class="text-light">Request a demo</a>
                    </div>
                </div>
                <div class="card card-pricing bg-gradient-success zoom-in shadow-lg rounded border-0 text-center mb-4">
                    <div class="card-header bg-transparent">
                        <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Alpha pack</h4>
                    </div>
                    <div class="card-body px-lg-7">
                        <div class="display-1 text-white">$199</div>
                        <span class="text-white">per application</span>
                        <ul class="list-unstyled my-4">
                            <li>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                            <i class="fas fa-terminal"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="pl-2 text-white">Complete documentation</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                            <i class="fas fa-pen-fancy"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="pl-2 text-white">Working materials in Sketch</span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <div class="d-flex align-items-center">
                                    <div>
                                        <div class="icon icon-xs icon-shape bg-white shadow rounded-circle text-muted">
                                            <i class="fas fa-hdd"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <span class="pl-2 text-white">2GB cloud storage</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <form action="payment.php" method="post">
                            <input type="hidden" name="package" value="<?php echo PACKAGE2;?>">
                            <input type="hidden" name="price" value="<?php echo ESSENTIAL;?>">
                            <button type="submit" class="btn btn-secondary mb-3">Start free trial</button>
                        </form>
                    </div>
                    <div class="card-footer bg-transparent">
                        <a href="#!" class="text-white">Contact sales</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="d-flex justify-content-lg-center px-3 mt-5">
        <div>
            <div class="icon icon-shape bg-gradient-white shadow rounded-circle text-primary">
                <i class="ni ni-building text-primary"></i>
            </div>
        </div>
        <div class="col-lg-6">
            <p class="text-white"><strong>The Arctic Ocean</strong> freezes every winter and much of the sea-ice then thaws every summer, and that
            process will continue whatever.</p>
        </div>
    </div> -->
    <div class="row row-grid justify-content-center">
        <div class="col-lg-10">
            <div class="table-responsive">
                <table class="table table-dark mt-5">
                    <thead>
                        <tr>
                            <th class="px-0 bg-transparent" scope="col">
                                <span class="font-weight-900">Features</span>
                            </th>
                            <th class="text-center bg-transparent" scope="col">
                                <span class="font-weight-900">Bravo Pack</span>
                            </th>
                            <th class="text-center bg-transparent" scope="col">
                                <span class="font-weight-900">Alpha Pack</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-0">IMAP/POP Support</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">Email Forwarding</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">Active Sync</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">Multiple domain hosting</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                            <td class="text-center">
                                <span class="text-sm">Limited to 1 domain only</span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">Additional storage upgrade</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">30MB Attachment Limit</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="px-0">Password protected / Expiry links</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                            <td class="text-center">-</td>
                        </tr>
                        <tr>
                            <td class="px-0">Unlimited Custom Apps</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                            <td class="text-center">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>

