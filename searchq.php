<!DOCTYPE html>
<html>
<head>
  <!-- Site designed and developed by Bhanu Teja Pulipalupula,ITD,MVSREC & Tiruyavupati Sujanavan,Assistant Professor,CSED,MVSREC -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>ASK MVSR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="shortcut icon" href="assets/images/bg2-204x128.png" type="image/x-icon">
  <meta name="description" content="ask">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic&amp;subset=latin">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat:400,700">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,400i,500,500i,600,600i,700,700i,800,800i,900,900i">
  <link rel="stylesheet" href="assets/bootstrap-material-design-font/css/material.css">
  <link rel="stylesheet" href="assets/tether/tether.min.css">
  <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="assets/dropdown/css/style.css">
  <link rel="stylesheet" href="assets/animate.css/animate.min.css">
  <link rel="stylesheet" href="assets/theme/css/style.css">
  <link rel="stylesheet" href="assets/mobirise/css/mbr-additional.css" type="text/css">
  
  <style>
body {background-color: black;}
</style>
  
</head>
<body>
<section id="ext_menu-3">

    <nav class="navbar navbar-dropdown navbar-fixed-top">
        <div class="container">

            <div class="mbr-table">
                <div class="mbr-table-cell">

                    <div class="navbar-brand">
                        <a href="." class="navbar-logo"><img src="assets/images/bg2-204x128.png" alt="Mobirise"></a>
                        <a class="navbar-caption" href=".">ASK MVSR</a>
                    </div>

                </div>
                <div class="mbr-table-cell">

                    <button class="navbar-toggler pull-xs-right hidden-md-up" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="hamburger-icon"></div>
                    </button>

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href=".">Home</a></li><li class="nav-item"><a class="nav-link link" href="about.html">About</a></li><li class="nav-item"><a class="nav-link link" href="howtouse.html">How to use</a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href=".">ASK MVSR</a></section><section class="mbr-section mbr-after-navbar" id="form1-4" style="background-color: rgb(0, 0, 0); padding-top: 120px; padding-bottom: 120px;">
    
    <div class="mbr-section mbr-section__container mbr-section__container--middle">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 text-xs-center">
                    <br><br>
                    <h3 class="mbr-section-title display-2">Trouble finding your question???</h3>
                    <small class="mbr-section-subtitle">Please enter a word in your question here...</small>
                </div>
            </div>
        </div>
    </div>
    <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">


                    <div data-form-alert="true">
                        <div hidden="" data-form-alert-success="true" class="alert alert-form alert-success text-xs-center">Thanks for filling out form!</div>
                    </div>




                         <input type="hidden" value="Qnlu9B5u5/xGbHE+jvuWFLm8RK/38kufjDsRodpvzV2pQwBl2Aytr6IrMFp2Vydvqq+nGRGK/Oi70+aRkwt16QP1xn0X74kRleO47keI7+7lnH2qdcTeLEQl1yMxQO9E" data-form-email="true">

                         
                            <div class="form-group">

        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-10 col-lg-offset-1" data-form-type="formoid">
                    <div data-form-alert="true"><div data-form-alert-success="true" hidden="">Thanks for filling out form!</div></div>



                    <form class="mbr-form" action="answersq.php" method="get" data-form-title="SEARCH">

                        <input class="hidden animated" value="b1fmyRTW0IwIPPnwpAcv1UoSRpQ8LEUOaKgVaK3Nk26IaK2T4FpawYMSz1MQdV+eYuHGBwQD+uXcuc+c+OBpdKTgK3wKsoz0cS7+vkQiv3wy3McQFdKh6cOJIyQw0MkS" data-form-email="true" type="hidden">
                     <!--   <div class="mbr-subscribe mbr-subscribe-dark input-group">   -->

 <div class="form-group">
                            <input list="service" class="form-control" name="qid" required="" data-form-field="Email" placeholder="Enter Your Search Keywords..." id="form1-8-phone">
                               </div>
                            
							 <datalist id="service">
<?php
include "db.php";

$sql = "SELECT * FROM qs";


$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
   ?>

    <option value="<?php echo $row['id']."~".$row['q']."~".$row['count']."Answers"; ?>" >
<?php
    }
} else {
    echo "0 results";
}

mysqli_close($conn);

?>
</datalist>
						
							
                        </div>
<br>
                                  <center>    <span class="input-group-btn"><button type="submit" class="btn btn-primary">Search</button></span></center>

                    </form>
                </div>
            </div>
        </div>
                                </div>
                            
                        
                        
                        
                     <div></div>
                        <br><br>

                 
                </div>
            </div>
        </div>
    </div>
</section>


  <script src="assets/web/assets/jquery/jquery.min.js"></script>
  <script src="assets/tether/tether.min.js"></script>
  <script src="assets/bootstrap/js/bootstrap.min.js"></script>
  <script src="assets/smooth-scroll/smooth-scroll.js"></script>
  <script src="assets/dropdown/js/script.min.js"></script>
  <script src="assets/touch-swipe/jquery.touch-swipe.min.js"></script>
  <script src="assets/viewport-checker/jquery.viewportchecker.js"></script>
  <script src="assets/theme/js/script.js"></script>
  
  
  
  <input name="animation" type="hidden">
  </body>
</html>