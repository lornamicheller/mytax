<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Disclaimer</title>

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
                                <h2>Disclaimer</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
	<!--header end here-->

	
	
	<section style="margin-top:85px;" class="about-area pf0">
        <div class="container">
            
            <div class="row about-second">
                <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 heading about-content">
                  
<h1>Disclaimer</h1>

<p>Last updated: August 13, 2018</p>

<p>The information contained on http://www.MyTax.nyc website (the "Service") is for general information purposes only.</p>

<p>MyTax assumes no responsibility for errors or omissions in the contents on the Service.</p>

<p>In no event shall MyTax be liable for any special, direct, indirect, consequential, or incidental damages or any damages whatsoever, whether in an action of contract, negligence or other tort, arising out of or in connection with the use of the Service or the contents of the Service. MyTax reserves the right to make additions, deletions, or modification to the contents on the Service at any time without prior notice.</p>

<p>MyTax does not warrant that the Service is free of viruses or other harmful components.</p>


<h2>Affiliate disclaimer</h2>

<p>This affiliate disclosure details the affiliate relationships of MyTax with other companies and products.</p>

<p>Some of the links are "affiliate links", a link with a special tracking code. This means if you click on an affiliate link and purchase the item, we will receive an affiliate commission.</p>

<p>The price of the item is the same whether it is an affiliate link or not. Regardless, we only recommend products or services we believe will add value to our readers.</p>

<p>By using the affiliate links, you are helping support the Service, and we genuinely appreciate your support.</p>

    
<p>Affiliate advertising programs that the Service uses are:</p>

<ul>
<li>
    <p>Amazon Services LLC Associates Program</p>
    <p>MyTax is a participant in the Amazon Services LLC Associates Program, an affiliate advertising program designed to provide a means for sites to earn advertising fees by advertising and linking to Amazon.com or endless.com, MYHABIT.com, SmallParts.com, or AmazonWireless.com.</p>
    <p>Pages on this Service may include affiliate links to Amazon and its affiliate sites on which the owner of this Service, MyTax, will make a referral commission.</p>
</li>
<li>
    <p>iDevAffiliate</p>
</li>
<li>
    <p>Commission Junction</p>
</li>
<li>
    <p>ShareASale</p>
</li>
<li>
    <p>ClickBank</p>
</li>
<li>
    <p>ClickFunnels</p>
</li>
</ul>


<h2>External links disclaimer</h2>

<p>http://www.MyTax.nyc website may contain links to external websites that are not provided or maintained by or in any way affiliated with MyTax</p>

<p>Please note that the MyTax does not guarantee the accuracy, relevance, timeliness, or completeness of any information on these external websites.</p>

</br></br></br>
                </div>
                <!--<div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 heading about-content">
                  <div class="img-center wow animated fadeIn">
                      <img width="458" height="440" src="./wp-content/uploads/2017/01/images2.png" class="img-responsive wp-post-image" alt="" srcset="" sizes="(max-width: 458px) 100vw, 458px" />                    </div>
                </div>-->
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
</body>

</html>
