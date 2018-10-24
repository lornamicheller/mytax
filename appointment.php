<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Schedule Appointment</title>

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
                                <h2>Visit An Office</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header end here-->
<?php
/*
if(isset($_POST['subcontact'])):
    if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])):
		
        $secret = '6Lf4BTIUAAAAAHabg96oncfOMwRcGfUMrqthNZLU';
		
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
endif;*/
?>

<?php
//include_once("include/config.php");
if(isset($_POST['subcontact'])){
	$name=$_POST['name'];
	$email=$_POST['email'];
	$mobile=$_POST['mobile'];
	$shcedule_date=$_POST['shcedule_date'];
	$shcedule_time=$_POST['shcedule_time'];
	$message=$_POST['message'];
	$add_date=date("Y-m-d H:i:s");
	$delete_status="False";
	$query = mysql_query("insert into tb_send_query(name,email,mobile,shcedule_date,shcedule_time,message,add_date,delete_status) VALUES('$name','$email','$mobile','$shcedule_date','$shcedule_time','$message','$add_date','$delete_status')");
	if($query){
		//header("location:thanku.php?add_date=");
		?>
		
		<script>window.location="thanku.php?adddate=<?php echo $shcedule_date;?>"</script>
		<?php
	}else{
		?>
		<script>
		alert("Something Wrong");
		</script>
		<?php
	}
	
}
?>

<style>

.ui-datepicker-calendar{background: #a49d9d;
}
</style>
<style>
body {font-family: Arial, Helvetica, sans-serif;}

input[type=text], select, textarea {
    width: 100%;
    padding: 12px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
}

input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 12px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
.email2{
	width: 100%;
    padding: 4px;
	height: 50px;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
    margin-top: 6px;
    margin-bottom: 16px;
    resize: vertical;
	color: black;
}
.container1 {
    border-radius: 5px;
    background-color: #f2f2f2;
    padding: 20px;
}
</style>	
<section class="about-area contact">
        <div class="container">
            
            <div class="row about-second">
                <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 heading about-content"></br></br>
                    
                     <div class="container">
					
					<?php if(!empty($errMsg)): ?><div class="errMsg"><?php echo $errMsg; ?></div><?php endif; ?>
<?php if(!empty($succMsg)): ?><div class="succMsg"><?php echo $succMsg; ?></div><?php endif; ?>
  <form action="" method="post">
    <label for="fname">Name</label>
    <input type="text" required id="fname" name="name" placeholder="Your name..">

    <label for="lname">Email</label>
    <input type="text" class="email2" required id="lname" name="email" placeholder="Your Email..">

    <label for="lname">Mobile</label>
    <input type="text" required id="lname" name="mobile" placeholder="Your Mobile..">
	
	<label for="lname">Schedule Date</label>
    <input type="text" required id="lname" name="shcedule_date" placeholder="Your Schedule Date..">
	
	<label for="lname">Schedule Time (9 AM To 6 PM)</label>
    <input type="text" required id="lname" name="shcedule_time" placeholder="Your Schedule Time..">
	
	<label for="lname">Message</label>
    <input type="text" required id="lname" name="message" placeholder="Your Message..">

    <!--<div ><span class="wpcf7-form-control-wrap your-message"><div class="g-recaptcha" data-sitekey="6Lf4BTIUAAAAAI695nDiDzxmdyrfB5W8-ok-AOZG"></div></span></div>-->

    <input type="submit" name="subcontact" value="Book Appointment" style="background-color: #AD1E25;">
  </form>
</div></br></br>
                </div>
				

				
                <div style="margin-top:73px;" class="col-xs-12 col-sm-12 col-md-1 col-lg-1 contact-content">
                    
                    <!-- map -->
                    		<div class="col-xs-6 col-sm-6 col-md-4 col-lg-4 contact-content">
<div class="mapouter"><div class="gmap_canvas"><iframe width="600" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=421%20Seventh%20Avenue%2C%20Suite%20%23%201200%20New%20York%2C%20NY%2C%2010001&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.pureblack.de"></a></div><style>.mapouter{text-align:right;height:600px;width:500px;}.gmap_canvas {overflow:hidden;background:none!important;height:600px;width:500px;}</style></div>
                </div>
                    
                    <!-- end of map -->
                    
                    <br>
			
			
        </div>

<!-- map -->




      <!-- end map -->
		

		
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
