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

    <link rel="stylesheet" href="css_new/slicknav.css">
    <link rel="stylesheet" href="css_new/bootstrap.min.css">

    <link rel="stylesheet" href="css_new/slick.css">

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
                                <h2>Services</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header end here-->
      
      <section class="about-us">
        <div class="container">
		<!--<h3 style="text-align: center;font-weight:bold;color:#0572b9;">Please Select Any One Of The Below</h3> -->
            <p align="center">Have your return completed by professionals from anywhere at any time by uploading your documents from any device. You will receive one-on-one guidance that helps risk and improve performance while you later reap the benefits.</p>
            
            <div class="row">
                <div class="col-md-4">
                <a href="cloud_services_individual.php">
                  <div class="cards-item">
                      <div class="card">
                      <div class="card-cloud"></div>
                      <div class="card__content">
                          <div class="card__title">Cloud<img class="icon-cloud" src="images/icons/cloud.svg" align="left"></div>
                          <hr class="card-line">
                        <p class="card__text">With our cloud service, you never have to leave the comfort of your home or office. Our cloud service allows you to have your taxes prepared anywhere at anytime from any device. Select an option below to learn more.</p>
                      </div>
                      </div>
                    </div>
                </a>
                </div>

                <div class="col-md-4">
                <a href="mytax_individual.php">
                  <div class="cards-item">
                      <div class="card">
                      <div class="card-individual"></div>
                      <div class="card__content">
                          <div class="card__title">Individual<img class="icon-individual" src="images/icons/individual.svg" align="left"></div>
                          <hr class="card-line">
                        <p class="card__text">Accuracy and completeness are the hallmarks of our tax preparation services. Tax planning services are available for your first home purchases, investment properties, child education planning and tax deferral strategies.</p>
                      </div>
                      </div>
                    </div>
                    </a>
                </div>
                
                <div class="col-md-4">
                 <a href="mytax_business.php">
                  <div class="cards-item">
                      <div class="card">
                      <div class="card-business"></div>
                      <div class="card__content">
                          <div class="card__title">Business<img class="icon-business" src="images/icons/business.svg" align="left"></div>
                          <hr class="card-line">
                        <p class="card__text">MyTax services are on your side, you won't need to worry about how tax preparation software works and whether or not it is reliable. Mytax reduces time, cost and guesswork will be eliminated.</p>
                      </div>
                      </div>
                    </div>
                   </a>
                </div>
                
            
            <hr class = "page-break"> 
                
            </div>
            
            <br><br>
	
            
            <div class="row">
                
                <div class="col-md-4">
                  <div class="column-item">
				    <a href="livechat.php" style="color: #696969;">
                      <div class="card__content">
                          <div class="card__title"><img src="images/icons/chat.svg" align="left"></div>
                          <div class="column-title">Live Chat & Calling</div>
                        <p class="card__text"  style="color: #696969;">Through live chat and video calling, you can call us at any time to solve your tax issues.</p>
                      </div>
					  </a>
                    </div>
                </div>
                
                <div class="col-md-4">
                  <div class="column-item">
				  <a href="https://sadh-cpa.sharefile.com/r/rbeef180091e4553a" style="color: #696969;">
                      <div class="card__content">
                          <div class="card__title"><img src="images/icons/upload.svg" align="left"></div>
                          <div class="column-title">Upload Your Files</div>
                        <p class="card__text"  style="color: #696969;">Have your taxes prepared by us from anywhere by uploading your tax files online.</p>
                      </div>
					  </a>
                    </div>
                </div>
                
                <div class="col-md-4">
                    
                  <div class="column-item">
                      <a href="appointment.php" style="color: #696969;">
                      <div class="card__content">
                          <div class="card__title"><img src="images/icons/placeholder.svg" align="left"></div>
                          <div class="column-title">Visit An Office</div>
                        <p class="card__text">Have a cup of coffee with an expert team member while we prepare your return.</p>
                      </div>
                          </a>
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