@extends('admin.index')
@section('contents')


<div class="page-content--bge5">
    <div class="container">
      <div class="login-wrap">
        <div class="login-content">
          <div class="login-form">
            <h2 class="text-center">Create Event</h2>
            <br>
            <br>
            <form action="{{route('add.event.store')}}" method="POST" enctype="multipart/form-data">
              @csrf
              
              <div class="form-group">
                <label>Event_Title</label>
                <input class="au-input au-input--full" type="text" name="event_title" placeholder="event_title">
              </div>
              <br>
              <div class="form-group">
                <label>Event_Description</label>
                <textarea class="au-input au-input--full" type="text" name="event_description" placeholder="event_description"></textarea>
              </div>
              <br>
              <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">submit</button>
            </form>
          </div>
        </div>
      </div>
    </div>
 </div>




@endsection