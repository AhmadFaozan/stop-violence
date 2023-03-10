<!DOCTYPE html>
<html lang="en">

  <head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
  
    <title>Kontak - EDU-COVID</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
  
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
  
  <!-- Vendor CSS Files -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.0/font/bootstrap-icons.css" rel="stylesheet" >
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/glightbox/dist/css/glightbox.min.css" rel="stylesheet">
  <link href="https://unpkg.com/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/fontawesome-free-5.15.3-web/css/all.css" rel="stylesheet"/>
  
    <!--  Main CSS File -->
    <link href="assets/css/style.css" rel="stylesheet">
  
  </head>

<body>

  <script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
  <script>
  function sendContact() {
    var valid;	
    valid = validateContact();
    if(valid) {
      jQuery.ajax({
      url: "contact_mail.php",
      data:'userName='+$("#userName").val()+'&userEmail='+$("#userEmail").val()+'&subject='+$("#subject").val()+'&message='+$(message).val(),
      type: "POST",
      success:function(data){
      $("#mail-status").html(data);
      },
      error:function (){}
      });
    }
  }

  function validateContact() {
    var valid = true;	
    $(".demoInputBox").css('background-color','');
    $(".info").html('');
    
    if(!$("#name").val()) {
      $("#userName-info").html("(required)");
      $("#userName").css('background-color','#FFFFDF');
      valid = false;
    }
    if(!$("#email").val()) {
      $("#userEmail-info").html("(required)");
      $("#userEmail").css('background-color','#FFFFDF');
      valid = false;
    }
    if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
      $("#userEmail-info").html("(invalid)");
      $("#userEmail").css('background-color','#FFFFDF');
      valid = false;
    }
    if(!$("#subject").val()) {
      $("#subject-info").html("(required)");
      $("#subject").css('background-color','#FFFFDF');
      valid = false;
    }
    if(!$("#message").val()) {
      $("#message-info").html("(required)");
      $("#content").css('background-color','#FFFFDF');
      valid = false;
    }
    
    return valid;
  }
  </script>


   <!-- ======= Top Bar ======= -->
   <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:khadafikhadafi0@gmail.com">khadafikhadafi0@gmail.com</a></i>
        <i class="bi bi-phone d-flex align-items-center ms-4"><span>+62 8778 858 8302</span></i>
      </div>
      <div class="social-links d-none d-md-flex align-items-center">
        <a href="https://web.facebook.com/profile.php?id=100007886132427" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="https://www.instagram.com/khadafi_af/" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="https://github.com/khadafi-hub" class="github"><i class="bi bi-github"></i></i></a>
      </div>
    </div>
  </section>

  <!-- ======= Header ======= -->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="index.php">EDU-COVID</a> <a href="index.php"><img src="assets/img/favicon.png" alt="" class="img-fluid"></a></h1>

      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li><a href="pencegahancovid19.html">Pencegahan Covid-19</a></li>
          <li><a href="datadanstatistik.html">Data dan Statistik</a></li>
          <li><a href="kuis.html">Kuis</a></li>
          <li><a class="active" href="contact.html">Kontak</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->

  <main id="main">

    <!-- ======= Breadcrumbs ======= -->
    <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="index.php">Home</a></li>
          <li>Kontak</li>
        </ol>
        <h2>Kontak</h2>

      </div>
    </section><!-- End Breadcrumbs -->

    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="info-box mb-4">
              <i class="bx bx-map"></i>
              <h3>Alamat Kami</h3>
              <p>Jln. Raya Pelabuhan Gang.5 Lorong T No.9B, Jakarta Utara, 14220</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-envelope"></i>
              <h3>Email Kami</h3>
              <p>khadafikhadafi0@gmail.com</p>
            </div>
          </div>

          <div class="col-lg-3 col-md-6">
            <div class="info-box  mb-4">
              <i class="bx bx-phone-call"></i>
              <h3>Hubungi kami</h3>
              <p>+62 8778 858 8302</p>
            </div>
          </div>

        </div>

        <div class="row">

          <div class="col-lg-6 ">
            <iframe class="mb-4 mb-lg-0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d12097.433213460943!2d-74.0062269!3d40.7101282!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb89d1fe6bc499443!2sDowntown+Conference+Center!5e0!3m2!1smk!2sbg!4v1539943755621" frameborder="0" style="border:0; width: 100%; height: 384px;" allowfullscreen></iframe>
          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                  <span id="userName-info" class="info"></span><br/>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                  <span id="userEmail-info" class="info"></span><br/>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
                <span id="subject-info" class="info"></span><br/>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" id="message" placeholder="Message" required></textarea>
                <span id="message-info" class="info"></span><br/>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button name="submit" class="btnAction" onClick="sendContact();">Send Message</button></div>

            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">

    <div class="footer-top" style="margin-top: 50px;" >
      <div class="container" >
        <div class="row justify-content-center">

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Useful Links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="index.php">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="pencegahancovid19.html">Pencegahan Covid-19</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="datadanstatistik.html">Data dan Statistik</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="kuis.html">Kuis</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Kontak</a></li>
            </ul>
          </div>


          <div class="col-lg-3 col-md-6 footer-contact">
            <h4>Hubungi Kami</h4>
            <p>
              Jln. Raya Pelabuhan Gang.5 Lorong T No.9B <br>
              Jakarta Utara, 14220<br>
              Indonesia<br><br>
              <strong>Phone:</strong> +62 8778 858 8302<br>
              <strong>Email:</strong> khadafikhadafi0@gmail.com<br>
            </p>

          </div>

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>Tentang EDU-COVID</h3>
            <p>EDU-COVID adalah website yang dikembangkan oleh Universitas Yarsi untuk mengedukasi masyarakat 
              seputar kesehatan tentang virus Covid-19.</p>
            <div class="social-links mt-3">
              <a href="https://web.facebook.com/profile.php?id=100007886132427" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="https://www.instagram.com/khadafi_af/" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="https://github.com/khadafi-hub" class="github"><i class="bx bxl-github"></i></a>
            </div>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>EDU-COVID</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
        Designed by <a href="https://www.instagram.com/khadafi_af/">Muhammad Khadafi</a>
      </div>
    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

 <!-- Vendor JS Files -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
 <script src="https://cdn.jsdelivr.net/gh/mcstudios/glightbox/dist/js/glightbox.min.js"></script>
 <script src="https://unpkg.com/isotope-layout@3/dist/isotope.pkgd.min.js"></script>
 <script src="assets/vendor/php-email-form/validate.js"></script>
 <script src="assets/vendor/purecounter/purecounter.js"></script>
 <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
 <script src="assets/vendor/waypoints/noframework.waypoints.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>

</body>

</html>
