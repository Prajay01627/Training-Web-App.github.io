<!DOCTYPE html>
<html lang="en">

<head>

	<!-- META ============================================= -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta name="robots" content="" />
	
	<!-- DESCRIPTION -->
	<meta name="description" content="EduChamp : Education HTML Template" />
	
	<!-- OG -->
	<meta property="og:title" content="EduChamp : Education HTML Template" />
	<meta property="og:description" content="EduChamp : Education HTML Template" />
	<meta property="og:image" content="" />
	<meta name="format-detection" content="telephone=no">
	
	<!-- sumago ICON ============================================= -->
	<link rel="icon" href="assets/images/shortlogo.png" type="image/x-icon" />
	<link rel="shortcut icon" type="image/x-icon" href="assets/images/shortlogo.png" />
	
	<!-- PAGE TITLE HERE ============================================= -->
	<title>Sumago Infotech</title>
	
	<!-- MOBILE SPECIFIC ============================================= -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
	
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.min.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
	
	<!-- All PLUGINS CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/assets.css">
	
	<!-- TYPOGRAPHY ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/typography.css">
	
	<!-- SHORTCODES ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/shortcodes/shortcodes.css">
	
	<!-- STYLESHEETS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/css/style.css">
	<link class="skin" rel="stylesheet" type="text/css" href="assets/css/color/color-1.css">
	
	<!-- REVOLUTION SLIDER CSS ============================================= -->
	<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/layers.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/settings.css">
	<link rel="stylesheet" type="text/css" href="assets/vendors/revolution/css/navigation.css">
	<!-- REVOLUTION SLIDER END -->	

	<!-- ----------whatsapp---------------- -->
<script type="text/javascript" src="jquery-3.3.1.min.js"></script>
<script type="text/javascript" src="floating-wpp.min.js"></script>
<link rel="stylesheet" href="floating-wpp.min.css">


<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
<!-- ---------aos--------- -->
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- -----aos--------- -->
<!-- -----------Captcha------------- -->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
      <!-- ---------captcha------- -->
</head>
<body id="bg">
<!-- <div class="loader-bg">
        <h3>Sumago</h3>
      <div class="loader">
          <span></span>
      </div>
    </div> -->

<!-- ----------header start-------------------- -->
<?php include 'include/header.php';?>
<!-- ----------header end-------------------- -->
    
     <!-- Main slider start-->  
    <?php include 'include/slider.php';?>
    <!-- Main Slider end--------- -->
    <!-- <div class="page-content bg-white"> --temp disabled-->
         
		<!-- <div class="content-block"> temp disabled-->
            
			<!-- ideologies & approach start(pending) -->
             
               <?php include 'include/ideology.php';?>

			<!-- ideologies & approach end-->

			


			<!-- IT oriented Courses start-->
			<?php include 'include/popularcourses.php';?>
			<!-- IT oriented Courses end-->
              
			
			
			<!-- counter strip start -->
			<?php include 'include/counterabout.php';?>
			<!-- counter strip end -->
			
			<!-- Testimonials -->
			<?php include'include/testimonials.php';?>
			<!-- Testimonials END -->
			<?php include'include/placement.php';?>
			

			
       <!--  </div> -->
		<!-- contact area END -->
    <!-- </div> -->

    <div>
	 <?php include 'include/modalform.php';?>
</div>
  
    <!-- Content END-->

	<!-- Footer ==== -->
	<?php include 'include/footer.php';?>
<!-- --------------aos script---------- -->
	<script>
  AOS.init();
</script>
<!-- --------------aos script---------- -->
    
</body>

</html>
