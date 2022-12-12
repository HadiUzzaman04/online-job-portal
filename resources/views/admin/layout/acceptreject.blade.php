@extends('admin.index')
@section('contents')
<h3>Accept or Reject application</h3>


<form action="{{route('company.accept.application',$application->id)}}" method="post" enctype="multipart/form-data">
  @csrf
  <div class="form-group">
    <label for="name">Name</label>
    <input type="text" name="name" value="{{$application->name}}" class="form-control" id="name" placeholder="name" required>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" name="email" value="{{$application->email}}" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email" required>
  </div>
  <div class="form-group">
    <label for="phone number">Phone Number</label>
    <input type="text" name="phone" value="{{$application->phone}}" class="form-control" id="phone" placeholder="phone" required>
  </div>
  <div class="form-group">
              <label>Status</label>
              <select name="status" id="">
                <option value="accept" >Accept</option>
                <option value="reject">Reject</option>

              </select>
            </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>









@endsection