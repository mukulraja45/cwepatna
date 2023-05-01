
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Examin - Education and LMS Template">

    <!-- ========== Page Title ========== -->
   <title>Course Details | Computer Warriors Education Pvt. Ltd.</title>

    <!-- ========== Favicon Icon ========== -->
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

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
 <link rel="stylesheet" type="text/css" href="assets/css/styl.css">
   
</head>

<body>

   
    <?php include "common/top_header.php"; ?>
    <!-- End Header Top -->

    <!-- Header 
    ============================================= -->
    <header id="home">

        <!-- Start Navigation -->
        <?php include "common/header.php"; ?>
        <!-- End Navigation -->

    </header>
    <!-- End Header -->

    <!-- Start Breadcrumb 
    ============================================= -->
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(assets/img/banner/2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Course Details</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Course</a></li>
                        <li class="active">Single</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb -->
<?php
    if(isset($_GET['id']))
    {
        $courseinfo=$dat->getnewcoursedata($_GET['id']);
        $courseinfo= $courseinfo==FALSE?FALSE: $courseinfo['single_row'];
    }
?>
    <!-- Start Course Details 
    ============================================= -->
    <div class="course-details-area default-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="course-details-info">
                        <!-- Star Top Info -->
                        <div class="top-info">
                            <!-- Title-->
                            <div class="title">
                                <h2><span><?php echo $courseinfo['course_name'];?></span></h2>
                            </div>
                            <!-- End Title-->

                            <!-- Thumbnail -->
                            <div class="thumb">
                                <img src="admin/classfile/slider/<?php echo $courseinfo['image'];  ?>" alt="Thumb">
                            </div>
                            <!-- End Thumbnail -->

                            <!-- Course Meta -->
                            <div class="course-meta">
                                
                                <div class="item category">
                                    <h4>Category</h4>
                                    <a href="#"><?php echo $courseinfo['cat_course']; ?></a>
                                </div>
                                
                                <div class="item price">
                                    <h4>Price</h4>
                                    <span><i class="fas fa-rupee-sign"></i> <?php echo $courseinfo['total_fee']; ?></span>
                                </div>

                                <div class="align-right">
                                    <a class="btn btn-dark effect btn-sm" href="#">
                                        <i class="fas fa-chart-bar"></i> Enroll
                                    </a>
                                </div>
                            </div>
                            <!-- End Course Meta -->
                        </div>
                        <!-- End Top Info -->

                        <!-- Star Tab Info -->
                        <div class="tab-info">
                            <!-- Tab Nav -->
                            <ul class="nav nav-pills">
                                <li class="active">
                                    <a data-toggle="tab" href="#tab1" aria-expanded="true">
                                       Important Topic
                                    </a>
                                </li>
                                <!--<li>
                                    <a data-toggle="tab" href="#tab2" aria-expanded="false">
                                        Curriculum
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab3" aria-expanded="false">
                                        Advisor
                                    </a>
                                </li>
                                <li>
                                    <a data-toggle="tab" href="#tab4" aria-expanded="false">
                                        Reviews
                                    </a>
                                </li>-->
                            </ul>
                            <!-- End Tab Nav -->
                            <!-- Start Tab Content -->
                            <div class="tab-content tab-content-info">
                                <!-- Single Tab -->
                                <div id="tab1" class="tab-pane fade active in">
                                    <div class="info title">
                                        <h4>Topic List</h4>
                                        <ul class=" list-icon-2" style="list-style: circle;">
                                        <?php 
                                            $topiclist=explode(',',$courseinfo['short_des']); 
                                            if(sizeof($topiclist)>0)
                                            {
                                                foreach($topiclist as $list)
                                                {
                                        ?>
                                        
                                            <li  class="mb-2"><b>>></b>&nbsp;<?php echo $list;?></li>
                                        
                                        <?php
                                                }
                                            }
                                            else
                                                echo "No topic available";
                                        ?>
                                       </ul>
                                    </div>
                                </div>
                                
                                <!-- End Single Tab -->
                            </div>
                            <!-- End Tab Content -->
                        </div>
                        <!-- End Tab Info -->
                    </div>
                </div>
                <!-- Start Sidebar -->
                <div class="col-md-4">
                    <div class="sidebar">
                        <aside>
                            <!-- Sidebar Item -->
                            <div class="sidebar-item search">
                                <div class="sidebar-info">
                                    <form>
                                        <input type="text" placeholder="Course name" class="form-control">
                                        <input type="submit" value="search">
                                    </form>
                                </div>
                            </div>
                            <!-- End Sidebar Item -->

                            <!-- Sidebar Item -->
                            <div class="sidebar-item category" style="background-color: #FFAE27;width: 100%; height: 200%;">
                                
                                <div class="sidebar-widget" >
                                   <div class="single-sidebar-widget">
                                        <h3 class="sidebar-title" style="color: white; text-align: center;">Courses Information </h3>
                                        <ul class="course-menu" style="padding: 25px 20px; background: #f1f1f1;">
                                            <li>Category:<span><?php echo $courseinfo['cat_course']; ?></span></li>
                                            
                                            
                                        <li>Course Name :<span><?php echo $courseinfo['course_name']; ?></span></li>
                                            
                                            
                                            
                            <li> Course Fee :<span><i class="fas fa-rupee-sign"></i><?php echo $courseinfo['total_fee']; ?></span></li>
                                            <li>Study  Materials:<span>E-Book<br>Certificate </span></li>
                                            
                                            
                                        </ul> 
                                    </div>
                             </div>
                            </div>
                            <!-- End Sidebar Item -->

                            <!-- Sidebar Item -->
                            <div class="sidebar-item recent-post">
                                <div class="title">
                                    <h4>Popular Courses</h4>
                                </div>
                                

                                <?php
                          if($categorylist!=FALSE)
                          {
                              foreach($categorylist['total_row'] as $catc)
                              {
                                $id=$catc['id'];
                                ?>
                                <div class="item">
                                    <div class="content">
                                        <div class="thumb">
                                            <a href="our_course.php?id=<?php echo $id; ?>">
                                                <img src="admin/classfile/slider/<?php echo $catc['image']; ?>" alt="course" style="height: 100%;">
                                            </a>
                                        </div>
                                        <div class="info">
                                            <h4>
                                                <a href="our_course.php?id=<?php echo $id; ?>"><?php echo $catc['cat_course']; ?></a>
                                            </h4>
                                            <div class="rating">
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star"></i>
                                                <i class="fas fa-star-half-alt"></i>
                                                <span>4.5 (23,890)</span>
                                            </div>
                                           <!-- <div class="meta">
                                                <i class="fas fa-user"></i> By <a href="#">Drup Paul</a> 
                                            </div>-->
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
                            <!-- End Sidebar Item -->

                        </aside>
                    </div>
                </div>
                <!-- End Sidebar -->
            </div>
        </div>
    </div>
    <!-- End Course Details -->

    <!-- Start Footer 
    ============================================= -->
   <?php include "common/footer.php"; ?>
    <!-- End Footer -->
<div id="myModal" class="modal fade" role="dialog" style="display: none;">
      <div class="modal-dialog">
    
        <!-- Modal content-->
        <div class="modal-content">
          <div class="modal-header bg-theme-colored2">
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

<!-- Mirrored from webhunt.store/themeforest/examin/course-details.html by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Apr 2021 11:35:41 GMT -->
</html>