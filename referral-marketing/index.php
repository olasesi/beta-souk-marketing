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

                                        <h2 data-animation="animated bounceInUp">It's time to make sales</h2>

                                        <h3 data-animation="animated bounceInUp">CREATE, PROMOTE, <br>
                                       <span> START SELLING!!
</span></h3>

                                        <h6 data-animation="animated bounceInUp">Utilizing digital platforms for businesses to promote their products and services, create a great first impression and generate more sales.
</h6>

                                        <div class="slider_btn index2_sliderbtn index3_sliderbtn float_left">
                                            <ul>
                                                <li data-animation="animated bounceInLeft">
                                                    <a href="buy.php">Get started</a>
                                                </li>
                                                <li data-animation="animated bounceInLeft">
                                                    <a href="login-buy.php">Login</a>
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
    <div class="about_us_wrapper index2_about_us_wrapper index3_about_us float_left" id="about">
        <div class="container">
            <div class="row">

                <div class="col-xl-6 col-md-12 col-lg-12 col-sm-12 col-12">
                    <div class="about_content_wrapper">
                        <div class="sv_heading_wraper index2_heading index3_heading index3_headung2">
                            <h4>who we are</h4>
                            <h3>Welcome to Betasouk</h3>
                            <div class="line_shape line_shape2"></div>
                        </div>
                        <div class="welcone_savehiyp float_left">
                            <p>Beta souk provides a ready made e-commerce website for business owners to expand their market base and make more sales. 
 </p>
                            <p>The aim is to give business owners an edge by offering them a digital solution platform with the use of social media marketing and a user friendly website. Customers have the opportunity to patronize your business while you make more profits on sales. </p>
                            <div class="welcome_save_inpvate_wrapper index3_welcome_checkbox">
                                <ul>
                                    <li class="purple_inovate"><a><i class="flaticon-check-box"></i> Create </a></li>
                                    <li class="blue_inovate"><a><i class="flaticon-check-box"></i> Promote </a></li>
                                    <li class="green_inovate"><a ><i class="flaticon-check-box"></i>Sell </a></li>
                                </ul>
                            </div>
                            <div class="about_btn index3_about_btn float_left">
                                <ul>
                                    <li>
                                        <a href="buy.php">Get started</a>
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
    <div class="investment_plans index2_investment_plans index3_investment_plans float_left" id="package">

        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                    <div class="sv_heading_wraper heading_wrapper_dark dark_heading index2_heading index2_heading_center index3_heading ">
                        <h4> our plans </h4>
                        <h3>Our Packages </h3>
                        <div class="line_shape line_shape2"></div>
                    </div>
                </div>
               
                <div class="col-xl-4 col-md-4 col-lg-4 col-sm-12 col-12">
                    <div class="investment_box_wrapper index2_investment_box_Wraper index3_investment_box_Wraper float_left">
                        <img src="images/in2.png" alt="img">
                        <div class="investment_icon_circle red_info_circle">
                            <i class="flaticon-money"></i>
                        </div>
                        <div class="investment_border_wrapper red_border_wrapper"></div>
                        <div class="investment_content_wrapper red_content_wrapper">
                            <h1><a>Basic (&#8358;60,000)</a></h1>
                            <div class="line_shape line_shape2"></div>
                            <p>Admin page (to control your shop yourself)  
                                <br> Add to cart features
                                <br> Payment gateway |  Shop page
                                 <br>Product description page
                                <br>Create Discount Price for your products
                                <br> Deal of the day | Slider banner
                                <br> Product categories creation
                                <br>Cross sells / ups  
                               <br> Whatsapp chat with customers  
                                <br> Automatic Product share to social media
                                <br> Analytics of Customers/Visitor 
                                                            
                            </p>
                        </div>
                        <!-- <div class="about_btn plans_btn red_btn_plans index2_investment_btn">
                            <ul>
                                <li>
                                    <a href="#">read more</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-lg-4 col-sm-12 col-12">
                    <div class="investment_box_wrapper index2_investment_box_Wraper index3_investment_box_Wraper float_left">
                        <img src="images/in4.png" alt="img">
                        <div class="investment_icon_circle blue_icon_circle">
                            <i class="flaticon-gold"></i>
                        </div>
                        <div class="investment_border_wrapper blue_border_wrapper"></div>
                        <div class="investment_content_wrapper blue_content_wrapper">
                            <h1><a href="#">Essential (&#8358;150,000)</a></h1>
                            <div class="line_shape line_shape2"></div>
                            <p><h4><b>(Basic + essential)</b></h4>
                                <br> Custom email
                                <br> Sub – categories
                                <br> Logistics / delivery
                                <br> Top banner for promo</p>
                        </div>
                        <!-- <div class="about_btn plans_btn blue_btn_plans index2_investment_btn">
                            <ul>
                                <li>
                                    <a href="#">read more</a>
                                </li>
                            </ul>
                        </div> -->
                    </div>
                </div>
                <div class="col-xl-4 col-md-4 col-lg-4 col-sm-12 col-12">
                    <div class="investment_box_wrapper index2_investment_box_Wraper index3_investment_box_Wraper float_left">
                        <img src="images/in3.png" alt="img">
                        <div class="investment_icon_circle green_info_circle">
                            <i class="fas fa-calendar-alt"></i>
                        </div>
                        <div class="investment_border_wrapper green_border_wrapper"></div>
                        <div class="investment_content_wrapper green_content_wrapper">
                            <h1><a href="#">Premium (&#8358;300,000)</a></h1>
                            <div class="line_shape line_shape2"></div>
                            <p><h4><b>(Essential + premium)</b></h4>
                                <br> Wishlist
                                <br> Newsletter
                                <br> Product review
                                <br> Promo / coupon
                                <br> Compare products
                                <br> Inventory
                                <br> Customers data
                                <br> Referral system
                            
                            
                            
                            </p>
                        </div>
                        <!-- <div class="about_btn plans_btn green_plan_btn index2_investment_btn">
                            <ul>
                                <li>
                                    <a href="#">read more</a>
                                </li>
                            </ul>
                        </div> -->
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
                   

                </div>
            </div>
        </div>
    </div>
    <!-- works wrapper end -->
    <!--calculator plan wrapper start -->
    <div class="calculator_wrapper index2_calculator_wrapper index3_calculator_wrapper float_left" id="affiliate">
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-12 col-sm-12 col-12">

                    <div class="sv_heading_wraper heading_wrapper_dark dark_heading index2_heading index2_heading_center index3_heading ">
                        <h4> You can also make money by </h4>
                        <h3> Become an affiliate </h3>
                        <div class="line_shape line_shape2"></div>

                    </div>
                </div>
                <div class="col-lg-4 col-md-12 col-sm-12 col-12 calc">
                    <div class="calculator_portion index3_calc_portion float_left">
                        <div class="caluclator_text_wrapper">
                            <p>Total cash earned : <i class="fas fa-info-circle"></i></p>
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
                    <h1>BECOME AN AFFILIATE, EARN ON THE GO
</h1>
                    <p>Make extra cash on every product package !

</p>
<p>
Register | Get a personalized unique link | Earn on every sale</p>



                </div>
                <div class="zero_balance_wrapper">
                    <div class="zero_commisition">
                        <h1>8.5% COMMISSION</h1>
                        <h4>No hidden charges*</h4>
                    </div>
                    <div class="start_invest_wrap">
                        <h1>start now</h1>
                        <div class="about_btn index3_about_btn float_left">
                            <ul>
                                <li>
                                    <a href="register.php">Affilliate register</a>
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
                        <h3>Features</h3>
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
                            <h1><a href="#">EASY SET UP</a></h1>

                            <p>Structured with an installation programme and templates which aids web creation and upload of contents on web pages created within 24 hours max.
</p>
                            <!-- <span class="investment_index_icon index3_investment_index_icon"><a href="#"><i class="flaticon-arrow-pointing-to-right"></i></a></span> -->
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
                            <h1><a href="#">USER FRIENDLY</a></h1>

                            <p>Boost sales with a seamless user experience for visitors, prospects and customers through an improved web performance. 
</p>
                            <!-- <span class="investment_index_icon index3_investment_index_icon"><a href="#"><i class="flaticon-arrow-pointing-to-right"></i></a></span> -->
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
                            <h1><a href="#">PAYMENT INTEGRATION</a></h1>

                            <p>Provision of an Integrated payment gateway that allows receival of payments from prospects and clients on every sale
</p>
                            <!-- <span class="investment_index_icon index3_investment_index_icon"><a href="#"><i class="flaticon-arrow-pointing-to-right"></i></a></span> -->
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
                            <h1><a href="#">CUSTOM EMAIL</a></h1>

                            <p>Strengthen  businesses with web address and emails that keeps brands and businesses coordinated and coherent across all platforms 
</p>
                            <!-- <span class="investment_index_icon index3_investment_index_icon"><a href="#"><i class="flaticon-arrow-pointing-to-right"></i></a></span> -->
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
                            <h1><a href="#">PROMOTIONAL ADS</a></h1>

                            <p>Display products and services by creating customer awareness with web promotional ads across media platforms to generate more sales. 
</p>
                            <!-- <span class="investment_index_icon index3_investment_index_icon"><a href="#"><i class="flaticon-arrow-pointing-to-right"></i></a></span> -->
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
                            <h1><a href="#">DIRECT CONTACT / NOTIFICATIONS
</a></h1>

                            <p>Enabled customer reach via whatsapp link and notifications on every sale made. Business owners can stay in touch with prospects and clients to enhance swift buying and selling.
</p>
                            <!-- <span class="investment_index_icon index3_investment_index_icon"><a href="#"><i class="flaticon-arrow-pointing-to-right"></i></a></span> -->
                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--our services wrapper end -->

    <!-- testimonial wrapper start -->
    <!-- <div class="testimonial_wrapper float_left">
        <div class="investment_overlay"></div>
        <div class="container">
            <div class="row">

                <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                    <div class="sv_heading_wraper heading_wrapper_dark index2_heading index2_heading_center index3_heading">
                        <h4></h4>
                        <h3></h3>
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
    </div> -->
    <!-- testimonial wrapper end -->
    <!-- investors wrapper start -->
  
    <!-- investors wrapper end -->
    <!-- newsletter wrapper start -->
    <div class="global_community_wrapper newsletter_wrapper index2_newsletter index3_newsletter float_left">
        <div class="container">
            <div class="row">
                <div class="global_comm_wraper news_cntnt">
                    <h1>Join Our Newsletter</h1>
                    <p>Give your business the credibility it deserves….</p>
                    <div class="save_newsletter_field">
                        <input type="text" placeholder="Enter Your Email">
                        <button type="submit">subscribe</button>
                    </div>
                </div>
                <div class="zero_balance_wrapper">
                    <div class="zero_commisition refreal_commison_section">
                        <h1>REFERRAL COMMISSION</h1>
                        <p></p>
                        <div class="about_btn refreal_btn index3_about_btn float_left">
                            <h3>8.5%</h3>
                            <ul>
                                <li>
                                    <a href="register.php">Affilliate Register</a>
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
                                    <br> <span>Feb</span></p>
                            </div>
                        </div>
                        <div class="btc_blog_indx_cont_wrapper">

                            <h5> <a href="#">USING E-COMMERCE TO CREATE A SUCCESSFUL BUSINESS
</a></h5>
                            <p>Get the latest industry trends, research, and insight across digital media. Utilize all platforms to engage and transact your customers.</p>
                        </div>
                        <div class="btc_blog_indx_cont_bottom">
                            <div class="btc_blog_indx_cont_bottom_left">
                                <p><i class="fa fa-user"></i> &nbsp;<a href="#">by Viola</a></p>
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
                                    <br> <span>Feb</span></p>
                            </div>
                        </div>
                        <div class="btc_blog_indx_cont_wrapper">

                            <h5> <a href="#">E-COMMERCE: YOUR WAY TO SUCCESS
</a></h5>
                            <p>A guide to making your business stand out in the digital market. 

</p>
                        </div>
                        <div class="btc_blog_indx_cont_bottom">
                            <div class="btc_blog_indx_cont_bottom_left">
                                <p><i class="fa fa-user"></i> &nbsp;<a href="#">by Viola</a></p>
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
                                    <br> <span>Feb</span></p>
                            </div>
                        </div>
                        <div class="btc_blog_indx_cont_wrapper">

                            <h5> <a href="#">A GUIDE TO BRANDING AND DIGITAL MARKETING
</a></h5>
                            <p>The perfect resources for beginners to advance digitally to learn new skills or develop existing ones.
</p>
                        </div>
                        <div class="btc_blog_indx_cont_bottom">
                            <div class="btc_blog_indx_cont_bottom_left">
                                <p><i class="fa fa-user"></i> &nbsp;<a href="#">by Pelumi</a></p>
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
    <div class="faq_wrapper float_left" id="faq">
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
                                               How do I get the website?

								        	</a>
								    	 </h5>
                            </div>

                            <!-- Card Content -->
                            <div id="collapseOne" class="collapse show" role="tabpanel" aria-labelledby="headingOne" data-parent="#accordion" style="">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>Just click the "Get started" button and enter your details. You will be contacted as soon has possible on a successful payment. Then we will begin setting up your website.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card index3_card">

                            <div class="card_pagee" role="tab" id="headingTwo">
                                <h5 class="h5-md">
								       	    <a class="collapsed" data-toggle="collapse" href="#collapseTwo" role="button" aria-expanded="false" aria-controls="collapseTwo">
                                               How do I know which package is best for my business?
								        	</a>
								     	 </h5>
                            </div>

                            <div id="collapseTwo" class="collapse" role="tabpanel" aria-labelledby="headingTwo" data-parent="#accordion" style="">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>The Basic package is for small scale business owners. The essential for medium scale business and the premuim is for large scale business owner.</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card index3_card">

                            <div class="card_pagee" role="tab" id="headingThree">
                                <h5 class="h5-md">
								        	<a class="collapsed" data-toggle="collapse" href="#collapseThree" role="button" aria-expanded="false" aria-controls="collapseThree">
                                            How long will it take to set one up?
								        	</a>
								     	 </h5>
                            </div>

                            <div id="collapseThree" class="collapse" role="tabpanel" aria-labelledby="headingThree" data-parent="#accordion">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>In 24 to 28 hours, you will get your website?</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card index3_card">

                            <div class="card_pagee" role="tab" id="heading4">
                                <h5 class="h5-md">
								        	<a class="collapsed" data-toggle="collapse" href="#collapse41" role="button" aria-expanded="false" aria-controls="collapse41">
								         		How do I become and affilliate?
								        	</a>
								     	 </h5>
                            </div>

                            <div id="collapse41" class="collapse" role="tabpanel" aria-labelledby="heading4" data-parent="#accordion">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>Click the "Affilliate Register" and fill up the form</p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="card index3_card">

                            <div class="card_pagee" role="tab" id="heading7">
                                <h5 class="h5-md">
								        	<a class="collapsed" data-toggle="collapse" href="#collapseT" role="button" aria-expanded="false" aria-controls="collapseT">
								         		How much to become an affilliate?
								        	</a>
								     	 </h5>
                            </div>

                            <div id="collapseT" class="collapse" role="tabpanel" aria-labelledby="heading7" data-parent="#accordion">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>To become an affilliate is FREE OF CHARGE.</p>
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
								         		How will I earn if I refer someone and the person pays?
								        	</a>
								    	 </h5>
                            </div>

                            <!-- Card Content -->
                            <div id="collapse1" class="collapse" role="tabpanel" aria-labelledby="headingfour" data-parent="#accordion" style="">
                                <div class="card-body">

                                    <div class="card_cntnt">
                                        <p>You will earn 8.5% of the price of the package the person bought</p>
                                    </div>
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