<!-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script type="text/javascript" src="assets/js/push.min.js"></script>
<script type="text/javascript" src="assets/js/serviceWorker.min.js"></script>
<script type="text/javascript">
function start()
{
  Push.create("Hello world!", {
    body: "How's it hangin'?",
    icon: '/icon.png',
    timeout: 4000,
    onClick: function () {
        window.focus();
        this.close();
    }
});
}
function clear()
{
  Push.clear();
}

</script>
<div class="row">

            <div class="col-md-3 col-md-offset-6">
                    <button type="button" class="btn btn-success" onclick="start()">Allow</button>

                    <button type="button" class="btn btn-danger" onclick="clear()">Disallow</button>

          </div>

        </div>

 -->
<!--  <script type="text/javascript">

window.addEventListener('load', function () {
  // At first, let's check if we have permission for notification
  // If not, let's ask for it
  if (window.Notification && Notification.permission !== "granted") {
    Notification.requestPermission(function (status) {
      if (Notification.permission !== status) {
        Notification.permission = status;
      }
    });
  }

  var button = document.getElementsByTagName('button')[0];

  button.addEventListener('click', function () {
    // If the user agreed to get notified
    // Let's try to send ten notifications
    if (window.Notification && Notification.permission === "granted") {
      var i = 0;
      // Using an interval cause some browsers (including Firefox) are blocking notifications if there are too much in a certain time.
      var interval = window.setInterval(function () {
        // Thanks to the tag, we should only see the "Hi! 9" notification
        var n = new Notification("Hi! " + i, {tag: 'soManyNotification'});
        if (i++ == 9) {
          window.clearInterval(interval);
        }
      }, 200);
    }

    // If the user hasn't told if he wants to be notified or not
    // Note: because of Chrome, we are not sure the permission property
    // is set, therefore it's unsafe to check for the "default" value.
    else if (window.Notification && Notification.permission !== "denied") {
      Notification.requestPermission(function (status) {
        // If the user said okay
        if (status === "granted") {
          var i = 0;
          // Using an interval cause some browsers (including Firefox) are blocking notifications if there are too much in a certain time.
          var interval = window.setInterval(function () {
            // Thanks to the tag, we should only see the "Hi! 9" notification
            var n = new Notification("Hi! " + i, {tag: 'soManyNotification'});
            if (i++ == 9) {
              window.clearInterval(interval);
            }
          }, 200);
        }

        // Otherwise, we can fallback to a regular modal alert
        else {
          alert("Hi User!");
        }
      });
    }

    // If the user refuses to get notified
    else {
      // We can fallback to a regular modal alert
      alert("Hi!");
    }
  });
})
    </script>
 -->
<script type="text/javascript">
  function notifyMe() {
    // Let's check if the browser supports notifications
    if (!("Notification" in window)) {
      alert("This browser does not support desktop notification");
    }

    // Let's check whether notification permissions have already been granted
    else if (Notification.permission === "granted") {
      // If it's okay let's create a notification
      var notification = new Notification("Hi there!Welcome to Innerwork :)");
    }

    // Otherwise, we need to ask the user for permission
    else if (Notification.permission !== "denied") {
      Notification.requestPermission().then(function(permission) {
        // If the user accepts, let's create a notification
        if (permission === "granted") {
          var notification = new Notification("Hi there!Welcome to Innerwork :)");
        }
      });
    }

    // At last, if the user has denied notifications, and you
    // want to be respectful there is no need to bother them any more.
  }
</script>
<link rel="stylesheet" type="text/css" href="css/demo.css?version=1.1">

<section id="headerBtm" style="padding-bottom:2%;">
  <div class="container-fluid">
    <nav class="navbar navbar-inverse" role="navigation">
      <!-- navbar-fixed-top -->
      <div class="container-fluid-padNone">
        <div class="navbar-header ">
          <button type="button" class="navbar-toggle" id="nav-button" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand " href="index" title="Innerer Work" id='h_inner' class="inner"><img src="img/logo1.jpg" alt="Innerer Work" class="logo" style="margin-top: -2px;">
          </a>
          <h6 id='h_inner' class="inner">
            <font face="Monotype Corsiva" size="10"> </font>
          </h6>

          <!-- <h6 id='h_inner' class="inner"><font face = "Monotype Corsiva" size = 10" >Innerwork</font></h6> -->
        </div>

        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav navbar-right header_drop">
            <li><a href="index" id="homePageLink">Home</a></li>
            <li><a href="about" id="aboutPageLink">About Us </a></li>
            <li class="dropdown drop_level_1">
              <a class="dropdown-toggle" data-toggle="dropdown" id="servicesPageLink">Our Service <b class="caret"></b></a>
              <ul class="dropdown-menu drop_menu_level_1">
                <li><a href="hr-consultancy" class="drop_link" id="recruitmentPageLink">HR Services</a></li>
                <li><a href="it-services" class="drop_link" id="staffingtPageLink">IT Services</a></li>
                <li><a href="digital-marketing" class="drop_link" id="managementPageLink">Digital Marketing</a></li>
                <!-- <li class="nav-item dropdown drop_level_2">
                  <a class="nav-link dropdown-toggle drop_link" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Multimedia&nbsp&nbsp&nbsp<b class="fa fa-caret-right"></b>
                  </a>
                  <ul class="dropdown-menu drop_menu_level_2" aria-labelledby="navbarDropdownMenuLink">
                    <li><a class="dropdown-item drop_link_2" href="3d_and_vfx?course=Graphic Designing">Graphic Designing</a></li>
                    <li><a class="dropdown-item drop_link_2" href="3d_and_vfx?course=Video Editing">Video Editing</a></li>
                    <li><a class="dropdown-item drop_link_2" href="3d_and_vfx?course=Motion Graphics">Motion Graphics</a></li>
                    <li><a class="dropdown-item drop_link_2" href="3d_and_vfx?course=Architecture Designing">Architecture Designing</a></li>
                    <li><a class="dropdown-item drop_link_2" href="3d_and_vfx?course=Autodesk MAX">Autodesk MAX</a></li>
                    <li><a class="dropdown-item drop_link_2" href="3d_and_vfx?course=Autodesk Maya">Autodesk Maya</a></li>
                  </ul>
                </li> -->
              </ul>
            </li>
            <li class="dropdown drop_level_1">
              <a class="dropdown-toggle" href="#" id="servicesPageLink" data-toggle="dropdown">
                Multimedia&nbsp&nbsp&nbsp<b class="fa fa-caret-down"></b>
              </a>
              <ul class="dropdown-menu drop_menu_level_1">
                <li><a class="drop_link" href="3d_and_vfx?course=Graphic Designing">Graphic Designing</a></li>
                <li><a class="drop_link" href="3d_and_vfx?course=Video Editing">Video Editing</a></li>
                <li><a class="drop_link" href="3d_and_vfx?course=Motion Graphics">Motion Graphics</a></li>
                <li><a class="drop_link" href="3d_and_vfx?course=Architecture Designing">Architecture Designing</a></li>
                <li><a class="drop_link" href="3d_and_vfx?course=Autodesk MAX">Autodesk MAX</a></li>
                <li><a class="drop_link" href="3d_and_vfx?course=Autodesk Maya">Autodesk Maya</a></li>
              </ul>
            </li>
            <li class="dropdown drop_level_1">
              <a class="dropdown-toggle" data-toggle="dropdown" id="servicesPageLink">Job<b class="caret"></b></a>
              <ul class="dropdown-menu drop_menu_level_1">
                <li><a href="jobseeker" class="drop_link" id="jobSeekerPageLink">Job Seeker</a></li>
                <li><a href="jobPost" class="drop_link" id="jobPostPageLink">Job | Internship Posting</a></li>
                <li><a href="intern" class="drop_link" id="internPageLink">Internship</a></li>
                <li><a href="openings" class="drop_link" id="internPageLink">Openings</a></li>
              </ul>
            </li>

            <li class="dropdown drop_level_1">
              <a class="dropdown-toggle" data-toggle="dropdown" id="servicesPageLink">Resouces<b class="caret"></b></a>
              <ul class="dropdown-menu drop_menu_level_1">
                <li><a href="business" class="drop_link" id="jobSeekerPageLink">Business Enquiry</a></li>
                <li><a href="blog" class="drop_link" id="blogPageLink">BLOG</a></li>
                <li><a href="collegeport" class="drop_link" id="collagePageLink">College</a></li>
                <li><a href="recruiter" class="drop_link" id="employerPageLink">Freelance</a></li>

              </ul>
            </li>
            <li><a href="Login.php">Login</a></li>
            <li><a href="contact">Contact Us</a></li>
            <li>
              <div id='paynow' class="razorpay-embed-btn" data-url="https://pages.razorpay.com/pl_F3auqrmv27oE3J/view" data-text="Pay Now" data-color="#528FF0" data-size="small">
                <script>
                  (function() {
                    var d = document;
                    var x = !d.getElementById('razorpay-embed-btn-js')
                    if (x) {
                      var s = d.createElement('script');
                      s.defer = !0;
                      s.id = 'razorpay-embed-btn-js';
                      s.src = 'https://cdn.razorpay.com/static/embed_btn/bundle.js';
                      d.body.appendChild(s);
                    } else {
                      var rzp = window['__rzp__'];
                      rzp && rzp.init && rzp.init()
                    }
                  })();
                </script>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </div>
</section>