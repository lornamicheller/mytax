<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Services</title>
    
    <link rel="shortcut icon" href="images/fav.png" sizes="25x25">
    
    <link rel="stylesheet" href="style.css">
    
    <link rel="stylesheet" href="fonts/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">
    
    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins:400,500,600" rel="stylesheet">
    
    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">-->
    
    <link rel="stylesheet" href="css_new/slicknav.css">
    <link rel="stylesheet" href="css_new/bootstrap.min.css">
    
    <link rel="stylesheet" href="css_new/slick.css">

    <link href="css_new/cards.css" rel="stylesheet">
    
</head>
    
<body>

    <!--header start here-->

    
    <!--header end here-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Registration</title>

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

    <header>

        <?php
		include_once("top_header.php");
		?>


        <div class="silver-header-bottom">

            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <div class="logo">
                            <a href="home.php"><img style="margin-top:-21px;" src="images/mytax-logo.png" class="img-fluid" alt=""></a>
                        </div>
                    </div>

                    <div class="col-md-9">


                        <div id="menu">
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
                <div class="container">
                    <div class="header-content">
                        <div class="row">
                            <div class="col-md-12 text-center ">
                                <h2>Cloud Services</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header end here-->
      
      <section class="about-us">
        <div class="container" align="center">
		<!--<h3 style="text-align: center;font-weight:bold;color:#0572b9;">Please Select Any One Of The Below</h3> -->
            <p align="center">Select from one of the following plans:</p>
            
            <br>

                <a class="individual-active">Individual</a>
                <a href="cloud_services_business.php" class="business-inactive">Business</a>


            <div class="row pricing-cards">
                <div class="col-md-4 col-sm-12" align="center">
                  <div class="cards-item">
                      <div class="card">
                            <div class="top-banner">NOVICE</div>
                      <div class="card__content">
                          <div class="row">
                            <p style="color: #3991cc;margin-left: 65px;font-size: 25px;" class="pricse-header">Online Tax Filing</p>
                          </div>
                          </br>
                            <ul style="text-align:left;">
                                <li class="listdesign">100% accurate calculations and credits.</li>
        <li class="listdesign">Getting your refund faster </br>and Paying with Refunds Advantage.</li>
        <li class="listdesign">All your previous Years information</br>and Carryover's transferred and checked by us</li></br>
		<li class="listdesign">W2 maximum income $100k.</li>
                            </ul>
                          <btn class="card-btn"><a style="color:#ffffff;" href="appointment.php">Get Started</a></btn>
                      </div>

                      </div>
                    </div>
                </div>

                <div class="col-md-4">
                  <div class="cards-item">
                      <div class="card">
                            <div class="top-banner">Basics</div>
                      <div class="card__content">
                          <div class="row">
                            <p style="color: #3991cc;margin-left: 65px;font-size: 25px;" class="pricse-header">Online Tax Filing</p>
                          </div>
                          <br>
                            <ul style="text-align:left;">
                                <li class="listdesign">Reporting your freelance and independent contractor's income with simple expenses</li>
                                <li class="listdesign">Reporting your portfolio income from stocks, bonds, ESOPs and related investment income.</li>
                                <li class="listdesign">Reporting rental property income and expenses(Schedule E).</li>
		                        <li class="listdesign">1 portfolio account,and one rented property and maximum income $150k</li>
                            </ul>
                          <btn class="card-btn"><a style="color:#ffffff;" href="appointment.php">Get Started</a></btn>
                      </div>

                      </div>
                    </div>
                </div>
                
                <div class="col-md-4">
                  <div class="cards-item">
                      <div class="card">
                            <div class="top-banner">Premium</div>
                      <div class="card__content">
                          <div class="row">
                            <p style="color: #3991cc;margin-left: 65px;font-size: 25px;" class="pricse-header">Online Tax Filing</p>
                          </div>
                          <br>
                            <ul style="text-align:left;">
                                <li class="listdesign">Reporting self employment and small business income and expenses (Schedule D).</li>
        <li class="listdesign">Reporting business assets depreciation (Schedule C & E).</li>
        <li class="listdesign">Consulting and Planning services available with CPA.</li>
		<li class="listdesign"> All your documents are available 24/7 and 365 days with secure portal access.</li>
		<li class="listdesign">Max income $200k.</li>
                            </ul>
                          <btn class="card-btn"><a style="color:#ffffff;" href="appointment.php">Get Started</a></btn>
                      </div>

                      </div>
                    </div>
                </div>
                
            </div>
            
        </div>

    </section>
	
	<br><br><br><br>
	
	
	
	
	
	
	<style>
	.membership .offers-main .offers .inner-content a.gold {
    text-decoration: none;
    background: none;
}

.membership .offers-main .offers .inner-content a.choose-plan {
    background: none;
    color: white;
    padding: 0px 0px;
    border-radius: 0px;
    display: inline-block;
    margin: 0px 0 0px 0;
    font-family: var(--pop);
    text-transform: uppercase;
    -webkit-transition: all 0s ease-in-out -o-transition:all 0s ease-in-out;
    transition: all 0s ease-in-out;
}

.membership .offers-main .offers .inner-content a.choose-plan:hover {
    background: none;
}
	</style>
	
	

	
	

    <!--plan form start here-->

   <style type="text/css" data-type="vc_custom-css">
   .columnlink{margin-left: -120px !important;}
  .centered {
    position: absolute;
    top: 78%;
    left: 50%;
	color:#fcf6f6;
	font-weight: bold;
	font-size: 55px;
    transform: translate(-50%, -50%);
}
   </style>

    <!--plan form end here-->


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
	<script type="text/javascript">
function isNumber(evt) {
    evt = (evt) ? evt : window.event;
    var charCode = (evt.which) ? evt.which : evt.keyCode;
    if (charCode != 08 && (charCode < 48 || charCode > 57)) {
        return false;
    }
    return true;
}
</script>

<script type="text/javascript">
    adroll_adv_id = "C4TYRDHRDBDW3PHZ5CXY2W";
    adroll_pix_id = "DX6ICACZBFFYVFZB5BRKTN";
    /* OPTIONAL: provide email to improve user identification */
    /* adroll_email = "username@example.com"; */
    (function () {
        var _onload = function(){
            if (document.readyState && !/loaded|complete/.test(document.readyState)){setTimeout(_onload, 10);return}
            if (!window.__adroll_loaded){__adroll_loaded=true;setTimeout(_onload, 50);return}
            var scr = document.createElement("script");
            var host = (("https:" == document.location.protocol) ? "https://s.adroll.com" : "http://a.adroll.com");
            scr.setAttribute('async', 'true');
            scr.type = "text/javascript";
            scr.src = host + "/j/roundtrip.js";
            ((document.getElementsByTagName('head') || [null])[0] ||
                document.getElementsByTagName('script')[0].parentNode).appendChild(scr);
        };
        if (window.addEventListener) {window.addEventListener('load', _onload, false);}
        else {window.attachEvent('onload', _onload)}
    }());
</script>


</body>

</html>