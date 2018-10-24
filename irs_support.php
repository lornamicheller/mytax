<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>IRS and State Representation</title>

    <link rel="shortcut icon" href="images/fav.png" sizes="25x25">

    <link rel="stylesheet" href="style.css">

    <link rel="stylesheet" href="fonts/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css">

    <link href="https://fonts.googleapis.com/css?family=Lato|Poppins:400,500,600" rel="stylesheet">

    <!--<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.9/css/all.css" integrity="sha384-5SOiIsAziJl6AWe0HWRKTXlfcSHKmYV4RBF18PPJ173Kzn7jzMyFuTtk8JA7QQG1" crossorigin="anonymous">-->

    <link rel="stylesheet" href="css/slicknav.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">

    <link rel="stylesheet" href="css/slick.css">
<style>
.errMsg{color:red;}
</style>
</head>

<body>

    <!--header start here-->

    <header>
        <div class="header-top">
            <div class="container">
                <div class="row">
                    <div class=" col-xl-5 col-lg-5 col-md-7 col-sm-9">
                         
                        <a href="tel:855-TAX-3300">Call Us:  212-760-1124 </a> <span class="text-white">&nbsp; &nbsp; |</span>
                        <a href="mailto:info@makemytaxes.com"> &nbsp;  &nbsp;  &nbsp;Mail :  info@sadhcpa.com</a>
                    </div>
                    <div class=" col-xl-7 col-lg-7 col-md-5 col-sm-3 text-right">
                        
						<a style="color: #36e3ff; font-size:16px;" target="_blank" href="https://sadhandassociates.mypaysimple.com/s/accounting-services"><i class="fa fa-sign-in"></i> PayNow</a>
                    </div>

                </div>

            </div>
        </div>


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
                                <ul class="">
                                     
									 <li class=""><a href="home.php" class="">TaxPreview</a></li>
									 <li class=""><a href="pricing_mytax.php" class="">File Online</a></li>
                                     <li class=""><a href="file_an_ex_mytax.php" class="">File an Extension</a></li>
                                    <li class=""><a href="blog.php" class="">Blog</a></li>
									<li class=""><a href="contact_us.php" class="">Contact Us</a></li>
                                </ul>
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
                                <h2>IRS and State Representation</h2>

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


<section style="margin-top:40px;" class="about-area contact">
        <div class="container">
            <!--<h1 class="title"><strong style="color:#1d91d0;">Terms &nbsp;& Condition</strong></h1></br>-->
			
			<div class="row about-second">
               <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 heading about-content"></br>
                    <p>Nothing is more unsettling than receiving a notice from the Internal Revenue Service, but you can rest easy with the knowledge that you won’t have to go it alone when MyTax is on your team. We offer IRS Representation services to support you in the event of an IRS notice or audit.

<p></br>
			<!--<h5 style="font-weight:bold;">1)You need to have following things ready with you</h5></br>-->
			<p>We work with you to collect all the needed information and communicate with the tax authorities on your behalf. We can help you in representing you for an IRS or State Tax audit and also help in Offer in Compromise settlement with the IRS.</p>
			
			<p>*"We do not guarantee any outcome of the audits or offer in compromise except that we will make the best representation possible on the law."</p>
			
				</br></br>
			<!--<h2 style="background: #fffcfc;font-size:18px;font-weight:bold;"><span style="color:#cf3d3d;">Contact For Help</span> :   347-321-7020</br></br>
					Click Here Upload Your Files :</br></br>
					<div ><a target="_blank" href="https://sadh-cpa.sharefile.com/r/rbeef180091e4553a" ><button type="submit" name="subcontact" style="color:white;" class="btn btn-primary">Upload Your Document</button></a></div></h2></br></br>-->	
                </div>
                <div style="background: #f6f6f6;margin-top: 30px;" class="col-xs-12 col-sm-12 col-md-4 col-lg-4 heading about-content"></br>
                    
					<h1 class="title" style="background: #f8f8f8;
margin-top: 0px;font-size: 17px;"><strong>Contact Us</strong></h1></br>
                    
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


<div ><span ><input style="height:40px;padding:10px;" type="email" required name="email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Enter Email" /></span> </div></br>

<div ><span ><input type="text" required name="mobile" maxlength="12" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Enter Mobile" /></span> </div></br>


<div ><span ><textarea required style="height:139px;" name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Message"></textarea></span></div></br>

<div ><span class="wpcf7-form-control-wrap your-message"><div class="g-recaptcha" data-sitekey="6Lf4BTIUAAAAAI695nDiDzxmdyrfB5W8-ok-AOZG"></div></span></div>

<div ><button type="submit" name="subcontact" class="btn btn-primary"><span>Send Message</span></button></div></br>

</form>
<h2 style="background: #f6f6f6;font-size:18px;font-weight:bold;"><span style="color:#cf3d3d;">For Quick Contact Call Us On:</br> </span> <img style="width: 57px;" src="images/cll.png">  347-321-7020</h2></br></br>
</div>
</div>
</div>
                </div>
            </div>
			
			
        </div>
    </section></br></br>





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
