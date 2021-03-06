@extends('admin.index')
@section('contents')


<div class="page-content--bge5">
  <div class="container">
    <h2 class="text-center">Add Category</h2>
    <form action="{{route('storeCategory')}}" method="post" enctype="multipart/form-data">
      @csrf

      <div class="form-group">
        <label>category_name</label>
        <input class="au-input au-input--full" type="text" name="category" placeholder="category_name" required>
      </div>
      <div class="form-group">
        <label>Category Details</label>
        <input class="au-input au-input--full" type="text" name="category_details" placeholder="category details" required>
      </div>
      <button class="au-btn au-btn--block au-btn--green m-b-20" type="submit">submit</button>
    </form>
  </div>

</div>




@endsection