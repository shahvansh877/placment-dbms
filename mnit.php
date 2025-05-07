<?php include('server.php'); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SRM University</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/png" href="Images/srmlogo.png">
    
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="stl.css">

    
</head>

<body>

<div class="page-container">
    <div class="bloc bg-repeat bgc-ghost-white l-bloc" id="bloc-0">
        <div class="container bloc-sm">
            <div class="row">
                <div class="col-sm-12">
                    <div class="logo">
                        <a href="mnit.php"><img src="Images/srmlogo.png" alt="SRM University" class="head-logo" height="60" align="left"></a>
                    </div>
                    <h4 class="tc-black mg-sm">
                        <a class="ltc-black" href="mnit.php">Training &amp; Placement Cell</a>
                    </h4>
                    <h6 class="mg-clear tc-1">
                        <a class="pull-left" href="https://www.srmist.edu.in/" target="_blank"> S.R.M Institute of Science and Technology</a><br>
                    </h6>
                </div>
            </div>
        </div>
    </div>

    <div class="bloc b-divider l-bloc bgc-white" id="bloc-1">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <ul class="list-unstyled list-horizontal-layout right-align">
                        <div class="navi"><a href="company.php">Company</a></div>
                        <div class="navi"><a href="student.php">Student</a></div>  
                        <div class="navi"><a href="admin.php">Admin</a></div>
                    </ul>
                </div>
            </div>
        </div>
    </div>

	<div class="slides">
    <div class="slideshow-container">
        <div class="mySlides fade">
            <div class="numbertext">1 / 3</div>
            <img src="Images/srm.jpg" class="slide-img">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">2 / 3</div>
            <img src="Images/maingate.jpg" class="slide-img">
        </div>

        <div class="mySlides fade">
            <div class="numbertext">3 / 3</div>
            <img src="Images/srmmm1.png" class="slide-img">                
        </div>
    </div>
</div>

        <br>

        <div style="text-align:center">
            <span class="dot"></span> 
            <span class="dot"></span> 
            <span class="dot"></span> 
        </div>
    </div>

    <div class="col-sm-2">
        <h4 class="mg-md bloc-mob-center-text tc-dim-gray">
        <a href="https://drive.google.com/file/d/1IYK0JQQvqU3zD1aBBfJE_CwY8q-rlkcE/view?usp=drive_link"  class="a-btn a-block bloc-mob-center-text" target="blank" >Placement and Training Policy</a>
        <a href="https://www.srmist.edu.in/placements/placement-statistics/" class="a-btn a-block bloc-mob-center-text" target="blank">Previous Placement and Internship Report</a><br>
        </h4>
    </div>

    <div class="bloc b-divider bgc-ghost-white l-bloc" id="bloc-63">
        <div class="container bloc-md">
            <div class="row">
                <div class="col-sm-2"></div>
                <div class="col-sm-1">
                    <h4 class="mg-md bloc-mob-center-text tc-dim-gray">
                    <a class="a-btn a-block bloc-mob-center-text" href="https://www.srmist.edu.in/" target="_blank">About Us</a>
                    <a class="a-btn a-block bloc-mob-center-text" href="mailto:admissions.india@srmist.edu.in">Contact Us</a>
                    </h4>
                </div>
                <div class="col-sm-4">
                    <h3 class="mg-md text-right tc-dim-gray">Training &amp; Placement Office</h3>
                    <p class="text-right">
                        SRM Nagar, Kattankulathur - 603 203<br>Chengalpattu District, Tamil Nadu<br>
                    </p>
                    <p class="footer3">
    <strong>Phone</strong> <br>
    <a href="tel:+914427417000">+91-44-27417000</a> <br>
    <a href="tel:+914427417777">+91-44-27417777</a>
</p>

                    <p class="footer4">
                        <strong>Email</strong> <br><a href="mailto:placements@srmist.edu.in">placements@srmist.edu.in</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

</div> <!-- End of page-container -->

<!-- JavaScript -->
<script>
    var slideIndex = 0;
    showSlides();

    function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        var dots = document.getElementsByClassName("dot");
        for (i = 0; i < slides.length; i++) {
            slides[i].style.display = "none";  
        }
        slideIndex++;
        if (slideIndex > slides.length) { slideIndex = 1 }    
        for (i = 0; i < dots.length; i++) {
            dots[i].className = dots[i].className.replace(" active", "");
        }
        slides[slideIndex - 1].style.display = "block";  
        dots[slideIndex - 1].className += " active";
        setTimeout(showSlides, 3000); // Change image every 3 seconds
    }
</script>

<!-- jQuery (Make sure jQuery is included before running jQuery scripts) -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $("button").click(function() {
            $('html, body').animate({
                scrollTop: $(".alumni").offset().top
            }, 'slow');
        });
    });
</script>

</body>
</html>
