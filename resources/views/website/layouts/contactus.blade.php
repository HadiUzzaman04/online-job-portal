@extends('website.master')

@section('contents')

<!-- Page Content -->
<div class="page-heading contact-heading header-text" style="background-image: url(assets/images/heading-4-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4></h4>
              <h2>Contact Us</h2>
            </div>
          </div>
        </div>
      </div>
    </div>


    <div class="find-us">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Our Location on Maps</h2>
            </div>
          </div>
          <div class="col-md-8">
<!-- How to change your own map point
	1. Go to Google Maps
	2. Click on your location point
	3. Click "Share" and choose "Embed map" tab
	4. Copy only URL and paste it within the src="" field below
-->
            <div id="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3648.4818100075026!2d90.4000394142994!3d23.872527890018265!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c66fa327665d%3A0xbfd47517eb3e2224!2sKodeeo%20Limited!5e0!3m2!1sen!2sbd!4v1643307819796!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>            </div>
          </div>
          <div class="col-md-4">
            <div class="left-content">
              <h4>About our office</h4>
              <p>It’s a changing world with changing time and generation so we assure to go accordingly. Our software company is mainly based on to value your thoughts and bring your requirements to a true form and also we intend with our learning platform ensuring that you have the right knowledge to show up your true worth, because you deserve to be valued. Interacting with you will please us to ensure your prime time being valued efficiently. We will honestly be assured on being supportive to build up your knowledge or your dream project.</p>
              <!-- <ul class="social-icons">
                <li><a href="https://www.facebook.com/hadi24x7"><i class="fa fa-facebook"></i></a></li>
                <li><a href="https://www.twitter.com/hadi24x7"><i class="fa fa-twitter"></i></a></li>
                <li><a href="https://www.linkedin.com/in/hadi-uzzaman-347b32147/"><i class="fa fa-linkedin"></i></a></li>
              </ul> -->
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- <div class="send-message">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>Send us a Message</h2>
            </div>
          </div>
          <div class="col-md-8">
            <div class="contact-form">
              <form id="contact" action="" method="post">
                <div class="row">
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="name" type="text" class="form-control" id="name" placeholder="Name" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12 col-md-12 col-sm-12">
                    <fieldset>
                      <input name="email" type="text" class="form-control" id="email" placeholder="Email" required="">
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your Message" required=""></textarea>
                    </fieldset>
                  </div>
                  <div class="col-lg-12">
                    <fieldset>
                      <button type="submit" id="form-submit" class="filled-button">Send Message</button>
                    </fieldset>
                  </div>
                </div>
              </form>
            </div>
          </div>
         
        </div>
      </div>
    </div> -->
        </div>
      </div>
    </div>

@endsection