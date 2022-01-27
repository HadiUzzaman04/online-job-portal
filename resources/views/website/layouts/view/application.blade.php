@extends('website.master')
@section('contents')

<br>
<br>
<br>
<br>
<br>

<form action="{{ route('storeApplication') }}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="hidden" class="form-control" name="jobId" id="name" value="{{ $jobId }}" placeholder="name" >
    <input type="text" name="name" class="form-control" id="name" placeholder="name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="phone number">Phone Number</label>
    <input type="text" name="phone" class="form-control" id="phone" placeholder="phone" required>
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload CV</label>
    <input type="file" name="file" class="form-control-file" id="exampleFormControlFile1" required>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection