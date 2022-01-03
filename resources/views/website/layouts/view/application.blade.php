@extends('website.master')
@section('contents')

<br>
<br>
<br>
<br>
<br>

<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="email" class="form-control" id="name" aria-describedby="emailHelp" placeholder="name">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Phone Number</label>
    <input type="email" class="form-control" id="phone" aria-describedby="emailHelp" placeholder="phone">
  </div>
  <div class="form-group">
    <label for="exampleFormControlFile1">Upload CV</label>
    <input type="file" class="form-control-file" id="exampleFormControlFile1">
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>




@endsection