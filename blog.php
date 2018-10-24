<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>MyTax Online Tax Preparation service –MyTax.nyc</title>

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
// include_once("include/config.php");
?>
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
                                <h2>Blog</h2>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!--header end here-->

	

    <!--plan form start here-->
<section style="margin: -0px 0 130px 0;" class="boxes">
        <div class="container">
		
		<h1 style="font-weight:bold;">Read The Blog:</h1></br>
		
            <div class="header-boxes-main">
                <div class="row">
                    <div class="col-md-6 col-xl-3 col-lg-6 col-sm-6">
                        <div style="width:190px;padding:10px;border:5px solid gray;margin: 0;background: #333;" class="post-meta col-left">
		              <span style="text-decoration:underline;color: #fff;" class="post-date">
			             
		              </span></br></br>
					  
					     
			            <a style="color:#fff;text-decoration:underline;" href="home.php">MyTax</a></br></br>
		              
					 
			             <a style="text-decoration:underline;color:#fff;" href="#forms">Leave a comment</a>
		             
	                 </div>
                    </div>


                    <div style="width:610px;padding:10px;border:5px solid gray;margin: 0;" class="col-md-6 col-xl-9 col-lg-6 col-sm-6">
                        <div class="heasder-box-inner-main">
                            <div class="header-box-inner-content">
                               
                               
                      
							<h3></h3>
								<p></p>
                      <div>
					  
					  <img src="./admin/upload_images/">
					  
					  </div>
                       
                   
                               
                            </div>
                        </div>
                    </div>


                    
                </div>
				
            </div>
        </div>
    </section>
	
	<?php
	// }
	?>
	<!--cscscscscscjslcjsl-->
    
		
		

    <!--plan form end here-->

       <?php
if(isset($_POST['submit2'])){
    	$name     = $_POST['your_name'];
		$email    = $_POST['your_email'];
		$phone    = $_POST['your_phone'];
		$message  = $_POST['your_message'];
		$add_date = date("Y-m-d H:i:s");
		$delete_status = 'False';
		$status = 'Enabled';
		$query = mysql_query("insert into tb_blog_comment(your_name,your_email,your_phone,your_message,add_date,delete_status,status) VALUES('$name','$email','$phone','$message','$add_date','$delete_status','$status')");
		if($query){
			$succMsg = "Insert Successfully";
		}else{
			$errMsg = "Insert Failed";
		}
		
 }    
?>

<p><section style="background:#f3f3f3;" id="forms" class="legal-box">
    <div class="container"> 
           <div class="row">
<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
<?php if(!empty($errMsg)): ?><div style="color:red;" class="errMsg"><?php echo $errMsg; ?></div><?php endif; ?>
<?php if(!empty($succMsg)): ?><div style="color:red;" class="succMsg"><?php echo $succMsg; ?></div><?php endif; ?>
<form action="" method="post" class="wpcf7-form">
<div class="form-group"><span class="wpcf7-form-control-wrap your-name"><input type="text" required name="your_name" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="First Name" /></span></div>
<div class="form-group"><span class="wpcf7-form-control-wrap your-email"><input type="email" required name="your_email" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email form-control" aria-required="true" aria-invalid="false" placeholder="Email" /></span> </div>
<div class="form-group"><span class="wpcf7-form-control-wrap your-phone"><input type="text" required name="your_phone" maxlength="12" value="" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Phone" /></span></div>
<div class="form-group"><span class="wpcf7-form-control-wrap your-message"><textarea required name="your_message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required form-control" aria-required="true" aria-invalid="false" placeholder="Message"></textarea></span></div>

<div class="form-group"><button type="submit" name="submit2" class="btn btn-danger"><span>Submit</span></button></div>
</form>
</div>
</div>

		   </div>
</section>
  </p>

    

    <!--footer start here-->

    <?php
	include_once("footer.php");
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
