<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home: MyTax</title>

    <link rel="shortcut icon" href="images/fav.png" sizes="25x25">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="fonts/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins:400,500,600" rel="stylesheet">
    
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">-->
    
    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <link rel="stylesheet" href="css/slick.css">
    
</head>

<body>
    
    <!--header start here-->
    
    <?php
include_once("include/config.php");
?>
<header>

        <?php
		include_once("top_header.php");
		?>
<?php
	$query = mysql_query("select * from tb_state_refund where delete_status='False'");
	$result = mysql_fetch_array($query);
	
	?>

        <div class="header-bottom">

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="home.php"><img style="margin-top:-21px;" src="images/mytax-logo.png" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-md-9">


                        <div id="<?php echo $result['id3'];?>">
                            <nav>
                                <?php
								include_once("menu_bar.php");
								?>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

            <div class="header-content-main">
                <div class="vertical">
                    <!--<img src="images/header-side-line.png" class="img-fluid" alt="">
                    <h6>Makemytaxes.com</h6>-->
                </div>
				
                <div class="container">
                    <div class="header-content">
                        <div class="row">
                            <div class="col-md-8">
                                <p style="font-size:35px;color:#ac1f25;">Get your taxes done by actual person, NOT Software</p>
                                <p style="font-size:16px;color:#1c91d0;">Online Tax Preparation Services for Individual and Business and Tax advice</p>
								
                            </div>
							
                            
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </header>
    <!--header end here-->
	<?php
	$query = mysql_query("select * from tb_state_refund where delete_status='False'");
	$result = mysql_fetch_array($query);
	
	?>
    <!--boxes start here-->
    
    <section class="boxes">
        <div class="container">
            <div class="header-boxes-main">
                <div class="<?php echo $result['id1'];?>">
                    <div class="col-md-6 col-xl-3 col-lg-6 col-sm-6">
                        <div class="header-box-inner-main">
                            <div class="header-box-inner-content">
                                <img src="images/header-box-1.png" class="img-fluid box" alt="">
                                <h2>Online Tax Filing Service-<span style="font-size:20px;">Individual</span></h2>
                                <p>You get one-on-one guidance that helps manage risk and improve performance and reaps the benefit later.</p>

                                <a href="individual_mytax.php">Get Started<i class="fa fa-angle-right"></i></a>

                            </div>
                        </div>
                    </div>
     
    <!--send_query.php?fre_fedral=Name your Price"-->
                    <div class="col-md-6 col-xl-3 col-lg-6 col-sm-6">
                        <div class="header-box-inner-main">
                            <div class="header-box-inner-content">
                                <img src="images/header-box-2.png" class="img-fluid box" alt="">
                                <h2>Online Tax Filing Service-Business</h2>
                                <p>Now you can take care of your company taxes from your office without worrying about running to CPA office everytime.</p>
                                <a href="business_mytax.php">Get Started<i class="fa fa-angle-right"></i></a>

                            </div>
                        </div>
                    </div>
                    
                    
                    <div class="col-md-6 col-xl-3 col-lg-6 col-sm-6">
                        <div class="header-box-inner-main">
                            <div class="header-box-inner-content">
                                <img src="images/images4.jpg" class="img-fluid box" alt="">
                                <h2>IRS and State Representation</h2>
                                <p><span style="font-size:15px;">We can help you in representing you for an IRS or State Tax audit and also help in Offer in Compromise settlement with the IRS.</p>

                                <a href="irs_support.php">Get Started<i class="fa fa-angle-right"></i></a>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-6 col-xl-3 col-lg-6 col-sm-6">
                        <div class="header-box-inner-main">
                            <div class="header-box-inner-content">
                                <img style="height:75px;width:72px;" src="images/download (1).png" class="img-fluid box" alt="">
                                <h2>Tax Advice </h2>
                                <p>MyTax offers Tax advice from experienced tax professionals through email as well as phone. You don't have to file your taxes by yourself as we will guide through our phone.</p>
                                <a href="tax_advice.php">Get Started<i class="fa fa-angle-right"></i></a>

                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </section>
    <!--boxes end here-->
    <!--welcome start here-->
<div style="margin-top:47px;">
<ul style="list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #0476bd;">
  <li style="align: center;"><a style="display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;" class="active"><span style="font-size:24px;font-weight: bold;">Online Tax Filing Service-Individual</span></a>
	
	
	</li>
  
</ul>
</div>
    <section id="federal" class="welcome">
        <div class="<?php echo $result['id2'];?>">
            
			<div class="col-md-6 col-xl-5 col-lg-6 col-sm-6">
                <div class="welcome-left-main">
                    <img style="height:490px;" src="images/iStock_000008233795Medium-man3.jpg" class="welcome-bg img-fluid" alt="">
                    <!--<img src="images/laptop.png" class="lap img-fluid" alt="">-->

                </div>
            </div>

            <!--<div class="col-md-6">
                <div class="welcome-right-main">
                    <div class="welcom-right">
                        <!--<img src="images/welcome-line.png" class="lines" alt="">-->
                        <!--<h2>Welcome <br>Make My Taxes</h2>
                        <h6>Take help over the phone or online to assist in helping self prepared software tax returns for a flat fee </h6>
                        <p>MakeMyTaxes services are on your side, you won't need to worry about how tax preparation software works and whether or not it is reliable. Makemytax reduces time, cost and guesswork will be <br> eliminated.All the work is carried out by an actual person with tax preparation knowledge and skills. </p>
                        <a href="#" id="learn-more">learn more <i class="fa fa-angle-right" id="fa-right"></i></a>
                    </div>
                </div>
            </div>--><link rel="stylesheet" href="">
			<style>
.checked {
    color: orange;
}
#maian {
    background: url('images/header-box-line.png') no-repeat bottom center #f6f6f6;
</style>
			<div class="col-md-6 col-xl-7 col-lg-6 col-sm-6">
                        <div id="maian" class="header-box-inner-main">
                            <div class="header-box-inner-content">
                                <img src="images/header-box-1.png" class="img-fluid box" alt="">
                                <h2>Online Tax Filing Service-Individual</h2></br>
								<h3 style="font-weight:bold;">File Your Personal Tax Online With Help Of MyTax</h3></br>
								
								<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span></br>
                                <b style="code:black;">You get one-on-one guidance that helps manage risk and improve performance and reaps the benefit later.</b></br></br></br></br></br>
                                <b><a href="individual_mytax.php">Read More  <i class="fa fa-angle-right"></i></a></b>

                            </div>
                        </div>
                    </div>
        </div>
    </section>

    <!--welcome end here-->

<div style="margin-top:47px;">
<ul style="list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;">
  <li style="align: center;"><a style="display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;" class="active"><span style="font-size:24px;font-weight: bold;">Online Tax Filing Service-Business</span></a></li>
  
</ul>
</div>
    <!--about us start here-->

    <section id="nameprice" class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-us-left-main">
                        <div class="about-us-left">
                            <img src="images/header-box-2.png" class="img-fluid box" alt="">
							<h3 style="font-size: 24px;font-weight: bold;color:#d32c30;">Online Tax Filing Service-Business</h3></br>
							<h3 style="font-weight:bold;">We Provide Services To Corporation, Partnership and Sole Proprietor.</h3></br>
								<!--<h3 style="font-weight:bold;">No Up-Front Fees</h3></br>-->
								<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span></br></br>
                            <b>Now you can take care of your company taxes from your office without worrying about running to CPA office everytime. </br></b>
                            
                            <a href="business_mytax.php" id="learn-more">Read More <i class="fa fa-angle-right" id="fa-right"></i></a>
                        </div>
                    </div>
                </div>
				<!--<div class="col-md-6 col-xl-6 col-lg-6 col-sm-6">
                        <div class="header-box-inner-main">
                            <div class="header-box-inner-content">
                                <img src="images/header-box-3.png" class="img-fluid box" alt="">
                                <h2>Free Tax advice </h2>
                                <p>No Up-Front Fees. You can make the payment from your Federal Refund using Refund Advantage*.</p>

                                <a href="">start for free  <i class="fa fa-angle-right"></i></a>

                            </div>
                        </div>
                    </div>-->
                <div class="col-md-6">
                    <div class="about-us-right-main">
                        <div class="about-us-right">
                            <img style="height:425px;" src="images/business-man-png.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            
            <!--<div class="bottom-content">
                <div class="row">
                    <div class="col-md-12">
                        <p>If you're wondering how you can pay less or minimize your taxes, <br> or if you're wondering why the tax on your income is too high, Mytaxes will navigate the tax code to the maximum advantage.</p>
                    </div>
                </div>
            </div>-->
        </div>

    </section>
<style>



li a:hover {
    background-color: #111;
}
#mainn2{
    background: url('images/header-box-line.png') no-repeat bottom center whitesmoke;
</style>
    <!--about us end here-->

<div style="margin-top:47px;">
<ul style="list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #0476bd;">
  <li style="align: center;"><a style="display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;" class="active"><span style="font-size:24px;font-weight: bold;">IRS and State Representation</span></a></li>
  
</ul>
</div>
    <!--services start here-->
	
	<section id="fadvice" class="welcome">
        <div class="row">
            <div class="col-md-5">
                <div class="welcome-left-main">
                    <img style="height:490px;" src="images/businessman1.png" class="welcome-bg img-fluid" alt="">
                    
                </div>
            </div>

            <!--<div class="col-md-6">
                <div class="welcome-right-main">
                    <div class="welcom-right">
                        <!--<img src="images/welcome-line.png" class="lines" alt="">-->
                        <!--<h2>Welcome <br>Make My Taxes</h2>
                        <h6>Take help over the phone or online to assist in helping self prepared software tax returns for a flat fee </h6>
                        <p>MakeMyTaxes services are on your side, you won't need to worry about how tax preparation software works and whether or not it is reliable. Makemytax reduces time, cost and guesswork will be <br> eliminated.All the work is carried out by an actual person with tax preparation knowledge and skills. </p>
                        <a href="#" id="learn-more">learn more <i class="fa fa-angle-right" id="fa-right"></i></a>
                    </div>
                </div>
            </div>-->
			<div class="col-md-6 col-xl-7 col-lg-6 col-sm-6">
                        <div id="mainn2" class="header-box-inner-main">
                            <div class="header-box-inner-content">
                                <img src="images/header-box-3.png" class="img-fluid box" alt="">
                                <h2>IRS and State Representation</h2></br>
								
								<h3 style="font-weight:bold;">We support you in the event of an IRS notice or audit.</h3></br>
								<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span></br></br>
                                <b>We can help you in representing you for an IRS or State Tax audit and also help in Offer in Compromise settlement with the IRS.                                                                                  
								</b></br></br></br>
                                <p><a href="irs_support.php">Read More  <i class="fa fa-angle-right"></i></a></p>

                            </div>
                        </div>
                    </div>
        </div>
    </section>
	
	
	<div style="margin-top:47px;">
<ul style="list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;">
  <li style="align: center;"><a style="display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;" class="active"><span style="font-size:24px;font-weight: bold;">Tax Advice</span></a></li>
  
</ul>
</div>
	
	<section id="hemail" class="about-us">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-us-left-main">
                        <div class="about-us-left">
                           <img src="images/header-box-4.png" class="img-fluid box" alt="">
							<h2 style="font-size: 24px;font-weight: bold;color:#d32c30;">Tax Advice</h2></br>
							
								<strong style="font-size:43px;font-weight:bold;">100% Satisfaction</strong></br>
								<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span>
<span class="fa fa-star checked"></span></br></br>
                            <b>MyTax offers Tax advice from experienced tax professionals through email as well as phone. You don't have to file your taxes by yourself as we will guide through our phone.</b></br>
                            
                            <a href="tax_advice.php" id="learn-more">Read More <i class="fa fa-angle-right" id="fa-right"></i></a>
                        </div>
                    </div>
                </div>
				<!--<div class="col-md-6 col-xl-6 col-lg-6 col-sm-6">
                        <div class="header-box-inner-main">
                            <div class="header-box-inner-content">
                                <img src="images/header-box-3.png" class="img-fluid box" alt="">
                                <h2>Free Tax advice </h2>
                                <p>No Up-Front Fees. You can make the payment from your Federal Refund using Refund Advantage*.</p>

                                <a href="">start for free  <i class="fa fa-angle-right"></i></a>

                            </div>
                        </div>
                    </div>-->
                <div class="col-md-6">
                    <div class="about-us-right-main">
                        <div class="about-us-right">
                            <img src="images/man1.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>

            <!--<div class="bottom-content">
                <div class="row">
                    <div class="col-md-12">
                        <p>If you're wondering how you can pay less or minimize your taxes, <br> or if you're wondering why the tax on your income is too high, Mytaxes will navigate the tax code to the maximum advantage.</p>
                    </div>
                </div>
            </div>-->
        </div>

    </section>
<style>



li a:hover {
    background-color: #111;
}
</style>
    <!--about us end here-->

	<div style="margin-top:47px;">
<ul style="list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #0476bd;">
  <li style="align: center;"><a style="display: block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;" class="active"><span style="font-size:24px;font-weight: bold;">Why Choose Us</span></a></li>
  
</ul>
</div>
<style>

section.boxes2 {margin: 0px 0 130px 0;}

</style>

	
	
	
	
	<section class="services">
         
        <div class="container">
            <div class="row">
        
                <div style="background-color:white;" class="col-md-7>
                     
                    <div class="services-left-main">
                        <div class="services-left">
                            <!--<h2>Why Choose Us</h2>-->
                            <ul>
                                <li><i class="fa fa-arrow-right"></i>Fast & Maximum Return</li>
                                <li><i class="fa fa-arrow-right"></i>No Up-Front Fees</li>
                                <li><i class="fa fa-arrow-right"></i>Accuracy Guaranteed</li>
                                <li><i class="fa fa-arrow-right"></i>Find Every Deduction</li>
                                <li><i class="fa fa-arrow-right"></i>100% Satisfaction</li>
                                <li><i class="fa fa-arrow-right"></i>Tax Specialist</li>
                                <li><i class="fa fa-arrow-right"></i>Guidance For House Owner</li>
                                <li><i class="fa fa-arrow-right"></i>Free Support</li>
                                <li><i class="fa fa-arrow-right"></i>Filing Safety Guaranteed</li>
                            </ul>
                           
                        </div>
                    </div>
				
				<div class="col-md-7">
                    <div class="about-us-right-main">
                        <div class="about-us-right">
                            <img src="images/business-man-1.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
					
                </div>
                <!--<div class="col-md-7">
                    <div class="services-right-main">
                        <div class="services-right">
                            <img src="images/services-1.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>-->
            </div>

            
        



    </section>
	
	
	
	
	

    <!--services end here-->


    <!--footer start here-->

    <?php
	include_once("footer_mytax.php");
	?>

    <!--footer end here-->


    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/query-migrate.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.js"></script>
    <script type="text/javascript" src="js/slick.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/functions.js"></script>
    <script type="text/javascript" src="js/jquery.slicknav.min.js"></script>
    <script>
        $(function() {
            $('#menu').slicknav();
        });

        $('.carousel').carousel({
            interval: 5000,
            pause: ""
        });

    </script>
</body>

</html>
