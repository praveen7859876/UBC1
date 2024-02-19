<?php

include('dbconnection.php');

    if(isset($_POST['submit']))
  {

    
 $name=$_POST['name'];
  $email=$_POST['email'];

 $massage=$_POST['massage'];
 $subject=$_POST['subject'];
  
 
$sql="insert into feedback(message,name,email,subject)values(:massage,:name,:email,:subject)";
$query=$dbh->prepare($sql);
$query->bindParam(':massage',$massage,PDO::PARAM_STR);
$query->bindParam(':name',$name,PDO::PARAM_STR);
$query->bindParam(':email',$email,PDO::PARAM_STR);
$query->bindParam(':subject',$subject,PDO::PARAM_STR);


 $query->execute();
   $LastInsertId=$dbh->lastInsertId();
   if ($LastInsertId>0) {
    echo '<script>alert("Your Feedback has been sent")</script>';
echo "<script>window.location.href ='home.php'</script>";
  }
  else
    {
         echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

}

?>
<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
   <meta charset="utf-8">
   <meta http-equiv="x-ua-compatible" content="ie=edge">
   <title>booking </title>
   <meta name="description" content="">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico">

  <!-- CSS here -->
      <link rel="stylesheet" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
      <link rel="stylesheet" href="assets/css/slicknav.css">
      <link rel="stylesheet" href="assets/css/animate.min.css">
      <link rel="stylesheet" href="assets/css/magnific-popup.css">
      <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
      <link rel="stylesheet" href="assets/css/themify-icons.css">
      <link rel="stylesheet" href="assets/css/slick.css">
      <link rel="stylesheet" href="assets/css/nice-select.css">
      <link rel="stylesheet" href="assets/css/style.css">
</head>

<body>
   <!-- Preloader Start -->
   <div id="preloader-active">
      <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
               <div class="preloader-circle"></div>
               <div class="preloader-img pere-text">
                  <img src="assets/img/logo/loder.jpg" alt="">
               </div>
            </div>
      </div>
   </div>
   <!-- Preloader Start-->
   <header>
      <!-- Header Start -->
      <div class="header-area">
            <div class="main-header ">
               <div class="header-top d-none d-lg-block">
                  <div class="container">
                        <div class="col-xl-12">
                           <div class="row d-flex justify-content-between align-items-center">
                                 <div class="header-info-left">
                                    <ul>     
                                       <li>Phone:  7899588124</li>
                                       <li>Email:  ubc@Gmail.com</li>
                                    </ul>
                                 </div>
                                 <div class="header-info-right">
                                   
                                 </div>
                           </div>
                        </div>
                  </div>
               </div>
               <div class="header-bottom  header-sticky">
                     <div class="container">
                        <div class="row align-items-center">
                           <!-- Logo -->
                           <div class="col-xl-2 col-lg-2">
                                 <div class="logo">
                                    <a href="index.html"><img src="assets/img/logo/logo.png" alt=""></a>
                                 </div>
                           </div>
                           <div class="col-xl-10 col-lg-10">
                                 <div class="menu-wrapper  d-flex align-items-center justify-content-end">
                                    <!-- Main-menu -->
                                    <div class="main-menu d-none d-lg-block">
                                       <nav> 
                                             <ul id="navigation">                                                                                          
                                                <li><a href="home.php">Home</a></li>
                                                
                                                <li><a href="services.html">Services</a></li>
                                              <li><a href="about.html">Gallery</a></li>
                                                <li><a href="contact1.php">Contact</a></li>
                                             </ul>
                                       </nav>
                                    </div>
                                    <!-- Header-btn -->
                                    <div class="header-right-btn d-none d-lg-block ml-20">
                                       <a href="book.php" class="btn header-btn">Book Here</a>
                                    </div>
                                     <div class="header-right-btn d-none d-lg-block ml-20">
                                    <a href="Logout.php" class="btn header-btn">Logout</a>
                                </div>
                                 </div>
                           </div> 
                           <!-- Mobile Menu -->
                           <div class="col-12">
                                 <div class="mobile_menu d-block d-lg-none"></div>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
      </div>
      <!-- Header End -->
  </header>
   <main>
      <!--? slider Area Start-->
      <div class="slider-area ">
         <div class="single-slider hero-overly slider-height2 d-flex align-items-center" data-background="assets/img/hero/about.jpg">
             <div class="container">
                 <div class="row">
                     <div class="col-xl-12">
                         <div class="hero-cap">
                             <h2 style="c">Contact</h2>
                             <nav aria-label="breadcrumb">
                          
                             </nav>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
     </div>
     <img src="08.png" width="350px" style="position:absolute; left:120px;top: 900px;">
     <!-- slider Area End-->
      <!--================Blog Area =================-->
      <div class="section-top-border">
        
          <div class="row">
            <div class="col-md-4">
              <div class="single-defination">
                <h4 class="mb-20">Phone Number</h4>
                <p>7899588124</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="single-defination">
                <h4 class="mb-20">Email</h4>
                <p>ubc@gmail.com</p>
              </div>
            </div>
            <div class="col-md-4">
              <div class="single-defination">
                <h4 class="mb-20">Address</h4>
                <p>dt road prabhu chal<br>Mundgod,uk</p>
              </div>
            </div>
            
          </div>
        </div>
      <section class="blog_area single-post-area section-padding">
    <center>     <section class="contact-form-area section-bg  pt-115 pb-120 fix" >
        <div class="container">
            <div class="row justify-content-end">
                <!-- Contact wrapper -->
                <div class="col-xl-8 col-lg-9">
                    <div class="contact-form-wrapper">
                        <!-- From tittle -->
                        <div class="row">
                            <div class="col-lg-12">
                                <!-- Section Tittle -->
                                <div class="section-tittle mb-50">
       
                                    <h2>Give FeedBack</h2>
                         
                                </div>
                            </div>
                        </div>
                        <!-- form -->
                        <form  class="contact-form" method="post">
                            <div class="row ">
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="feedback" name="massage" required="" pattern="[a-zA-Z\s]+">
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6">
                                    <div class="input-form">
                                        <input type="text" placeholder="Name"  name="name" required="" pattern="[a-zA-Z\s]+">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="text" placeholder="Email Id" name="email" required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$">
                                    </div>
                                </div>
                                  <div class="col-lg-12">
                                    <div class="input-form">
                                        <input type="text" placeholder="Subject" name="subject" required="" pattern="[a-zA-Z\s]+">
                                    </div>
                                </div>
                               
                                
                                <div class="col-lg-12">
                        
                                     <input type="submit" name="submit" value="Send" class="submit-btn"> 
                                </div>
                            </div>
                        </form>  
                    </div>
                </div>
            </div>
        </div>
    </section>
 </center>
      </section>
      <!--================ Blog Area end =================-->

   </main>
   <footer>
      <!--? Footer Start-->
      <div class="footer-area footer-bg">
         <div class="container">
              <div class="footer-top footer-padding">
                  <!-- footer Heading -->
                 
              <!-- Footer Bottom -->
              <div class="footer-bottom">
                  <div class="row d-flex align-items-center">
                      <div class="col-lg-12">
                          <div class="footer-copy-right text-center">
                       
                          </div>
                      </div>
                  </div>
              </div>
         </div>
      </div>
      <!-- Footer End-->
   </footer>
   <!-- Scroll Up -->
   <div id="back-top" >
         <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
   </div>

   <!-- JS here -->
		<!-- All JS Custom Plugins Link Here here -->
      <script src="./assets/js/vendor/modernizr-3.5.0.min.js"></script>
		<!-- Jquery, Popper, Bootstrap -->
		<script src="./assets/js/vendor/jquery-1.12.4.min.js"></script>
      <script src="./assets/js/popper.min.js"></script>
      <script src="./assets/js/bootstrap.min.js"></script>
	   <!-- Jquery Mobile Menu -->
      <script src="./assets/js/jquery.slicknav.min.js"></script>

		<!-- Jquery Slick , Owl-Carousel Plugins -->
      <script src="./assets/js/owl.carousel.min.js"></script>
      <script src="./assets/js/slick.min.js"></script>

		<!-- One Page, Animated-HeadLin -->
      <script src="./assets/js/wow.min.js"></script>
		<script src="./assets/js/animated.headline.js"></script>
      <script src="./assets/js/jquery.magnific-popup.js"></script>

		<!-- Nice-select, sticky -->
      <script src="./assets/js/jquery.nice-select.min.js"></script>
		<script src="./assets/js/jquery.sticky.js"></script>
        
      <!-- contact js -->
      <script src="./assets/js/contact.js"></script>
      <script src="./assets/js/jquery.form.js"></script>
      <script src="./assets/js/jquery.validate.min.js"></script>
      <script src="./assets/js/mail-script.js"></script>
      <script src="./assets/js/jquery.ajaxchimp.min.js"></script>
        
		<!-- Jquery Plugins, main Jquery -->	
      <script src="./assets/js/plugins.js"></script>
      <script src="./assets/js/main.js"></script>

</body>

</html>