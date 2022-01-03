@extends('website.master')

@section('contents')

<!-- ***** Preloader Start ***** -->
<div id="preloader">
  <div class="jumper">
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>
<!-- ***** Preloader End ***** -->

<!-- Header -->

<!-- Page Content -->
<!-- Banner Starts Here -->
<div class="banner header-text">
  <div class="owl-banner owl-carousel">
    <div class="banner-item-01">
      <div class="text-content">
        <h4>Find your Ideal Job</h4>
        <h2>Find your Ideal Job</h2>
      </div>
    </div>
    <div class="banner-item-02">
      <div class="text-content">
        <h4>Fugiat Aspernatur</h4>
        <h2>Laboriosam reprehenderit ducimus</h2>
      </div>
    </div>
    <div class="banner-item-03">
      <div class="text-content">
        <h4>Saepe Omnis</h4>
        <h2>Quaerat suscipit unde minus dicta</h2>
      </div>
    </div>
  </div>
</div>
<!-- Banner Ends Here -->

<div class="latest-products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Featured Jobs</h2>
          <a href="jobs.html">view more <i class="fa fa-angle-right"></i></a>
        </div>
      </div>

      @foreach($jobs as $job)
      <div class="col-md-4">
        <div class="product-item">
          <a href="job-details.html"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
          <div class="down-content">
            <a href="job-details.html">
              <h4>Title: <pre>{{$job-> job_title}}</pre></h4>
            </a>

            <h6>Vacancy: <pre>{{$job-> vacancy}}</pre></h6>

            <!-- <h4>{{$job-> category}}</h4> -->

            <h6>Years Of Experience: <pre>{{$job-> years_of_experience}}</pre></h6>

            <h6>Job Type: <pre>{{$job-> type}}</pre></h6>

            <h6>Job Description: <pre>{{$job-> description}}</pre></h6>

            
          </div>
          <a class="btn btn-primary m-4" href="">view</a>
          <a class="btn btn-success m-4" href="{{  }}">Apply Here</a>

        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

<div class="best-features">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>About Us</h2>
        </div>
      </div>
      <div class="col-md-6">
        <div class="left-content">
          <p>Lorem ipsum dolor sit amet, <a href="#">consectetur</a> adipisicing elit. Explicabo, esse consequatur alias repellat in excepturi inventore ad <a href="#">asperiores</a> tempora ipsa. Accusantium tenetur voluptate labore aperiam molestiae rerum excepturi minus in pariatur praesentium, corporis, aliquid dicta.</p>
          <ul class="featured-list">
            <li><a href="#">Lorem ipsum dolor sit amet</a></li>
            <li><a href="#">Consectetur an adipisicing elit</a></li>
            <li><a href="#">It aquecorporis nulla aspernatur</a></li>
            <li><a href="#">Corporis, omnis doloremque</a></li>
          </ul>
          <a href="about-us.html" class="filled-button">Read More</a>
        </div>
      </div>
      <div class="col-md-6">
        <div class="right-image">
          <img src="assets/images/about-1-570x350.jpg" alt="">
        </div>
      </div>
    </div>
  </div>
</div>



<div class="happy-clients">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Happy Clients</h2>

          <a href="testimonials.html">read more <i class="fa fa-angle-right"></i></a>
        </div>
      </div>
      <div class="col-md-12">
        <div class="owl-clients owl-carousel text-center">
          <div class="service-item">
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="down-content">
              <h4>John Doe</h4>
              <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
            </div>
          </div>

          <div class="service-item">
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="down-content">
              <h4>Jane Smith</h4>
              <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
            </div>
          </div>

          <div class="service-item">
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="down-content">
              <h4>Antony Davis</h4>
              <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
            </div>
          </div>

          <div class="service-item">
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="down-content">
              <h4>John Doe</h4>
              <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
            </div>
          </div>

          <div class="service-item">
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="down-content">
              <h4>Jane Smith</h4>
              <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
            </div>
          </div>

          <div class="service-item">
            <div class="icon">
              <i class="fa fa-user"></i>
            </div>
            <div class="down-content">
              <h4>Antony Davis</h4>
              <p class="n-m"><em>"Lorem ipsum dolor sit amet, consectetur an adipisicing elit. Itaque, corporis nulla at quia quaerat."</em></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>


<div class="call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-content">
          <div class="row">
            <div class="col-md-8">
              <h4>Lorem ipsum dolor sit amet, consectetur adipisicing.</h4>
              <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Itaque corporis amet elite author nulla.</p>
            </div>
            <div class="col-lg-4 col-md-6 text-right">
              <a href="contact.html" class="filled-button">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection