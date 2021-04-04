<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>CrowdLearn</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{asset('assets/img/crowd.png')}}" rel="icon">
  <link href="{{asset('assets/img/crowd.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,600,600i,700,700i,900" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{asset('assets/vendor/animate.css/animate.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/aos/aos.css" rel="stylesheet')}}">
  <link href="{{asset('assets/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/glightbox/css/glightbox.min.css')}}" rel="stylesheet">
  <link href="{{asset('assets/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{asset('assets/css/style.css')}}" rel="stylesheet">

</head>

<body>

  <!-- Top-->
  <section id="topbar" class="d-flex align-items-center">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <p>If You have any issue please contact the support Team.  Sachini: 077 92 40 207</p>
      </div>
      <div class="social-links d-none d-md-block">
        <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
        <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></i></a>
      </div>
    </div>
  </section>
  <!-- close top -->

  <!-- header-->
  <header id="header" class="d-flex align-items-center">
    <div class="container d-flex align-items-center">

      <div class="logo me-auto">
        <h1><a href="index.html">CrowdLearn</a></h1>
      </div>
      
      <!-- nav bar-->
      <nav id="navbar" class="navbar">
        <ul>
        <li class="dropdown"><a href="#"><span>LKR</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">LKR</a></li>
              <li><a href="#">AUD</a></li>
              <li><a href="#">JPY</a></li>
              <li><a href="#">SGD</a></li>
              <li><a href="#">GBP</a></li>
              <li><a href="#">EUR</a></li>
              <li><a href="#">NZD</a></li>
              <li><a href="#">KWD</a></li>
            </ul>
          </li>
          <li class="dropdown"><a href="#"><span>Categories</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Development</a></li>
              <li><a href="#">Business</a></li>
              <li><a href="#">IT & Software</a></li>
              <li><a href="#">Personal Development</a></li>
              <li><a href="#">Design</a></li>
              <li><a href="#">Marketing</a></li>
              <li><a href="#">Lifistyle</a></li>
              <li><a href="#">Photography</a></li>
              <li><a href="#">Health & Fitness</a></li>
              <li><a href="#">Teaching & Academic</a></li>
              <li><a href="#">All Tution Classes</a></li>
            </ul>
          </li>
          
          <li><a class="nav-link scrollto" href="">All Courcess</a></li>
          <li><a class="nav-link scrollto" href="">All Tution Classes</a></li>
          <li><a class="nav-link scrollto" href="">Do You Like to Teach?</a></li>
          <li><a class="nav-link scrollto" href="#contact">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>
      <!-- navbar -->

    </div>
  </header>
  <!-- close Header -->

 <!-- slide -->
  <section id="hero">
    <div class="hero-container">
      <div id="heroCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">

        <div class="carousel-inner" role="listbox">

          <div class="carousel-item active" style="background-image: url('assets/img/slide/img.jpg');">
            <div class="carousel-container">
              <div class="carousel-content container">
                <h2 class="animate__animated animate__fadeInDown">Welcome to <span>CrowdLearn</span></h2>
              <h3>  <p class="animate__animated animate__fadeInUp"><b1>Our only concern is your "EDUCATION"<br>
                and <br>We bring It Right To YOur "FINGERPRINT"</b1></p></h3>
                <a href="{{ route('register') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Register</a>
                <a href="{{ route('signin') }}" class="btn-get-started animate__animated animate__fadeInUp scrollto">Sign In</a>
              </div>
            </div>
          </div>


        </div>

      </div>
    </div>
  </section>
  <!-- close slide -->

  <main id="main">
<!-- categories -->
  <section id="services" class="services">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Categories</h2>
        </div>

        <div class="row">
          <div class="col-lg-2 col-md-3 icon-box" data-aos="fade-up">
            <h4 class="title"><a href="">Development</a></h4>
          </div>

          <div class="col-lg-2 col-md-3 icon-box" data-aos="fade-up">
            <h4 class="title"><a href="">Business</a></h4>
            </div>

          <div class="col-lg-2 col-md-3 icon-box" data-aos="fade-up">
            <h4 class="title"><a href="">IT & Software</a></h4>
           </div>

          <div class="col-lg-2 col-md-3 icon-box" data-aos="fade-up">
           <h4 class="title"><a href="">Personal Development</a></h4>
          </div>

          <div class="col-lg-2 col-md-3 icon-box" data-aos="fade-up">
            <h4 class="title"><a href="">Design </a></h4>
            </div>
          
          <div class="col-lg-2 col-md-3 icon-box" data-aos="fade-up" data-aos-delay="100">
           <h4 class="title"><a href="">Marketing</a></h4>
            </div>

          <div class="col-lg-2 col-md-3 icon-box" data-aos="fade-up" data-aos-delay="200">
            <h4 class="title"><a href="">Lifestyle</a></h4>
            </div>

          <div class="col-lg-2 col-md-3 icon-box" data-aos="fade-up" data-aos-delay="300">
           <h4 class="title"><a href="">Photography</a></h4>
            </div>

          <div class="col-lg-2 col-md-3 icon-box" data-aos="fade-up" data-aos-delay="400">
           <h4 class="title"><a href="">Health & Fitness</a></h4>
            </div>

          <div class="col-lg-2 col-md-3 icon-box" data-aos="fade-up" data-aos-delay="500">
            <h4 class="title"><a href="">Teaching & Academics</a></h4>
            </div>
        </div>

      </div>
    </section>
    <!-- close categories -->



    <!-- About-->
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
           <br><br> <img src="{{asset('assets/img/im.jpg')}}" class="img-fluid" alt="">
          </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
             <h4 class="title"><a href="">Interested in Teaching?</a></h4>
              <p class="description">Sign up as an instructor on CrowdLearn right now to spread your knowledge among curious and eager students thirsting for knowledge.
              <br>
              <a href="" class="btn-get-started animate__animated animate__fadeInUp scrollto">Sign IN</a>
              </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <h4 class="title"><a href="">Are You an Institute Looking to Collaborate?</a></h4>
              <p class="description">Send a request through our sign up page to get your institute registered on CrowdLearn. It will give you a wide array of new students to interact with.
             <br> <a href="" class="btn-get-started animate__animated animate__fadeInUp scrollto">Register</a>
              </div>

          </div>
        </div>

      </div>
    </section>
    <!-- close About -->

    <!-- new relese -->
    <div class="container" data-aos="fade-up">
    <br>
    <div class="section-title">
          <h2>New Release</h2>
        </div>
    <div class="row text-center">

<div class="col-lg-3 col-md-6 mb-4">
  <div class="card h-100">
    <img class="card-img-top" src="{{asset('assets/img/img1.jpg')}}" alt="">
    <div class="card-body">
      <h4 class="card-title">Mechatronic Engineering
 </h4>
      <p class="card-text">Solomon  Jayasena
      <br>
      Mechatronic Engineering<br>
      LKR 19 366.77<br>
      No Student Enrolled</p>
    </div>
    <div class="card-footer">
    <a href="#" class="btn btn-primary">Enroll Now</a>
    </div>
  </div>
</div>

<div class="col-lg-3 col-md-6 mb-4">
  <div class="card h-100">
    <img class="card-img-top" src="{{asset('assets/img/img2.jpg')}}" alt="">
    <div class="card-body">
      <h4 class="card-title">Fundamental of We Design/Web Engineering
</h4>
      <p class="card-text">Solomon  Jayasena<br>
Web Designing <br>
LKR 19 366.77<br>
No Student Enrolled</p>
    </div>
    <div class="card-footer">
    <a href="#" class="btn btn-primary">Enroll Now</a>
    </div>
  </div>
</div>

<div class="col-lg-3 col-md-6 mb-4">
  <div class="card h-100">
    <img class="card-img-top" src="{{asset('assets/img/img3.jpeg')}}" alt="">
    <div class="card-body">
      <h4 class="card-title">Mechatronic Engineering
 </h4>
      <p class="card-text">Solomon  Jayasena
      <br>
Mechatronic Engineering<br>
LKR 19 366.77<br>
No Student Enrolled</p>
    </div>
    <div class="card-footer">
    <a href="#" class="btn btn-primary">Enroll Now</a>
    </div>
  </div>
</div>

<div class="col-lg-3 col-md-6 mb-4">
  <div class="card h-100">
    <img class="card-img-top" src="{{asset('assets/img/img4.png')}}" alt="">
    <div class="card-body">
      <h4 class="card-title">Database Analyzing
</h4>
      <p class="card-text">Solomon  Jayasena<br>
Database Analyze &  Design<br>
LKR 19 366.77<br>
No Student Enrolled</p>
    </div>
    <div class="card-footer">
    <a href="#" class="btn btn-primary">Enroll Now</a>
    </div>
  </div>
</div>

</div>
</div>
<!-- close new release -->

<!-- Top Rated Courses -->
<div class="container" data-aos="fade-up">
<br><br>
    <div class="section-title">
          <h2>Top Rated Courses</h2>
        </div>
    <div class="row text-center">

<div class="col-lg-3 col-md-6 mb-4">
  <div class="card h-100">
    <img class="card-img-top" src="{{asset('assets/img/imge.jpg')}}" alt="">
    <div class="card-body">
      <h4 class="card-title">Cyber Security Training from scratch</h4>
      <p class="card-text">Sahan Sanathana <br>
      Cyber Security Training<br>
      Free Access<br>
      Student Enrolled:11</p>
    </div>
    <div class="card-footer">
      <a href="#" class="btn btn-primary">Enroll Now</a>
    </div>
  </div>
</div>

<div class="col-lg-3 col-md-6 mb-4">
  <div class="card h-100">
    <img class="card-img-top" src="{{asset('assets/img/img6.jpg')}}" alt="">
    <div class="card-body">
      <h4 class="card-title">AWS Certified Solutions Architect</h4>
      <p class="card-text">Sahan Sanathana <br>
      AWS Certified Solutions Architect<br>
      Free Access<br>
      Student Enrolled:11</p>
    </div>
    <div class="card-footer">
    <a href="#" class="btn btn-primary">Enroll Now</a>
    </div>
  </div>
</div>

<div class="col-lg-3 col-md-6 mb-4">
  <div class="card h-100">
    <img class="card-img-top" src="{{asset('assets/img/img10.jpeg')}}" alt="">
    <div class="card-body">
      <h4 class="card-title">Introduction to Deep Learning</h4>
      <p class="card-text">Sahan Sanathana <br>
      Introduction to Deep Learning<br>
      Free Access<br>
      Student Enrolled:8</p>
    </div>
    <div class="card-footer">
    <a href="#" class="btn btn-primary">Enroll Now</a>
    </div>
  </div>
</div>

<div class="col-lg-3 col-md-6 mb-4">
  <div class="card h-100">
    <img class="card-img-top" src="{{asset('assets/img/img8.jpg')}}" alt="">
    <div class="card-body">
      <h4 class="card-title">The Complete Digial Marketing Course</h4>
      <p class="card-text">Sahan Sanathana <br>
      Digital Marketing & Social Media Marketing Mastery, Google Ads, Facebook Ads, SEO, WordPress, Instagram, YouTube & More. <br>
      Free Access<br>
      Student Enrolled:7</p>
    </div>
    <div class="card-footer">
    <a href="#" class="btn btn-primary">Enroll Now</a>
    </div>
  </div>
</div>

</div>
</div>
<!-- close Top Rated Courses -->

<!-- Tutition classes -->
<div class="container" data-aos="fade-up">

    <div class="section-title">
    <br><br>
          <h2>Tutition classes</h2>
        </div>
    <div class="row text-center">

<div class="col-lg-3 col-md-6 mb-4">
  <div class="card h-100">
    <img class="card-img-top" src="{{asset('assets/img/img13.jpg')}}" alt="">
    <div class="card-body">
      <h4 class="card-title">French Class for A/L 2022</h4>
      <p class="card-text">
Ruchini Mendis<br>
Come and discover French<br>
Year: 2021
LKR 6000.00</p>
    </div>
    <div class="card-footer">
      <a href="#" class="btn btn-primary">Enroll Now</a>
    </div>
  </div>
</div>

<div class="col-lg-3 col-md-6 mb-4">
  <div class="card h-100">
    <img class="card-img-top" src="{{asset('assets/img/img14.jpg')}}" alt="">
    <div class="card-body">
      <h4 class="card-title">Web Application Treats Fundamentals</h4>
      <p class="card-text">Sahan Sanathana<br>
OWASP Treats Fundamentals<br>
Year: 2020
Free Access</p></div>
    <div class="card-footer">
    <a href="#" class="btn btn-primary">Enroll Now</a>
    </div>
  </div>
</div>

<div class="col-lg-3 col-md-6 mb-4">
  <div class="card h-100">
    <img class="card-img-top" src="{{asset('assets/img/img15.png')}}" alt="">
    <div class="card-body">
      <h4 class="card-title">Introduction to Raspberry Pi 4</h4>
      <p class="card-text">Sahan Sanathana<br>
      Introduction to Raspberry Pi 4<br>
Year: 2020
Free Access</p></div>
    <div class="card-footer">
    <a href="#" class="btn btn-primary">Enroll Now</a>
    </div>
  </div>
</div>

<div class="col-lg-3 col-md-6 mb-4">
  <div class="card h-100">
    <img class="card-img-top" src="{{asset('assets/img/img16.png')}}" alt="">
    <div class="card-body">
      <h4 class="card-title">Cambridge Lower Secondary Math</h4>
      <p class="card-text">Mr. Isuru Weerarathne<br>
Checkpoint Mathematics from stage 7 to 9<br>
Year: 2020
LKR 1 500.00</p></div>
    <div class="card-footer">
    <a href="#" class="btn btn-primary">Enroll Now</a>
    </div>
  </div>
</div>

</div>
</div>
<!-- close Tutition classes -->
    


    <section id="about" class="about">
      <div class="container" data-aos="fade-up">

        <div class="row no-gutters">
          <div class="col-lg-6 video-box">
            <img src="{{asset('assets/img/img11.jpg')}}" class="img-fluid" alt="">
            </div>

          <div class="col-lg-6 d-flex flex-column justify-content-center about-content">

            <div class="section-title">
              <h2>One to One Training</h2>
              <p>In doing self educations there comes a time where you get stuck somewhere and you have no idea how to continue with your studies.  And you want to ask for help without causing a fuzz. One-on-one training sessions provide an opportunity to give users focused attention, but they come with their own set of unique problems. When learning new skills, these students usually feel more comfortable asking questions when their the only ones in the room. 
<br><br>
CrowdLearn gives you this opportunity, to consult with expert Instructors and solve your problems with ease and efficiency. </p>
            </div>
            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            
              <h4 class="title"><a href="">Become A Trainer</a></h4>
              </div>
          </div>
        </div>

      </div>
    </section>


    <!--Tutition classes-->

    <section id="team" class="team">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Tutition classes</h2>
          </div>

        <div class="row">

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up">
            <div class="member">
              <div class="pic"><img src="assets/img/team/img1.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Chemistry Instructor</h4>
                <span>Samadhi Perera</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="member">
              <div class="pic"><img src="assets/img/team/img1.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>IT Instructor</h4>
                <span>Hasini Vihanga</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="member">
              <div class="pic"><img src="assets/img/team/img1.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Physics Instructor</h4>
                <span>Nishadi Gunawardena</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-xl-3 col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="member">
              <div class="pic"><img src="assets/img/team/img1.png" class="img-fluid" alt=""></div>
              <div class="member-info">
                <h4>Mathematics Instructor</h4>
                <span>Sandani Ishara</span>
                <div class="social">
                  <a href=""><i class="bi bi-twitter"></i></a>
                  <a href=""><i class="bi bi-facebook"></i></a>
                  <a href=""><i class="bi bi-instagram"></i></a>
                  <a href=""><i class="bi bi-linkedin"></i></a>
                </div>
              </div>
            </div>
          </div>
        
        </div>

      </div>
    </section>
    <!-- close Tutition classes -->
    

    <!--  Contact -->
    <section id="contact" class="contact">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Contact Us</h2>
        </div>

        <div class="row">

          <div class="col-lg-12" data-aos="fade-up" data-aos-delay="300">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-lg-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-lg-6 form-group">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>
              <div class="form-group">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section>
    <!-- close Contact -->

  </main>
  <!-- End main -->

  <!--Footer  -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6 footer-info">
            <h3>CrowdLearn</h3>
            <div class="social-links mt-3">
              <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
              <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
              <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
              <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
              <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Explore</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Home</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Forums</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Pricing</a></li>
             
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Take a Look</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">All Courses</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">All Tution Classes</a></li>
              </ul>
          </div>
          
           <div class="col-lg-2 col-md-6 footer-links">
            <h4>Learn More</h4>
            <ul>
            <li><i class="bx bx-chevron-right"></i> <a href="#">About us</a></li>
            <li><i class="bx bx-chevron-right"></i> <a href="#">Features</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Comparison</a></li>
            </ul>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Help</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#">FAQ</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Contact Us</a></li>
              </ul>
          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>CrowdLearn</span></strong>. All Rights Reserved
      </div>
      <div class="credits">
       <p>If You have any issue please contact the support Team.  Sachini: 077 92 40 207</p>
      </div>
    </div>
  </footer>
  <!-- close Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS  -->
  <script src="{{asset('assets/vendor/aos/aos.js')}}"></script>
  <script src="{{asset('assets/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{asset('assets/vendor/glightbox/js/glightbox.min.js')}}"></script>
  <script src="{{asset('assets/vendor/isotope-layout/isotope.pkgd.min.js')}}"></script>
  <script src="{{asset('assets/vendor/php-email-form/validate.js')}}"></script>
  <script src="{{asset('assets/vendor/purecounter/purecounter.js')}}"></script>
  <script src="{{asset('assets/vendor/swiper/swiper-bundle.min.js')}}"></script>

  <!--  Main JS  -->
  <script src="{{asset('assets/js/main.js')}}"></script>


</body>

</html>