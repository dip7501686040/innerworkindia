<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Innerwork Portal | IT Services | Hr Services | Digital Marketing | Startup Support</title>
    <?php include "CommonFiles.php" ?>
    <link rel="stylesheet" href="css/home.css?version=1.1">
    <script src="js/wow.js"></script>
    <script>
        var wow = new WOW({
            boxClass: 'wow', // default
            animateClass: 'animated', // default
            offset: 0, // default
            mobile: true, // default
            live: true // default
        })
        wow.init();

        $(document).ready(function() {
            $(".service_dropdown").on('mouseenter', function() {
                $('.service_drop_menu').css('display', 'block')
            })
            $(".service_dropdown").on('mouseleave', function() {
                $('.service_drop_menu').css('display', 'none')
            })
        })
    </script>
    <style type="text/css">
        @-webkit-keyframes fadeInUp {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                -webkit-transform: translate3d(0, 100%, 0);
                transform: translate3d(0, 100%, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @-webkit-keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        @-webkit-keyframes fadeInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        @keyframes fadeInLeft {
            from {
                opacity: 0;
                -webkit-transform: translate3d(-100%, 0, 0);
                transform: translate3d(-100%, 0, 0);
            }

            to {
                opacity: 1;
                -webkit-transform: translate3d(0, 0, 0);
                transform: translate3d(0, 0, 0);
            }
        }

        .imgc {
            width: 50px;
            height: 50px;
        }

        @media (max-width: 480px) {
            .col-md-4 {
                margin-left: 5%;
            }
        }

        .cardshadow:hover {
            box-shadow: 5px 5px 5px 5px gray;
        }

        .fourth-content {
            padding: 5px;
            padding-top: 30px;
            width: 75%;
            margin: auto;
        }

        .fourth-content .container-fluid {
            padding-right: 15px;
            padding-left: 15px;
            width: 88%;
        }

        .fourth-content .container-fluid .col-md-4 {
            padding-right: 0px;
            padding-left: 0px;
        }

        .fourth-content .item {
            margin: 10px;
            position: relative;
            ;
        }

        .fourth-content .item img {
            max-width: 100%;
            overflow: hidden;
        }

        .fourth-content .item .thumb {
            position: relative;
        }

        .fourth-content .item .hover-effect {
            text-align: left;
            position: absolute;
            color: #fff;
            background-color: rgba(0, 0, 0, 0.95);
            bottom: 0;
            top: 0;
            left: 0;
            right: 0;
            opacity: 0;
            visibility: hidden;
            transition: all 0.8s;
        }

        .fourth-content .item:hover .hover-effect {
            opacity: 1;
            visibility: visible;
        }

        .fourth-content .item .hover-effect .hover-content {
            transform: translateY(-50%);
            position: absolute;
            text-align: left;
            width: 100%;
            top: 50%;
            left: 0;
            padding: 7%;
            padding-top: 35%;
        }

        .fourth-content .item .hover-effect h2 {
            font-size: 0.8vw;
            text-transform: uppercase;
            font-weight: 700;
            color: #fff;
            letter-spacing: 0.5px;
            border-bottom: 1px solid #fff;
            display: inline-block;
            padding-bottom: 10px;
            margin-bottom: 10px;
            margin-top: 0px;
        }

        @media screen and (orientation: portrait) {
            .fourth-content .item .hover-effect h2 {
                font-size: 100%;
                text-transform: uppercase;
                font-weight: 700;
                color: #fff;
                letter-spacing: 0.5px;
                border-bottom: 1px solid #fff;
                display: inline-block;
                padding-bottom: 10px;
                margin-bottom: 10px;
                margin-top: 0px;
            }

        }

        @media screen and (min-width: 600px) {
            .fourth-content .col-md-3 {
                width: 14%;
                padding-right: unset;
                padding-left: unset;
            }

        }
    </style>

    <style>
        .example {
            cursor: pointer;
            height: 200px;
            position: relative;
            overflow: hidden;
            width: 400px;
            float: left;
            text-align: center;
            margin-bottom: 20px;
        }

        .example .fadedbox {
            background-color: #666666;
            position: absolute;
            top: 0;
            left: 0;
            margin-left: 83px;
            color: #fff;
            -webkit-transition: all 300ms ease-out;
            -moz-transition: all 300ms ease-out;
            -o-transition: all 300ms ease-out;
            -ms-transition: all 300ms ease-out;
            transition: all 300ms ease-out;
            opacity: 0;
            width: 200px;
            height: 80px;
            padding: 130px 20px;
        }

        .example:hover .fadedbox {
            opacity: 0.8;
        }

        .example .text {
            -webkit-transition: all 300ms ease-out;
            -moz-transition: all 300ms ease-out;
            -o-transition: all 300ms ease-out;
            -ms-transition: all 300ms ease-out;
            transition: all 300ms ease-out;
            transform: translateY(30px);
            -webkit-transform: translateY(30px);
        }

        .example .title {
            font-size: 2.5em;
            text-transform: uppercase;
            opacity: 0;
            transition-delay: 0.2s;
            transition-duration: 0.3s;
        }

        .example:hover .title,
        .example:focus .title {
            opacity: 1;
            transform: translateY(0px);
            -webkit-transform: translateY(0px);
        }

        #corporateCounter {
            background-image: unset;
            background-color: black;
            background-attachment: fixed;
            padding: 4% 0;
        }

        @media (min-width: 768px) {
            .y {
                width: 20%;
            }
        }
    </style>

</head>

<body onload="notifyMe()">
    <?php include_once 'Header.php'; ?>

    <section id='main-body'>
        <section id="slider">
            <div class="container-fluid padNone">
                <div id="apnaCarousel" class="carousel slide" data-ride="carousel" data-interval="6000">

                    <ul class="carousel-indicators">
                        <li data-target="#apnaCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#apnaCarousel" data-slide-to="1" class=""></li>
                        <li data-target="#apnaCarousel" data-slide-to="2" class=""></li>
                        <li data-target="#apnaCarousel" data-slide-to="3" class=""></li>
                        <li data-target="#apnaCarousel" data-slide-to="4" class=""></li>
                        <li data-target="#apnaCarousel" data-slide-to="5" class=""></li>
                        <!--  <li data-target="#apnaCarousel" data-slide-to="6" class=""></li>
                <li data-target="#apnaCarousel" data-slide-to="7" class=""></li>
              <li data-target="#apnaCarousel" data-slide-to="8" class=""></li>-->


                    </ul>
                    <div class="carousel-inner">
                        <div class="item active">
                            <img src="img/r.jpeg" alt="" style="width:100%;">
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="item ">
                            <img src="Images/website banner-14.jpg" alt="" style="width:100%;">
                            <div class="carousel-caption">

                            </div>
                        </div>

                        <div class="item ">
                            <img src="Images/website banner- 7.jpg" alt="" style="width:100%;">
                            <div class="carousel-caption">

                            </div>
                        </div>
                        <div class="item ">
                            <img src="Images/website banner-5.jpg" alt="" style="width:100%;">
                            <div class="carousel-caption">
                            </div>
                        </div>

                        <div class="item ">
                            <img src="Images/website banner-6.jpg" alt="" style="width:100%;">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <div class="item ">
                            <img src="Images/website banner-12.jpg" alt="" style="width:100%;">
                            <div class="carousel-caption">
                            </div>
                        </div>
                        <!--  <div class="item ">
                    <img src="Images/web banners-06.jpg" alt="" style="width:100%;">
                    <div class="carousel-caption">
                    </div>
                </div>
                <div class="item ">
                    <img src="Images/web banners-07.jpg" alt="" style="width:100%;">
                    <div class="carousel-caption">
                    </div>
                </div>

                <div class="item ">
                    <img src="Images/web banners-08.jpg" alt="" style="width:100%;">
                    <div class="carousel-caption">
                    </div>
                </div>-->
                        <!--                 <div class="item ">
                    <img src="img/banner1.png" alt="" style="width:100%;height:500px;">
                    <div class="carousel-caption">
                    </div>
                </div> -->


                        <!-- Left and right controls -->
                    </div>
                </div>
        </section>

        <section id="services" class="wow" style="-webkit-animation-name: fadeIn;
  animation-name: fadeIn;visibility:visible;">
            <div class="container-fluid padNone">


                <div class="col-md-3">
                    <a href="hr-consultancy">
                        <div class="Box wow" style="background: #f9b805;-webkit-animation-name: fadeInLeft;
                  animation-name: fadeInLeft;
                animation-duration: 2.5s;
                animation-iteration-count: 1;visibility:visible;data-wow-delay=0.8s;">
                            <h2><img src="img/icons/recrutment.png" alt="recruitment - Innerwork"> <span>HR Services</span></h2>
                            <p>Help Wanted-seeking business students interested in finding success.</p>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="services.php">
                        <div class="Box wow" style="background: #000;-webkit-animation-name: fadeInLeft;
                 animation-name: fadeInLeft;
               animation-duration: 2s;
               animation-iteration-count: 1;visibility:visible;data-wow-delay=0.6s;">
                            <h2 style="color:#fff;"><img src="img/icons/satafing.png" alt="staffing - Innerwork"> <span style="color:#fff;">IT Services</span></h2>
                            <p style="color:#fff;">Your Transition into the professional World Begins Here!</p>
                        </div>
                    </a>
                </div>
                <div class="col-md-3">
                    <a href="digital-marketing">
                        <div class="Box wow" style="background: #f9b805;-webkit-animation-name: fadeInLeft;
                  animation-name: fadeInLeft;
                animation-duration: 1.5s;visibility:visible;data-wow-delay=0.4s;
                animation-iteration-count: 1;">
                            <h2><img src="img/icons/manegment.png" alt="management - Innerwork"> <span>Digital Marketing</span></h2>
                            <p>Good Management is the art of solving problems so interesting candidate hurry!</p>
                        </div>
                    </a>
                </div>
                <div class="dropdown col-md-3 service_dropdown">
                    <a href="#" class="dropdown-toggle service_dropdown_toggle" id="navbarDropdownMenuLink1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <div class="Box wow" style="background: #000;-webkit-animation-name: fadeInLeft;
                  animation-name: fadeInLeft;
                animation-duration: 1s;
                animation-iteration-count: 1;visibility:visible;data-wow-delay=0.2s;">
                            <h3 style="color:#fff;"><img src="img/icons/startupSupport.jpg" alt="management - Innerwork"> <span style="color:#fff;">Multimedia, 3D & VFX</span></h3>
                            <p style="color:#fff;">Enter the exciting world of Creativity.</p>
                        </div>
                    </a>
                    <ul class="dropdown-menu service_drop_menu" aria-labelledby="navbarDropdownMenuLink1">
                        <li><a class="dropdown-item service_drop_link" href="3d_and_vfx?course=Graphic Designing">Graphic Designing</a></li>
                        <li><a class="dropdown-item service_drop_link" href="3d_and_vfx?course=Video Editing">Video Editing</a></li>
                        <li><a class="dropdown-item service_drop_link" href="3d_and_vfx?course=Motion Graphics">Motion Graphics</a></li>
                        <li><a class="dropdown-item service_drop_link" href="3d_and_vfx?course=Architecture Designing">Architecture Designing</a></li>
                        <li><a class="dropdown-item service_drop_link" href="3d_and_vfx?course=Autodesk MAX">Autodesk MAX</a></li>
                        <li><a class="dropdown-item service_drop_link" href="3d_and_vfx?course=Autodesk Maya">Autodesk Maya</a></li>
                    </ul>
                </div>
            </div>
        </section>

        <section id="aboutUs">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <img src="img/aboutstyle.png" alt="about Innerwork" class="about_style">
                        <h4>About</h4>
                        <h2>Innerwork</h2>
                        <p>Innerwork provides full-range human resources and IT solutions to help businesses improve hiring and digital infrastructure for the effective functioning of the company. Founded with a purpose to find the right balance of quality hiring and smooth on-boarding, Innerwork believes in understanding the business inside-out and be a strategic partner in the business journey. </p>
                        <p>Our team, comprising of experienced human resource and IT professionals, works single-mindedly to offer customized HR solutions to enterprises so that perfect skill-to-work match could be achieved most cost-effectively.</p>
                        <a href="about">Know More</a>

                    </div>
                    <div class="col-md-6">

                        <img src="Images/HOME PAGE about us imageAsset 13.jpg" alt="about Innerwork" style="width: 100%;">

                    </div>

                </div>

            </div>

        </section>

        <section id="corporateCounter">
            <div class="container">
                <div class="row counter">
                    <div class="col-md-3">
                        <div class="successData">
                            <img src="img/icons/successClient.png" alt="Innerwork successful clients">
                            <h2>Successful Clients</h2>
                            <span class="count">200</span><span>+</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="successData">
                            <img src="img/icons/expertIcon.png" alt="Innerwork consultant">
                            <h2>Expert Consultants</h2>
                            <span class="count">25</span><span>+</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="successData">
                            <img src="img/icons/teamMember.png" alt="Innerwork team">
                            <h2>Team Members</h2>
                            <span class="count">100</span><span>+</span>
                        </div>
                    </div>
                    <div class="col-md-3">
                        <div class="successData">
                            <img src="img/icons/qualified.png" alt="Innerwork students">
                            <h2>Qualified Students</h2>
                            <span class="count">800</span><span>+</span>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <p>
                            <span class="vision"><b>Our Vision</b></span><br />
                            Adding Value in to your Business through our HR Services and become most trusted HR business Partner.
                        </p>
                    </div>
                    <div class="col-md-6">
                        <p>
                            <span class="vision"><b>Our Mission</b></span><br />
                            Redefine, improve and transform HR Services in India.
                        </p>
                    </div>
                </div>
                <a href="contact">Appointment</a>
            </div>
        </section>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
        <script id="rendered-js">
            $('.count').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function(now) {
                        $(this).text(Math.ceil(now));
                    }
                });

            });
        </script>

        <section id="tagline">
            <div class="container">
                <span class="wow" style="animation-duration: 2s;
        animation-iteration-count: 1;-webkit-animation-name: fadeInUp;
          animation-name: fadeInUp;visibility:visible;data-wow-delay=2s;">WE DESIGN SOLUTIONS FOR YOUR BUSINESS TO BE THE BEST</span>
                <h2 class="wow" style="animation-duration: 2.5s;
        animation-iteration-count: 1;-webkit-animation-name: fadeInUp;
          animation-name: fadeInUp;visibility:visible;data-wow-delay=2.5s;">Start your career soaring high...
                    Reach for us</h2>
                <p class="wow" style="animation-duration: 3s;
        animation-iteration-count: 1;-webkit-animation-name: fadeInUp;
          animation-name: fadeInUp;visibility:visible;data-wow-delay=3s;">We adopt a systematic and structured approach to meet the HR needs of our clients, combined with a very effective form of matrix evaluation process. The result is effective services that are On Plan, On Time, and On Budget. And our psychometric evaluation processes make sure our candidates and services are the best.</p>
                <a href="contact" class="hireBtn hireUsBtn wow" style="animation-duration: 3.5s;
        animation-iteration-count: 1;-webkit-animation-name: fadeInUp;
          animation-name: fadeInUp;visibility:visible;data-wow-delay=3.5s;">Hire Us</a>
            </div>
        </section>



        <!--<section id="services">
    <div class="container">
        <div class="row"><h1 style="margin-left: 2%;color: #f9b805;">Our Clients</h1></div>
    <div class="row">
  <div class="col-md-2 " style="width: 140px;">
    <div class="card cardshadow" style="border: 2px solid #f9b805;width: 100%;border-radius:4%;">
        <a href="https://set.jainuniversity.ac.in/"><img src="img/jgi.jpg" class="card-img-top text-center" alt="..." style="width: 90px;height: 90px;padding: 5px;"></a>

      </div>
    </div>
  <div class="col-md-2" style="width: 140px;">
    <div class="card cardshadow" style="border: 2px solid #f9b805;width: 100%;border-radius:4%;">
     <a href="http://sabsngo.org/"><img src="img/ngologo.jpg" class="card-img-top" alt="..." style="width: 90px;height: 90px;padding: 5px;"></a>
    </div>
  </div>-->

        <!-- <section id="services">
    <div class="container padNone">
        <div class="row"><h1 style="margin-left: 4%;color: #f9b805;">Our Clients</h1></div>


           <div class="col-md-4">
             <div class="Box" style="height:250px;width:350px;border-radius:20%;border: 3px dotted #f9b805">

                <a href="https://www.jklu.edu.in/faculty/devendra-bhavsar/"><img src="img/jklu1.jpg" alt="" class="imgc" style="float:left;"></a>
                <h2 style="text-align: center;margin-top: unset;"><strong>JK Lakshmipat University </strong></h2><hr>
                <p><strong>Contact Person: Devendra Bhavsar</strong></p>
                <p><strong>Contact:8824011851</strong></p>
                <p><strong>Email: <a href="devendrabhavsar@jklu.edu.in">devendrabhavsar@jklu.edu.in</a></strong></p>
            </div></div>
            <div class="col-md-4">
              <div class="Box" style="height:250px;width:350px;border-radius:20%;border: 3px dotted #f9b805">
                       <a href="https://www.jklu.edu.in/faculty/gireesh-kumar/"><img src="img/jklu1.jpg" alt="" class="imgc" style="float:left;"></a>
                                    <h2 style="text-align: center;margin-top: unset;"><strong>JK Lakshmipat University </strong></h2><hr>
                <p><strong>Contact Person: Gireesh Choudhary</strong></p>
                <p><strong>Contact:9664271347</p>
                <p><strong>Email: <a href="gireeshkaushik@jklu.edu.in">gireeshkaushik@jklu.edu.in,<br>gireesh8@gmail.com</a></strong></p>

            </div></div>

          <div class="col-md-4" id="jgi">
          <div class="Box" style="height:250px;width:350px;border-radius:20%;border: 3px dotted #f9b805">
            <a href="https://set.jainuniversity.ac.in/"><img src="img/jgi.jpg" alt=""  class="imgc" style="float:left;"></a>
            <h2 style="text-align: center;margin-top: unset;"><strong>CMS Jain University </strong></h2><hr>
                <p><strong>Contact Person: Manjunath A</strong></p>
                <p><strong>Contact:9071228608</strong></p>
                <p><strong>Email: <a href="a.manjunath@jainuniversity.ac.in">a.manjunath@jainuniversity.ac.in</a></strong></p>
            </div></div>

            <div class="col-md-4">
<div class="Box" style="height:250px;width:350px;border-radius:20%;border: 3px dotted #f9b805">
                       <a href="https://www.bseindia.com/"><img src="img/bseindia.png" alt="" class="imgc" style="float:left;"></a>
                    <h2 style="text-align: center;margin-top: unset;"><strong>BSE India </strong></h2><hr>
                <p><strong>Contact Person:Rajeshree Gowda</strong></p>
                <p><strong>Contact:</strong></p>
                <p><strong>Email: <a href="#">gireesh8@gmail.com </a></strong></p>

            </div>
        </div>

>>>>>>> 7b7b75eaf67cc2d492daf79b4b6ea60ec775ff2e

 <div class="col-md-2" style="width: 130px;">
    <div class="card cardshadow" style="border: 2px solid #f9b805;width: 100%;border-radius:4%;">
    <a href="https://www.jklu.edu.in/faculty/devendra-bhavsar/"> <img src="img/jklu.png" class="card-img-top" alt="..." style="width: 90px;height: 90px;padding: 5px;"></a>
    </div>
  </div>
   <div class="col-md-2" style="width: 130px;">
    <div class="card cardshadow" style="border: 2px solid #f9b805;width: 100%;border-radius:4%;">
     <a href="http://qspiders.com/anjali-m"><img src="img/qspiders.png" class="card-img-top" alt="..." style="width: 90px;height: 90px;padding: 5px;"></a>
    </div>
  </div>
   <div class="col-md-2" style="width: 130px;">
    <div class="card cardshadow" style="border: 2px solid #f9b805;width: 100%;border-radius:4%;">
      <a href="https://www.bseindia.com/"><img src="img/bseindia.png" class="card-img-top" alt="..." style="width: 90px;height: 90px;padding: 5px;"></a>
    </div>
  </div>
   <div class="col-md-2" style="width: 130px;">
    <div class="card cardshadow" style="border: 2px solid #f9b805;width: 100%;border-radius:4%;">
     <a href="https://www.upes.ac.in/"><img src="img/upes.png" class="card-img-top" alt="..." style="width: 90px;height: 90px;padding: 5px;"></a>
    </div>
  </div>
<div class="col-md-2" style="width: 130px;">
    <div class="card cardshadow" style="border: 2px solid #f9b805;width: 100%;border-radius:4%;">
     <a href="https://uptownie.com/"><img src="img/uptownie.png" class="card-img-top" alt="..." style="width: 90px;height: 90px;padding: 5px;"></a>
    </div>
  </div>



</div>
</div>

    </section>

 -->

        <style>
            @media (min-width: 768px) {
                .y {
                    width: 20%;
                }
            }
        </style>
        <section id="services">
            <div class="container-fluid fourth-content">
                <div class="row">
                    <h1 style="margin-left: 2%;color: #f9b805;">Our Clients</h1>
                </div>
                <div class="row wow">
                    <div class=" col-md-3  col-xs-6 y">
                        <div class="item wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                            <div class="thumb">
                                <a href="https://set.jainuniversity.ac.in/" target="_blank" data-lightbox="image-1">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Jain University</h2>
                                        </div>
                                    </div>
                                </a>

                                <img src="img/jginew.jpg" alt="image">

                            </div>
                        </div>
                    </div>
                    <div class="col-md-3  col-xs-6 y">
                        <div class="item wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                            <div class="thumb">
                                <a href="http://sabsngo.org/" target="_blank" data-lightbox="image-1">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>SABS</h2>

                                        </div>
                                    </div>
                                </a>
                                <div class="image">
                                    <img src="img/sabsnew.jpg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-xs-6 y">
                        <div class="item wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.8s">
                            <div class="thumb">
                                <a href="https://www.jklu.edu.in/faculty/devendra-bhavsar/" target="_blank" data-lightbox="image-1">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>JK Lakshmipat University</h2>

                                        </div>
                                    </div>
                                </a>
                                <div class="image">
                                    <img src="img/jklunew.jpg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3  col-xs-6 y">
                        <div class="item wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.9s">
                            <div class="thumb">
                                <a href="http://qspiders.com/anjali-m" target="_blank" data-lightbox="image-1">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Anjali</h2>

                                        </div>
                                    </div>
                                </a>
                                <div class="image">
                                    <img src="img/spidernew.jpg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3  col-xs-6 y">
                        <div class="item wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.9s">
                            <div class="thumb">
                                <a href="https://www.bseindia.com/" target="_blank" data-lightbox="image-1">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>BSE</h2>

                                        </div>
                                    </div>
                                </a>
                                <div class="image">
                                    <img src="img/bsenew.jpg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3  col-xs-6 y">
                        <div class="item wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="0.9s">
                            <div class="thumb">
                                <a href="https://www.upes.ac.in/" target="_blank" data-lightbox="image-1">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>UPES</h2>

                                        </div>
                                    </div>
                                </a>
                                <div class="image">
                                    <img src="img/upesnew.jpg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3  col-xs-6 y">
                        <div class="item wow fadeInUp" data-wow-duration="1.3s" data-wow-delay="1s">
                            <div class="thumb">
                                <a href="https://uptownie.com/" target="_blank" data-lightbox="image-1">
                                    <div class="hover-effect">
                                        <div class="hover-content">
                                            <h2>Uptownie</h2>

                                        </div>
                                    </div>
                                </a>
                                <div class="image">
                                    <img src="img/uptownnew.jpg" alt="image">
                                </div>
                            </div>
                        </div>
                    </div>

                </div>


            </div>

        </section>

        <?php include_once 'Footer.php'; ?>
    </section>
</body>

</html>