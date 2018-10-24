<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>MyTax Online Tax Preparation service –MyTax.nyc</title>
<meta name = "keyword" content = "best online tax filing,tax preparation services,tax preparation online,online tax services,Income tax preparation.”/>

<meta  name = "description" content = "Get your taxes done by actual person, not software .Tax Preparation service for individual and Business and Tax advice."/>
    

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
                                <h2>Contact Us</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
	
	<!--header end here-->
<?php
if(isset($_POST['subcontact'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
		//your site secret key
        $secret = '6Lf4BTIUAAAAAHabg96oncfOMwRcGfUMrqthNZLU';
		//get verify response data
        $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secret.'&response='.$_POST['g-recaptcha-response']);
        $responseData = json_decode($verifyResponse);
		
		$name = !empty($_POST['name'])?$_POST['name']:'';
		$email = !empty($_POST['email'])?$_POST['email']:'';
		$mobile = !empty($_POST['mobile'])?$_POST['mobile']:'';
		$message = !empty($_POST['message'])?$_POST['message']:'';
		$status = "Enabled";
	    $add_date=date("Y-m-d H:i:s");
	    $delete_status = "False";
        if($responseData->success):
		
		    mysql_query("insert into tb_send_query(name,email,mobile,message,add_date,delete_status) VALUES('$name','$mobile','$email','$message','$add_date','$delete_status')");
	
			//contact form submission code
			$msg= "Name: ".$name."\n Email: ".$email."\n Mobile: ".$phone."\n Subject: ".$subject."\n Message:".$message;  
			                 
					$to      = "shakib@urtechmate.co.in";
				        $subject = "New  Enquiry";
				        
				        $header = 'From:'.$name.' <'.$email.'>' . "\r\n";
					mail($to,$subject,$msg,$header);
			
            $succMsg = 'Your contact request have submitted successfully.';
			$name = '';
			$email = '';
			$message = '';
        else:
            $errMsg = 'Robot verification failed, please try again.';
        endif;
    else:
        $errMsg = 'Please click on the reCAPTCHA box.';
    endif;
else:
    $errMsg = '';
    $succMsg = '';
	$name = '';
	$email = '';
	$message = '';
endif;
?>
	<?php
/*
if(isset($_POST['subcontact'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$message=$_POST['message'];
	$add_date=date("Y-m-d H:i:s");
	$delete_status="False";
	$query = mysql_query("insert into tb_send_query(name,email,mobile,message,add_date,delete_status) VALUES('$name','$mobile','$email','$message','$add_date','$delete_status')");
	if($query){
		?>
		<script>
		alert("Enquiry Form Has Been Send");
		</script>
		<?php
	}else{
		?>
		<script>
		alert("Something Wrong");
		</script>
		<?php
	}
	
}*/
?>
<section class="about-area contact">
        <div class="container">
            
            <div class="row about-second">
                <div class="col-xs-12 col-sm-12 col-md-7 col-lg-7 heading about-content"></br>
                    <h1 class="title">Get in Touch With Us</h1></br>
                    
                     <div role="form" class="wpcf7" id="wpcf7-f4-p22-o1" lang="en-US" dir="ltr">
<div class="screen-reader-response"></div>

<div style="display: none;">
<input type="hidden" name="_wpcf7" value="4" />
<input type="hidden" name="_wpcf7_version" value="4.6" />
<input type="hidden" name="_wpcf7_locale" value="en_US" />
<input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f4-p22-o1" />
<input type="hidden" name="_wpnonce" value="7c5dddc5a0" />
</div>
<div class="contact-page">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
<div class="row">
<?php if(!empty($errMsg)): ?><div class="errMsg"><?php echo $errMsg; ?></div><?php endif; ?>
<?php if(!empty($succMsg)): ?><div class="succMsg"><?php echo $succMsg; ?></div><?php endif; ?>
<form action="" method="post" class="wpcf7-form">
<div ><span ><input type="text" required name="name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Enter Name" /></span> </div></br>

<div ><span ><input type="email" style="height:39px;padding:10px;" required name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Enter Email" /></span> </div></br>

<div ><span ><input type="text" required name="mobile" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Enter Mobile" /></span> </div></br>


<div ><span ><textarea required name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Message"></textarea></span></div></br>

<div ><span class="wpcf7-form-control-wrap your-message"><div class="g-recaptcha" data-sitekey="6Lf4BTIUAAAAAI695nDiDzxmdyrfB5W8-ok-AOZG"></div></span></div>

<div ><button type="submit" name="subcontact" class="btn btn-primary"><span>Send Message</span></button></div></br>

</form>
</div>
</div>
</div>
                </div>
                <div class="col-xs-12 col-sm-12 col-md-5 col-lg-5 contact-content"></br></br></br></br>
                    <h3>Call Today</h3>
                   <ul class="list-inline list-unstyled contact-timing">
<li><strong>US:&nbsp;</strong>212-760-1124</li>

</ul>                    <h3>Our Locations:</h3></br>
                     <ul class="list-inline list-unstyled contact-location">
                                                            
                       <li>
                                    <h4>New York Office</h4>
                                   <p>421 Seventh Avenue, Suite # 1200<br>
                                      New York, NY, 10001<br>
                                      Phone: 212-760-1124<br>
                                      Toll Free: 800-279-4306</br>
                                      Fax: 212-760-1142<br>
                                      info@sadhcpa.com 
									</p>
									
                                <!--</li>
                                                            <li>
                                    <h4>Queens Office</h4>
                                    <p>20306 39th Avenue<br>
                                     Bayside, NY 11361<br>
                                     Phone: 718-666-1400<br>
                                     Fax: 718-423-3380<br>
                                     ssadh@sadhcpa.com
								   </p>
                                </li>-->
                             

                    </ul>
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
