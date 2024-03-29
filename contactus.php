<!DOCTYPE html>
<html>

<head>
  <title>UST-CICS SWDB Contact</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <script src="https://code.iconify.design/2/2.1.0/iconify.min.js"></script>
  <script src="https://code.iconify.design/2/2.1.2/iconify.min.js"></script>
  <script src="https://code.iconify.design/iconify-icon/1.0.0/iconify-icon.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  <!-- ICONS  -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <link rel='stylesheet' href='hti tps://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/css/all.min.css' />
  <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css' />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>

  <!-- FONTS  -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Darker+Grotesque:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap">
  <link href='https://fonts.googleapis.com/css?family=Playfair Display' rel='stylesheet'>

  <link rel="icon" type="image/x-icon" href="/images/logo.ico">

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="style-2.css">
</head>

<body>
  <?php
  session_start();
  if (!isset($_SESSION['user_name'])) {
  ?>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <a class="navbar-brand" href="index.php"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <a href="index.php"><img src="ustlogo.png" style="width:80px;height:75px;margin-left:20%;" class="logo_enable"></a>
        <a href="index.php"><img src="cicslogo.png" style="width:70px;height:60px;margin-left:20%;" class="logo_enable"></a>

        <div class="text" style="color:white; margin-right:15%; width:100%; line-height: 0.6;">
          <strong style="margin-left:10%; width:100%;">UST - College of Information and Computing Sciences</strong>
          <hr style="background:white; height:3px; margin-left:10%; width:90%;">
          <strong style="margin-left:10%; width:100%;">Student Welfare and Development Board</strong>
        </div>

        <ul class="navbar-nav ml-auto"  style="font-size:20px;">
          <li class="d-lg-none">
            <a href="index.php" class="text d-lg-none">Home</a>
            <hr class="d-lg-none" />
          </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="index.php">Home</a></li>

          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="aboutus.php">AboutUs</a></li>

          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="contactus.php">ContactUs</a></li>

          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="FAQ.php">FAQ</a></li>
          <li class="d-lg-none">

        </ul>
      </div>
    </nav>
  <?php
  } elseif (isset($_SESSION['user_name'])) {
  ?>
    <!-- Navigation Bar -->
    <nav class="navbar navbar-expand-lg navbar-light fixed-top">
      <a class="navbar-brand" href="index.php"></a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <a href="index.php"><img src="images/logo.png" style="width:80px;height:42px;margin-left:20%;" class="logo_enable"></a>
        <ul class="navbar-nav ml-auto">
          <li class="d-lg-none">
            <a href="index.php" class="text d-lg-none">Home</a>
            <hr class="d-lg-none" />
          </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="index.php">Home</a></li>
          <li class="d-lg-none">
            <a href="about.php" class="text d-lg-none">About</a>
            <hr class="d-lg-none" />
          </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="about.php">About</a></li>
          <li class="d-lg-none">
            <a href="products.php" class="text d-lg-none">Products</a>
            <hr class="d-lg-none" />
          </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="products.php">Products</a></li>
          <li class="d-lg-none">
            <a href="faq.php" class="text d-lg-none">FAQ</a>
            <hr class="d-lg-none" />
          </li>
          <li class="nav-item d-none d-lg-block"><a class="nav-link" href="faq.php">FAQ</a></li>

      </div>
      </div>
      </ul>
      </div>
    </nav>
  <?php
  }
  ?>

  <div class="container-fluid" style=" background-color: #990000; height:100px; width:100%; margin-top: 100px; ">
    <h3 style="padding-top: 40px; color: white; line-height:10%; text-indent: 10px;">Contact Us</h3>
    <hr style="color: white;  width:40%; border-top: 2px solid white; float: left;">
  </div>

  <div class="container-fluid" style="height:1200px; width:50%; background-color: white; float: right;">
    <br />
    <h2 style="margin-left: 3%;"><iconify-icon inline icon="ep:office-building"></iconify-icon>Address</h2>
    <p style="margin-left: 3%;">
      OSA Office Address: <br />
      2/F Tan Yan Kee Student Center, <br />
      University of Santo Tomas <br />
      España Boulevard, Sampaloc, <br />
      Manila, 1015 Philippines <br />
    </p>

    <p style="margin-left: 3%;">
      CICS Office Address: <br />
      2/F Blessed Pier Giorgio Frassati Building <br />
      University of Santo Tomas <br />
      España Boulevard, Sampaloc, <br />
      Manila, 1015 Philippines <br />
    </p>

    <h2 style="margin-left: 3%;"><iconify-icon inline icon="bytesize:telephone"></iconify-icon>Telephone</h2>
    <p style="margin-left: 3%;">
      Office for Student Affairs (OSA) Office:<br />
      +63-2-3406-1611 local 8267 / 8294 <br />
      +63-2-8731-2985 <br />
      <br/>
      Student Welfare and Development Board (SWDB) <br/>
      +63-2-3406-1611 local 8550  <br/>
      <br/>
      College of Information and Computing Sciences (CICS):<br/>
      +63-2-3406-1611 local 8518<br/>
    </p>

    <h2 style="margin-left: 3%;"><iconify-icon inline icon="carbon:email"></iconify-icon>Email</h2>
    <p style="margin-left: 3%;">
      Office for Student Affairs (OSA):<br/>
      osa@ust.edu.ph<br /><br/>
      College of Information and Computing Sciences (CICS): <br />
      cics@ust.edu.ph<br /><br/>
    </p>
    <br />
  </div>


  <div class="container-fluid" style=" height:1000px; width:50%; margin-right: 50%;  background: rgba(128, 128, 128, 0.8); ">
    <br />
    <h4 style="color:white; margin-left: 3%;"><iconify-icon inline icon="bxs:school"></iconify-icon><b>Related Links:</b></h4>

    <p style="margin-left: 3%; color:white; ">
    <a href="https://osa.ust.edu.ph/" style="color:white;">Office of Student Affairs</a><br />
    <a href="https://www.ust.edu.ph/administrative-offices/office-for-student-affairs/" style="color:white;">Office of Student Affairs - Administrative Offices </a><br />
    <a href="https://www.ust.edu.ph/information-and-computing-sciences/" style="color: white;">UST - College of Information and Computing Sciences </a><br />
 
    </p>

 
  </div>
  <!-- Footer Bar -->
  <footer class="container-fluid" id="socials_section" style=" position: absolute;">
    <div class="row">
      <div class="col-sm-4" style="line-height: 0.8;">
        <h3 style="font-family: Darker Grotesque, sans-serif;"><iconify-icon inline icon="ant-design:contacts-outlined"></iconify-icon>Contacts:</h3>
        <p>Address:</p>
        <p>Telephone:</p>
        <p>Email:</p>
        <button type="button" class="btn btn-secondary"><b><a href="contactus.php" style="color: white;">View More</a></b></button>
      </div>
      <p style="padding-left:53%;">Photo: wallpaperflare.com</p>
    </div>
  </footer>



</body>

</html>