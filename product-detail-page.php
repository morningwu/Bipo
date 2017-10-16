<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <!-- TITLE -->
      <title>BIPO | Products & Services</title>
      <!-- FAVICON -->
      <link rel="shortcut icon" type="image/x-icon" href="favicon.ico" />      
      <!-- Bootstrap -->
      <link href="css/bootstrap.min.css" rel="stylesheet">
      <!--FONT AWESOME -->
      <link href="css/font-awesome.css" rel="stylesheet">
      <!-- MENU -->
      <link rel="stylesheet" href="css/menuzord.css">       
      <!-- STROKE GAP ICON -->
      <link href="css/stroke-icon.css" rel="stylesheet">
      <link href="css/demo.css" rel="stylesheet">
      <link href="css/ie7.css" rel="stylesheet">
      <!-- Portfolio Filter -->
      <link rel="stylesheet" href="css/bootFolio.css">
      <!-- Popup -->
      <link rel="stylesheet" href="css/magnific-popup.css">      
      <!-- JQUERY UI STYLE -->
      <link rel="stylesheet" href="css/jquery-ui.css">        
      <!-- OWL CSS -->
      <link href="css/owl.theme.default.css" rel="stylesheet">
      <link href="css/owl.carousel.css" rel="stylesheet">  
      <!-- RS5.0 Main Stylesheet -->
      <link rel="stylesheet" type="text/css" href="revolution/css/settings.css">    
      <!-- RS5.0 Layers and Navigation Styles -->
      <link rel="stylesheet" type="text/css" href="revolution/css/layers.css">
      <link rel="stylesheet" type="text/css" href="revolution/css/navigation.css">           
      <!-- MAIN STYLE -->
      <link rel="stylesheet" href="css/style.css">

      <!-- GOOGLE FONT -->
      <link href='https://fonts.googleapis.com/css?family=Raleway:400,100,200,300,500,600,700,800,900' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,400italic,700,700italic' rel='stylesheet' type='text/css'>
      <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
          
      <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
      <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
      <![endif]-->

      <!-- content file-->
      <?php 
      if($_GET['service'] == 'POS'){
        include 'Payroll-Outsourcing-Services.php';
      }elseif($_GET['service'] == 'FBMS'){
        include 'flexible-benefits-management-services.php';
      }elseif($_GET['service'] == 'AAS'){
        include 'Attendance-Automation-Services.php';
      }elseif($_GET['service'] == 'aas'){
        include 'Attendance-Automation-Services.php';
      }elseif($_GET['service'] == 'es'){
        include 'Expatriate-Services.php';
      }elseif($_GET['service'] == 'sos'){
        include 'Staff-Outsourcing-Services.php';
      }elseif($_GET['service'] == 'ppr'){
        include 'Permanent-Placement-Recruitment.php';
      }elseif($_GET['service'] == 'rpos'){
        include 'Recruitment-Process-Outsourcing-Services.php';
      }elseif($_GET['service'] == 'bpos'){
        include 'Business-Process-Outsourcing-Services.php';
      }elseif($_GET['service'] == 'bi'){
        include 'Business-Intelligence.php';
      }elseif($_GET['service'] == 'fbms'){
        include 'Flexible-Benefits-Management-Services.php';
      }elseif($_GET['service'] == 'evas'){
        include 'Employment-Visa-Application-Service.php';
      }elseif($_GET['service'] == 'hrcs'){
        include 'HR-Consultant-Services.php';
      }elseif($_GET['service'] == 'sme'){
        include 'sme.php';
      }

      ?>
   </head>
   <body>

      <!-- =========================
        START PRELOADER
      ============================== -->
      <div class="outslider_loading">
         <div class="outslider_loader"></div>
      </div>

      <!-- =========================
        END PRELOADER
      ============================== -->
      
      <!-- =========================
        START HEADER SECTION
      ============================== -->  
      <?php include 'header.php';?>
      <!-- =========================
        END HEADER SECTION
      ============================== -->

      <!-- =========================
        START PAGE TITLE SECTION
      ============================== -->
      <div class="page-title-area <?php echo $imgClass;?>">
         <div class="container">
            <div class="row">
               <div class="col-sm-6 col-md-6">
                  <div class="page-title-left">
                     <h2><?php echo $title;?></h2>
                  </div>
               </div>
               <div class="col-sm-6 col-md-6">
                  <div class="page-bredcrumbs-area text-right">
                     <ul  class="page-bredcrumbs">
                        <li><a href="index.php">Home</a></li>
                        <li><a href="product.php">Solutions</a></li>
                        <li><a href="#"><?php echo $title;?></a></li>
                     </ul>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- =========================
        END PAGE TITLE SECTION
      ============================== -->      

      <!-- =========================
        START SERVICE SECTION
      ============================== -->
      <section class="service-area service-page-section">
         <div class="service-content-area">
	         <div class="container">
	        		<div class="row">
                 <?php include 'products-sidebar-outsourcing.php';?>
                  <div class="col-md-9 no-padding"> 
                     <div class="single-service">
                        <!--<img src="images/BIPO_platform.jpg" alt="" class="img-responsive">-->
                        <h2><?php echo $title;?></h2>
                        <?php echo $content;?>
                       
                     </div> 
                     <div class="blog-siderbar-area single-blog-thumbnail single-blog-thumbnail-c-padding clearfix">
                     <h2>Related Services</h2>
                        <div class="col-sm-12 col-sm-6 col-md-6">
                           <div class="blog-content-single blog-content-single-no-m-btm">
                              <div class="blog-img">
                                 <img src="<?php echo $relatedServiceImage1;?>" alt="" class="img-responsive">
                                 
                              </div>
                              <div class="blog-text">
                                
                                 <h2><a href="<?php echo $relatedServiceUrl1;?>"><?php echo $relatedServiceTitle1;?></a></h2>
                              </div>
                           </div>
                        </div>
                        <div class="col-sm-12 col-sm-6 col-md-6">
                           <div class="blog-content-single blog-content-single-no-m-btm">
                              <div class="blog-img">
                                 <img src="<?php echo $relatedServiceImage2;?>" alt="" class="img-responsive">
                               
                              </div>
                              <div class="blog-text">
                                 
                                 <h2><a href="<?php echo $relatedServiceUrl2;?>"><?php echo $relatedServiceTitle2;?></a></h2>
                              </div>
                           </div>
                        </div>
                        
                      
                  </div>

                                                
                  </div>
   	        	</div>

	         </div>
         </div>     	
      </section>
      <!-- =========================
        END SERVICE SECTION
      ============================== --> 

      <!-- related services-->


      <!-- =========================
        START SIGN UP SECTION
      ============================== -->
       <?php include 'call-to-action-banner.php';?>
      <!-- =========================
        START SIGN UP SECTION
      ============================== -->
       <!-- =========================
        START QUOTE SECTION
      ============================== -->
       <?php include 'client-logo.php';?>
      <!-- =========================
        END QUOTE SECTION
      ============================== --> 
      <!-- =========================
        START FOOTER SECTION
      ============================== -->
      <?php include 'footer.php';?>
      <!-- =========================
        END FOOTER SECTION
      ============================== -->

      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
      <script src="js/jquery-1.11.3.min.js"></script>        
      <!-- RS5.0 Core JS Files -->
      <script type="text/javascript" src="revolution/js/jquery.themepunch.tools.min.js?rev=5.0"></script>
      <script type="text/javascript" src="revolution/js/jquery.themepunch.revolution.min.js?rev=5.0"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.slideanims.min.js"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.layeranimation.min.js"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.navigation.min.js"></script>
      <script type="text/javascript" src="revolution/js/extensions/revolution.extension.parallax.min.js"></script>          
      <!-- Include all compiled plugins (below), or include individual files as needed -->
      <script src="js/bootstrap.min.js"></script>
      <script src="js/menuzord.js"></script>
      <script src="js/owl.carousel.min.js"></script>
      <script src="js/jquery.counterup.js"></script> 
      <script src="js/waypoints.min.js"></script> 
      <script src="js/countdown.js"></script> 
      <script src="js/parallax.min.js"></script>      
      <script src="js/jquery.bootFolio.js"></script>
      <script src="js/jquery.magnific-popup.js"></script>
      <script src="https://maps.googleapis.com/maps/api/js"></script>       
      <script src="js/jquery-ui.js"></script>
      <script src="js/rev-function.js"></script>     
      <script src="js/smoothscroll.js"></script>      
      <script src="js/jquery.matchHeight.js"></script>       
      <script src="js/main.js"></script>      
      <script src="js/slick.min.js"></script> 
      <script src="js/custom-slider.js"></script> 
      <script src="js/change-logo.js"></script>   
   </body>
</html>