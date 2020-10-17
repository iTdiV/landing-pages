<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">


  <meta name="author" content="ParikesitAD">
  <meta name="description" content="Dausan Adam Parikesit, S.Kom">
  <meta name="keywords" content="ParikesitAD, Parikesit, Adam, Profile Page">
  <meta name="generator" content="ParikesitAD">

  <title>ParikesitAD</title>
  <meta property="og:description" content="Dausan Adam Parikesit Profile, Portofolio.">
  <meta property="og:title" content="Dausan Adam Parikesit">
  <meta name="twitter:description" content="Dausan Adam Parikesit Profile">
  <meta name="twitter:title" content="Dausan Adam Parikesit Profile">

  <!-- Favicons -->
  <link href="{{url('frontend/templates')}}/assets/img/favicon.png" rel="icon">
  <link href="{{url('frontend/templates')}}/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

  <style>
      body {
          font-family: 'Nunito';
      }
  </style>


  <!-- Vendor CSS Files -->
  <link href="{{url('frontend/templates')}}/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="{{url('frontend/templates')}}/assets/vendor/icofont/icofont.min.css" rel="stylesheet">
  <link href="{{url('frontend/templates')}}/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="{{url('frontend/templates')}}/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="{{url('frontend/templates')}}/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="{{url('frontend/templates')}}/assets/vendor/aos/aos.css" rel="stylesheet">

    {{-- FONTAWESOME --}}
  <link href="{{url('frontend/templates')}}/assets/vendor/fontawesome/css/all.min.css" rel="stylesheet">


  <!-- Template Main CSS File -->
  <link href="{{url('frontend/templates')}}/assets/css/style.css" rel="stylesheet">



    <!--
    =========================================================
    * Developed by ParikesitAD (www.parikesitad.com)
    * Template Name: iPortfolio - v1.2.1
    * Template URL: https://bootstrapmade.com/iportfolio-bootstrap-portfolio-websites-template/
    * Author: BootstrapMade.com
    * License: https://bootstrapmade.com/license/
    =========================================================
    * The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.
    -->

</head>

<body>

  <!-- ======= Mobile nav toggle button ======= -->
  <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

  <!-- ======= Header ======= -->
  <header id="header">
    <div class="d-flex flex-column">

      <div class="profile">
        <img src="{{url('frontend/templates')}}/assets/img/profile-img.jpg" alt="ParikesitAD Profile" class="img-fluid rounded-circle">
        <h1 class="text-light"><a href="#">ParikesitAD</a></h1>
        <h6 class="text-light text-center text-capitalize"><a href="#">Full stack Web Developer</a></h6>
        <div class="social-links mt-3 text-center">
          <a href="https://www.instagram.com/parikesitad/?hl=en" class="instagram"><i class="bx bxl-instagram"></i></a>
          <a href="https://github.com/itdiv" class="github"><i class="bx bxl-github"></i></a>
          <a href="https://www.linkedin.com/in/dausan-adam-parikesit-4b4835169/" class="linkedin"><i class="bx bxl-linkedin"></i></a>
        </div>
      </div>
       <nav class="nav-menu">
        <ul>
          <li class=active"><a href="#hero"><i class="bx bx-home"></i> <span>Home</span></a></li>
          <li><a href="#about"><i class="bx bx-user"></i> <span>About</span></a></li>
          <li><a href="#resume"><i class="bx bx-file-blank"></i> <span>Resume</span></a></li>
          {{-- <li><a href="#portfolio"><i class="bx bx-book-content"></i> Portfolio</a></li> --}}
          <li><a href="#services"><i class="bx bx-server"></i> Services</a></li>
          <li><a href="#contact"><i class="bx bx-envelope"></i> Contact</a></li>

        </ul>
      </nav><!-- .nav-menu -->
      <button type="button" class="mobile-nav-toggle d-xl-none"><i class="icofont-navigation-menu"></i></button>

    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="hero-container" data-aos="fade-in">
      <h1>Dausan Adam Parikesit</h1>
      <p>I'm <span class="typed" data-typed-items="Technician, Freelancer, UI/UX Designer, Web Developer"></span></p>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="section-title">
          <h2>About</h2>
          <p>Hi, I'm Parikesit. Nice to e-meet you.
          </a>
          <p>
            Please let me introduce myself,<br>
            Freshly IT Major graduate with 5 years experienced professional working as Web Developer. Skilled in PHP especially CodeIgniter and Laravel. I'm aiming for levelup my skill progress on Mobile Development using React Native.<br>

            That's it for now. Thank you for your time, I really appreciate it. <br>Have a good day, always!
            </p>
            <p>
            Regards,
<br>Parikesit</p>
        </div>

        <div class="row">
          <div class="col-lg-4" data-aos="fade-right">
            <img src="{{url('frontend/templates')}}/assets/img/parikesitad.jpg" class="img-fluid" alt="ParikesitAD Profile">
          </div>
          <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left">
            <h3>UI/UX Designer &amp; Web Developer.</h3>

            <div class="row">
              <div class="col-lg-6">
                <ul>
                  <li><i class="far fa-fw fa-envelope text-primary"></i> <strong>E-mail:</strong> admin@parikesitad.com</li>
                  <li><i class="fab fa-fw fa-laravel text-primary"></i> <strong>Website:</strong> www.parikesitad.com</li>
                  <li><i class="fab fa-fw fa-whatsapp text-primary"></i> <strong>Phone:</strong> +62 822-9850-3412</li>
                  <li><i class="fas fa-fw fa-street-view text-primary"></i> <strong>City:</strong> Palembang, Indonesia</li>
                  <li><i class="far fa-fw fa-paper-plane"></i> <strong>Telegram:</strong> @ParikesitAD</li>
                  <li><i class="fas fa-fw fa-user-graduate"></i> <strong>Degree:</strong> Bachelor</li>
                  <li><i class="fas fa-fw fa-passport"></i> <strong>Nationality:</strong> Indonesia</li>
                  <li><i class="fas fa-fw fa-hands-helping"></i> <strong class="text-primary">Freelance:</strong> <strong class="text-primary">Available</strong></li>
                </ul>
              </div>



            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->



    <!-- ======= Skills Section ======= -->
    <section id="skills" class="skills section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Skills</h2>

        </div>

        <div class="row skills-content">

          <div class="col-lg-6" data-aos="fade-up">

            <div class="progress">
              <span class="skill">PHP <i class="val">95%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">WordPress/CMS <i class="val">100%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">React Native <i class="val">50%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Rest API<i class="val">65%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Progressive Web Apps<i class="val">75%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">


            <div class="progress">
              <span class="skill">Adobe XD<i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Figma <i class="val">80%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Photoshop <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Illustrator <i class="val">70%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

            <div class="progress">
              <span class="skill">Network Engineering <i class="val">90%</i></span>
              <div class="progress-bar-wrap">
                <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
            </div>

          </div>

        </div>

      </div>
    </section><!-- End Skills Section -->

    <!-- ======= Resume Section ======= -->
    <section id="resume" class="resume">
      <div class="container">

        <div class="section-title">
          <h2>Resume</h2>
          <button class="btn btn-primary" data-toggle="tooltip" data-placement="right" title="Oops! My CV Not Available at this Time!"><i class="fas fa-fw fa-download"></i> Download CV</button>
        </div>

        <div class="row">
          <div class="col-lg-6" data-aos="fade-up">

            <h3 class="resume-title">Education</h3>
            <div class="resume-item">
              <h4>BACHELOR OF COMPUTER SCIENCE</h4>
              <h5>2020</h5>
              <p><em>Borobudur University of Jakarta, Indonesia</em></p>
            </div>
            <div class="resume-item">
              <h4>Vocational High School</h4>
              <h5>2008 - 2011</h5>
              <p><em>Vocational High School 2 Surakarta, Cetral Java, indonesia</em></p>
              <p>Computer and Network Engineering</p>

            </div>
          </div>
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <h3 class="resume-title">Professional Experience</h3>
            <div class="resume-item">
              <h4 class="">IT Helpdesk Associate</h4>
              <h5>30 November 2018 - 30 July 2020</h5>
              <p><em>PT. Gautama Indah Perkasa, Indonesia </em></p>
              <ul>
                <li class="text-purple"><em>NULL</em></li>

              </ul>
            </div>
            <div class="resume-item">
              <h4 class="text-primary">Networking Team</h4>
              <h4>Asian Para Games 2018 - Indonesia</h4>
              <h5>6 October - 13 October 2018</h5>
              <p><em>WSL MSC Sdn Bhd, Malaysia </em></p>
              <ul>
                <li>
                Prepare and set up the network for the needs of live scores.
                </li>
                <li>
                Configure and maintenance network stability.
                </li>
              </ul>
            </div>
            <div class="resume-item">
              <h4>Maintenance Engineer</h4>
              <h5>18 October 2011 - 18 October 2012</h5>
              <p><em>PT. Trisinar Indo Pratama</em></p>
              <ul>
                <li class="text-purple"><em>NULL</li>
             </em> </ul>
            </div>
          </div>
        </div>

      </div>
    </section><!-- End Resume Section -->

`

    <!-- ======= Certification Section ======= -->
    <section id="Certification" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Certification</h2>
          <p></p>
        </div>

        <div class="col">
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="fas fa-fw fa-certificate"></i></div>
            <h4 class="title"><a href="">Full-Stack Web Developer</a></h4>
            {{-- <p class="description"></p> --}}
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="fas fa-fw fa-certificate"></i></div>
            <h4 class="title"><a href="">Full-Stack Web Laravel Vue JS</a></h4>
            {{-- <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p> --}}
          </div>
          <div class="col-lg-4 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="fas fa-fw fa-certificate"></i></div>
            <h4 class="title"><a href="">Full-Stack React Native Developer</a></h4>
            {{-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p> --}}
          </div>



        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p></p>
        </div>

        <div class="row">
          <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up">
            <div class="icon"><i class="icofont-computer"></i></div>
            <h4 class="title"><a href="">UI/UX Designer</a></h4>
            {{-- <p class="description"></p> --}}
          </div>
          <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="fas fa-laptop-code"></i></div>
            <h4 class="title"><a href="">Full Stack Web Development</a></h4>
            {{-- <p class="description">Minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat tarad limino ata</p> --}}
          </div>
          <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="200">
            <div class="icon"><i class="fas fa-mobile"></i></div>
            <h4 class="title"><a href="">Mobile Development</a></h4>
            {{-- <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur</p> --}}
          </div>
          <div class="col-lg-6 col-md-6 icon-box" data-aos="fade-up" data-aos-delay="300">
            <div class="icon"><i class="icofont-image"></i></div>
            <h4 class="title"><a href="">IT Consultan</a></h4>
            {{-- <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p> --}}
          </div>


        </div>

      </div>
    </section><!-- End Services Section -->


    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Get some <i class="fas fa-coffee text-primary"></i> and feel free to ask, me and my team are <strong class="text-primary">Available</strong>.
          </p>
        </div>

        <div class="row" data-aos="fade-in">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="icofont-google-map"></i>
                <h4>Location:</h4>
                <p>Palembang, South Sumatra, Indonesia</p>
              </div>

              <div class="email">
                <i class="icofont-envelope"></i>
                <h4>Email:</h4>
                <p>admin@parikesitad.com</p>
              </div>

              <div class="phone">
                <i class="icofont-phone"></i>
                <h4>Call:</h4>
                <p>+62 822-9850-3412</p>
              </div>

            </div>

          </div>

          <div class="col-lg-7 mt-5 mt-lg-0 d-flex align-items-stretch">

            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d995.8627887370827!2d104.43688822916509!3d-3.237366799852679!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3bb72df057e73d%3A0x47d433f577d8a2d9!2sHijrah%20Komputer%20Gelumbang!5e0!3m2!1sid!2sid!4v1602763139669!5m2!1sid!2sid" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="true" aria-hidden="false" tabindex="0"></iframe>

          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>2020</span></strong>
      </div>
      <div class="credits">
        <a href="{{URL('/')}}">ParikesitAD</a>
      </div>
    </div>
  </footer><!-- End  Footer -->

  <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{url('frontend/templates')}}/assets/vendor/jquery/jquery.min.js"></script>
  <script src="{{url('frontend/templates')}}/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="{{url('frontend/templates')}}/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="{{url('frontend/templates')}}/assets/vendor/php-email-form/validate.js"></script>
  <script src="{{url('frontend/templates')}}/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="{{url('frontend/templates')}}/assets/vendor/counterup/counterup.min.js"></script>
  <script src="{{url('frontend/templates')}}/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="{{url('frontend/templates')}}/assets/vendor/venobox/venobox.min.js"></script>
  <script src="{{url('frontend/templates')}}/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="{{url('frontend/templates')}}/assets/vendor/typed.js/typed.min.js"></script>
  <script src="{{url('frontend/templates')}}/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="{{url('frontend/templates')}}/assets/js/main.js"></script>


  <script>
    $(function ()
      {
        $('[data-toggle="tooltip"]').tooltip()
      })
  </script>

</body>

</html>
