@extends('website.master')

@section('contents')

<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(assets/images/heading-6-1920x500.jpg);">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="text-content">
              <h4>Jobs</h4>
              <h2>Available Jobs</h2>
            </div>
          </div>
        </div>
      </div>
    </div>

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

            <h6>Deadline: <pre>{{$job-> deadline}}</pre></h6>

            <h6>Job Description: <pre>{{$job-> description}}</pre></h6>

            
          </div>
          <a class="btn btn-primary m-4" href="{{route('website.layouts.view.view_details',$job->id)}}">view</a>
          <a class="btn btn-success m-4" href="{{route('website.layouts.view.application')}}">Apply Here</a>

        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>

@endsection