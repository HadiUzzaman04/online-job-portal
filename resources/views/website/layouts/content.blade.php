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
    <!-- <div class="banner-item-02">
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
    </div> -->
  </div>
</div>
<!-- Banner Ends Here -->

<div class="latest-products">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Featured Jobs</h2>
          <a href="{{route('jobs.index')}}"> view more </i></a>
        </div>
      </div>

      @foreach($jobs as $job)
      <div class="col-md-4">
        <div class="product-item">
          <a href="job-details.html"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
          <div class="down-content">
            <a href="job-details.html">
            <h3>
              <pre>{{ $job->users->name }}</pre>
            </h3>
              <h4>Title:
                <pre>{{$job-> job_title}}</pre>
              </h4>
            </a>

            <h6>Vacancy:
              <pre>{{$job-> vacancy}}</pre>
            </h6>

            <!-- <h4>{{$job-> category}}</h4> -->

            <h6>Years Of Experience:
              <pre>{{$job-> years_of_experience}}</pre>
            </h6>

            <h6>Job Type:
              <pre>{{$job-> type}}</pre>
            </h6>

            <h6>Deadline:
              <pre>{{$job-> deadline}}</pre>
            </h6>

            <h6>Job Description:
              <pre>{{$job-> description}}</pre>
            </h6>


          </div>
          <a class="btn btn-primary m-4" href="{{route('website.layouts.view.view_details',$job->id)}}">view</a>
          <a class="btn btn-success m-4" href="{{route('website.layouts.view.application',$job->id)}}">Apply Here</a>

        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>




<div class="best-features about-features">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="section-heading">
              <h2>About Our Company</h2>
            </div>
          </div>
          <div class="col-md-6">
            <div class="right-image">
              <img src="#" alt="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="left-content">
              <h4>About Us</h4>
              <p>Job Portal is one of the first and leading career management site in the country. Eight young business and IT professional backed by strong command over e-business and in-depth understanding of the needs of job seekers and employers in the country's context started this venture on July 2000.<br><br>Our web-site aims to explore maximum benefits of the Internet. We believe our service will help the job seekers manage their career more efficiently. This site will also help employers solve many of the problems associated with traditional recruiting methods and allow them to save time and money.<br><br>Right after its launching, the site has been able to attract the Internet users in the country. The site regularly updates Job Information (on average more than 2500 valid job news are placed at any point of time at the site), provides facility to the job seekers for posting resume and online application. The site has also been able to get good response from a large number of organizations in the country who use online job advertisement facility, online CV bank access and online application receiving and processing facility of www.bdjobs.com. Till now, more than 25,000 employers in the country have recruited more than 3,50,000 professionals at different levels for their organizations through Bdjobs.com service.</p>
              
            </div>
          </div>
        </div>
      </div>
    </div>



<!-- <div class="happy-clients">
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
</div> -->


<div class="call-to-action">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="inner-content">
          <div class="row">
            <div class="col-md-8">
              <h4>Contact us</h4>
              <p>You can contact with us </p>
            </div>
            <div class="col-lg-4 col-md-6 text-right">
              <a href="{{route('contactus.index')}}" class="filled-button">Contact Us</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

@endsection