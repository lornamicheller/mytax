<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Upload Your Document</title>

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
                                <h2>Upload</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header end here-->

	
	
	<section class="about-area contact">
        <div class="container">
            
            <div class="row about-second">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 heading about-content"></br>
                     <h3 style="font-weight:bold;color:#114170;text-align:center;">You Can Upload Your Document Here.</h3></br></br>

                <div ><a href="thanku.php"><button type="submit" id="formbox" name="subcontact" class="btn btn-primary"><span>Previous</span></button></a></div>
				

                </div>
				
				<div class="col-xs-12 col-sm-12 col-md-2 col-lg-2 contact-content"></br></br></br></br>
                    <div><a target="_blank" href="https://sadh-cpa.sharefile.com/r/rbeef180091e4553a"><button type="submit" name="subcontact" style="color:white;" class="btn btn-primary">Upload Here</button></a></div>
                </div>
				
                <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 contact-content"></br>
                    
					
					<h3>You can also send Documents by</h3></br>
					<h5>Calling On : <span style="color:#d32c30;">212-760-1124</span></h5>
					<b style="margin-left:95px;font-size: 25px;"> Or </b>
					<h5>Mail Us At : <span style="color:#d32c30;">info@sadhcpa.com</span></h5></br></br>
                    
                </div>
            </div>
			
			
        </div>
    </section>


    <!--plan form start here-->

    
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