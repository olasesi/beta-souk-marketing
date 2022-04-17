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
	<title>Beta Souk - Utilizing Digital Platforms For Businesses</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <meta name="description" content="Utilizing digital platforms for businesses to promote their products and services, create a great first impression and generate more sales." />
    <meta name="keywords" content="Ecommerce, online store, beta souk, digital platforms, businesses, promote, business, sercives, sales, profit" />
    <meta name="author" content="Beta Souk" />
    <meta name="MobileOptimized" content="320" />
	<link rel="shortcut icon" type="image/png" href="images/favicon.png" />
    <link id="theme-style" rel="stylesheet" href="assets/css/package.css">
	<link rel="stylesheet" href="css/font-awesome.css">
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
                        <h4 class="text-uppercase ls-1 text-primary py-3 mb-0">Basic pack</h4>
                    </div>
                    <div class="card-body px-lg-7">
                        <div class="display-2">&#8358;60K</div>
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
                                        <span class="pl-2">Cross sells / ups</span>
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
                                        <span class="pl-2">Payment gateway</span>
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
                                        <span class="pl-2">Product share to social media</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <form action="payment.php" method="post">
                        <input type="hidden" name="package" value="<?php echo PACKAGE1;?>">    
                            <input type="hidden" name="price" value="<?php echo BASIC;?>">
                            <button type="submit" class="btn btn-primary mb-3">Choose package</button>
                        </form>
                    </div>
                    <div class="card-footer">
                        <a href="#!" class="text-light">Request a demo</a>
                    </div>
                </div>
                <div class="card card-pricing bg-gradient-success zoom-in shadow-lg rounded border-0 text-center mb-4">
                    <div class="card-header bg-transparent">
                        <h4 class="text-uppercase ls-1 text-white py-3 mb-0">Essential pack</h4>
                    </div>
                    <div class="card-body px-lg-7">
                        <div class="display-1 text-white">&#8358;150K</div>
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
                                        <span class="pl-2 text-white">Cross sells / ups</span>
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
                                        <span class="pl-2 text-white">Logistics Integration</span>
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
                                        <span class="pl-2 text-white">Product share to social media</span>
                                    </div>
                                </div>
                            </li>
                        </ul>
                        <form action="payment.php" method="post">
                            <input type="hidden" name="package" value="<?php echo PACKAGE2;?>">
                            <input type="hidden" name="price" value="<?php echo ESSENTIAL;?>">
                            <button type="submit" class="btn btn-secondary mb-3">Choose package</button>
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
                                <span class="font-weight-900">Basic Pack</span>
                            </th>
                            <th class="text-center bg-transparent" scope="col">
                                <span class="font-weight-900">Essential Pack</span>
                            </th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-0">Admin page</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">Custom email</td>
                            <td class="text-center">-</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">Cross sells / ups</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">Payment gateway</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">Create Discount Price</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">Logistics Integration</td>
                            <td class="text-center">-</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">Top banner for promo</td>
                            <td class="text-center">-</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">Product categories</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">Sub-category creation</td>
                            <td class="text-center">-</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">Product share to social media</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-0">Whatsapp chat with customers</td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                            <td class="text-center"><i class="fas fa-check text-success"></i>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

</body>
</html>

