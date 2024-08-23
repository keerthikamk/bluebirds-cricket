@extends('layouts.master')
@section('content')
<!--=================================
    Banner -->
    <section class="inner-banner bg-overlay-black-6 bg-holder" style="background-image: url('images/inner-banner/heart-2.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-banner-tittle">
              <h2>Gallery</h2>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Gallery</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Banner -->

    <!--=================================
    Portfolio -->
    <section class="space-ptb">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <!-- <div class="filters-group mb-2 mb-lg-5">
              <button class="btn-filter active" data-group="all">View All</button>
              <button class="btn-filter" data-group="france">France</button>
              <button class="btn-filter" data-group="brazil">Brazil</button>
              <button class="btn-filter" data-group="uk">United Kingdom</button>
              <button class="btn-filter" data-group="marseille">Marseille</button>
            </div> -->
            <div class="my-shuffle-container columns-3 popup-gallery full-screen">
              <!-- Portfolio-item START -->
              <div class="grid-item" data-groups='["uk","france"]'>
                <div class="portfolio portfolio-style-02">
                  <div class="portfolio-images">
                    <img class="img-fluid " src="images/portfolio/g11.jpg" alt="">
                    <div class="portfolio-info-02">
                      <a class="portfolio-img popup-icon" href="images/portfolio/g11.jpg"> <i class="fas fa-eye"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio-item END -->
              <!-- Portfolio-item START -->
              <div class="grid-item" data-groups='["brazil","uk"]'>
                <div class="portfolio portfolio-style-02">
                  <div class="portfolio-images">
                    <img class="img-fluid" src="images/portfolio/g2.jpg" alt="">
                    <div class="portfolio-info-02">
                      <a class="portfolio-img popup-icon" href="images/portfolio/g2.jpg"> <i class="fas fa-eye"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio-item END -->
              <!-- Portfolio-item START -->
              <div class="grid-item" data-groups='["uk","brazil"]'>
                <div class="portfolio portfolio-style-02">
                  <div class="portfolio-images">
                    <img class="img-fluid" src="images/portfolio/g3.jpg" alt="">
                    <div class="portfolio-info-02">
                      <a class="portfolio-img popup-icon" href="images/portfolio/g3.jpg"> <i class="fas fa-eye"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio-item END -->
              <!-- Portfolio-item START -->
              <div class="grid-item " data-groups='["marseille","france"]'>
                <div class="portfolio portfolio-style-02">
                  <div class="portfolio-images">
                    <img class="img-fluid" src="images/portfolio/g4.jpg" alt="">
                    <div class="portfolio-info-02">
                      <a class="portfolio-img popup-icon" href="images/portfolio/g4.jpg"> <i class="fas fa-eye"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio-item END -->
              <!-- Portfolio-item START -->
              <div class="grid-item" data-groups='["uk","brazil"]'>
                <div class="portfolio portfolio-style-02">
                  <div class="portfolio-images">
                    <img class="img-fluid" src="images/portfolio/g5.jpg" alt="">
                    <div class="portfolio-info-02">
                      <a class="portfolio-img popup-icon" href="images/portfolio/g5.jpg"> <i class="fas fa-eye"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio-item END -->
              <!-- Portfolio-item START -->
              <div class="grid-item " data-groups='["marseille","france"]'>
                <div class="portfolio portfolio-style-02">
                  <div class="portfolio-images">
                    <img class="img-fluid" src="images/portfolio/g6.jpg" alt="">
                    <div class="portfolio-info-02">
                      <a class="portfolio-img popup-icon" href="images/portfolio/g6.jpg"> <i class="fas fa-eye"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio-item END -->
              <!-- Portfolio-item START -->
              <div class="grid-item " data-groups='["marseille","france"]'>
                <div class="portfolio portfolio-style-02">
                  <div class="portfolio-images">
                    <img class="img-fluid" src="images/portfolio/g7.jpg" alt="">
                    <div class="portfolio-info-02">
                      <a class="portfolio-img popup-icon" href="images/portfolio/g7.jpg"> <i class="fas fa-eye"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio-item END -->
              <!-- Portfolio-item START -->
              <div class="grid-item " data-groups='["marseille","france"]'>
                <div class="portfolio portfolio-style-02">
                  <div class="portfolio-images">
                    <img class="img-fluid" src="images/portfolio/g8.jpg" alt="">
                    <div class="portfolio-info-02">
                      <a class="portfolio-img popup-icon" href="images/portfolio/g8.jpg"> <i class="fas fa-eye"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio-item END -->
              <!-- Portfolio-item START -->
              <div class="grid-item " data-groups='["marseille","france"]'>
                <div class="portfolio portfolio-style-02">
                  <div class="portfolio-images">
                    <img class="img-fluid" src="images/portfolio/g9.jpg" alt="">
                    <div class="portfolio-info-02">
                      <a class="portfolio-img popup-icon" href="images/portfolio/g9.jpg"> <i class="fas fa-eye"></i> </a>
                    </div>
                  </div>
                </div>
              </div>
              <!-- Portfolio-item END -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Portfolio -->
    @endsection