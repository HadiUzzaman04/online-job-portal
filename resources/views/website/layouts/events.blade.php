@extends('website.master')

@section ('contents')

<br>
<br>
<br>

<!-- <div class="row">
  <div class="col-sm-6">
    <div class="card">
      <div class="card-body">
      @foreach($events as $key=>$event)
      <h5 class="card-title">{{$event->event_title}}</h5>
      <p class="card-text">{{$event->event_description}}</p>
        <a href="#" class="btn btn-primary">View</a>
        @endforeach
      </div>
    </div>
  </div>
</div> -->



@foreach($events as $KEY=>$EVENT)
      <div class="col-md-4">
        <div class="product-item">
          <a href="job-details.html"><img src="assets/images/product-1-370x270.jpg" alt=""></a>
          <div class="down-content">
            <a href="job-details.html">
              <h4>Title: <pre>{{$event-> event_title}}</pre></h4>
            </a>
            <h6>Event Description: <pre>{{$event->event_description}}</pre></h6>            
          </div>
          <a class="btn btn-primary m-4" href="#">view</a>
          @endforeach
        </div>
      </div>
@endsection