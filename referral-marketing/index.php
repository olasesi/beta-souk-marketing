<?php
require_once('../incs-marketing/config.php');
require_once('../incs-marketing/gen_serv_con.php');

if(isset($_SESSION['user_id_marketer'])) {
    header('Location:'.GEN_WEBSITE.'/my_account.php');
       exit;
}
if(isset($_SESSION['non_ref_users_id'])) {
    header('Location:'.GEN_WEBSITE.'/dashboard.php');
       exit();
}

if(isset($_SESSION['user_id'])) {
    header('Location:'.GEN_WEBSITE.'/referred-to-buy.php');
       exit();
}


include('../incs-marketing/header.php');
?>
    <!-- slider wrapper start -->
    <div class="slider-area slider_index2_wrapper slider_index3_wrapper  float_left">
        <div class="bg-animation">
            <img class="zoom-fade" src="images/pattern.png" alt="img">
        </div>
        <div class="index2_sliderbg index3_sliderbg">
            <img src="images/shape1.png" alt="img" class="img-responsive">
        </div>

        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                    <div class="carousel-captions caption-1">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-10 col-md-12 col-sm-12 col-12">
                                    <div class="content">

                                        <h2 data-animation="animated bounceInUp">Often Have Small</h2>

                                        <h3 data-animation="animated bounceInUp">Invest Your Money  <br>
For <span>Future</span></h3>

                                        <p data-animation="animated bounceInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad minim veniam Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute an irure dolor in voluptate velit.</p>

                                        <div class="slider_btn index2_sliderbtn index3_sliderbtn float_left">
                                            <ul>
                                                <li data-animation="animated bounceInLeft">
                                                    <a href="register.php">Affiliate register</a>
                                                </li>
                                                <li data-animation="animated bounceInLeft">
                                                    <a href="login.php">Affiliate login</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div data-animation="animated bounceInLeft" class="social_link_foter slider_btm_icon_links">

                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-captions caption-2">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-10 col-md-12 col-sm-12 col-12">
                                    <div class="content">

                                        <h2 data-animation="animated bounceInUp">Often Have Small</h2>

                                        <h3 data-animation="animated bounceInUp">Invest Your Money  <br>
For <span>Future</span></h3>

                                        <p data-animation="animated bounceInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad minim veniam Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute an irure dolor in voluptate velit.</p>

                                        <div class="slider_btn index2_sliderbtn index3_sliderbtn float_left">
                                            <ul>
                                                <li data-animation="animated bounceInLeft">
                                                <a href="register.php">Affiliate register</a>
                                                </li>
                                                <li data-animation="animated bounceInLeft">
                                                <a href="login.php">Affiliate login</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div data-animation="animated bounceInLeft" class="social_link_foter slider_btm_icon_links">

                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="carousel-captions caption-3">
                        <div class="container">
                            <div class="row">
                                <div class="col-xl-6 col-lg-10 col-md-12 col-sm-12 col-12">
                                    <div class="content">

                                        <h2 data-animation="animated bounceInUp">Often Have Small</h2>

                                        <h3 data-animation="animated bounceInUp">Invest Your Money  <br>
For <span>Future</span></h3>

                                        <p data-animation="animated bounceInUp">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad minim veniam Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute an irure dolor in voluptate velit.</p>

                                        <div class="slider_btn index2_sliderbtn index3_sliderbtn float_left">
                                            <ul>
                                                <li data-animation="animated bounceInLeft">
                                                <a href="register.php">Affiliate register</a>
                                                </li>
                                                <li data-animation="animated bounceInLeft">
                                                <a href="login.php">Affiliate login</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div data-animation="animated bounceInLeft" class="social_link_foter slider_btm_icon_links">

                                            <ul>
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google-plus-g"></i></a></li>

                                            </ul>
                                        </div>
                                        <div class="clear"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <ol class="carousel-indicators">

                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"><span class="number">01</span>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="1" class=""><span class="number">02</span>
                    </li>
                    <li data-target="#carousel-example-generic" data-slide-to="2" class=""><span class="number">03</span>
                    </li>
                </ol>
                <div class="carousel-nevigation">
                    <a class="prev" href="#carousel-example-generic" role="button" data-slide="prev"> <span></span> <i class="flaticon-left-arrow"></i>
                    </a>
                    <a class="next" href="#carousel-example-generic" role="button" data-slide="next"> <span></span> <i class="flaticon-arrow-pointing-to-right"></i>
                    </a>
                </div>
            </div>
        </div>

    </div>
    <!-- slider wrapper End -->
    <!--about us wrapper start -->
    <div class="about_us_wrapper index2_about_us_wrapper index3_about_us float_left">
        <div class="container">
            <div class="row">

                <div class="col-xl-6 col-md-12 col-lg-12 col-sm-12 col-12">
                    <div class="about_content_wrapper">
                        <div class="sv_heading_wraper index2_heading index3_heading index3_headung2">
                            <h4>who we are</h4>
                            <h3>Welcome to SaveHyip</h3>
                            <div class="line_shape line_shape2"></div>
                        </div>
                        <div class="welcone_savehiyp float_left">
                            <p>Put your investing ideas into action with full range of investments. Duis auteir ure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Enjoy real benefits and rewards on your accrue investing. </p>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad an minim veniam Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis auteirure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                            <div class="welcome_save_inpvate_wrapper index3_welcome_checkbox">
                                <ul>
                                    <li class="purple_inovate"><a href="#"><i class="flaticon-check-box"></i> We Innovate </a></li>
                                    <li class="blue_inovate"><a href="#"><i class="flaticon-check-box"></i> Licenced & Certified </a></li>
                                    <li class="green_inovate"><a href="#"><i class="flaticon-check-box"></i>Saving & Investments </a></li>
                                </ul>
                            </div>
                            <div class="about_btn index3_about_btn float_left">
                                <ul>
                                    <li>
                                        <a href="#">get more</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xl-6 col-md-12 col-lg-12 col-sm-12 col-12">
                    <div class="index3_about_img_wrapper">

                        <img src="images/shape2.png" alt="About" class="img-responsive">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- about us wrapper end -->
    <!--investment plan wrapper start -->
    <div class="investment_plans index2_investment_plans index3_investment_plans float_left">

        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                    <div class="sv_heading_wraper heading_wrapper_dark dark_heading index2_heading index2_heading_center index3_heading ">
                        <h4> our plans </h4>
                        <h3>our investment plans </h3>
                        <div class="line_shape line_shape2"></div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6 col-sm-6 col-12">
                    <div class="investment_box_wrapper index2_investment_box_Wraper index3_investment_box_Wraper float_left">
                        <img src="images/in1.png" alt="img">
                        <div class="investment_icon_circle">
                            <i class="flaticon-bar-chart"></i>
                        </div>
                        <div class="investment_border_wrapper"></div>
                        <div class="investment_content_wrapper">
                            <h1><a href="#">silver plan</a></h1>
                            <div class="line_shape line_shape2"></div>
                            <p>Up to 5% for 20 Hourly
                                <br> Compound Available
                                <br> Down to 5% for 20 Hourly
                                <br> Principal Return
                                <br> Up to 5% for 20 Hourly</p>
                        </div>
                        <div class="about_btn plans_btn index2_investment_btn">
                            <ul>
                                <li>
                                    <a href="#">read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6 col-sm-6 col-12">
                    <div class="investment_box_wrapper index2_investment_box_Wraper index3_investment_box_Wraper float_left">
                        <img src="images/in2.png" alt="img">
                        <div class="investment_icon_circle red_info_circle">
                            <i class="flaticon-money"></i>
                        </div>
                        <div class="investment_border_wrapper red_border_wrapper"></div>
                        <div class="investment_content_wrapper red_content_wrapper">
                            <h1><a href="#">Bronze Plan</a></h1>
                            <div class="line_shape line_shape2"></div>
                            <p>Up to 5% Daily for 5 Days
                                <br> Min deposit: $2020
                                <br> Max deposit: $101010
                                <br> Principal Return
                                <br> Compound Available</p>
                        </div>
                        <div class="about_btn plans_btn red_btn_plans index2_investment_btn">
                            <ul>
                                <li>
                                    <a href="#">read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6 col-sm-6 col-12">
                    <div class="investment_box_wrapper index2_investment_box_Wraper index3_investment_box_Wraper float_left">
                        <img src="images/in4.png" alt="img">
                        <div class="investment_icon_circle blue_icon_circle">
                            <i class="flaticon-gold"></i>
                        </div>
                        <div class="investment_border_wrapper blue_border_wrapper"></div>
                        <div class="investment_content_wrapper blue_content_wrapper">
                            <h1><a href="#">copper plan</a></h1>
                            <div class="line_shape line_shape2"></div>
                            <p>Up to 3% Hourly for 10 Hourly
                                <br> Min deposit: $300
                                <br> Max deposit: $3000
                                <br> Principal Not Return
                                <br> Compound Not Available</p>
                        </div>
                        <div class="about_btn plans_btn blue_btn_plans index2_investment_btn">
                            <ul>
                                <li>
                                    <a href="#">read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-md-6 col-lg-6 col-sm-6 col-12">
                    <div class="investment_box_wrapper index2_investment_box_Wraper index3_investment_box_Wraper float_left">
                        <img src="images/in3.png" alt="img">
                        <div class="investment_icon_circle green_info_circle">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="investment_border_wrapper green_border_wrapper"></div>
                        <div class="investment_content_wrapper green_content_wrapper">
                            <h1><a href="#">gold plan</a></h1>
                            <div class="line_shape line_shape2"></div>
                            <p>Up to 7% for 30 days
                                <br> Min deposit: $500
                                <br> Max deposit: $3000
                                <br> Principal Not Return
                                <br> Compound Available</p>
                        </div>
                        <div class="about_btn plans_btn green_plan_btn index2_investment_btn">
                            <ul>
                                <li>
                                    <a href="#">read more</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="btm_investment_wrapper float_left">
        <div class="investment_overlay"></div>
    </div>
    <!--investment plan wrapper end -->
    <!-- transaction wrapper start -->
    <div class="transaction_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="sv_heading_wraper heading_wrapper_dark dark_heading index2_heading index2_heading_center index3_heading ">
                        <h4>who we are</h4>
                        <h3>Our Latest Transaction</h3>
                        <div class="line_shape line_shape2"></div>

                    </div>
                    <div class="x_offer_tabs_wrapper index3_offer_tabs">
                        <ul class="nav nav-tabs">
                            <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home"> deposits</a>
                            </li>
                            <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#menu2">withdraw</a>
                            </li>

                        </ul>
                    </div>
                </div>
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="tab-content">
                        <div id="home" class="tab-pane active">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="table_next_race index3_table_race league_table overflow-scroll">
                                        <table>
                                            <tr>
                                                <th class="form_table_resp">name</th>
                                                <th>date</th>
                                                <th>amount</th>
                                                <th>currency</th>
                                                <th>deposit</th>

                                            </tr>
                                            <tr>

                                                <td><img src="images/mem1.png" alt="img"> <span>Olympia Ripple</span></td>

                                                <td>June 24,2019</td>
                                                <td>$6,00,000.00</td>
                                                <td>Dollar</td>
                                                <td>03 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="images/mem4.png" alt="img"> <span>Nancee Broom</span></td>

                                                <td>June 04,2019</td>
                                                <td>$16,00,000.00</td>
                                                <td>card</td>
                                                <td>22 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="images/mem1.png" alt="img"> <span>Broom Nancee</span></td>

                                                <td>June 24,2019</td>
                                                <td>$6,00,000.00</td>
                                                <td>bitcoin</td>
                                                <td>15 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="images/mem2.png" alt="img"> <span>Ripple Alison</span></td>

                                                <td>June 24,2019</td>
                                                <td>$06,00,000.00</td>
                                                <td>ripees</td>
                                                <td>05 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="images/mem3.png" alt="img"> <span>Olympia Ripple</span></td>

                                                <td>June 05,2019</td>
                                                <td>$45,00,000.00</td>
                                                <td>ETH</td>
                                                <td>13 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="images/mem4.png" alt="img"> <span>Alison Rittichier</span></td>

                                                <td>June 28,2019</td>
                                                <td>$77,00,000.00</td>
                                                <td>payonner</td>
                                                <td>05 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="images/mem5.png" alt="img"> <span>Olympia Ripple</span></td>

                                                <td>June 24,2019</td>
                                                <td>$11,00,000.00</td>
                                                <td>card</td>
                                                <td>23 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="images/mem6.png" alt="img"> <span>Emmett Stein </span></td>

                                                <td>June 21,2019</td>
                                                <td>$66,00,000.00</td>
                                                <td>paypal</td>
                                                <td>53 Minutes Ago</td>

                                            </tr>

                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <div class="row">
                                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="table_next_race index3_table_race league_table overflow-scroll">
                                        <table>
                                            <tr>
                                                <th class="form_table_resp">name</th>
                                                <th>date</th>
                                                <th>amount</th>
                                                <th>currency</th>
                                                <th>deposit</th>

                                            </tr>

                                            <tr>

                                                <td><img src="images/mem4.png" alt="img"> <span>Nancee Broom</span></td>

                                                <td>June 04,2019</td>
                                                <td>$16,00,000.00</td>
                                                <td>card</td>
                                                <td>22 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="images/mem1.png" alt="img"> <span>Olympia Ripple</span></td>

                                                <td>June 24,2019</td>
                                                <td>$6,00,000.00</td>
                                                <td>Dollar</td>
                                                <td>03 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="images/mem2.png" alt="img"> <span>Ripple Alison</span></td>

                                                <td>June 24,2019</td>
                                                <td>$06,00,000.00</td>
                                                <td>ripees</td>
                                                <td>05 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="images/mem6.png" alt="img"> <span>Emmett Stein
                                              </span></td>
                                                <td>June 21,2019</td>
                                                <td>$66,00,000.00</td>
                                                <td>paypal</td>
                                                <td>53 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="images/mem1.png" alt="img"> <span>Broom Nancee</span></td>

                                                <td>June 24,2019</td>
                                                <td>$6,00,000.00</td>
                                                <td>bitcoin</td>
                                                <td>15 Minutes Ago</td>

                                            </tr>

                                            <tr>

                                                <td><img src="images/mem4.png" alt="img"> <span>Alison Rittichier</span></td>

                                                <td>June 28,2019</td>
                                                <td>$77,00,000.00</td>
                                                <td>payonner</td>
                                                <td>05 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="images/mem3.png" alt="img"> <span>Olympia Ripple</span></td>

                                                <td>June 05,2019</td>
                                                <td>$45,00,000.00</td>
                                                <td>ETH</td>
                                                <td>13 Minutes Ago</td>

                                            </tr>
                                            <tr>

                                                <td><img src="images/mem5.png" alt="img"> <span>Olympia Ripple</span></td>

                                                <td>June 24,2019</td>
                                                <td>$11,00,000.00</td>
                                                <td>card</td>
                                                <td>23 Minutes Ago</td>

                                            </tr>

                                        </table>

                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- transaction wrapper start -->

    <!-- works wrapper start -->
    <div class="works_wrapper float_left">
        <div class="work_banner_wrapper">
            <img src="images/video_bg.jpg" alt="img">
        </div>
        <div class="howwork_banner_wrapper index2_homwork_banner_wrapper index3_banner_wrapper">
            <div class="vedio_link_wrapper">
                <a class="test-popup-link button" rel='external' href='https://www.youtube.com/embed/ryzOXAO0Ss0' title='title'><i class="fa fa-play"></i></a>
                <div class="work_content_wrap">
                    <h1>How It Works</h1>
                    <ul class="work_checklist_wrapper">
                        <li>
                            <a href="#"><i class="fas fa-dollar-sign"></i>get deposit</a>
                        </li>
                        <li><a href="#"><i class="far fa-money-bill-alt"></i> utilize money</a></li>
                        <li><a href="#"><i class="fas fa-plus"></i> give interest</a></li>
                    </ul>

                </div>
            </div>
        </div>
    </div>
    <!-- works wrapper end -->
    <!--calculator plan wrapper start -->
    <div class="calculator_wrapper index2_calculator_wrapper index3_calculator_wrapper float_left">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-12 col-sm-12 col-12">

                    <div class="sv_heading_wraper heading_wrapper_dark dark_heading index2_heading index2_heading_center index3_heading ">
                        <h4> plans calculator </h4>
                        <h3> How Much Can You Save With Plans? </h3>
                        <div class="line_shape line_shape2"></div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 calc">
                    <div class="calculator_portion index3_calc_portion float_left">
                        <div class="caluclator_text_wrapper">
                            <p>deposit amount : <i class="fas fa-info-circle"></i></p>
                            <p class="dollar_wrap"><i class="fa fa-rupee-sign"></i>
                                <input type="text" id="investmentAmount" />
                            </p>
                        </div>
                        <div class="caluclator_text_wrapper">
                            <p>monthly SIP : <i class="fas fa-info-circle"></i></p>
                            <p class="dollar_wrap"><i class="fa fa-rupee-sign"></i>
                                <input type="text" id="investmentAmountSIP" />
                            </p>
                        </div>

                        <div class="caluclator_text_wrapper">
                            <p>Investment Year : <i class="fas fa-info-circle"></i></p>
                            <select class="custom-select" id="investmentYears">
                                <option selected value="5">5 Years</option>
                                <option value="10">10 Years</option>
                                <option value="15">15 Years</option>
                                <option value="20">20 Years</option>
                                <option value="25">25 Years</option>
                            </select>
                        </div>

                        <div class="about_btn calc_btn index3_about_btn float_left" onclick="CalCommission(); return false;">
                            <ul>
                                <li>
                                    <a href="#">calculate profit</a>
                                </li>
                            </ul>
                        </div>

                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12 col-xs-12 calc">
                    <div class="mutualfunds-calculator">
                        <div class="calculator">
                            <div class="graph-area">
                                <span class="mf-yAxis">Investment Value</span>
                                <svg width="480" height="350" id="graph" xmlns="http://www.w3.org/2000/svg" version="1.1" viewBox="0 0 480 355" class="mf-chart">

                                    <defs>
                                        <pattern id="grid" x="10" y="10" width="480" height="88" patternUnits="userSpaceOnUse">
                                            <line x1="0" y1="0" x2="100%" y2="0" stroke-width="1" shape-rendering="crispEdges" stroke="#bdbdbd"></line>
                                        </pattern>
                                    </defs>
                                    <rect width="480" height="355" style="fill:transparent;"></rect>
                                    <g>
                                        <path d="M 5,330
            C 5,330
            300,257.5
            475,170" id="path1" fill="none" stroke="#bdbdbd" stroke-width="5px" stroke-linecap="round" class="anim-path" style="transition: stroke-dashoffset 2s ease-in-out; stroke-dasharray: 522.957, 522.957; stroke-dashoffset: 0px; display: inline;"></path>
                                        <path d="M 5,330
            C 5,330
            300,257.5
            475,20" fill="none" id="path2" stroke="#f46b45" stroke-width="5px" stroke-linecap="round" class="anim-path" style="transition: stroke-dashoffset 2s ease-in-out; stroke-dasharray: 572.872, 572.872; stroke-dashoffset: 0px; display: inline;"></path>
                                    </g>
                                    <g class="mf-circles" style="">
                                        <circle cx="472" cy="22" r="8" fill="#f46b45" stroke="#f9f9f7" stroke-width="3px"></circle>
                                        <circle cx="472" cy="170" r="8" fill="#bdbdbd" stroke="#f9f9f7" stroke-width="3px"></circle>
                                    </g>
                                </svg>
                                <div class="mf-xAxis">

                                    <span class="mf-xAxis-end" id="years_selected">25 Years</span>
                                </div>
                                <div class="labels funds_label" style="display: block;">
                                    <div class="chart-label">
                                        <span class="amt" id="directFund"><i class="fa fa-rupee-sign"></i>1.98 Cr</span>
                                        <span class="sub">total returns</span>
                                    </div>
                                    <div class="chart-label label-regular">
                                        <span class="amt" id="regularFund"><i class="fa fa-rupee-sign"></i>1.64 Cr</span>
                                        <span class="sub">investment amounts</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="calc-amt">
                        <p class="calc-price" id="returnAmount">Rs. 34.06 L</p>
                        <p>extra returns for you </p>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!--calculator plan wrapper end -->
    <!-- global community wrapper start -->
    <div class="global_community_wrapper index2_global_community_wrapper index3_global_community float_left">
        <div class="container">
            <div class="row">
                <div class="global_comm_wraper index2_global_comm_wrapper index3_global_comm_wrapper">
                    <h1>We Were Always Thinking Global Community</h1>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad minim veniam Quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
                </div>
                <div class="zero_balance_wrapper">
                    <div class="zero_commisition">
                        <h1>Zero
Commissions</h1>
                        <h4>No hidden charges*</h4>
                    </div>
                    <div class="start_invest_wrap">
                        <h1>start invest now</h1>
                        <div class="about_btn index3_about_btn float_left">
                            <ul>
                                <li>
                                    <a href="#">buy now !</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- global community wrapper end -->
    <!--our services wrapper start -->
    <div class="our_services_wrapper index2_our_service_wrapper float_left">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-12 col-sm-12 col-12">

                    <div class="sv_heading_wraper heading_wrapper_dark dark_heading index2_heading index2_heading_center index3_heading ">
                        <h4> services</h4>
                        <h3>our features</h3>
                        <div class="line_shape line_shape2"></div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                    <div class="investment_box_wrapper service_box feature_box index2_service_box index3_service_box float_left">
                        <div class="investment_icon_circle">
                            <i class="flaticon-medal"></i>
                        </div>
                        <div class="investment_border_wrapper"></div>
                        <div class="investment_content_wrapper">
                            <h1><a href="#">We're Certified</a></h1>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad minim veniam</p>
                            <span class="investment_index_icon index3_investment_index_icon"><a href="#"><i class="flaticon-arrow-pointing-to-right"></i></a></span>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                    <div class="investment_box_wrapper service_box feature_box index2_service_box index3_service_box float_left">
                        <div class="investment_icon_circle red_info_circle">
                            <i class="flaticon-shield"></i>
                        </div>
                        <div class="investment_border_wrapper red_border_wrapper"></div>
                        <div class="investment_content_wrapper red_content_wrapper">
                            <h1><a href="#">We're Secure</a></h1>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad minim veniam</p>
                            <span class="investment_index_icon index3_investment_index_icon"><a href="#"><i class="flaticon-arrow-pointing-to-right"></i></a></span>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                    <div class="investment_box_wrapper service_box feature_box index2_service_box index3_service_box float_left">
                        <div class="investment_icon_circle blue_icon_circle">
                            <i class="flaticon-bars"></i>
                        </div>
                        <div class="investment_border_wrapper blue_border_wrapper"></div>
                        <div class="investment_content_wrapper blue_content_wrapper">
                            <h1><a href="#">We're Profitable</a></h1>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad minim veniam</p>
                            <span class="investment_index_icon index3_investment_index_icon"><a href="#"><i class="flaticon-arrow-pointing-to-right"></i></a></span>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                    <div class="investment_box_wrapper service_box feature_box index2_service_box index3_service_box float_left">
                        <div class="investment_icon_circle green_info_circle">
                            <i class="flaticon-bitcoin"></i>
                        </div>
                        <div class="investment_border_wrapper green_border_wrapper"></div>
                        <div class="investment_content_wrapper green_content_wrapper">
                            <h1><a href="#">We Accept Crypto</a></h1>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad minim veniam</p>
                            <span class="investment_index_icon index3_investment_index_icon"><a href="#"><i class="flaticon-arrow-pointing-to-right"></i></a></span>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                    <div class="investment_box_wrapper service_box feature_box index2_service_box index3_service_box float_left">
                        <div class="investment_icon_circle pink_info_circle">
                            <i class="flaticon-headphones"></i>
                        </div>
                        <div class="investment_border_wrapper pink_border_wrapper"></div>
                        <div class="investment_content_wrapper pink_content_wrapper">
                            <h1><a href="#">best support</a></h1>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad minim veniam</p>
                            <span class="investment_index_icon index3_investment_index_icon"><a href="#"><i class="flaticon-arrow-pointing-to-right"></i></a></span>
                        </div>

                    </div>
                </div>
                <div class="col-md-6 col-lg-4 col-sm-6 col-12">
                    <div class="investment_box_wrapper service_box feature_box index2_service_box index3_service_box float_left">
                        <div class="investment_icon_circle yellow_info_circle">
                            <i class="flaticon-language"></i>
                        </div>
                        <div class="investment_border_wrapper yellow_border_wrapper"></div>
                        <div class="investment_content_wrapper yellow_content_wrapper">
                            <h1><a href="#">We're global</a></h1>

                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do Ut enim ad minim veniam</p>
                            <span class="investment_index_icon index3_investment_index_icon"><a href="#"><i class="flaticon-arrow-pointing-to-right"></i></a></span>
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--our services wrapper end -->

    <!-- testimonial wrapper start -->
    <div class="testimonial_wrapper float_left">
        <div class="investment_overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                    <div class="sv_heading_wraper heading_wrapper_dark index2_heading index2_heading_center index3_heading">
                        <h4>testimonial</h4>
                        <h3>what people says</h3>
                        <div class="line_shape line_shape2"></div>
                    </div>

                </div>
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="saying_slider index3_saying_slider">
                        <div class="owl-carousel owl-theme">
                            <div class="item">
                                <div class="saying_content_wrapper float_left">
                                    <div class="saying_img">
                                        <img src="images/cnt1.png" alt="img">
                                    </div>
                                    <div class="saying_img_name">
                                        <h1><a href="#">Iness Mcnzie</a></h1>
                                        <p>CEO of apple</p>
                                    </div>
                                    <p>“A wonderful serenity has taken possession of my entire soul was created for the bliss serenity”</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="saying_content_wrapper float_left">
                                    <div class="saying_img">
                                        <img src="images/cnt2.png" alt="img">
                                    </div>
                                    <div class="saying_img_name">
                                        <h1><a href="#">Druid Wenydale</a></h1>
                                        <p>CEO of apple</p>
                                    </div>
                                    <p>“The grammar of the result language is more simple and regular the the of the individual languages”</p>
                                </div>
                            </div>
                            <div class="item">
                                <div class="saying_content_wrapper float_left">
                                    <div class="saying_img">
                                        <img src="images/cnt.png" alt="img">
                                    </div>
                                    <div class="saying_img_name">
                                        <h1><a href="#">Casian vedere</a></h1>
                                        <p>CEO of apple</p>
                                    </div>
                                    <p>“A wonderful serenity has taken possession of my entire soul was created for the bliss serenity”</p>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- testimonial wrapper end -->
    <!-- investors wrapper start -->
    <div class="investors_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="sv_heading_wraper index2_heading index3_heading index3_headung2">
                        <h4>Tranding People</h4>
                        <h3>Our top investors</h3>
                        <div class="line_shape line_shape2"></div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12 sw_spectrm_padding">
                    <div class="investors_slider_wrapper index2_investors_slider_Wrapper index3_investors_slider">
                        <div class="owl-carousel owl-theme">
                            <div class="item">

                                <div class="inves_slider_cntn index2_inves_slider_cntnt index3_investment_box float_left">
                                    <div class="investment_box_wrapper index_investment float_left">

                                        <div class="inves_main_border float_left">
                                            <div class="inves_img_wrapper">
                                                <img src="images/team3.png" class="img-responsive" alt="img" />
                                            </div>
                                            <ul class="investment_slider_icon index3_investment_slider_icon">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google"></i></a></li>

                                            </ul>
                                            <div class="investment_content_wrapper inves_heading_txt">
                                                <h1><a href="#">akshay H.</a></h1>

                                                <p>$22500.00 USD</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">

                                <div class="inves_slider_cntn index2_inves_slider_cntnt index3_investment_box float_left">
                                    <div class="investment_box_wrapper index_investment float_left">

                                        <div class="inves_main_border float_left">
                                            <div class="inves_img_wrapper">
                                                <img src="images/team1.png" class="img-responsive" alt="img" />
                                            </div>
                                            <ul class="investment_slider_icon index3_investment_slider_icon">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google"></i></a></li>

                                            </ul>
                                            <div class="investment_content_wrapper inves_heading_txt">
                                                <h1><a href="#">maria F.</a></h1>

                                                <p>$22500.00 USD</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">

                                <div class="inves_slider_cntn index2_inves_slider_cntnt index3_investment_box float_left">
                                    <div class="investment_box_wrapper index_investment float_left">

                                        <div class="inves_main_border float_left">
                                            <div class="inves_img_wrapper">
                                                <img src="images/team2.png" class="img-responsive" alt="img" />
                                            </div>
                                            <ul class="investment_slider_icon index3_investment_slider_icon">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google"></i></a></li>

                                            </ul>
                                            <div class="investment_content_wrapper inves_heading_txt">
                                                <h1><a href="#">josep K.</a></h1>

                                                <p>$22500.00 USD</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">

                                <div class="inves_slider_cntn index2_inves_slider_cntnt index3_investment_box float_left">
                                    <div class="investment_box_wrapper index_investment float_left">

                                        <div class="inves_main_border float_left">
                                            <div class="inves_img_wrapper">
                                                <img src="images/team3.png" class="img-responsive" alt="img" />
                                            </div>
                                            <ul class="investment_slider_icon index3_investment_slider_icon">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google"></i></a></li>

                                            </ul>
                                            <div class="investment_content_wrapper inves_heading_txt">
                                                <h1><a href="#">liva M.</a></h1>

                                                <p>$22500.00 USD</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="item">

                                <div class="inves_slider_cntn index2_inves_slider_cntnt index3_investment_box float_left">
                                    <div class="investment_box_wrapper index_investment float_left">

                                        <div class="inves_main_border float_left">
                                            <div class="inves_img_wrapper">
                                                <img src="images/team4.png" class="img-responsive" alt="img" />
                                            </div>
                                            <ul class="investment_slider_icon index3_investment_slider_icon">
                                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                                <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                                                <li><a href="#"><i class="fab fa-google"></i></a></li>

                                            </ul>
                                            <div class="investment_content_wrapper inves_heading_txt">
                                                <h1><a href="#">akshay H.</a></h1>
                                              
                                                <p>$22500.00 USD</p>

                                            </div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- investors wrapper end -->
    <!-- newsletter wrapper start -->
    <div class="global_community_wrapper newsletter_wrapper index2_newsletter index3_newsletter float_left">
        <div class="container">
            <div class="row">
                <div class="global_comm_wraper news_cntnt">
                    <h1>Join Our Newsletter</h1>
                    <p>Put your investing ideas into action with full range of investments.</p>
                    <div class="save_newsletter_field">
                        <input type="text" placeholder="Enter Your Email">
                        <button type="submit">subscribe</button>
                    </div>
                </div>
                <div class="zero_balance_wrapper">
                    <div class="zero_commisition refreal_commison_section">
                        <h1>Refferal Commission</h1>
                        <p>Get On First Level Refferal Commission </p>
                        <div class="about_btn refreal_btn index3_about_btn float_left">
                            <h3>10%</h3>
                            <ul>
                                <li>
                                    <a href="#">get link</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <!-- newsletter  wrapper end -->
    <!--our blog wrapper start -->
    <div class="our_blog_wrapper float_left">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-12 col-sm-12 col-12">

                    <div class="sv_heading_wraper heading_wrapper_dark dark_heading index2_heading index2_heading_center index3_heading">
                        <h4> our blog</h4>
                        <h3>Our Latest News</h3>
                        <div class="line_shape line_shape2"></div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">

                    <div class="blog_box_wrapper index2_blog_wrapepr index3_blog_wrapper float_left">
                        <div class="blog_img_wrapper">
                            <img src="images/blog_img1.jpg" alt="blog_img">
                            <div class="blog_date_wrapper index2_blog_date index3_blog_date">
                                <p>15
                                    <br> <span>jun</span></p>
                            </div>
                        </div>
                        <div class="btc_blog_indx_cont_wrapper">

                            <h5> <a href="#">Aligning Resources.</a></h5>
                            <p>Design is an evolutionary process, and filler text is just one tool in progress your pushing arsenal</p>
                        </div>
                        <div class="btc_blog_indx_cont_bottom">
                            <div class="btc_blog_indx_cont_bottom_left">
                                <p><i class="fa fa-user"></i> &nbsp;<a href="#">by Akshay</a></p>
                            </div>
                            <div class="btc_blog_indx_cont_bottom_right">
                                <p class="comments"><i class="fa fa-comments"></i> &nbsp;<a href="#">04 comments</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">

                    <div class="blog_box_wrapper index2_blog_wrapepr index3_blog_wrapper float_left">
                        <div class="blog_img_wrapper">
                            <img src="images/blog_img2.jpg" alt="blog_img">
                            <div class="blog_date_wrapper index2_blog_date index3_blog_date">
                                <p>15
                                    <br> <span>jun</span></p>
                            </div>
                        </div>
                        <div class="btc_blog_indx_cont_wrapper">

                            <h5> <a href="#">filling critical data</a></h5>
                            <p>Design is an evolutionary process, and filler text is just one tool in progress your pushing arsenal</p>
                        </div>
                        <div class="btc_blog_indx_cont_bottom">
                            <div class="btc_blog_indx_cont_bottom_left">
                                <p><i class="fa fa-user"></i> &nbsp;<a href="#">by Akshay</a></p>
                            </div>
                            <div class="btc_blog_indx_cont_bottom_right">
                                <p class="comments"><i class="fa fa-comments"></i> &nbsp;<a href="#">04 comments</a></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12">

                    <div class="blog_box_wrapper index2_blog_wrapepr index3_blog_wrapper float_left">
                        <div class="blog_img_wrapper">
                            <img src="images/blog_img3.jpg" alt="blog_img">
                            <div class="blog_date_wrapper index2_blog_date index3_blog_date">
                                <p>15
                                    <br> <span>jun</span></p>
                            </div>
                        </div>
                        <div class="btc_blog_indx_cont_wrapper">

                            <h5> <a href="#">getting started</a></h5>
                            <p>Design is an evolutionary process, and filler text is just one tool in progress your pushing arsenal</p>
                        </div>
                        <div class="btc_blog_indx_cont_bottom">
                            <div class="btc_blog_indx_cont_bottom_left">
                                <p><i class="fa fa-user"></i> &nbsp;<a href="#">by Akshay</a></p>
                            </div>
                            <div class="btc_blog_indx_cont_bottom_right">
                                <p class="comments"><i class="fa fa-comments"></i> &nbsp;<a href="#">04 comments</a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--our blog wrapper end -->
    <!-- FAQ wrapper start -->
    <div class="faq_wrapper float_left">
        <div class="investment_overlay faq_overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-lg-12 col-sm-12 col-12">

                    <div class="sv_heading_wraper heading_wrapper_dark index2_heading index2_heading_center index3_heading">
                        <h4>FAQ section</h4>
                        <h3>Frequently Asked Questions</h3>
                        <div class="line_shape line_shape2"></div>
                    </div>
                </div>
            </div>
            <div id="accordion" role="tablist">
                <div class="row">
                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">

                        <div class="card index3_card">

                            <!-- Card Title -->
                            <div class="card_pagee" role="tab" id="headingOne">
                                <h5 class="h5-md">
								       		<a data-toggle="collapse" href="#collapseOne" role="button" aria-expanded="true" aria-controls="collapseOne">
								         		How can i get help by inbound marketing?
								        	</a>
								    	 </h5>
                            </div>

                            <!-- Card Content -->
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel us a odio tincidunt an auctor. Proi gravida nibh vel elit ctor. This is Photoshop's version of Lorem m. Proin vida nibh vel velit auctor. Nam nec aks tel us a odio tincidunt auctor. velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card index3_card">

                            <div class="card_pagee" role="tab" id="headingTwo">
                                <h5 class="h5-md">
								       	    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
								          		What about loan programs?
								        	</a>
								     	 </h5>
                            </div>

                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel us a odio tincidunt an auctor. Proi gravida nibh vel elit ctor. This is Photoshop's version of Lorem m. Proin vida nibh vel velit auctor. Nam nec aks tel us a odio tincidunt auctor. velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card index3_card">

                            <div class="card_pagee" role="tab" id="headingThree">
                                <h5 class="h5-md">
								        	<a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
								         		Our Happy Clients
								        	</a>
								     	 </h5>
                            </div>

                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel us a odio tincidunt an auctor. Proi gravida nibh vel elit ctor. This is Photoshop's version of Lorem m. Proin vida nibh vel velit auctor. Nam nec aks tel us a odio tincidunt auctor. velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card index3_card">

                            <div class="card_pagee" role="tab" id="heading4">
                                <h5 class="h5-md">
								        	<a class="collapsed" data-toggle="collapse" href="#collapse41" role="button" aria-expanded="false" aria-controls="collapse41">
								         		Get Training From Experts
								        	</a>
								     	 </h5>
                            </div>

                            <div id="collapse41" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordion">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel us a odio tincidunt an auctor. Proi gravida nibh vel elit ctor. This is Photoshop's version of Lorem m. Proin vida nibh vel velit auctor. Nam nec aks tel us a odio tincidunt auctor. velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card index3_card">

                            <div class="card_pagee" role="tab" id="heading7">
                                <h5 class="h5-md">
								        	<a class="collapsed" data-toggle="collapse" href="#collapseT" role="button" aria-expanded="false" aria-controls="collapseT">
								         		User Guide: Getting Started
								        	</a>
								     	 </h5>
                            </div>

                            <div id="collapseT" class="collapse" role="tabpanel" aria-labelledby="heading7" data-parent="#accordion">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel us a odio tincidunt an auctor. Proi gravida nibh vel elit ctor. This is Photoshop's version of Lorem m. Proin vida nibh vel velit auctor. Nam nec aks tel us a odio tincidunt auctor. velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-6 col-md-12 col-sm-12 col-12">

                        <div class="card index3_card">

                            <!-- Card Title -->
                            <div class="card_pagee" role="tab" id="headingfour">
                                <h5 class="h5-md">
								       		 <a class="collapsed" data-toggle="collapse" href="#collapse1" role="button" aria-expanded="false" aria-controls="collapse1">
								         		What about loan programs?
								        	</a>
								    	 </h5>
                            </div>

                            <!-- Card Content -->
                            <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="headingfour" data-parent="#accordion" style="">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel us a odio tincidunt an auctor. Proi gravida nibh vel elit ctor. This is Photoshop's version of Lorem m. Proin vida nibh vel velit auctor. Nam nec aks tel us a odio tincidunt auctor. velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card index3_card">

                            <div class="card_pagee" role="tab" id="headingfive">
                                <h5 class="h5-md">
								       	    <a class="collapsed" data-toggle="collapse" href="#collapse2" role="button" aria-expanded="false" aria-controls="collapse2">
								          	Unlimited Features & Unique Layouts
								        	</a>
								     	 </h5>
                            </div>

                            <div id="collapse2" class="collapse" role="tabpanel" aria-labelledby="headingfive" data-parent="#accordion" style="">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel us a odio tincidunt an auctor. Proi gravida nibh vel elit ctor. This is Photoshop's version of Lorem m. Proin vida nibh vel velit auctor. Nam nec aks tel us a odio tincidunt auctor. velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card index3_card">

                            <div class="card_pagee" role="tab" id="headingfive1">
                                <h5 class="h5-md">
								       	    <a class="collapsed" data-toggle="collapse" href="#collapse2u" role="button" aria-expanded="false" aria-controls="collapse2u">
								          	Unlimited Features & Unique Layouts
								        	</a>
								     	 </h5>
                            </div>

                            <div id="collapse2u" class="collapse" role="tabpanel" aria-labelledby="headingfive1" data-parent="#accordion" style="">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel us a odio tincidunt an auctor. Proi gravida nibh vel elit ctor. This is Photoshop's version of Lorem m. Proin vida nibh vel velit auctor. Nam nec aks tel us a odio tincidunt auctor. velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card index3_card">

                            <div class="card_pagee" role="tab" id="headingnine">
                                <h5 class="h5-md">
								       	    <a class="collapsed" data-toggle="collapse" href="#collapse02" role="button" aria-expanded="false" aria-controls="collapse02">
								          Clean and Unique
								        	</a>
								     	 </h5>
                            </div>

                            <div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="headingnine" data-parent="#accordion" style="">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel us a odio tincidunt an auctor. Proi gravida nibh vel elit ctor. This is Photoshop's version of Lorem m. Proin vida nibh vel velit auctor. Nam nec aks tel us a odio tincidunt auctor. velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card index3_card">

                            <div class="card_pagee" role="tab" id="headingten">
                                <h5 class="h5-md">
								       	    <a class="collapsed" data-toggle="collapse" href="#collapse092" role="button" aria-expanded="false" aria-controls="collapse092">
								        Deeply Customisable Theme
								        	</a>
								     	 </h5>
                            </div>

                            <div id="collapse092" class="collapse" role="tabpanel" aria-labelledby="headingten" data-parent="#accordion" style="">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel us a odio tincidunt an auctor. Proi gravida nibh vel elit ctor. This is Photoshop's version of Lorem m. Proin vida nibh vel velit auctor. Nam nec aks tel us a odio tincidunt auctor. velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card index3_card">

                            <div class="card_pagee" role="tab" id="headingsiz">
                                <h5 class="h5-md">
								        	<a class="collapsed" data-toggle="collapse" href="#collapse3" role="button" aria-expanded="false" aria-controls="collapse3">
								         		How do I use the features ?
								        	</a>
								     	 </h5>
                            </div>

                            <div id="collapse3" class="collapse" role="tabpanel" aria-labelledby="headingsiz" data-parent="#accordion">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel us a odio tincidunt an auctor. Proi gravida nibh vel elit ctor. This is Photoshop's version of Lorem m. Proin vida nibh vel velit auctor. Nam nec aks tel us a odio tincidunt auctor. velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card index3_card">

                            <div class="card_pagee" role="tab" id="headingseven">
                                <h5 class="h5-md">
								        	<a class="collapsed" data-toggle="collapse" href="#collapse31" role="button" aria-expanded="false" aria-controls="collapse31">
								         	Pixel perfect and responsive
								        	</a>
								     	 </h5>
                            </div>

                            <div id="collapse31" class="collapse" role="tabpanel" aria-labelledby="headingseven" data-parent="#accordion">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel us a odio tincidunt an auctor. Proi gravida nibh vel elit ctor. This is Photoshop's version of Lorem m. Proin vida nibh vel velit auctor. Nam nec aks tel us a odio tincidunt auctor. velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card index3_card">

                            <div class="card_pagee" role="tab" id="headingeight">
                                <h5 class="h5-md">
								        	<a class="collapsed" data-toggle="collapse" href="#collapse32" role="button" aria-expanded="false" aria-controls="collapse32">
								         		Imagination Is The Beginning
								        	</a>
								     	 </h5>
                            </div>

                            <div id="collapse32" class="collapse" role="tabpanel" aria-labelledby="headingeight" data-parent="#accordion">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>Morbi accumsan ipsum velit. Nam nec aks tel us a odio tincidunt an auctor. Proi gravida nibh vel elit ctor. This is Photoshop's version of Lorem m. Proin vida nibh vel velit auctor. Nam nec aks tel us a odio tincidunt auctor. velit auctor.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12 col-md-12">
                <div class="about_btn calc_btn faqq_btn index3_about_btn  float_left">
                    <ul>
                        <li>
                            <a href="#" data-toggle="modal" data-target="#myModal">ask questions ?</a>
                        </li>
                    </ul>
                </div>
                <div class="modal fade question_modal index3_question_modal" id="myModal" role="dialog">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-12">
                                    <div class="sv_question_pop float_left">
                                        <h1>ask questions ? </h1>
                                        <div class="search_alert_box float_left">

                                            <div class="apply_job_form">

                                                <input type="text" name="full_name" placeholder="full name">
                                            </div>
                                            <div class="apply_job_form">

                                                <input type="text" name="Email" placeholder="Enter Your Email">
                                            </div>
                                            <div class="apply_job_form">

                                                <input type="text" name="subject" placeholder="your question">
                                            </div>
                                            <div class="apply_job_form">
                                                <textarea class="form-control" name="message" placeholder="Message"></textarea>
                                            </div>
                                        </div>
                                        <div class="question_sec float_left">
                                            <div class="about_btn calc_btn faqq_btn index3_about_btn  ques_Btn">
                                                <ul>
                                                    <li>
                                                        <a href="#">apply now</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="cancel_wrapper">
                                                <a href="#" class="" data-dismiss="modal">cancel</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- FAQ wrapper end -->
    <!-- payments wrapper start -->
    <div class="payments_wrapper float_left">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12">

                    <div class="sv_heading_wraper index2_heading index3_heading index3_headung2">
                        <h4>Payment Methods</h4>
                        <h3>Accepted Payment Method</h3>
                        <div class="line_shape line_shape2"></div>
                    </div>
                </div>
                <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                    <div class="payment_slider_wrapper index3_payment_slider_wrapper">
                        <div class="owl-carousel owl-theme">
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="images/partner1.png" class="img-responsive" alt="img">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="images/partner2.png" class="img-responsive" alt="img">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="images/partner3.png" class="img-responsive" alt="img">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="images/partner4.png" class="img-responsive" alt="img">
                                </div>

                            </div>
                            <div class="item">

                                <div class="partner_img_wrapper float_left">
                                    <img src="images/partner2.png" class="img-responsive" alt="img">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- payments wrapper end -->
    <?php

include('../incs-marketing/footer.php');

?>