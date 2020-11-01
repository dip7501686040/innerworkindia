<!doctype html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Innerwork Portal | IT Services | Hr Services | Digital Marketing | Startup Support</title>
  <?php include "CommonFiles.php" ?>
  <link rel="stylesheet" href="css/home.css?version=1.1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/ionicons@4.4.3/dist/css/ionicons.min.css">
  <!-- animate css -->

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/animate.css@3.6.1/animate.min.css">

  <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css">
  <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" integrity="sha384-r4NyP46KrjDleawBgD5tp8Y7UzmLA05oM1iAEQ17CSuDqnUK2+k9luXQOfXJCJ4I" crossorigin="anonymous"> --> -->
  <!-- Template CSS Files -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@3.3.5/dist/css/bootstrap.min.css">


  <!-- Mobile Specific Metas
        ================================================== -->
  <meta name="format-detection" content="telephone=no">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-138360165-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'UA-138360165-1');
  </script>

  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }






  /*akanksha goyal changes*/
    .adjust{
      margin-right : -15px;
      margin-left : -180px;
    }
    .margin{
      height:443px;
    }
    p {

      line-height: 22px;

      font-weight: 300;
    }

    body {
      background: blue;
      overflow-x: hidden;
    }



    a:hover {
      text-decoration: none;
    }


    #hero-area {
      background: url("Images/bg.jpeg") no-repeat 50%;
      background-size: cover;
      background-attachment: fixed;
      padding: 120px 0 50px 0;
      color: #fff;
      box-shadow: 0 0 8px rgba(0, 0, 0, 0.3);
      position: relative;
    }

    #hero-area:before {
      content: '';
      z-index: 9;
      background: rgba(255, 255, 255, 0.78);
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
    }

    #hero-area .block {
      position: relative;
      z-index: 999;
    }

    #hero-area h1 {

      line-height: 50px;
      color: #333;
      font-weight: 700;
      margin-bottom: 15px;
      text-transform: uppercase;
    }

    #hero-area h2 {

      font-weight: 300;
      margin-bottom: 38px;
      line-height: 27px;
      /*  text-transform: uppercase; */
      color: #666;
      font-family: 'Roboto', sans-serif;
      margin-top: 25px;
    }

    #hero-area .btn {
      background: #414141;
      border: none;
      color: #fff;
      padding: 20px 35px;
      margin-top: 30px;
      font-size: 16px;
      font-size: 13px;
      line-height: 1em;
      text-transform: uppercase;
      letter-spacing: normal;
      border-radius: 0;
    }

    .cd-headline.slide .cd-words-wrapper {
      color: #f9b805;
    }


    .cd-words-wrapper {
      display: inline-block;
      position: relative;
      text-align: center;
    }

    .cd-words-wrapper b {
      display: inline-block;
      position: absolute;
      white-space: nowrap;
      left: 0;
      top: 0;
    }

    .cd-words-wrapper b.is-visible {
      position: relative;
    }

    .no-js .cd-words-wrapper b {
      opacity: 0;
    }

    .no-js .cd-words-wrapper b.is-visible {
      opacity: 1;
    }

    .cd-headline.slide span {
      display: inline-block;
      padding: .2em 0;
    }

    .cd-headline.slide .cd-words-wrapper {
      overflow: hidden;
      vertical-align: top;
      width: auto !important;
    }

    .cd-headline.slide b {
      opacity: 0;
      top: .2em;
    }

    .cd-words-wrapper div {
      overflow: hidden;
      position: relative;
      float: right;
      height: 8rem;
      padding-top: 1rem;
      margin-top: -1rem;
    }

    .cd-words-wrapper div li {
      font-weight: 700;
      padding: 0 1rem;
      height: 4.5rem;
      margin-bottom: 4.5rem;
      display: block;
      font-family: var(--title);
    }

    .flip4 {
      -webkit-animation: flip4 10s cubic-bezier(0.23, 1, 0.32, 1.2) infinite;
      animation: flip4 10s cubic-bezier(0.23, 1, 0.32, 1.2) infinite;
    }

    @-webkit-keyframes flip4 {
      0% {
        margin-top: -360px;
      }

      5% {
        margin-top: -270px;
      }

      25% {
        margin-top: -270px;
      }

      30% {
        margin-top: -180px;
      }

      50% {
        margin-top: -180px;
      }

      55% {
        margin-top: -90px;
      }

      75% {
        margin-top: -90px;
      }

      80% {
        margin-top: 0px;
      }

      99.99% {
        margin-top: 0px;
      }

      100% {
        margin-top: -270px;
      }

    }

    @keyframes flip4 {
      0% {
        margin-top: -360px;
      }

      5% {
        margin-top: -270px;
      }

      25% {
        margin-top: -270px;
      }

      30% {
        margin-top: -180px;
      }

      50% {
        margin-top: -180px;
      }

      55% {
        margin-top: -90px;
      }

      75% {
        margin-top: -90px;
      }

      80% {
        margin-top: 0px;
      }

      99.99% {
        margin-top: 0px;
      }

      100% {
        margin-top: -270px;
      }

    }

    @media only screen and (max-width: 767px) {

      #hero-area {
        padding: 98px 0;
      }

      #hero-area .btn {
        margin-top: 8px;
      }

    }



    #feature {
      padding: 10px 0px;

    }

    #feature .media {
      margin: 10px 0px 90px 0px;
    }

    #feature .media .media-left {
      padding-right: 20px;
    }

    #feature h3 {
      color: #222222;
      font-size: 28px;
      text-transform: uppercase;
      text-align: center;
      margin-bottom: 20px;
      font-weight: 400;
    }

    #feature p {
      line-height: 25px;
      font-size: 16px;
      color: #fdfffc;
      margin-bottom: 4%;
      margin-top: 3%;
    }

    #feature .icon {
      text-decoration: none;
      color: #000;
      background-color: #fdfffc;
      height: 130px;
      text-align: center;
      width: 130px;
      font-size: 60px;
      line-height: 130px;
      overflow: hidden;
      -webkit-border-radius: 50%;
      -moz-border-radius: 50%;
      -ms-border-radius: 50%;
      -o-border-radius: 50%;
      text-shadow: #00aabb,
    }

    .media-body h4 {
      font-weight: bold;
      font-size: 18px;
    }

    


    /* Create three equal columns that floats next to each other */
    .col {
      float: left;
      width: 33.33%;
      padding-left: 40px;

      /* Should be removed. Only for demonstration */
    }

    #column1,
    #column2,
    #column3 {
      padding: 0 20px;
      font-size: 18px;
    }

    #col1,
    #col2,
    #col3 ul {
      padding: 30px 4%;
      font-size: 17px;
      color: #dee2e6;

    }

    #col1 {

      position: relative;
      animation: myfirst 5s;
      animation-direction: alternate;
    }

    @keyframes myfirst {
      from {
        left: -60%;
      }

      to {
        left: 0px;
      }

    }

    #col2 {


      position: relative;
      animation: mymove 4s;
    }

    @keyframes mymove {
      from {
        top: 600px;
      }

      to {
        top: 0px;
      }
    }




    #col3 {

      position: relative;
      animation: my 5s;
      animation-direction: alternate;
    }

    @keyframes my {
      from {
        right: -60%;
      }

      to {
        right: 0px;
      }

    }

    .sr ul li {
      opacity: .6;
      margin-bottom: 1%;
      margin: 2%;
    }

    h2 {
      color: #f8f9fa;

    }
    
    /* Clear floats after the columns */
    .row:after {
      content: "";
      display: table;
      clear: both;
    }

    .icons {
      padding: 0px 40px;
    }

    .icons i {
      font-size: 50px;
      margin-left: 30%;
      color: black;
    }

    .banner {

      position: relative;
      animation: mymove 3s;
      animation-fill-mode: forwards;
    }

    @keyframes mymove {
      from {
        top: 200px;
      }

      to {
        top: 0px;
      }
    }
  </style>

</head>

<body style="background-color: #212529;">
  <?php include_once 'Header.php'; ?>

  <section id="hero-area">
    <div class="container">
      <div class="row">
        <div class="col-md-12 text-center">
          <div class="block wow fadeInUp" data-wow-delay=".1s" style="margin-top: -10rem;margin-bottom: -4rem;">
            <!-- Slider -->
            <section class="cd-intro">
              <h1 class="wow fadeInUp animated cd-headline slide" data-wow-delay=".4s">
                <span>We help startups & enterprises </span><br />
                <span class="cd-words-wrapper">
                  <div>
                    <!--        Use classes 2,3, or 4 to match the number of words -->
                    <ul class="flip4">
                      <li>Design </li>
                      <li> Build</li>
                      <li> Grow</li>
                      <li>Awesome</li>
                    </ul>
                  </div>
                </span><br />
                <span> user-focused solutions.</span><br />
              </h1>
            </section> <!-- cd-intro -->
            <!-- /.slider -->
            <h2 class="wow fadeInUp animated" data-wow-delay=".2s" style="font-size:20px;">
              Innerwork focuses first on the strategic needs of your business <br> equipping you to cut through the noise of fleeting technology trends.
            </h2>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="feature">
    <div class="container">
      <div class="section-heading">
        <h3 style="margin-top:10%;color: #f6aa1c;" class="title wow fadeInDown" data-wow-delay=".1s">
          <center>Solutions Offered</center>
        </h3>

        <p class="wow fadeInDown" data-wow-delay=".2s">
          <h4 style="font-size:20px;color: #ffe66d;">
            <center> We bring a range of technology capabilities to ensure your IT organizations and operating models are agile and effective.</center>
          </h4>
        </p>
      </div>
      <div class="row">
        <div class="col-md-4 col-lg-4 col-xs-12" style="margin-bottom: -8rem;">
          <div class="media wow fadeInUp animated" data-wow-duration="600ms" data-wow-delay=".1s">
            <div class="media-left">
              <div class="icon">
                <i class="ion-ios-expand"></i>
              </div>
            </div>
            <div class="media-body">
              <h4 class="media-heading" style="color: #e9ecef;">Enterprise Solutions.</h4>
              <p>Business process and transformation with best-of-breed solutions.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xs-12 h-50" style="margin-bottom: -8rem;">
          <div class="media wow fadeInDown animated" data-wow-duration="600ms" data-wow-delay=".2s">
            <div class="media-left">
              <div class="icon">
                <i class="ion-ios-keypad"></i>
              </div>
            </div>
            <div class="media-body">
              <h4 class="media-heading" style="color: #e9ecef;">Mobile Solutions.</h4>
              <p>Best of class mobile solutions for all platforms.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xs-12" style="margin-bottom: -8rem;">
          <div class="media wow fadeInDown animated" data-wow-duration="600ms" data-wow-delay=".1s">
            <div class="media-left">
              <div class="icon">
                <i class="ion-ios-shuffle"></i>
              </div>
            </div>
            <div class="media-body">
              <h4 class="media-heading" style="font-size:19px;color: #e9ecef;">Third Party Integrations.</h4>
              <p>Solutions and expertise to integrate your business with leading services.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xs-12" style="margin-bottom: -8rem;">
          <div class="media wow fadeInDown animated" data-wow-duration="600ms" data-wow-delay=".2s">
            <div class="media-left">
              <div class="icon">
                <i class="ion-ios-link"></i>
              </div>
            </div>
            <div class="media-body">
              <h4 class="media-heading" style="font-size:18px;color: #e9ecef;">Blockchain Technologies.</h4>
              <p>Decentralized system for your business usecases.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xs-12" style="margin-bottom: -8rem;">
          <div class="media wow fadeInDown animated" data-wow-duration="600ms" data-wow-delay=".1s">
            <div class="media-left">
              <div class="icon">
                <i class="ion-ios-cloud-outline"></i>
              </div>
            </div>
            <div class="media-body">
              <h4 class="media-heading" style="color: #e9ecef;">Cloud Solutions.</h4>
              <p>Develop, delpoy and manage on the cloud.</p>
            </div>
          </div>
        </div>
        <div class="col-md-4 col-lg-4 col-xs-12" style="margin-bottom: -8rem;">
          <div class="media wow fadeInDown animated" data-wow-duration="600ms" data-wow-delay=".2s">
            <div class="media-left">
              <div class="icon">
                <i class="ion-ios-infinite"></i>
              </div>
            </div>
            <div class="media-body">
              <h4 class="media-heading" style="color: #e9ecef;">Machine Learning.</h4>
              <p style=>Help your business get an edge by leveraging machine learning.</p>
            </div>
          </div>
        </div>
      </div>

    </div>
    </div>
  </section> <!-- /#feature -->

  <div class=" section2">
    <h1 class="title wow fadeInDown" data-wow-delay=".1s" style="color: #f6aa1c;"> WHAT WE LOVE TO DO </h1>
    <h4 style="margin-top:3%;margin-bottom:3%;font-size:22px;color: #ffe66d;" class="wow fadeInDown" data-wow-delay=".2s">Our team has experience and a proven ability to deliver following services.</h4>
  </div>

  <div class="row">
    <div class="block col-md-4 feature-1 block wow fadeInUp animated" data-wow-duration="600ms" data-wow-delay=".1s" id="column1" style="background-color:#f8f9fa;">
     <div class="margin">
      <div class="icons" style="background-color: #f8f9fa;">
        <i class="ion-ios-expand"></i>
        <h3> ENTERPRISE SOLUTIONS</h3>
        <ul>
          <li>Technology Platform Consulting</li>
          <li> Full stack Application Development</li>
          <li> API Design and Development</li>
          <li> Serverless Programming </li>
          <li> Database Design and Management </li>
          <li> Audit and Compliance </li>
          <li> Identity and Key Management Systems </li>
          <li> Optical character recognition (OCR)</li>
          <li>Document Storage</li>
          <li> Middleware Caching Solutions</li>
          <li> Middleware Compute Solutions</li>
          <li>UI Development and Maintenance </li>
        </ul>
      </div>
      </div>
    </div>
    <div class="block col-md-4 feature-2 block wow fadeInUp animated" data-wow-duration="600ms" data-wow-delay=".2s" id="column2" style="background-color:#dee2e6;">
      <div class="icons">
        <i class="ion-ios-cloud-outline"></i>
        <h3 style="padding-left:50px"> CLOUD SOLUTIONS</h3>
        <ul>
          <li> IT Infrastructure Consulting</li>
          <li> Infrastructure setup </li>
          <li> Devops Implementation </li>
          <li> Cloud Service Monitoring</li>

          <i class="ion-ios-shuffle" style="margin-top:5%;"></i>
          <h1 style="font-size:23px ;font-weight:20px">THIRD PARTY INTEGRATIONS</h1>
          <li> CRM, ERP Integration</li>
          <li> Third Party API based Integration </li>
          <li> Third Party File based Integrations </li>
        </ul>
      </div>
    </div>
    <div class="block col-md-4 feature-3 block wow fadeInUp animated" data-wow-duration="600ms" data-wow-delay=".3s" id="column3" style="background-color: #f8f9fa;">
      <div class="icons">
        <i class="ion-ios-link"></i>
        <h3 style="font-size:23px"> BLOCKCHAIN TECHNOLOGIES</h3>
        <ul>
          <li> Crypto Currencies (Bitcoin/Ethereum)</li>
          <li> Smart Contracts - Solidity</li>
          <li> Cryptocurrency exchanges</li>
          <li> Integration with Blockchain.info, Kraken, Bitfinix, Yobit, Cryptopia </li>

          <i class="ion-ios-keypad" style="margin-top:5%;"></i>
          <h3> MOBILE SOLUTIONS </h3>
          <li> Android / IOS Platform</li>
          <li> Mobile Backend APIs</li>

        </ul>
      </div>
    </div>
  </div>

  </div>
  </div>

  <h1>
    <center style="margin-top:5%;margin-bottom:2%;font-size:30px;color: #f6aa1c;">TECHNOLOGIES</center>
  </h1>
  <p>
    <center style="font-size:20px;opacity:.5;color: #ffe66d;"> We offer technical expertise in the following technologies allowing us to quickly build highly performant and scalable systems.</center>
  </p>
  <div class="container">
    <div class="row">

      <div class="col-md-4" id="col1">
        <div class="sr">
          <ul>
            <h2>Java and Related Technologies</h2>
            <li><strong>Core Platform</strong> Java 8 onwards</li>
            <li><strong>Virtual Machine</strong> Hotspot, OpenJDK, KVM</li>
            <li><strong>ApplicationFramework </strong> Spring, Spring Boot, Guice, Struts</li>
            <li><strong>Scheduling</strong> Obsidian, Quartz</li>
            <li><strong>ORM </strong> Hibernate, Mybatis</li>
            <li><strong> Servers</strong> Grizzly, Jetty, Tomcat, Axis 2</li>
            <h2>Databases</h2>
            <li><strong> Relational</strong> Mysql, Aurora</li>
            <li><strong> Non Relational</strong> Mongodb, Dynamodb, Cassandra, Redis</li>
            <h2>UI Related Technologies</h2>
            <li><strong> Core Platform</strong> React JS, Angular</li>
            <li><strong> Application Framework</strong> Meteor</li>
            <li><strong> Supporting Libraries</strong> Semantic UI, Bootstrap, Nivo</li>
            <h2>Data Interchange Formats</h2>
            <li><strong> APIs</strong> SOAP, REST</li>
            <li><strong> Data Transfer </strong> JSON, XML, CSV, Protocol Buffers</li>
          </ul>
        </div>
      </div>

      <div class=" col-md-4" id="col2">
        <div class="sr">

          <ul>
            <h2>Node JS and Related Technologies</h2>
            <li><strong> Core Platform </strong> NodeJS 8 onwards</li>
            <li><strong> Application Framework</strong> Express, Sails, Hapi</li>
            <li><strong> ORM / ODM</strong> Mongoose, Sequelize</li>
            <li><strong> Authentication</strong> Passport, Cognito</li>
            <h2> Devops Technologies</h2>
            <li> <strong> Automation Servers</strong> Jenkins, Rundeck, Chef </li>
            <li> <strong> Repository Servers</strong> Nexus, Artifactory </li>
            <li><strong> Configuration Management</strong> Ansible, Puppet </li>
            <h2> Managed Cloud Platform </h2>
            <li> <strong> Amazon Web Services (AWS)</strong> EC2, Lambda, S3,RDS, SQS, SNS, SWF, VPC, ELB, IAM, KMS, Cloudwatch,
              IoT </li>
            <li> <strong>Google Cloud Platform (GCP)</strong> Compute, Functions, Storage, Secure Key, Vision, Translation, Maps, IoT Core</li>
            <li> <strong>Microsoft Azure</strong> Virtual Machines, Functions, Batch,Storage, StorSimple, API Management, Azure MySQL, Redis</li>

          </ul>
        </div>
      </div>

      <div class=" col-md-4" id="col3">
        <div class="sr">
          <ul>

            <h2>Machine Learning</h2>
            <li><strong>Programming Language</strong> Octave, Python</li>
            <li><strong>Libraries </strong>Scikit-learn, NumPy, Pandas</li>
            <li><strong>Frameworks </strong>TensorFlow, Keras</li>
            <h2>Big Data</h2>
            <li> <strong>Data Store</strong> Hadoop</li>
            <li> <strong>Processing</strong> HDFS, Cassandra, Apache Storm, Apache Solr</li>
            <li> <strong> Data Ingestion</strong> Apache Flume, Apache Kafka</li>
            <li> <strong> Configuration Management</strong> Apache Zookeeper, Data Synapse</li>
            <li> <strong> Caching</strong> Gigaspaces, Coherence</li>
            <h2>Internet of Things</h2>
            <li><strong>Short Range</strong> Bluetooth, Wifi</li>
            <li><strong>Wired </strong>AWS IoT, GCP IoT Core</li>
            <h2>Blockchain Technologies</h2>
            <li><strong>Crypto Currencies</strong> Bitcoin, Ethereum</li>
            <li><strong>Smart Contracts</strong> Solidity</li>
            <li><strong>API Integrations </strong>Blockchain.info, Kraken, Bitfinix, Yobit, Cryptopia</li>

          </ul>
        </div>
      </div>
    </div>
    <!-- way to success -->
    <!--..<div class="container-fluid">
<center><h2>THE WAY TO SUCCESS </h2></center>
<img src="success.png" height="100%" width="100%">
</div>..-->

    <div class="section2 ">
    

      <h1 class="title wow fadeInDown" data-wow-delay=".1s"><b style="color: #ff9f1c;"> THE WAY TO SUCCESS</b></h1>
    </div>
    <div class="row banner ">
    <div class = "adjust">
      <img src="Images/banner.png" class="img-fluid " alt="Responsive image">
      </div>
    </div>

    <?php include_once 'Footer.php'; ?>

</body>

<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

</html>