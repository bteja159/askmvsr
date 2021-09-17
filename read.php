<?php
include "db.php";

$sql = "SELECT * FROM qs ORDER BY count DESC";
$result = mysqli_query($conn, $sql);
?>




<!DOCTYPE html>
<html>
<head>
  <!-- Site designed and developed by Bhanu Teja Pulipalupula,ITD,MVSREC & Tiruyavupati Sujanavan,Assistant Professor,CSED,MVSREC -->
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <title>ASK MVSR</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="shortcut icon" href="assets/images/bg2-204x128.png" type="image/x-icon">
  <meta name="description" content="READ">
  <title>READ</title>
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
  
  
  
</head>
<body>
<section id="ext_menu-9">

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

                    <ul class="nav-dropdown collapse pull-xs-right nav navbar-nav navbar-toggleable-sm" id="exCollapsingNavbar"><li class="nav-item"><a class="nav-link link" href="index.html">Home</a></li><li class="nav-item"><a class="nav-link link" href="about.html">About</a></li><li class="nav-item"><a class="nav-link link" href="howtouse.html">How to use</a></li></ul>
                    <button hidden="" class="navbar-toggler navbar-close" type="button" data-toggle="collapse" data-target="#exCollapsingNavbar">
                        <div class="close-icon"></div>
                    </button>

                </div>
            </div>

        </div>
    </nav>

</section>

<section class="engine"><a rel="external" href=".">ASK MVSR</a></section><section class="mbr-section mbr-after-navbar" id="testimonials4-a" style="background-color: rgb(0, 0, 0); padding-top: 120px; padding-bottom: 120px;">

    

        <div class="mbr-section mbr-section__container mbr-section__container--middle">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 text-xs-center">
                        <h3 class="mbr-section-title display-2">READ</h3>

                    </div>
                </div>
            </div>
        </div>   
        

     <div class="mbr-section mbr-section-nopadding">
        <div class="container">
            <div class="row">

                <div class="col-xs-12">

<?php
                    if (mysqli_num_rows($result) > 0) {
    // output data of each row
    while($row = mysqli_fetch_assoc($result)) {
?>

<font color=silver>&#9671</font>
<a href="answers.php?qid=<?php  echo $row["id"]."&q=".htmlspecialchars($row["q"]); ?>">

   <?php  echo "{$row["q"]}? <br> - <font color=silver>{$row["count"]} Answers</font>"; ?>  

<br><br>

</a>

<?php
        
    }
    
    ?>
                        

<br><br>
                        
                        
                    </div>

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


<?php
} else {
   // echo "0 results";
header("Location: error.html");
}

mysqli_close($conn);

?>