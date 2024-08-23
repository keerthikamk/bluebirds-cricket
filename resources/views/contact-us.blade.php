@extends('layouts.master')
@section('content')
    <!--=================================
    Banner -->
    <section class="inner-banner bg-overlay-black-6 bg-holder" style="background-image: url('images/inner-banner/contact.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="inner-banner-tittle">
              <h2>Contact us</h2>
              <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                <li class="breadcrumb-item active">Contact us</li>
              </ol>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Banner -->
      
    <!--=================================
    Contact-Info -->
    <section class="space-ptb">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-lg-5">
            <div class="message-info bg-primary">
              <div class="section-title pt-5">
              <h3>Get in touch with us</h3>
              <p class="mb-0 text-white pt-3">One of the main areas that I work on with my clients is shedding these non-supportive beliefs and replacing accomplish their desires.</p>
           
            </div>

              <div class="feature-item feature-info-style-01">
                <div class="feature-icon">
                  <object type="image/svg+xml" data="images/svg/email.svg" class="icon"></object>
                </div>
                <div class="feature-content">
                  <h5 class="feature-title">Address</h5>
                  <p class="mb-0">
                    Bangalore
                  </p>
                </div>
              </div>

              <div class="feature-item feature-info-style-01">
                <div class="feature-icon">
                  <object type="image/svg+xml" data="images/svg/phone.svg" class="icon"></object>
                </div>
                <div class="feature-content">
                  <h5 class="feature-title">Phone</h5>
                  <span>+ 91 93451 98888</span>
                  <!-- <span>+704 279 1249</span> -->
                </div>
              </div>

              <div class="feature-item feature-info-style-01 mb-0">
                <div class="feature-icon mb-3">
                  <object type="image/svg+xml" data="images/svg/location.svg" class="icon"></object>
                </div>
                <div class="feature-content">
                  <h5 class="feature-title">Email</h5>
                  <span>info@bluebirdzca.com</span>
                  <!-- <span>letstalk@vehicle.com</span> -->
                </div>
              </div>
        
            </div>
          </div>

          <div class="col-lg-7">
            <div class="contact-us-form">
            <div class="section-title">
              <h3>We'd love to hear from you</h3>
              <p>Get the oars in the water and start rowing. Execution is the single biggest factor in achievement, the quicker you will get to the goals!</p>
            </div>
            <form>
              <div class="row">
                <div class="mb-3 col-md-6">
                  <input type="text" class="form-control" id="first-name" placeholder="Your Name">
                </div>
                <div class="mb-3 col-md-6">
                  <input type="email" class="form-control" id="email" placeholder="Your Email">
                </div>
                <div class="mb-3 col-md-6">
                  <input type="text" class="form-control" id="phone" placeholder="Phone Number">
                </div>
                <div class="mb-3 col-md-6">
                  <select class="form-control basic-select">
                    <option value="1" selected="selected">Country</option>
                    <option value="ARM">Armenia</option>
                    <option value="AR">Argentina</option>
                    <option value="AM">Armenia</option>
                    <option value="AW">Aruba</option>
                    <option value="AU">Australia</option>
                    <option value="BS">Bahamas</option>
                    <option value="BH">Bahrain</option>
                    <option value="BD">Bangladesh</option>
                    <option value="BB">Barbados</option>
                    <option value="KH">Cambodia</option>
                    <option value="CM">Cameroon</option>
                    <option value="CA">Canada</option>
                    <option value="DK">Denmark</option>
                    <option value="DJ">Djibouti</option>
                    <option value="DM">Dominica</option>
                    <option value="ER">Eritrea</option>
                    <option value="EE">Estonia</option>
                    <option value="ET">Ethiopia</option>
                    <option value="FJ">Fiji</option>
                    <option value="FI">Finland</option>
                    <option value="FR">France</option>
                    <option value="GA">Gabon</option>
                    <option value="GM">Gambia</option>
                    <option value="GE">Georgia</option>
                    <option value="HT">Haiti</option>
                    <option value="HK">Hong Kong</option>
                    <option value="HU">Hungary</option>
                    <option value="IS">Iceland</option>
                    <option value="IN">India</option>
                    <option value="ID">Indonesia</option>
                    <option value="JP">Japan</option>
                    <option value="JE">Jersey</option>
                    <option value="JO">Jordan</option>
                    <option value="KZ">Kazakhstan</option>
                    <option value="KE">Kenya</option>
                    <option value="KI">Kiribati</option>
                    <option value="LV">Latvia</option>
                    <option value="LB">Lebanon</option>
                    <option value="LS">Lesotho</option>
                    <option value="MG">Madagascar</option>
                    <option value="MW">Malawi</option>
                    <option value="MY">Malaysia</option>
                    <option value="NA">Namibia</option>
                    <option value="NR">Nauru</option>
                    <option value="NP">Nepal</option>
                    <option value="OM">Oman</option>
                    <option value="PK">Pakistan</option>
                    <option value="PW">Palau</option>
                    <option value="PE">Peru</option>
                    <option value="QA">Qatar</option>
                    <option value="RE">Réunion</option>
                    <option value="RO">Romania</option>
                    <option value="RW">Rwanda</option>
                    <option value="LC">Saint Lucia</option>
                    <option value="WS">Samoa</option>
                    <option value="SM">San Marino</option>
                    <option value="TH">Thailand</option>
                    <option value="TL">Timor-Leste</option>
                    <option value="TG">Togo</option>
                    <option value="UG">Uganda</option>
                    <option value="UA">Ukraine</option>
                    <option value="UY">Uruguay</option>
                    <option value="VU">Vanuatu</option>
                    <option value="VN">Viet Nam</option>
                    <option value="EH">Western Sahara</option>
                    <option value="YE">Yemen</option>
                    <option value="ZM">Zambia</option>
                    <option value="ZW">Zimbabwe</option>
                  </select>
                </div>
                <div class="col-lg-12">
                  <textarea class="form-control" rows="5" placeholder="Message"></textarea>
                </div>
              </div>
              <div class="mt-4">
               <a href="#" class="btn btn-primary">Send Message</a>
               </div>
            </form>
          </div>
         </div>
        </div>
      </div>
    </section>
    <!--=================================
    Contact-Info -->

    <!--=================================
    Contact-Info -->
    <!-- <section class="space-pb">
      <div class="container">
        <div class="row">
          <div class="col-lg-4 col-md-6">
              <div class="feature-item feature-info-style-02 feature-info-center">
                <div class="feature-icon">
                  <object type="image/svg+xml" data="images/svg/shipping.svg" class="icon"></object>
                </div>
                <div class="feature-content">
                  <h4 class="feature-title">Free Shipping</h4>
                  <p class="mb-0">
                    Free shipping on all Local Area order above $200
                  </p>
                </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="feature-item feature-info-style-02 feature-info-center">
                <div class="feature-icon">
                  <object type="image/svg+xml" data="images/svg/headphone.svg" class="icon"></object>
                </div>
                <div class="feature-content">
                  <h4 class="feature-title">24/7 Support</h4>
                  <p class="mb-0">
                    Our Customer Support Team is ready and available to help.
                  </p>
                </div>
              </div>
          </div>
          <div class="col-lg-4 col-md-6">
              <div class="feature-item feature-info-style-02 feature-info-center mb-0">
                <div class="feature-icon">
                  <object type="image/svg+xml" data="images/svg/return-customer.svg" class="icon"></object>
                </div>
                <div class="feature-content">
                  <h4 class="feature-title">30 Days Return</h4>
                  <p class="mb-0">
                    Product any fault within 30 days for an exchange.
                  </p>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section> -->
    <!--=================================
    Contact-Info -->

    <!--=================================
    Map -->
    <section>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-12 p-0">
            <iframe class="w-100 border-0 map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3151.8402891185456!2d144.95373631584474!3d-37.81720974201458!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1598418458630!5m2!1sen!2sin" style="border:0; width: 100%; height: 500px;" allowfullscreen=""></iframe>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Map -->
    @endsection