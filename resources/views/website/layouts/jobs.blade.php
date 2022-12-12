@extends('website.master')

@section('contents')

<!-- Page Content -->
<div class="page-heading about-heading header-text" style="background-image: url(images/heading-6-1920x500.jpg);">
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
        </div>
      </div>

      <form action="">
    <div class="search">
        <input type="search" name="search" placeholder="Search" style="margin-left: 15px; border-radius:5px;width:60%;" />
        <button style="display: inline;background:blue;padding:1%;border-radius:5px;">Search</button>
    </div>
</form>

      @foreach($jobs as $job)
      <div class="col-md-4">
        <div class="product-item">
          <a href="job-details.html"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
          <div class="down-content">
            <h3>
              <pre>{{ $job->users->name }}</pre>
            </h3>
            <a href="#">
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

@endsection