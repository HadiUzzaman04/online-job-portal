@extends('website.master')

@section ('contents')

<br>
<br>
<br>

<div class="row">
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
</div>

@endsection