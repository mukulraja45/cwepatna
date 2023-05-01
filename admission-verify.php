<!DOCTYPE html>
<html lang="en">
<head>
    <!-- ========== Meta Tags ========== -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Education ">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <!-- ========== Page Title ========== -->
    <title>certifacte verify | Computer Warriors Education Pvt. Ltd.</title>
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

    <link href="https://fonts.googleapis.com/css?family=Open+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700,800" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="assets/css/styl.css">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<style type="text/css">body {-webkit-print-color-adjust: exact; font-family: Arial; } img{display:visible}</style>
<style>

.pname{
    position: relative;
    left:111px;
    right: 0;
    top: -628px;
    width: 69%;
    font-size: 40px;
    color: #060606;
    position: absolute;
  font-family: 'Times New Roman', serif;
}
.fname{
   position: relative;
    left: 111px;
    right: 0;
    top: -517px;
    width: 69%;
    font-size: 40px;
    color: #060606;
    position: absolute;
    font-family: 'Times New Roman', serif;
}
.regno{
   position: relative; 
    left: 111px;
    right: 0;
    top: -350px;
    width: 100%;
    font-size: 20px;
    color: #060606;
     position: absolute;
    font-family: 'Times New Roman', serif;
 }
 .course{
    position: relative;
    left: 111px;
    right: 0;
    top: -435px;
    width: 150%;
    font-size: 20px;
    color: #060606;
    position: absolute;
    font-family: 'Times New Roman', serif;
}
 
 .duration{
    position: relative; 
    left: 111px;
    right: 0;
    top: -262px;
    width: 69%;
    font-size: 40px;
    color: #060606;
     position: absolute;
    font-family: 'Times New Roman', serif;

 }
 .profile{
    position: relative; 
    left: 98px;
    right: 0;
    top:-312px;
    width: 68%;
    color: #060606;
    position: absolute;
   font-family: 'Times New Roman', serif;
 height: 855px;
 }         
</style>
<body>
    <?php include "common/top_header.php"; ?>
    <header id="home">
        <!-- Start Navigation -->
        <?php include "common/header.php"; ?>
        <!-- End Navigation -->
    </header>
    <div class="breadcrumb-area shadow dark text-center bg-fixed text-light" style="background-image: url(assets/img/banner/2.jpg);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Certificate verify</h1>
                    <ul class="breadcrumb">
                        <li><a href="#"><i class="fas fa-home"></i> Home</a></li>
                        <li><a href="#">Computer Warriors </a></li>
                        <li class="active">Computer Warriors</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
 <?php
  $studentinfo=FALSE;
    if(isset($_REQUEST['bresult']))
    {
        if(isset($_POST['rollno']) && $_POST['rollno']!="")
            $rol=$_POST['rollno'];
        else
             $rol=$_POST['mobileno'];
        $studentinfo=$dat->getstudentinfo($rol);
        $studentinfo=$studentinfo==FALSE?FALSE:$studentinfo['single_row'];
    }
?>
    <!-- Start Course Details 
    ============================================= -->
   <div class="container">
      <div class="container">    
        <div id="loginbox" style="margin-top:50px;" class="mainbox col-md-5 col-md-offset-4 col-sm-7 col-sm-offset-3">                    
            <div class="panel panel-primary" >
                    <div class="panel-heading">
                        <div class="panel-title text-center"><i class="fa fa-sign-in" aria-hidden="true"></i> Computer Warriors
                        </div>  
                            
                    </div>     
                    <div style="padding-top:30px" class="panel-body <?php echo $studentinfo==FALSE?'visible':'hidden';?>" >
                        <div style="display:none" id="login-alert" class="alert alert-danger col-sm-12"></div>       
                        <form class="form-horizontal" role="form" action="" method="POST">
                                    
                            <div style="margin-bottom: 25px" class="input-group col-sm-offset-3 col-sm-7">
                                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                <input  type="text" class="form-control input-sm" name="rollno" value="" placeholder="Roll No/ Registration No">                                        
                             </div>

                                <h5 align="center" style="color:#FF0000; font-family:'Times New Roman', Times, serif"> OR </h5><br>
                                
                            <div style="margin-bottom: 25px" class="input-group col-sm-offset-3 col-sm-7">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-phone"></i></span>
                                        <input type="text" class="form-control input-sm" name="mobileno" placeholder="Mobile No">
                            </div>

                                <div style="margin-top:10px" class="form-group">

                                    <div class="col-sm-12 controls text-center">
                                      <button  type="submit" class="btn btn-primary btn-sm" name="bresult"> Result <i class="fa fa-sign-in" aria-hidden="true"></i>
                                       </button>
                                     
                                    </div>
                                </div>

                        </form>


                        </div>                     
                    </div> 
                </div>
    <div class="col-md-offset-1 col-md-11  <?php echo $studentinfo==FALSE?'hidden':'visible';?>">        
    <div class="" id="myfrm">
      <img src="assets/icard.jpeg" style="background-repeat: no-repeat; width: 95%;">
        <div style="position: relative;">  
           <div class="profile" style="margin-top:-701px;margin-left:224px;">
           <img style="height:41%; width: 46%;" src="admin/classfile/slider/<?php echo $studentinfo['upload_photo']; ?>">
           </div>       
           <div class="pname" style="margin-top:47px;margin-left:261px; font-size: 30px;"><?php echo ucfirst($studentinfo['s_name']);?></div>
           <div  class="fname" style="margin-top:22px;margin-left:261px;font-size: 30px;"><?php echo ucfirst($studentinfo['f_name']);?></div>
            <div  class="regno" style="margin-top:28px;margin-left:261px; font-size: 30px;"><?php echo ucfirst($studentinfo['course_nm']);?></div>
           <div class="course" style="margin-top:27px;margin-left:261px; font-size: 30px;"><?php echo ucfirst($studentinfo['reg_no']);?></div>
           <div class="duration" style="margin-top:28px;margin-left:261px; font-size: 30px;"><?php echo ucfirst($studentinfo['Duration']); ?></div> 
             
         </div>  
    </div>
     <center>
    <button  type="button" style="margin-left:-134px; margin-top: 40px; margin-bottom: 90px; margin-bottom: 5px;" onclick="myPrint('myfrm')" class="btn btn-danger btn-sm" name="bresult" download> print <i class="fa fa-print" aria-hidden="true"></i>
    </button>
    </center>
</div>       
    </div>  
</div>
   <?php include "common/footer.php"; ?>
<script>
        function myPrint(myfrm) {
            var printdata = document.getElementById(myfrm);
            newwin = window.open("");
            newwin.document.write(printdata.outerHTML);
            newwin.print();
            newwin.close();
        }
    </script>
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
    <script src="assets/js/add.js"></script>   
</body>
</html>