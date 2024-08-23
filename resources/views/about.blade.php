
@extends('layouts.master')
@section('content')
    <div class="offcanvas offcanvas-end offcanvas-sidebar-menu" tabindex="-1" id="offcanvasRight">
      <div class="offcanvas-header text-end justify-content-end p-4">
        <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"><i class="fa-solid fa-xmark"></i></button>
      </div>
      <div class="offcanvas-body p-4 p-sm-5 d-flex align-content-between flex-wrap justify-content-center">
        <div class="sidebar-menu">
          <div class="sidebar-logo">
            <a href="index.html">
              <img class="logo img-fluid" src="images/logo.svg" alt="logo">
            </a>
          </div>
          <div class="section-title mt-5">
            <h3 class="title text-white">About us</h3>
            <p class="text-white">Get the oars in the water and start rowing. Execution is the single biggest factor in achievement so the faster and better your execution.</p>
          </div>
          <div class="mt-5">
            <h3 class="mb-3 text-white">Contact Info</h3>
            <p class="text-white">17504 Carlton Cuevas Rd,<br> Gulfport, MS, 39503</p>
            <h2 class="text-white">1-800-555-500</h2>
          </div>
          <div class="social-icon mt-5">
            <ul>
              <li><a href="#"><i class="fa-brands fa-facebook-f"></i></a></li>
              <li><a href="#"><i class="fab fa-twitter"></i></a></li>
              <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
              <li><a href="#"><i class="fab fa-instagram"></i></a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <!--=================================
    Right menu -->

    <!--=================================
    Banner -->
    <section class="inner-banner bg-overlay-black-6 bg-holder" style="background-image: url('images/inner-banner/bird.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-banner-tittle">
              <h2>About Us</h2>
              <ol class="breadcrumb">
              <li class="breadcrumb-item"><a href="index.html">Home</a></li>
              <li class="breadcrumb-item active">about us</li>
              </ol>  
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Banner -->
      
    <!--=================================
    About -->
    <section class="space-ptb about">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <div class="about-img">
              <img class="img-fluid" src="images/home-01/about3.jpg" alt="">
            </div>
          </div>
          <div class="col-12 col-lg-6">
            <div class="section-title  mb-4 mb-lg-5">
              <h2 class="mb-4">About The Academy</h2>
              <p class="text-white">BLUE BIRDZ CRICKET ACADEMY uses new age techniques, tools and platforms to make quality cricket coaching available for everyone, irrespective of age, gender, skill level or location. We take a holistic approach and inculcate a practice that in order to become a good player on the field you must also be a good person off the field too</p>
              <p class="text-white">Our programs both on field and off-field reflect that and we endeavour to provide players skills that benefit them on and off the field by exposing them to professional players, coaches and industry experts in areas like fitness, nutrition and psychology</p>
              <p class="text-white">BLUE BIRDZ CRICKET ACADEMY is a sports and wellness destination located in HSR Layout, Bangalore, home to Badminton Courts, Table Tennis, Box Cricket Arena, Futsal arena, Heated Swimming Pool, Kids Play Area, Banquet Hall, Gym & SPA, here you’ll find experiences that engage your energy, zeal and physical capability.</p>

            </div>

            <!-- <div class="row counter-box">
              <div class="col-sm-4">
                <div class="counter mb-4 mb-lg-0">
                  <div class="counter-number">
                    <p>Games</p>
                    <div class="counter-text"><h2 class="timer mb-0" data-to="200" data-speed="2000">200</h2><span>+</span></div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="counter mb-4 mb-lg-0">
                  <div class="counter-number">
                    <p>Goals</p>
                    <div class="counter-text"><h2 class="timer mb-0" data-to="179" data-speed="2000">179</h2><span>+</span></div>
                  </div>
                </div>
              </div>

              <div class="col-sm-4">
                <div class="counter mb-0">
                  <div class="counter-number">
                    <p>Assist</p>
                    <div class="counter-text"><h2 class="timer mb-0" data-to="146" data-speed="2000">146</h2><span>+</span></div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
      <div class="about-bg">
        <img class="img-fluid" src="images/home-01/pattern-04.png" alt="">
      </div>
    </section>
    <!--=================================
    About -->

    <!--=================================
    Latest Results -->
    <!-- <section class="space-ptb latest-results latest-results-about">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="section-title text-center">
              <h2 class="mb-0 text-white">Latest Results</h2> 
            </div>
          </div>
        </div>
        <div class="row mt-5 align-items-center">
          <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
            <div class="d-lg-flex align-items-center">
              <h3>Ligers</h3>
              <img class="img-fluid ms-0 ms-lg-4 ms-xl-5" src="images/home-01/team-logo-09.png" alt="">        
            </div>
          </div>
          <div class="col-md-12 col-lg-4 text-center mb-4 mb-lg-0">
            <h5>Premier League</h5>
            <h2><span>02</span> : <span>01</span></h2>
            <div class="time-location"><span class="time"><i class="fa-regular fa-clock"></i>1:30 PM</span><span class="location"><i class="fa-solid fa-location-dot"></i>Maracanã Stadium</span></div>
          </div>
          <div class="col-md-12 col-lg-4 text-center">
            <div class="d-lg-flex align-items-center justify-content-end">
              <img class="img-fluid me-0 me-lg-4 me-xl-5" src="images/home-01/team-logo-10.png" alt="">
              <h3>Cheetahs</h3>                        
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--=================================
    Latest Results -->

    <!--=================================
    Classic Players -->
    <!-- <section class="space-pb">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-7">
            <div class="section-title text-center">
              <h2 class="mb-0 text-white">Classic Players</h2> 
              <p class="text-white mt-2">For those of you who are serious about having more, doing more, giving more and being more, success is achievable with some understanding of what to do, some discipline around planning and execution of those plans and belief that you can achieve your desires.</p>                
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-12 mt-4 mt-md-5">
            <div class="owl-carousel arrow-top-right" data-nav-dots="false" data-nav-arrow="false" data-items="3" data-xl-items="3" data-lg-items="2" data-md-items="1" data-sm-items="1" data-xs-items="1" data-xx-items="1"  data-autoheight="true">
              <div class="item">
                <div class="team">
                  <div class="player">
                    <img class="img-fluid" src="images/home-01/team-01.jpg" alt="">                    
                  </div>
                  <div class="player-info">
                    <span class="player-number">10</span>
                    <div class="player-name">
                      <h3 class="text-uppercase title"><a href="#">Jason McElwaine</a></h3>
                      <span class="text-uppercase text-primary">Center</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="team">
                  <div class="player">
                    <img class="img-fluid" src="images/home-01/team-02.jpg" alt="">                    
                  </div>
                  <div class="player-info">
                    <span class="player-number">88</span>
                    <div class="player-name">
                      <h3 class="text-uppercase title"><a href="#">Cherry Blossom</a></h3>
                      <span class="text-uppercase text-primary">Defenders</span>
                    </div>
                  </div>
                </div>
              </div>    
              <div class="item">
                <div class="team">
                  <div class="player">
                    <img class="img-fluid" src="images/home-01/team-03.jpg" alt="">                    
                  </div>
                  <div class="player-info">
                    <span class="player-number">07</span>
                    <div class="player-name">
                      <h3 class="text-uppercase title"><a href="#">Ginger Plant</a></h3>
                      <span class="text-uppercase text-primary">Midfielders</span>
                    </div>
                  </div>
                </div>
              </div>  
              <div class="item">
                <div class="team">
                  <div class="player">
                    <img class="img-fluid" src="images/home-01/team-04.jpg" alt="">                    
                  </div>
                  <div class="player-info">
                    <span class="player-number">09</span>
                    <div class="player-name">
                      <h3 class="text-uppercase title"><a href="#">Bridget Theriveaquai</a></h3>
                      <span class="text-uppercase text-primary">Forwards</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--=================================
    Classic Players -->

    <!--=================================
    Testimonial -->
    <!-- <section class="space-ptb position-relative" style="background-image: url('images/home-01/bg-02.jpg');">
      <div class="container">
        <div class="row align-items-center justify-content-center ">
          <div class="col-md-8 mb-4 mb-md-5 mb-lg-0">
            <div class="owl-carousel dots-bottom-center" data-nav-dots="true" data-nav-arrow="false" data-items="1" data-lg-items="1" data-md-items="1" data-sm-items="1"  data-space="30" data-autoheight="true">
              <div class="item">
                <div class="testimonial text-center">
                  <div class="testimonial-star-icon">
                    <ul class="justify-content-center">
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-regular fa-star text-primary"></i></li>
                      <li><i class="fa-regular fa-star text-white"></i></li>
                    </ul>
                  </div>
                  
                  <div class="testimonial-content">
                    <p class="mb-0 text-white"><i>"I love Potenza. I have gotten at least 50 times the value from Potenza. I STRONGLY recommend Potenza to EVERYONE interested in running a successful online business!"</i> </p>
                  </div>
                  <div class="testimonial-author">
                    <div class="testimonial-name">
                      <h6 class="author-tittle text-primary">Alice Williams</h6>
                      <span>Services</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial text-center">
                  <div class="testimonial-star-icon">
                    <ul class="justify-content-center">
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-regular fa-star text-primary"></i></li>
                      <li><i class="fa-regular fa-star text-white"></i></li>
                    </ul>
                  </div>
                  <div class="testimonial-content">
                    <p class="mb-0 text-white"><i>"I would gladly pay over 600 dollars for Potenza. Since I invested in Potenza I made over 100,000 dollars profits. Your company is truly upstanding and is behind its product 100%."</i> </p>
                  </div>
                  <div class="testimonial-author">
                    <div class="testimonial-name">
                      <h6 class="author-tittle text-primary">Harry Russell</h6>
                      <span>Advisors</span>
                    </div>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimonial text-center">
                  <div class="testimonial-star-icon">
                    <ul class="justify-content-center">
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-solid fa-star text-primary"></i></li>
                      <li><i class="fa-regular fa-star text-primary"></i></li>
                      <li><i class="fa-regular fa-star text-white"></i></li>
                    </ul>
                  </div>
                  
                  <div class="testimonial-content">
                    <p class="mb-0 text-white"><i>"I love your system. Nice work on your Potenza. Great job, I will definitely be ordering again! I would like to personally thank you for your outstanding product."</i> </p>
                  </div>
                  <div class="testimonial-author">
                    <div class="testimonial-name">
                      <h6 class="author-tittle text-primary">Paul Flavius</h6>
                      <span>Finance</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--=================================
    Testimonial -->

    <!--=================================
    client -->
    <!-- <section class="client-logo py-5 bg-primary">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-12">
            <div class="owl-carousel" data-nav-dots="false" data-nav-arrow="false" data-items="5" data-lg-items="5" data-md-items="3" data-sm-items="3" data-xs-items="2" data-xx-items="1" data-space="150" data-autoheight="true">
              <div class="item">
                <img class="img-fluid" src="images/home-01/client-logo/01.png" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="images/home-01/client-logo/02.png" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="images/home-01/client-logo/03.png" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="images/home-01/client-logo/04.png" alt="">
              </div>
              <div class="item">
                <img class="img-fluid" src="images/home-01/client-logo/05.png" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--=================================
    client -->
    @endsection