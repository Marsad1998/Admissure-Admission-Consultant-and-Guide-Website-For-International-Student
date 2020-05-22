<?php include 'connect/db.php'; ?>
<!DOCTYPE html>
<html class="wide wow-animation" lang="en">
  <head>
    <title>Admissure - The student admission specialists</title>
    <meta name="keywords" content="Admission, Admissure, UK, Univerisity, Universities, Sure Admission, Automated System, International, Student, Support, admissure.com, not admission.com">
    <meta name="description" content="Admissure - The student admission specialists">
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Roboto:100,300,300i,400,500,600,700,900%7CRaleway:500">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css" id="main-styles-link">
    <!--[if lt IE 10]>
    <div style="background: #212121; padding: 10px 0; box-shadow: 3px 3px 5px 0 rgba(0,0,0,.3); clear: both; text-align:center; position: relative; z-index:1;"><a href="http://windows.microsoft.com/en-US/internet-explorer/"><img src="images/ie8-panel/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today."></a></div>
    <script src="js/html5shiv.min.js"></script>
    <![endif]-->
    <style>
      .customLink{
        color: black;
        cursor: pointer;
      }
      .customLink:hover{
        color: #00e39f;
      }
      .custom_field{
        border-radius: 0px;
        width: 300px;
      }
    </style>
  </head>
  <body>
    <div class="preloader">
      <div class="wrapper-triangle">
        <div class="pen">
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
          <div class="line-triangle">
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
            <div class="triangle"></div>
          </div>
        </div>
      </div>
    </div>
    <div class="page">
      <!-- Page Header-->
      <header class="section page-header" id="home" data-type="anchor">
        <!-- RD Navbar-->
        <div class="rd-navbar-wrap">
          <nav class="rd-navbar rd-navbar-modern" data-layout="rd-navbar-fixed" data-sm-layout="rd-navbar-fixed" data-md-layout="rd-navbar-fixed" data-md-device-layout="rd-navbar-fixed" data-lg-layout="rd-navbar-fixed" data-lg-device-layout="rd-navbar-fixed" data-xl-layout="rd-navbar-static" data-xl-device-layout="rd-navbar-static" data-xxl-layout="rd-navbar-static" data-xxl-device-layout="rd-navbar-static" data-lg-stick-up-offset="150px" data-xl-stick-up-offset="150px" data-xxl-stick-up-offset="250px" data-lg-stick-up="true" data-xl-stick-up="true" data-xxl-stick-up="true">
            <div class="rd-navbar-inner-outer">
              <div class="rd-navbar-inner">
                <!-- RD Navbar Panel-->
                <div class="rd-navbar-panel">
                  <!-- RD Navbar Toggle-->
                  <button class="rd-navbar-toggle" data-rd-navbar-toggle=".rd-navbar-nav-wrap"><span></span></button>
                  <!-- RD Navbar Brand-->
                  <div class="rd-navbar-brand"><a class="brand" href="index.html"><img class="brand-logo-dark" src="images/logo-default-216x47.png" alt="" width="216" height="47"/></a></div>
                </div>
                <div class="rd-navbar-right rd-navbar-nav-wrap">
                  <div class="rd-navbar-aside">
                    <ul class="rd-navbar-contacts-2">
                      <li class="mr-5 float-left"><span class="customLink loginlink" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>Login</span> | <span class="customLink signlink" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>Register</span></li>
                      <li>
                        <!-- <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1" >
                          <div class="project-hamburger"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                          </div>
                        </div> -->
                      </li>
                    </ul>
                    <ul class="list-share-2">
                      <li><a class="icon mdi mdi-facebook" href="https://www.facebook.com/Admissure/"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="https://www.twitter.com/Admissure/"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="https://www.instagram.com/Admissure/"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                  <div class="rd-navbar-main">
                    <!-- RD Navbar Nav-->
                    <ul class="rd-navbar-nav">
                      <li class="rd-nav-item active"><a class="rd-nav-link" href="#home">Home</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#about-us">About Us</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#portfolio">Student Life</a>
                      </li>
                      <li class="rd-nav-item"><a class="rd-nav-link" href="#contact-us">Contact Us</a>
                      </li>
                    </ul>
                  </div>
                </div>
                <!-- <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-open rd-navbar-fixed-element-1" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                  <div class="project-hamburger"><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span><span class="project-hamburger-arrow"></span>
                  </div>
                </div> -->
                <div class="rd-navbar-project">
                  <div class="rd-navbar-project-header">
                    <h5 class="rd-navbar-project-title">Sign In / Register</h5>
                    <div class="rd-navbar-project-hamburger rd-navbar-project-hamburger-close" data-multitoggle=".rd-navbar-inner" data-multitoggle-blur=".rd-navbar-wrap" data-multitoggle-isolate>
                      <div class="project-close"><span></span><span></span></div>
                    </div>
                  </div>
                  <div class="rd-navbar-project-content rd-navbar-content">
                    <div>
                      <div class="row gutters-20 ml-5" data-lightgallery="group">
                        <form action="inc/code.php" method="POST" role="form" id="formLogin">
                          <br><br>
                          <div class="msg" style="color: red"></div>
                          <br>
                            <div class="form-group">
                              <input type="email" class="form-input form-control-has-validation custom_field" name="user_email" placeholder="Email Address">
                            </div> 
                            <div class="form-group">
                              <input type="password" class="form-input form-control-has-validation custom_field" name="user_password" placeholder="Password">
                            </div>
                        
                          <button type="submit" class="button button-sm btn-block button-primary-gradient" name="loginForm">Login</button>
                          <hr>
                          <button type="submit" class="button button-sm btn-block button-primary-gradient" id="registerform">Register</button>
                          <!-- <a href="" style="color: red">Reset Password</a> -->
                        </form>


                        <form action="inc/code.php" method="POST" role="form" id="Signupform">
                          <br>
                            <div class="msg" style="color: red"></div>
                            <div class="form-group">
                              <input type="text" class="form-input form-control-has-validation custom_field" name="user_name" placeholder="First Name">
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-input form-control-has-validation custom_field" name="user_surname" placeholder="Surname">
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-input form-control-has-validation custom_field" name="user_phone" placeholder="Telephone">
                            </div>
                            <br>

                            <div class="form-group">
                              <input type="email" class="form-input form-control-has-validation custom_field" name="user_email2" placeholder="Email">
                            </div>
                            <div class="form-group">
                              <input type="password" class="form-input form-control-has-validation custom_field" name="user_password2" placeholder="Password">
                            </div>
                            <div class="form-group">
                              <input type="password" class="form-input form-control-has-validation custom_field" name="user_cpassword" placeholder="Confirm Password">
                            </div>
                        
                          <button type="submit" class="button button-sm btn-block button-primary-gradient" name="registerForm">Register</button>
                          <!-- <a href="" style="color: red">Reset Password</a> -->
                          <hr>
                          <button type="submit" class="button button-sm btn-block button-primary-gradient" id="loginform">Login</button>
                        </form>


                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </header>
      <!-- Swiper-->
      <section class="section swiper-container swiper-slider swiper-slider-2 swiper-slider-3" data-loop="true" data-autoplay="5000" data-simulate-touch="false" data-slide-effect="fade">
        <div class="swiper-wrapper text-sm-left">
          <div class="swiper-slide context-dark bg-dark-overlay" data-slide-bg="images/slide-1-1920x753.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-9 col-md-8 col-lg-7 col-xl-6 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInUp" data-caption-delay="0">#1 Student <br> Admission Agency</span></h3>
                    <p class="big swiper-text" data-caption-animate="fadeInLeft" data-caption-delay="300">Admissure provides efficient student support services for you.</p><a class="button button-lg button-primary-gradient button-shadow-2" href="#" data-caption-animate="fadeInUp" data-caption-delay="300">View our services</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark bg-dark-overlay" data-slide-bg="images/slide-2-1920x753.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-lg-6 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInDown" data-caption-delay="0">Reliable team of experts</span></h3>
                    <p class="big swiper-text" data-caption-animate="fadeInRight" data-caption-delay="300">We are a team of experienced student support professionals working for you.</p>
                    <div class="button-wrap oh"><a class="button button-lg button-primary-gradient button-shadow-2" href="#" data-caption-animate="slideInUp" data-caption-delay="0">View our services</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide context-dark bg-dark-overlay" data-slide-bg="images/slide-3-1920x753.jpg">
            <div class="swiper-slide-caption section-md">
              <div class="container">
                <div class="row">
                  <div class="col-sm-8 col-lg-6 offset-lg-1 offset-xxl-0">
                    <h3 class="oh swiper-title"><span class="d-inline-block" data-caption-animate="slideInLeft" data-caption-delay="100">Trusted Student Admission Agency</span></h3>
                    <p class="big swiper-text" data-caption-animate="fadeInUp" data-caption-delay="0">We aim to provide top-notch International student admission services.</p>
                    <div class="button-wrap oh"><a class="button button-lg button-primary-gradient button-shadow-2" href="#" data-caption-animate="slideInLeft" data-caption-delay="100">View our services</a></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Swiper Pagination-->
        <div class="swiper-pagination" data-bullet-custom="true"></div>
        <!-- Swiper Navigation-->
        <div class="swiper-button-prev">
          <div class="preview">
            <div class="preview__img"></div>
          </div>
          <div class="swiper-button-arrow"></div>
        </div>
        <div class="swiper-button-next">
          <div class="swiper-button-arrow"></div>
          <div class="preview">
            <div class="preview__img"></div>
          </div>
        </div>
      </section>
      <!-- Section Services-->
      <section class="section section-sm bg-default">
        <div class="container">
          <div class="owl-carousel owl-style-11 dots-style-2" data-items="1" data-sm-items="2" data-lg-items="3" data-xl-items="4" data-margin="30" data-dots="true" data-mouse-drag="false">
            <article class="box-icon-megan wow fadeInUp">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-finger-tap"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Register</a></h5>
              <p class="box-icon-megan-text">Sign up to create <a href="#">"My Admissure"</a> account, to start, manage and track your application and student services.</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".05s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-graph"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Apply</a></h5>
              <p class="box-icon-megan-text">Having registered on Admissure, Complete your choice University application form and personal statement to apply. </p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".1s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-chart-growth"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Review</a></h5>
              <p class="box-icon-megan-text">Once the application <br>is completed, click "Review" to send your application through to Admissure review team, for accuracies and error.</p>
            </article>
            <article class="box-icon-megan wow fadeInUp" data-wow-delay=".15s">
              <div class="box-icon-megan-header">
                <div class="box-icon-megan-icon linearicons-paper-plane"></div>
              </div>
              <h5 class="box-icon-megan-title"><a href="#">Submit</a></h5>
              <p class="box-icon-megan-text">The Admissure review team then make recommdation for improvement or in the case of an accurate application, "Submit" it to the University.</p>
            </article>
          </div>
        </div>
      </section>

      <!-- Section CTA-->
      <section class="section parallax-container" data-parallax-img="images/bg-cta-2.jpg">
        <div class="parallax-content section-xl context-dark text-md-left bg-dark-overlay">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-sm-8 col-md-7 col-lg-5">
                <div class="cta-modern">
                  <h4 class="cta-modern-title wow fadeInRight">Our Mission is to make the admission processes for our clients easy!</h4>
                  <p class="cta-modern-text cta-modern-text-2 oh-desktop" data-wow-delay=".1s"><span class="cta-modern-decor wow slideInLeft"></span><span class="d-inline-block wow slideInDown">Ben Smith, Founder</span></p><a class="button button-lg button-primary-gradient wow fadeInUp" href="#contact-us" data-wow-delay=".2s">read more</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section class="section section-xl bg-default text-left" id="about-us" data-type="anchor">
        <div class="container">
          <div class="row row-30 align-items-lg-end">
            <div class="col-lg-6">
              <h3>About us</h3>
              <div class="block-sm block-sm-left">
                <p>We're an international student admission specialist that integrates students into the Universities life. Our roster of clients is global – from Asia to Europe, America, and Africa.</p>
                <p>Our range of solutions varies from One Click Apply to Laser Application services, including statement support and post admission advise. Whatever you require as an international student, we will deliver the best results for you.</p>
              </div>
            </div>
            <div class="col-lg-6">
              <!-- Linear progress bar-->
              <article class="progress-linear progress-gradient">
                <div class="progress-header">
                  <p>Postgraduate</p>
                </div>
                <div class="progress-bar-linear-wrap">
                  <div class="progress-bar-linear"><span class="progress-value">30
                  </span><span class="progress-marker"></span></div>
                </div>
              </article>
              <!-- Linear progress bar-->
              <article class="progress-linear progress-gradient">
                <div class="progress-header">
                  <p>Bachelor's Degree</p>
                </div>
                <div class="progress-bar-linear-wrap">
                  <div class="progress-bar-linear"><span class="progress-value">45</span><span class="progress-marker"></span></div>
                </div>
              </article>
              <!-- Linear progress bar-->
              <article class="progress-linear progress-gradient">
                <div class="progress-header">
                  <p>Pre-degree</p>
                </div>
                <div class="progress-bar-linear-wrap">
                  <div class="progress-bar-linear"><span class="progress-value">25</span><span class="progress-marker"></span></div>
                </div>
              </article>
            </div>
          </div>
        </div>
      </section>
      <!-- Our History-->
      <section class="section section-lg bg-gray-100 text-left section-relative section-bg-creative">
        <div class="container">
          <div class="row row-60 justify-content-center justify-content-xxl-between">
            <div class="col-lg-6 col-xxl-5 position-static">
              <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Our history</span></h3>
              <div class="tabs-custom" id="tabs-5">
                <div class="tab-content tab-content-1">
                  <div class="tab-pane fade" id="tabs-5-1">
                    <h5 class="font-weight-normal text-transform-none text-spacing-75">Establishment of Admissure student services agency</h5>
                    <p>We founded Admissure agency to help businesses reach out to their customers with both traditional student services and innovative methods that revolutionized the industry.</p>
                  </div>
                  <div class="tab-pane fade" id="tabs-5-2">
                    <h5 class="font-weight-normal text-transform-none text-spacing-75">Growing as a company and mastering new techniques</h5>
                    <p>7 years later, we became one of the most creative student services agencies in the US. We also began to study the niche of online student services, which was still unoccupied.</p>
                  </div>
                  <div class="tab-pane fade" id="tabs-5-3">
                    <h5 class="font-weight-normal text-transform-none text-spacing-75">Partnering with international marketers and promoters</h5>
                    <p>To give our clients more and better opportunities in the pre and post admission process regardless of nationalities, we partnered with Universities and service providers that allowed us to achieve more.</p>
                  </div>
                  <div class="tab-pane fade show active" id="tabs-5-4">
                    <h5 class="font-weight-normal text-transform-none text-spacing-75 wow fadeInRight">Introducing new student services and prospective student solutions</h5>
                    <p class="wow fadeInRight" data-wow-delay=".1s">Admission processing and prospective student requirements evolve year in year out and so do we.</p>
                  </div>
                </div>
                <div class="list-history-wrap">
                  <ul class="nav list-history">
                    <li class="list-history-item" role="presentation"><a href="#tabs-5-1" data-toggle="tab">
                        <div class="list-history-circle"></div>2015</a></li>
                    <li class="list-history-item" role="presentation"><a href="#tabs-5-2" data-toggle="tab">
                        <div class="list-history-circle"></div>2017</a></li>
                    <li class="list-history-item" role="presentation"><a href="#tabs-5-3" data-toggle="tab">
                        <div class="list-history-circle"></div>2018</a></li>
                    <li class="list-history-item" role="presentation"><a class="active" href="#tabs-5-4" data-toggle="tab">
                        <div class="list-history-circle"></div>2020</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-9 col-lg-6 position-static index-1">
              <div class="bg-image-right-1 bg-image-right-lg gradient-overlay bg-dark-overlay"><img src="images/about-1-1110x710.jpg" alt="" width="1110" height="710"/>
                <div class="link-play-modern"><a class="icon mdi mdi-play" data-lightgallery="item" href="https://www.youtube.com/watch?v=1UWpbtUupQQ"></a>
                  <div class="link-play-modern-title">How we<span>Work</span></div>
                  <div class="link-play-modern-decor"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- What We Offer-->
      <section class="section section-xl bg-default">
        <div class="container">
          <h3 class="wow fadeInLeft">What Student Say</h3>
        </div>
        <div class="container container-style-1">
          <div class="owl-carousel owl-style-12" data-items="1" data-sm-items="2" data-lg-items="3" data-margin="30" data-xl-margin="45" data-autoplay="true" data-nav="true" data-center="true" data-smart-speed="400">
        <?php $q = mysqli_query($dbc,"SELECT testimonals.test_id, testimonals.test_text, testimonals.user_id, users.user_id, users.user_name, users.user_surname, users.user_pic FROM testimonals INNER JOIN users ON testimonals.user_id = users.user_id WHERE testimonals.test_sts = '1'"); 
       while($r = mysqli_fetch_assoc($q)):?> 
            <!-- Quote Tara-->
            <article class="quote-tara">
              <div class="quote-tara-caption">
                <div class="quote-tara-text">
                  <p class="q"><?=$r['test_text']?></p>
                </div>
                <div class="quote-tara-figure"><img src="files/<?=$r['user_pic']?>" alt="" width="115" height="115"/>
                </div>
              </div>
              <h6 class="quote-tara-author"><?=$r['user_name'] .$r['user_surname']?></h6>
              <div class="quote-tara-status">Student (Canada)</div>
            </article>
         <?php endwhile; ?>
          </div>
        </div>
      </section>
      <!-- Section CTA-->
      <section class="section parallax-container" data-parallax-img="images/bg-cta-3.jpg">
        <div class="parallax-content section-xxl context-dark text-md-left bg-dark-overlay">
          <div class="container">
            <div class="row justify-content-end">
              <div class="col-sm-9 col-md-7 col-lg-5">
                <div class="cta-modern">
                  <h3 class="cta-modern-title cta-modern-title-2 oh-desktop"><span class="d-inline-block wow fadeInLeft">Professional Online Student services Services</span></h3>
                  <p class="cta-modern-text cta-modern-text-2 oh-desktop" data-wow-delay=".1s"><span class="cta-modern-decor wow slideInLeft"></span><span class="d-inline-block wow slideInUp">Providing top-notch solutions for you</span></p><a class="button button-lg button-primary-gradient wow fadeInRight" href="#contact-us" data-wow-delay=".2s">Contact us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

    

      <section class="section section-sm section-last bg-default" id="portfolio" data-type="anchor">
        <div class="container-fluid container-inset-0 isotope-wrap">
          <h3 class="wow fadeInRight">Student Life</h3>
          
<div class="row row-10 gutters-10 row-lg isotope" data-isotope-layout="masonry" data-isotope-group="gallery" data-column-class=".col-1" data-lightgallery="group">
  <div class="col-1 isotope-item isotope-sizer"></div>
  <div class="col-sm-4 col-xl-2 isotope-item oh-desktop">
  <!-- Thumbnail Mary-->
  <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInLeft"><a class="thumbnail-mary-figure" href="images/project-4-1200x800-original.jpg" data-lightgallery="item"><img src="images/project-7-335x585.jpg" alt="" width="335" height="585"/></a>

  <div class="thumbnail-mary-caption">
  <div>
  <h6 class="thumbnail-mary-title"><a href="#"> </a></h6>
  <div class="thumbnail-mary-location"> </div>
  </div>
  </div>
  </article>
  </div>
  <div class="col-sm-8 col-xl-4 isotope-item oh-desktop">
  <!-- Thumbnail Mary-->
  <article class="thumbnail thumbnail-mary thumbnail-mary-big wow slideInRight"><a class="thumbnail-mary-figure" href="images/project-8-1200x800-original.jpg" data-lightgallery="item"><img src="images/project-8-615x587.jpg" alt="" width="615" height="587"/></a>
  <div class="thumbnail-mary-caption">
  <div>
  <h6 class="thumbnail-mary-title"><a href="#"> </a></h6>

  <div class="thumbnail-mary-location"> </div>
  </div>
  </div>
  </article>
  </div>
  <div class="col-sm-4 col-xl-2 isotope-item oh-desktop">
  <!-- Thumbnail Mary-->
  <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInDown"><a class="thumbnail-mary-figure" href="images/project-9-1200x800-original.jpg" data-lightgallery="item"><img src="images/project-9-311x289.jpg" alt="" width="311" height="289"/></a>

  <div class="thumbnail-mary-caption">
  <div>
  <h6 class="thumbnail-mary-title"><a href="#"> </a></h6>
  <div class="thumbnail-mary-location"> </div>
  </div>
  </div>
  </article>
  </div>
  <div class="col-sm-8 col-xl-4 isotope-item oh-desktop">
  <!-- Thumbnail Mary-->
  <article class="thumbnail thumbnail-mary wow slideInUp"><a class="thumbnail-mary-figure" href="images/project-10-1200x800-original.jpg" data-lightgallery="item"><img src="images/project-10-631x289.jpg" alt="" width="631" height="289"/></a>

  <div class="thumbnail-mary-caption">
  <div>
  <h6 class="thumbnail-mary-title"><a href="#"> </a></h6>

  <div class="thumbnail-mary-location"> </div>
  </div>
  </div>
  </article>
  </div>
  <div class="col-sm-4 col-xl-2 isotope-item oh-desktop">
  <!-- Thumbnail Mary-->
  <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInUp"><a class="thumbnail-mary-figure" href="images/project-11-1200x800-original.jpg" data-lightgallery="item"><img src="images/project-11-311x289.jpg" alt="" width="311" height="289"/></a>

  <div class="thumbnail-mary-caption">
  <div>
  <h6 class="thumbnail-mary-title"><a href="#"> </a></h6>
  <div class="thumbnail-mary-location"> </div>
  </div>
  </div>
  </article>
  </div>
  <div class="col-sm-4 col-xl-2 isotope-item oh-desktop">
  <!-- Thumbnail Mary-->
  <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInRight"><a class="thumbnail-mary-figure" href="images/project-12-1200x800-original.jpg" data-lightgallery="item"><img src="images/project-12-311x289.jpg" alt="" width="311" height="289"/></a>

  <div class="thumbnail-mary-caption">
  <div>
  <h6 class="thumbnail-mary-title"><a href="#"> </a></h6>
  <div class="thumbnail-mary-location"> </div>
  </div>
  </div>
  </article>
  </div>
  <div class="col-sm-4 col-xl-2 isotope-item oh-desktop">
  <!-- Thumbnail Mary-->
  <article class="thumbnail thumbnail-mary thumbnail-mary-2 wow slideInLeft"><a class="thumbnail-mary-figure" href="images/project-1-1200x800-original.jpg" data-lightgallery="item"><img src="images/project-13-311x289.jpg" alt="" width="311" height="289"/></a>

  <div class="thumbnail-mary-caption">
  <div>
  <h6 class="thumbnail-mary-title"><a href="#"> </a></h6>
  <div class="thumbnail-mary-location"> </div>
  </div>
  </div>
  </article>
  </div>
  </div>
  </div>
  </section>

     

      <section class="section-inset-9 context-dark bg-gradient-1">
        <div class="container">
          <div class="row row-30 justify-content-center justify-content-xl-between align-items-lg-end">
            <div class="col-sm-6 col-md-3">
              <div class="counter-classic">
                <h3 class="counter-classic-number"><span class="counter">196</span>
                </h3>
                <h6 class="counter-classic-title">1 year ago</h6>
                <div class="counter-classic-decor"></div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="counter-classic">
                <h3 class="counter-classic-number"><span class="counter">101</span>
                </h3>
                <h6 class="counter-classic-title">6 months ago</h6>
                <div class="counter-classic-decor"></div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="counter-classic">
                <h3 class="counter-classic-number"><span class="counter">14</span>
                </h3>
                <h6 class="counter-classic-title">5 weeks ago</h6>
                <div class="counter-classic-decor"></div>
              </div>
            </div>
            <div class="col-sm-6 col-md-3">
              <div class="counter-classic">
                <h3 class="counter-classic-number"><span class="counter">4</span>
                </h3>
                <h6 class="counter-classic-title">1 week ago</h6>
                <div class="counter-classic-decor"></div>
              </div>
            </div>
          </div>
        </div>
      </section>
      <!-- Clients Jean-->

      <section class="section section-sm section-inset-3 bg-gray-100 text-center">
        <div class="container">

          <div class="owl-carousel owl-style-9" data-items="1" data-sm-items="2" data-md-items="3" data-lg-items="4" data-xl-items="5" data-margin="30" data-dots="true" data-mouse-drag="false"><a class="clients-jean" href="#"><img src="images/clients-18-200x90.png" alt="" width="200" height="90"/></a><a class="clients-jean" href="#"><img src="images/clients-6-200x90.png" alt="" width="200" height="90"/></a><a class="clients-jean" href="#"><img src="images/clients-2-200x90.png" alt="" width="200" height="90"/></a><a class="clients-jean" href="#"><img src="images/clients-3-200x90.png" alt="" width="200" height="90"/></a><a class="clients-jean" href="#"><img src="images/clients-4-200x90.png" alt="" width="200" height="90"/></a></div>
        </div>
      </section>
      <section class="section section-lg text-left section-relative" id="contact-us" data-type="anchor">
        <div class="container">
          <div class="row row-60 justify-content-center justify-content-xxl-between">
            <div class="col-md-9 col-lg-6 position-static index-1">
              <div class="bg-image-left-1 bg-image-left-lg bg-dark-overlay"><img src="images/about-1-1110x710.jpg" alt="" width="1110" height="710"/>
              </div>
            </div>
            <div class="col-lg-6 col-xxl-5 position-static">
                 <h3 class="oh-desktop"><span class="d-inline-block wow slideInUp">Get in Touch</span></h3>
              <form class="rd-form rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-20 gutters-20">
                  <div class="col-md-12 oh-desktop">
                    <div class="form-wrap wow slideInDown">
                      <input class="form-input" id="contact-your-name-1" type="text" name="name" data-constraints="@Required">
                      <label class="form-label" for="contact-your-name-1">Your Name*</label>
                    </div>
                  </div>
                  <div class="col-md-12 oh-desktop">
                    <div class="form-wrap wow slideInUp">
                      <input class="form-input" id="contact-email-1" type="email" name="email" data-constraints="@Email @Required">
                      <label class="form-label" for="contact-email-1">Your E-mail*</label>
                    </div>
                  </div>
                  <div class="col-md-12 oh-desktop">
                    <div class="form-wrap wow slideInDown">
                      <!--Select 2-->
                      <select class="form-input" name="service" data-placeholder="Select a Service" data-constraints="@Required">
                        <option label="placeholder"></option>
                        <option value="Pre-degree Admission">Pre-degree Admission</option>
                        <option value="Degree Admission">Degree Admission</option>
                        <option value="Postgraduate Admission">Postgraduate Admission</option>
                        <option value="Airport Services">Airport Services</option>
                        <option value="Accomodation Services">Accomodation Services</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="form-wrap wow fadeIn">
                      <label class="form-label" for="contact-message-1">Message</label>
                      <textarea class="form-input textarea-lg" id="contact-message-1" name="message" data-constraints="@Required"></textarea>
                    </div>
                  </div>
                </div>
                <div class="group-custom-1 group-middle oh-desktop">
                  <button class="button button-primary-gradient wow fadeInRight" type="submit">Send message</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </section>
      <!-- Page Footer-->
      <footer class="section footer-modern context-dark footer-modern-2">
        <div class="footer-modern-line">
          <div class="container">
            <div class="row row-50">
              <div class="col-md-6 col-lg-4">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Services</span></h5>
                <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
                  <li><a href="#">Pre-degree</a></li>
                  <li><a href="#">Bachelors</a></li>
                  <li><a href="#">Postgraduate</a></li>
                  <li><a href="#">Airport Aid </a></li>
                  <li><a href="#">Accomodation</a></li>
                  <li><a href="#">Tailored Help</a></li>
                </ul>
              </div>
              <div class="col-md-6 col-lg-4 col-xl-3">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Menu</span></h5>
                <ul class="footer-modern-list d-inline-block d-sm-block wow fadeInUp">
          <li><a href="#">My Admissure</a></li>
          <li><a href="#">Testimonials</a></li>
                  <li><a href="#portfolio">Student Life</a></li>
                  <li><a href="#about-us">About us</a></li>
                  <li><a href="#">Careers</a></li>
                  <li><a href="#contact-us">Contact Us</a></li>
                </ul>
              </div>
              <div class="col-lg-4 col-xl-5">
                <h5 class="footer-modern-title oh-desktop"><span class="d-inline-block wow slideInLeft">Newsletter</span></h5>
                <p class="wow fadeInRight">Sign up today for the latest news and tips</p>
                <!-- RD Mailform-->
                <form class="rd-form rd-mailform rd-form-inline rd-form-inline-sm oh-desktop" data-form-output="form-output-global" data-form-type="subscribe" method="post" action="bat/rd-mailform.php">
                  <div class="form-wrap wow slideInUp">
                    <input class="form-input" id="subscribe-form-2-email" type="email" name="email" data-constraints="@Email @Required"/>
                    <label class="form-label" for="subscribe-form-2-email">Enter your E-mail</label>
                  </div>
                  <div class="form-button form-button-2 wow slideInRight">
                    <button class="button button-sm button-icon-3 button-primary-gradient" type="submit"><span class="d-none d-xl-inline-block">Subscribe</span><span class="icon mdi mdi-telegram d-xl-none"></span></button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-modern-line-2">
          <div class="container">
            <div class="row row-30 align-items-center">
              <div class="col-sm-6 col-md-7 col-lg-4 col-xl-4">
                <div class="row row-30 align-items-center text-lg-center">
                  <div class="col-md-7 col-xl-6"><a class="brand" href="index.html"><img src="images/logo-inverse-141x31.png" alt="" width="141" height="31"/></a></div>
                  <div class="col-md-5 col-xl-6">
                    <div class="iso-1"><img src="images/fot-img.png" alt=""/><span class="iso-1-big">9.4k</span></div>
                  </div>
                </div>
              </div>
              <div class="col-sm-6 col-md-12 col-lg-8 col-xl-8 oh-desktop">
                <div class="group-xmd group-sm-justify">
                  <div class="footer-modern-contacts wow slideInUp">
                    <div class="unit unit-spacing-sm align-items-center">

                    </div>
                  </div>

                  <div class="wow slideInRight">
                    <ul class="list-inline footer-social-list footer-social-list-2 footer-social-list-3">
                      <li><a class="icon mdi mdi-facebook" href="https://www.facebook.com/Admissure/"></a></li>
                      <li><a class="icon mdi mdi-twitter" href="https://www.twitter.com/Admissure/"></a></li>
                      <li><a class="icon mdi mdi-instagram" href="https://www.instagram.com/Admissure/"></a></li>
                      <li><a class="icon mdi mdi-google-plus" href="#"></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="footer-modern-line-3">
          <div class="container">
            <div class="row row-10 justify-content-between">
              <div class="col-md-6"><a href="#">20 Holmeside, Sunderland, SR1 3JE</a></div>
              <div class="col-md-auto">
                <!-- Rights-->
                <p class="rights"><span>&copy;&nbsp;</span><span class="copyright-year"></span><span>&nbsp;</span><span>Education Pilot</span><span>.&nbsp;</span>All Rights Reserved.
                  Design&nbsp;by&nbsp;<a href="https://govify.co.uk/">Govify</a>
                </p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <!-- Global Mailform Output-->
    <div class="snackbars" id="form-output-global"> </div>
    <!--pre#debug1.debug-->
    <!-- Javascript-->
    <script src="js/core.min.js"> </script>
    <script src="js/script.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <!-- coded by gel-->
    <script>
      $("#formLogin").on('submit',function (e) {
        e.preventDefault();
        var form = $('#formLogin');
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success:function (msg,status) {
                // console.log(msg.sts)
                if ((msg.sts).trim() == 'success') {
                  $('.msg').text(msg.msg).addClass("callout callout-success").fadeIn(60000).fadeOut(40000);
                  window.location = "module/";
                }else{
                  $('.msg').text(msg.msg).addClass("callout callout-danger").fadeIn(60000).fadeOut(40000);
                }
            }
        });//ajax call
      });

      $('#Signupform').on('submit',function (e) {
        e.preventDefault();
        var form = $('#Signupform');
        $.ajax({
            type: 'POST',
            url: form.attr('action'),
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            cache: false,
            processData: false,
            success:function (msg,status) {
                if ((msg.sts).trim() == 'success') {
                  // $('.msg').text(msg.msg).addClass("callout callout-success").fadeIn(60000).fadeOut(40000);
                  swal("Congratulations!", msg.msg, msg.sts);                  
                  $('#Signupform').each(function(){
                    this.reset();
                    $('#Signupform').hide();
                    $('#formLogin').show();
                  });
                }else{
                  swal("Error", msg.msg, msg.sts);                  
                  // $('.msg').text(msg.msg).addClass("callout callout-danger").fadeIn(60000).fadeOut(40000);
                }
            }
        });//ajax call
      });

      // $(document).ready(function () {
      //   $('#Signupform').hide();
      // });

      $('#registerform').on('click',function (e) {
        e.preventDefault();
        $('#formLogin').hide();
        $('#Signupform').show();
      });

      $('#loginform').on('click',function (e) {
        e.preventDefault();
        $('#formLogin').show();
        $('#Signupform').hide();
      });

      $('.loginlink').on('click',function () {
        $('#formLogin').show();
        $('#Signupform').hide();
      });
      
      $('.signlink').on('click',function () {
        $('#formLogin').hide();
        $('#Signupform').show();
      });

    </script>
  </body>
</html>
