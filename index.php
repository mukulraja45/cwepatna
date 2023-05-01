
<?php
    if(isset($_REQUEST['sent']))
    {
        $nm=$_POST['cpname'];
        $email=$_POST['cpemail'];
        $mob=$_POST['cpphone'];
        $sub=$_POST['cpmessage'];
        $msg="Name: $nm\n\rEmail: $email\n\rMobile: $mob\n\rSubject: $sub";
        mail("mukulkumarraja2000@gmail.com","Enquiry",$msg);
        echo "<script>alert('Thank You for contact us, we will contact  you shortly');</script>";
        echo "<script>location.href='index.php'</script>";
    }
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Examin - Education and LMS Template">
    
    <!-- ========== Page Title ========== -->
    <title>Home | Computer Warriors Education Pvt. Ltd.</title>
     <link rel="shortcut icon" href="assets/qr-logo.png" type="image/x-icon">
   
    <!-- ========== Start Stylesheet ========== --> 
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/font-awesome.min.css" rel="stylesheet" />
    <link href="assets/css/flaticon-set.css" rel="stylesheet" />
    <link href="assets/css/magnific-popup.css" rel="stylesheet" />
    <link href="assets/css/owl.carousel.min.css" rel="stylesheet" />
    <link href="assets/css/owl.theme.default.min.css" rel="stylesheet" />
    <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/bootsnav.css" rel="stylesheet" />
    <link href="style.css" rel="stylesheet">
    <link href="assets/css/responsive.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="assets/css/styl.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">    

    <!-- ========== Google Fonts ========== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
   
 <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>

</head>

<body>
    <?php include "common/top_header.php"; ?>
        <!-- Start Navigation -->
        <?php include "common/header.php"; ?>
        <!-- End Navigation -->
<section id="home">
  <div class="w3-content w3-section" style="max-width:100%; max-height:80%">
   <?php
      if($sliderlist!=FALSE)
      {
          foreach($sliderlist['total_row'] as $slid)
          {
            ?>
  <img class="mySlides" src="admin/classfile/slider/<?php echo $slid['sbi'];?>" style="width:100%;transition-duration: 60s;
  transition-delay: 60s;">
  <?php
        }
    }
    else
    {
        echo "slider not found";
    }
?>
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>
</section>
    <!-- End Banner -->
  <!-- Start Our Features Latest Post
    ============================================= -->
 <div class="about-area default-padding" style="background-color: white;">
                 <?php
                          if($aboutlist!=FALSE)
                          {
                              foreach($aboutlist['total_row'] as $abo)
                              {
                                ?>
       
        <div class="container">
            <div class="row">
                <div class="about-info">
                    <div class="col-md-6 thumb">
                        <img src="admin/classfile/slider/<?php echo $abo['image']; ?>" alt="Thumb">
                    </div>
                    <div class="col-md-6 info">
                        <h5>About Us</h5>
                        <h2 class="title" style="font-family: 'Times New Roman', serif;">Specialist <span>Education Solution</span> Institute</h2> 

                         <p style="font-family: 'Times New Roman', serif;">
                            <?php echo $abo['Description']; ?>
                        </p>
                       
                        <!--<p><ul class="list-inline list-icon-2 text-black" style="animation:opacitychange 1s ease-in-out infinite;">
                                <li class="mb-2">Web designing in a powerful way of only professions</li>
                                <li class="mb-2">We Are India Best Education Solution Institute</li>
                                <li>Educational Solution with 5 years of experience</li>
                            </ul>
                        </p>-->
                                            
                     </div>
                </div>
                
            </div>
        </div>
         <?php
                            }
                        }
                        else
                        {
                            echo "About not found";
                        }
                    ?>
    </div>

<div class="services-prices" style="background: #54ccb5;">

                            <div class="container">
                                <div class="servicesprices-grids">
                                    <div class="col-md-4 servicesprices-grid">
                                        <div class="services-price"><a href="seo.html">
                                    <div class="Consulting">
                                            <h4>News & Offers</h4>
                                    </div>
                                </a>
                 <marquee direction="up" height="300" scrollamount="3" font="" size="4"  style="color: #FFFFFF; border-radius: 10px;" onmouseover="this.stop();" onmouseout="this.start();"> 
                        <ul class="text-center">
                           
                                <li class="marque" style="color: yellow; font-size: 25px">Admission is going on</li>
                      <?php
                          if($noticelist!=FALSE)
                          {
                              foreach($noticelist['total_row'] as $nt)
                              {
                                ?>
                                <li class="marque"><?php echo $nt['title']; ?></li>
                                  
                           <?php
                            }
                        }
                        else
                        {
                            echo "news not found";
                        }
                    ?>

                            </ul>
                 </marquee>    
            </div>
             </div>
             <br>
            <div class="col-md-4 servicesprices-grid">
                <div class="services-price">
                    <div class="Consulting">
                        <h4>Upcomig Batch</h4></div>
                <marquee direction="up" height="300" scrollamount="3" font="" size="4"  onmouseover="this.stop();" onmouseout="this.start();"> 
                      <?php
                          if($noticelist!=FALSE)
                          {
                              foreach($noticelist['total_row'] as $nt)
                              {
                                ?>
                    <spam style="padding:15px; color:yellow;"><?php echo $nt['descripsion']; ?></spam> <br><br> 
                 <?php
                            }
                        }
                        else
                        {
                            echo "Upcomig Batch not found";
                        }
                    ?>

             </marquee>
                </div>
                     </div>
                     <br>
                                    
           <div class="col-md-4 servicesprices-grid">
                <div class="services-price">
                    <div class="Consulting"><h4>ENQUIRY</h4></div>
                       <form action="thankyou.php" method="POST" onsubmit="return enquiry_now()">
                         
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Name*" type="text" name="nm">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Email*" type="email" name="email">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <input class="form-control" placeholder="Phone*" type="text" name="phone">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <textarea class="form-control" placeholder="Subject*" name="sub"></textarea>
                                        </div>
                                    </div>
                                   
                                        <div class="col-md-12">
                                             <div class="contact-form-style mb-10">
                                                <input type="submit"  class="button-default" name="btn" value="Enquiry Now">
                                             </div>
                                        </div>
                                
                                </div>
                            </form>
                              
                                 </div>
                                    </div>
                                    
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                        </div>



<section class="layer-overlay overlay-theme-colored-9 parallax" style="background: url(assets/edu.jpg);"> 
    <div class="container pb-30 pt-30"> 
        <div class="section-content">
         <div class="row"> 
            <div class="col-xs-12 col-sm-6 col-md-4"> 
                <h2 class="text-white" style="font-family: 'Times New Roman', serif;"> Computer Warriors Education Certification</h2>
                 <p class="text-white" style="font-family: 'Times New Roman', serif;">We provide 5 types of certificates according to your profile.</p>
                 <h4 class="text-white">
                    <i class="fa fa-check"></i>
                     Domain Expert Ceritificate</h4> 
                     <h4 class="text-white"><i class="fa fa-check"></i> Merit Ceritificate</h4>
                      <h4 class="text-white"><i class="fa fa-check"></i> Certificate of Participation</h4>
                       <h4 class="text-white"><i class="fa fa-check"></i> Certificate of Completion </h4> 
                       <h4 class="text-white"><i class="fa fa-check"></i> Project Certificate</h4>
                        <hr> <h4 class="text-white"><button class="btn btn-success"><a href="admission-verify.php" style="color: white;">Verify Admission</a></button> </h4>
                        
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4"> 
                        <img src="assets/certi.jpeg" alt="computer worrior Certificate"><hr><br>
                        <h5 class="text-white"><button class="btn btn-primary"><a href="marksheet-verify.php" style="color: white;">Download Marksheet</a></button> </h5>
                          <h5 class="text-white"><button class="btn btn-success"><a href="certificate-verify.php" style="color: white;">Download Certificate</a></button> </h5>
                    </div>
                    <div class="col-xs-12 col-sm-6 col-md-4"> 
                        <img src="assets/marksheet.jpeg" alt="computer worrior Certificate"> 

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Start Top Categories 
    ============================================= -->
    <div class="top-cat-area inc-trending-courses about-area default-padding" >
        <div class="container">
            <div class="row">
                <div class="col-md-8 top-cat-items text-light inc-bg-color text-center">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 equal-height">
                            <div class="item mariner" style="background-image: url(assets/img/category/1.jpg);">
                                <a href="#">
                                    <i class="fa fa-desktop"></i>
                                    <div class="info">
                                        <h4>Best Lap</h4>
                                        
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 equal-height">
                            <div class="item java" style="background-image: url(assets/img/category/2.jpg);">
                                <a href="#">
                                   <i class="fas fa-chalkboard-teacher"></i>
                                    <div class="info">
                                        <h4>Certified Teacher</h4>
                                                                            </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 equal-height">
                            <div class="item malachite" style="background-image: url(assets/img/category/3.jpg);">
                                <a href="#">
                                    <i class="flaticon-conveyor"></i>
                                    <div class="info">
                                        <h4>Test Your Brain</h4>
                                        
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 equal-height">
                            <div class="item brilliantrose" style="background-image: url(assets/img/category/4.jpg);">
                                <a href="#">
                                    <i class="flaticon-education"></i>
                                    <div class="info">
                                        <h4>Expert Faculty</h4>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 equal-height">
                            <div class="item casablanca" style="background-image: url(assets/img/category/5.jpg);">
                                <a href="#">
                                    <i class="flaticon-potential"></i>
                                    <div class="info">
                                        <h4>Trending Courses </h4>
                                        
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6 equal-height">
                            <div class="item emerald" style="background-image: url(assets/img/category/6.jpg);">
                                <a href="#">
                                    <i class="flaticon-print"></i>
                                    <div class="info">
                                        <h4>Books & Library</h4>
                                        
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> 
                <!-- End Top Category -->

                <!-- End Home Sidebar -->
                <div class="col-md-4 home-sidebar">
                    <!-- Start Trending Courses -->
                    <div class="sidebar-item trending-courses-box">
                        <h4>Trending Courses</h4>
                        <div class="trending-courses-items">
                        
                           <?php
                          if($categorylist!=FALSE)
                          {
                              foreach($categorylist['total_row'] as $Course)
                              {
                                ?>
                            <div class="item">
                                <div class="content">
                                    <div class="thumb">
                                        <a href="#">
                                            <img src="admin/classfile/slider/<?php echo $Course['image']; ?>" alt="Thumb">
                                        </a>
                                    </div>
                                    <div class="info">
                                        <h4>
                                            <a href="#"><?php echo $Course['cat_course']; ?></a>
                                        </h4>
                                        
                                        <div class="meta">
                                         <i class="fa fa-angle-double-right"></i><a href="our_course.php" class="text-success"> <b>Know More...</b></a> 
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            }
                        }
                        else
                        {
                            echo " Courses IS Not Found";
                        }
                        ?>
                           
                            
                            <a href="our_course.php" class="more">Browse All Crouses <i class="fa fa-angle-double-right"></i></a>
                        </div>
                    </div>
                    <!-- End Trending Courses -->
                </div> 
                <!-- End Home Sidebar -->

            </div>
        </div>
    </div>
    <!-- End Top Categories -->
     <div class="fun-factor-area default-padding bottom-less text-center bg-fixed shadow dark-hard" style="background-image: url(assets/img/banner/2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-contract"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="3" data-speed="5000"></span>
                            <span class="medium">Our Branches</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-professor"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="10" data-speed="5000"></span>
                            <span class="medium">Best Teachers</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-online"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="1900" data-speed="5000"></span>
                            <span class="medium">Students Enrolled</span>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item">
                    <div class="fun-fact">
                        <div class="icon">
                            <i class="flaticon-reading"></i>
                        </div>
                        <div class="info">
                            <span class="timer" data-to="51" data-speed="5000"></span>
                            <span class="medium">Courses</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Start Advisor Area
    ============================================= -->
    <div class="popular-courses bg-gray default-padding without-carousel">
        <div class="container">
            <div class="row">
                <div class="site-heading text-center">
                    <div class="col-md-8 col-md-offset-2">
                        <h2> Our Popular Courses</h2>
                       
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="popular-courses-items bottom-price">
                    
                    <!-- Single Item -->
                    <?php
                          if($categorylist!=FALSE)
                          {
                              foreach($categorylist['total_row'] as $Course)
                              {
                                ?>
                     
                   <div class="col-md-4 col-sm-6 equal-height">
                        <div class="item">
                            <div class="thumb">
                                <a href="our_course.php">
                                    <img src="admin/classfile/slider/<?php echo $Course['image']; ?>" alt="Thumb">
                                </a>
                                <div class="overlay">
                                    <a class="btn btn-theme effect btn-sm" href="our_course.php">
                                        <i class="fas fa-chart-bar"></i> Our Total Course
                                    </a>
                                </div>
                            </div>
                            <div class="info">
                                
                                <h4><a  href="our_course.php"><?php echo $Course['cat_course']; ?></a></h4>
                                                               <p style="text-align: justify">
                                   <?php echo $Course['short_des']; ?>
                                </p>
                                <div class="author-info">
                                
                                </div>
                                <ul class="course-meta list-inline mt-15"> 
                                    <li> <h6>Book</h6><span>Available</span></li>
                                    <li> <a href="our_course.php" class="text-success"> <b>Know More...</b></a> </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <?php
                            }
                        }
                        else
                        {
                            echo " Courses IS Not Found";
                        }
                    ?>
                   
                    
                    <!-- End Single Item -->
                    <!-- Single Item -->
                    
                    <!-- End Single Item -->

                    <div class="col-md-12 button text-center">
                        <a class="btn btn-dark effect circle btn-md" href="our_course.php">Browse All Courses</a>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
    
   <!--<div class="Features-section paddingTB60 ">
    <div class="container">
    
    <div class="row">
                        <div class="col-sm-6 col-md-3">
                            <div class="col-md-12 feature-box">
                                <span class="fa fa-certificate icon1"></span>
                                <h4>Certification Course</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sapien augue, dictum et gravida et, viverra et est.</p>
                                <button type="button" class="btn btn-primary site-btn"> Enquiry Now</button>

                            </div>
                        </div> 
                        <div class="col-sm-6 col-md-3">
                                <div class="col-md-12 feature-box">
                                <span class="fa fa-user icon1"></span>
                                <h4>Diploma Course</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sapien augue, dictum et gravida et, viverra et est. </p>
                                <button type="button" class="btn btn-primary site-btn">Enquiry Now</button>
                            </div>
                        </div> 
                        
                        <div class="col-sm-6 col-md-3">
                                <div class="feature-box">
                                <span class="glyphicon glyphicon-cog icon1"></span>
                                <h4>Short-Term Course</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sapien augue, dictum et gravida et, viverra et est. </p>
                                <button type="button" class="btn btn-primary site-btn">Enquiry Now</button>
                            </div>
                        </div> 
                        <div class="col-sm-6 col-md-3">
                                <div class="col-md-12 feature-box">
                                <span class=" fa fa-chalkboard-teacher icon1"></span>
                                <h4> Computer Training</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin sapien augue, dictum et gravida et, viverra et est. </p>
                                <button type="button" class="btn btn-primary site-btn">Enquiry Now</button>
                            </div>
                        </div>
                        
    
                    </div>
</div>
</div>-->
    <!-- Start Testimonials 
    ============================================= -->
    
    <!-- End Testimonials -->

    <!-- Start Blog 
    ============================================= -->
    
    <!-- End Blog -->

    <!-- Start Subscribe 
    ============================================= -->
    

    <!-- End Subscribe -->
   <div class="container hidden-sm hidden-xs">
    <div class="row">
        
    <div class="nb-form">
    <p class="title">Send a message</p>
    <div class="mylivechat_offline_logo" style=""><img class="mylivechat_offline_logo_img" alt="logo" src="https://s2.mylivechat.com/Customization/Template/InlineChatOfflineLogo_a1.png"></div>
   

    <form action="" method="POST">
      <input type="text" name="cpname" placeholder="Name:" required>
      <input type="email" name="cpemail" placeholder="Email:" required>
      <input type="tel" name="cpphone" placeholder="Phone:" required>
      <textarea name="cpmessage" placeholder="Message:" required></textarea>
      <input type="submit"  name="sent" value="Send message">
    </form>
  </div>
    </div>
</div>
    <!-- Start Footer 
    ============================================= -->
<?php include "common/footer.php"; ?>
<aside id="sticky-social">
    <ul style="color: white;">
        <li><a href="https://www.facebook.com/computerwarriorspatna/" class="entypo-facebook" target="_blank"><i style="color: white;" class="fa fa-facebook"></i><span>Facebook</span></a></li>
        <li><a href="https://www.instagram.com/computerwarriorspatna/" class="entypo-instagrem" target="_blank"><i style="color: white;" class="fa fa-instagram"></i><span>Instagram</span></a></li>
         <li><a href="tel:+919973431530" class="entypo-flickr"><i style="color: white;" class="fa fa-phone"></i><span>Call Us</span></a></li>
         <li><a href="#"class="entypo-stumbleupon" target="_blank"><i style="color: white;" class=" fa fa-map-marker"></i><span>Office</span></a></li>
    </ul>
</aside>
    <!-- End Footer -->
<div id="myModal" class="modal fade" role="dialog" style="display: none;">
      <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header " style="background-color: #00b2c3;">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h4 class="modal-title text-white">Enquiry For?</h4>
          </div>
          <div class="modal-body">
            <p id="msg" class="alert alert-success" align="center" style="display: none;">Enquiry has been sent!</p>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <img src="https://www.edustrom.com/public/assets/images/enquiry.jpg" alt="enquiry">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-12">
                    <form id="enquiryfrm" method="post" action="#" autocomplete="off" novalidate="novalidate">
                        <input type="hidden" name="_token" value="GAg3iFZZfQPaYg97ivBM7v4ArHSEvRJEENYO60w0">                        <div class="form-group">
                            <input type="text" name="fullname" class="form-control" placeholder="You Full Name" required="" aria-required="true">
                        </div>
                        <div class="form-group">
                            <select name="course_id" class="form-control" required="" aria-required="true">
                                <option value="">Select Course</option>
                            <option value="1">Hypertext Preprocessor (PHP)</option>
                            <option value="3">Graphic Designing</option>
                            <option value="4">Web Design</option>
                            <option value="5">Digital Marketing</option>
                            <option value="6">Laravel</option>
                            <option value="7">Web + Graphic Design</option>
                            <option value="8">Core Android</option>
                            <option value="9">Core &amp; Adv. Android</option>
                            <option value="10">Advanced Android</option>
                            <option value="11">Web Development with PHP</option>
                            <option value="20">Web Development with Python</option>
                            <option value="21">Basic Python</option>
                            <option value="23">Core Java</option>
                            <option value="25">Advanced Java</option>
                            <option value="26">Core &amp; Adv. Java</option>
                            <option value="27">SMO</option>
                            <option value="28">DTP</option> 
                            <option value="29">TALLY</option> 
                            <option value="30">EXCEL</option> 
                            <option value="31">ETHICAL HACKING</option> 
                            <option value="32">PROGAMMING</option> 

                        </select>
                        </div>
                        <div class="form-group">
                            <input type="text" name="phone" class="form-control numonly" placeholder="You 10 Digit Mobile No." required="" maxlength="10" minlength="10" aria-required="true">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email Id" name="email" required="" aria-required="true">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="form-control btn btn-success">
                        </div>
                    </form>
                </div>
            </div>
          </div>
        </div>
    
      </div>
</div>
    <!-- jQuery Frameworks
    ============================================= -->

    <script type="text/javascript">
        const signs = document.querySelectorAll('x-sign')
const randomIn = (min, max) => (
  Math.floor(Math.random() * (max - min + 1) + min)
)

const mixupInterval = el => {
  const ms = randomIn(2000, 4000)
  el.style.setProperty('--interval', `${ms}ms`)
}

signs.forEach(el => {
  mixupInterval(el)
  el.addEventListener('webkitAnimationIteration', () => {
    mixupInterval(el)
  })
})
    </script>
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/equal-height.min.js"></script>
    <script src="assets/js/jquery.appear.js"></script>
    <script src="assets/js/jquery.easing.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/modernizr.custom.13711.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/isotope.pkgd.min.js"></script>
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>
    <script src="assets/js/count-to.js"></script>
    <script src="assets/js/loopcounter.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/bootsnav.js"></script>
    <script src="assets/js/main.js"></script>

</body>

<!-- Mirrored from webhunt.store/themeforest/examin/index-2.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 11:40:03 GMT -->
</html>